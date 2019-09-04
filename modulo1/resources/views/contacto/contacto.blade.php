<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</head>
<body>
	<div class="flex-center position-ref full-height">
	<div class="content">
		<div class="title m-b-md">
			Contactanos
		</div>
		<div class="m-b-md">
			Página de contacto {{$nombre}}
		</div>
	</div>
	</div>
</body>
</html>