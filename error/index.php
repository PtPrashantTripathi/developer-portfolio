<?php 
$url=$_SERVER['REQUEST_URI'];

       $title='Pt. Prashant Triapthi :: ERROR-404';
       //$nav=2;
       include '../header.php';
		/*400 (Bad Request)	
		/error/?error=400
		401 (Unauthorized)	
		/error/?error=401
		403 (Forbidden)	
		/error/?error=402
		404 (Not Found)	
		/error/?error=403
		503 (Service Unavailable)	
		/error/?error=403
		Alter ErrorPages*/
		
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error">
                <h1>Oops!</h1>
				<h2>404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
            </div>
        </div>
    </div>
</div>
