<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="author" content="Sven Dausch">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HA-Raspberry</title>
		<link rel="stylesheet" href="dist/bootstrap.min.css">
  		<script src="dist/jquery.min.js"></script>
  		<script src="dist/bootstrap.min.js"></script>
    </head>
	<body>
		<div class="container" style="margin-top: 10%;">
    		<div class="row">
        		<div class="col-sm-2">
        		</div>
        		<div class="col-sm-8">
					<div class="well well-lg">
						<h1 style="text-align: center;">Aktive Node:</h1>
						<?php 
							echo '<h2 style="color: red; text-align: center;">'.php_uname('n').'</h2>';
						?>
					</div>	
				</div>
			</div>
        </div>
	</body>
</html>


