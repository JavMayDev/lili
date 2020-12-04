<?php get_header() ?>

<section>
    <div style="background-image: url(<?= get_template_directory_uri().'/assets/images/aaron-burden-tQF8FCNYNrk-unsplash.jpg' ?>);" class="img-hero">
	<div id="hero-text-container" class="center">
	    <div id="hero-text">
		<h1 class="title">Terapia psicologica individual, para parejas y
		    familair</h1> <!--lorem--> <p>Dolor. Quisque porttitor nisi ac elit. Nullam
		tincidunt ligula vitae nulla.</p>

		<p>Vivamus sit amet risus et ipsum viverra malesuada. Duis luctus. Curabitur
		adipiscing metus et felis. Vestibulum tortor. Pellentesque purus. Donec
		pharetra.</p> <!--/lorem-->

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
		<!--lorem-->
		<p>"Sit amet lectus tempus aliquet. Duis cursus nisl ac orci. Donec non nisl.
		Mauris lacus sapien, congue a, facilisis at, egestas vel, quam. Vestibulum ante
		ipsum primis in faucibus orci luctus."</p>
		<!--/lorem-->

	    </div>
	</div>


    <div class="float shadow" id="areas-container">

	<div id="areas-text">
	    <h1 class="title">Areas de expertise</h1>

	    <!--lorem-->
	    <p>Quis tellus id lectus faucibus molestie. Praesent vel ligula. Nam venenatis
	    neque quis mauris. Proin felis. Cum sociis natoque penatibus et magnis dis
	    parturient montes, nascetur ridiculus mus. Aliquam quam. Nam.</p>
	    <!--/lorem-->
	    <p>Quis tellus id lectus faucibus molestie. Praesent vel ligula. Nam venenatis
	    neque quis mauris. Proin felis. Cum sociis natoque penatibus et magnis dis
	    parturient montes, nascetur ridiculus mus. Aliquam quam. Nam.</p>
	</div>

	<div id="areas-items-container" class="row justify-content-around">
	    <div class="areas-item col-md-4 text-center">
		<h5 class="title">Ansiedad</h5>
		<!--lorem-->
		<p>Magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
		exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p>
		<!--/lorem-->

	    </div>
	    <div class="areas-item col-md-4 text-center">
		<h5 class="title">Depresion</h5>
		<!--lorem-->
		<p>Magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
		exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p>
		<!--/lorem-->
	    </div>
	    <div class="areas-item col-md-4 text-center">
		<h5 class="title">Estres</h5>
		<!--lorem-->
		<p>Magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
		exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex.</p>
		<!--/lorem-->
	    </div>
	</div>

    </div>
</section>

<section>
    <div 
	class="img-hero"
	id="info1-container"
	style="background-image: url(<?= get_template_directory_uri().'/assets/images/filling-in-document-2VL3H5Z.jpg'?>)"
    > 
	<div id="info1-text">
	    <h1 class="title" style="margin: 40px" >Psicologa Liliana Romero</h1>
	    <!--lorem-->
	    <p style="margin: 40px">Volutpat neque. Proin posuere mauris ut ipsum. Praesent scelerisque tortor a
	    justo. Quisque consequat libero eu erat. In eros augue, sollicitudin sed,
	    tempus tincidunt, pulvinar a, lectus. Vestibulum ante ipsum primis in faucibus
	    orci luctus et ultrices posuere cubilia Curae; Maecenas interdum purus id
	    risus. Ut ultricies cursus dui. In nec.</p>
	    <!--lorem-->
	    <p style="margin: 40px">Amet porttitor lobortis, turpis sapien consequat orci, sed commodo nulla
	    pede eget sem. Phasellus sollicitudin. Proin orci erat, blandit ut,
	    molestie.</p>
	    <!--/lorem-->


	</div>

    </div>
</section>


<section >
    <div class="row" id="info2-container"
	 style="background-image: url(<?= get_template_directory_uri().'/assets/images/psychological-consultation-PTKVSWG.jpg'?>)"
    >
	<div class="col-md-6"></div>
	<div id="info2-text" class="col-md-6">
	    <h1 class="title">Lorem ipsum</h1>
	    <!--lorem-->
	    <p>Posuere cubilia Curae.</p>

	    <p>Phasellus ipsum odio, suscipit nec, fringilla at, vehicula quis, tellus.
	    Phasellus gravida condimentum dui. Aenean imperdiet arcu vitae ipsum. Duis
	    dapibus, nisi non porttitor iaculis, ligula odio sollicitudin mauris, non
	    luctus nunc massa a velit. Fusce ac nisi. Integer volutpat elementum metus.
	    Vivamus luctus ultricies diam. Curabitur euismod. Vivamus.</p>
	    <!--/lorem-->

	</div>
    </div>

    <div
	style="background-image: url(<?= get_template_directory_uri().'/assets/images/fondo.jpg'?>)"
	id="contact-container" class="row">
	<div class="col-md-6">
	</div>
	<div class="col-md-6"></div>
    </div>

</section>

<?php get_footer() ?>
