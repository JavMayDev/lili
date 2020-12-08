<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <?php wp_head() ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div><img style="height: 80px; margin-left: 50px;" src="<?= get_template_directory_uri().'/assets/images/logo_letra.png'?>" alt=""></div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
	    <ul style="width: 50%;" class="navbar-nav ml-auto">
		<li class="nav-item">
		    <a class="nav-link title" href="#inicio">Inicio</a>
		</li>
		<li class="nav-item">
		    <a class="nav-link title" href="#servicios">Servicios</a>
		</li>
		<li class="nav-item">
		    <a class="nav-link title" href="#acercade">Acerca de</a>
		</li>
		<li class="nav-item">
		    <a class="nav-link title" href="#contacto">Contacto</a>
		</li>
	    </ul>
	</div>
    </nav>

