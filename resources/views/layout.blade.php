<?php
use SebastianBergmann\CodeCoverage\Report\PHP;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta name="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SE Project - @yield('title')</title>
        
        <link href="css/app.css" rel="stylesheet">
    	
    	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    	
    </head>
    <body>
        @section('navbar')
            <nav class="navbar navbar-default">
			  	<div class="container-fluid">
			    	<div class="navbar-header">
			      		<a class="navbar-brand" href="#">WebSiteName</a>
			    	</div>
			    	<ul class="nav navbar-nav">
			      		<li class="active"><a href="#">Home</a></li>
					   	<li><a href="#">Page 1</a></li>
					 	<li><a href="#">Page 2</a></li>
					 	<li><a href="#">Page 3</a></li>
			    	</ul>
			  	</div>
			</nav>


        <div class="container">
            @yield('content')
        </div>
        
        <script src="js/app.js"></script>
        
	    
	    
    </body>
</html>