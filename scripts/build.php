<?php
// Function to recursively scan directories for PHP files
function getPhpFiles($dir) {
    $files = [];
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($rii as $file) {
        if (!$file->isDir() && $file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }

    return $files;
}

// Simulate necessary server variables for CLI
$_SERVER['REQUEST_URI'] = '/';
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['SERVER_NAME'] = 'localhost';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
$_SERVER['REQUEST_METHOD'] = 'GET';

// Directory where your PHP files are located
$sourceDir = __DIR__ . '/../www/';  // Update with your actual PHP directory
$buildDir = __DIR__ . '/../build/'; // Directory where HTML files will be saved

// Ensure the build directory exists
if (!is_dir($buildDir)) {
    mkdir($buildDir, 0755, true);
}

// Get all PHP files, including those in subdirectories
$phpFiles = getPhpFiles($sourceDir);

foreach ($phpFiles as $file) {
    // Get the relative file path for nested directories
    $relativePath = str_replace($sourceDir, '', $file);
    $targetFile = $buildDir . str_replace('.php', '.html', $relativePath);

    // Ensure the target directory exists
    $targetDir = dirname($targetFile);
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    // Start output buffering to capture the output
    ob_start();

    // Include the PHP file
    include $file;

    // Get the content and save it as HTML
    $content = ob_get_clean();
    file_put_contents($targetFile, $content);
}

echo "Build complete. HTML files generated in: $buildDir\n";
