<?php get_header() ?>

<section>
    <div id="hero" style="background-image: url(<?= get_template_directory_uri().'/assets/images/aaron-burden-tQF8FCNYNrk-unsplash.jpg' ?>);" class="img-hero">
	<div id="hero-text-container" class="center">
	    <div id="hero-text">
		<h1 class="title">
		    <?= get_field('hero_title')?>
		</h1>

		<?= get_field('hero_text')?>
		<br>
		<button class="btn-main">HAZ UNA CITA</button>
	    </div>
	</div>
    </div>

	<!-- Floating card -->
	<div class="card shadow" id="hero-card">
	    <img src="<?= get_template_directory_uri().'/assets/images/consulting-with-psychologist-2HD8Y4E.jpg' ?>"
		class="card-img-top" alt=""
	    >
	    <div class="card-body">

	    <?= get_field('quoted_card_text')?>

	    </div>
	</div>


    <div class="float shadow" id="areas-container">

	<div id="areas-text"  >
	    <h1 class="title">&Aacutereas de expertise</h1>

	    <?= get_field('areas_text')?>
	</div>

	<div id="areas-items-container" class="row justify-content-around">
	    <div class="areas-item col-md-4 text-center" data-aos="zoom-in">
		<h5 class="title">Ansiedad</h5>
		<?= get_field('areas_anxiety')?>

	    </div>
	    <div class="areas-item col-md-4 text-center" data-aos="zoom-in">
		<h5 class="title">Depresión</h5>
		<?= get_field('areas_depression')?>
	    </div>
	    <div class="areas-item col-md-4 text-center" data-aos="zoom-in">
		<h5 class="title">Estrés</h5>
		<?= get_field('areas_estress')?>
	    </div>
	</div>

    </div>
</section>

<section>
    <div 
	class="img-hero"
	id="info1-container"
	style="background-image: url(<?= get_template_directory_uri().'/assets/images/filling-in-document-2VL3H5Z.jpg'?>)"
	data-aos="zoom-in"
    > 
	<div id="info1-text">
	    <h1 class="title" style="margin: 40px" >Psic&oacuteloga Liliana Romero</h1>
	    <?= get_field('info1')?>

	</div>

    </div>
</section>


<section >
    <div 
	data-aos="zoom-in"
	class="row" id="info2-container"
	 style="background-image: url(<?= get_template_directory_uri().'/assets/images/psychological-consultation-PTKVSWG.jpg'?>)"
    >
	<div class="col-md-6"></div>
	<div id="info2-text" class="col-md-6">
	    <h1 class="title">Lorem ipsum</h1>
	    <?= get_field('info2')?>
	    <br>
	    <button class="btn-main">HAZ UNA CITA</button>

	</div>
    </div>
</section>

<!-- contact stuff -->
<section>
    <div
	style="background-image: url(<?= get_template_directory_uri().'/assets/images/fondo.jpg'?>)"
	id="contact-container" >
	<form 
	    id="contact-form" 
	    onsubmit="return validate(event)"
	    action="<?= get_site_url().'/wp-content/plugins/phpmailer/contact_submt.php'?>"
	    method='POST'
	>
	    <h1 class="title">Contacto</h1>
	    <input type="text" class="form-field" placeholder="Nombre">
	    <input type="email" class="form-field"  placeholder="Correo electrónico">
	    <textarea id="contact-form-msg" placeholder="Mensaje" class="form-field" name="msg" cols="30" rows="10"></textarea>
	    <button class="btn-main" style="max-width: 300px">ENVIAR</button>
	</form>
	<div class="card shadow" id="contact-card" data-aos="zoom-in">
	    <div class="card-header" style="padding: 0px; background-color: #fff;">
		<img style="height: 100px;" src="<?= get_template_directory_uri().'/assets/images/logo_paloma.png'?>" alt="">
		<img style="height: 100px;" src="<?= get_template_directory_uri().'/assets/images/logo_letra.png'?>" alt="">
	    </div>
	    <div class="card-body">
		<div >
		    <h3 class="title">Teléfono</h3>
		    <br>
		    <?= get_field('contact_tel')?>
		</div>
		<div >
		    <h3 class="title">Mail</h3>
		    <br>
		    <?= get_field('contact_mail')?>
		</div>
		<div >
		    <h3 class="title">Dirección</h3>
		    <br>
		    <?= wpautop(get_field('contact_dir'))?>
		</div>
		<div >
		    <h3 class="title">Horario</h3>
		    <br>
		    <?= get_field('contact_schedule')?>
		</div>
	    </div>
	</div>
    </div>
</section>

<?php get_footer() ?>

