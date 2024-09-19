from pathlib import Path
import shutil
import requests

# Define source and build directories
src_dir = Path("./src")
build_dir = Path("./build")

# Recreate the build directory if it doesn't exist
shutil.rmtree(build_dir, True)
build_dir.mkdir(parents=True, exist_ok=True)


# Recursive function to process files and directories
def process_directory(source: Path, destination: Path):
    # Create the destination directory if it doesn't exist
    destination.mkdir(parents=True, exist_ok=True)

    for item in source.iterdir():
        src_path = item
        build_path = destination / item.name
        if build_path.suffix == ".php":
            build_path = build_path.with_suffix(".html")

        if src_path.is_dir():
            # Recursively process the directory
            process_directory(src_path, build_path)
        else:
            # Process the file
            process_php_file(src_path, build_path)


# Function to process PHP files by sending requests to localhost
def process_php_file(src_file: Path, build_file: Path):
    try:
        # Remove './src' from the path and convert it to a URL relative to localhost
        relative_path = src_file.relative_to(src_dir)
        url = f"http://localhost:8000/{relative_path}"

        # Make an HTTP GET request to fetch the PHP file's output
        response = requests.get(url)

        if response.status_code == 200:
            # Write the output to the build file using UTF-8 encoding
            build_file.write_text(response.text, encoding="utf-8")
            print(f"Processed PHP file: {src_file} -> {build_file}")
        else:
            print(f"Failed to fetch {url}. Status code: {response.status_code}")
    except Exception as e:
        print(f"Error processing {src_file}: {e}")


# Start processing the src directory
process_directory(src_dir, build_dir)

print("Processing complete!")
