
<?php get_header(); ?>

<div class="banner__yariko" id="banner_home">
	<div class="container">
		<div class="row p-1">
			<div class="col-md-8">
				<h3 class="text-center banner_header aniview mt-5" data-av-animation="bounceInDown">Donde hacemos que su negocio este <strong>READY</strong>.</h3>
				<img id='img_main_banner' src="<?php echo get_bloginfo('template_url') ?>/img/banner-home.svg"/>
			</div>
			<div class="col col-md box_form">
				<h5 class="text-center py-2 ">Consiga un estimado gratis y sin ningún compromiso</<h5>
				<form action='<?php echo get_bloginfo('template_url') ?>/php/sendmail.php' method='POST'>
				  <div class="form-group" >
				    <input type="text"  name='name' class="form-control" id="name" aria-describedby="name" placeholder="Nombre Completo">
				  </div>
				  <div class="form-group">
				    <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entre email">
				  </div>
				  <div class="form-group">
				    <input type="text" name='cell' class="form-control" id="phone" placeholder="Entre cell">
				  </div>
				  <div class="form-group">
				    <textarea class="form-control" name='message' id="message" rows="3" placeholder="Escriba los detalles de su proyecto"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary rounded btn-block">Empiece Ahora</button>
				</form>
			</div>
		</div>
</div>

</div>

<!-- Skew technology Part -->
<div class="tech_content__yariko text-center">
	<div class="container aniview"  data-av-animation="bounceInUp">
		<h3 class="header_text_technology unskew text-center">Tecnologías</h3>
		<p class="unskew">Tenemos un grupo de desarrolladores que con estas tecnologías hacen que su negocio crezca y evolucione.</p>
		<div class="row unskew wrapper_flex_tech">
			<img class="logo-tech " alt='wordpress' src="<?php echo get_bloginfo('template_url') ?>/img/wordpress.svg"/>
			<img class="logo-tech " alt='joomla' src="<?php echo get_bloginfo('template_url') ?>/img/joomla.svg"/>
			<img  class="logo-tech " alt='php' src="<?php echo get_bloginfo('template_url') ?>/img/php.svg"/>
			<img  class="logo-tech " alt='javascript' src="<?php echo get_bloginfo('template_url') ?>/img/js-file.svg"/>
			<img class="logo-tech " alt='css3' src="<?php echo get_bloginfo('template_url') ?>/img/css-3.svg"/>
			<img class="logo-tech " alt='mysql' src="<?php echo get_bloginfo('template_url') ?>/img/mysql.svg"/>
		</div>
	</div>
</div>
<!--END Skew technology Part -->
</div>

<div class="sections_areas">
	<!-- Custom Web design Area -->
	<div class="container">
		<div class="row my-3">
			<div class="col-md-6 my-auto p-3 my-box-shadow p-xl-4" >
				<h4><img class="d-none d-sm-inline" src="<?php echo get_bloginfo('template_url') ?>/img/website-design-symbol.png"/>     Diseño web a la medida</h4>
				<hr>
				<h5 >Gráficos Profesionales & Estilos para su negocio</h5>
				<p>Nuestro equipo de diseñadores de sitios web le da vida a su sitio con colores, imágenes y fuentes. Cada aspecto está cuidadosamente pensado para garantizar que nuestro diseño gráfico esté en línea con los objetivos de desarrollo de su sitio web.</p>
			</div>
			<div class="col col-md-5 offset-md-1">
				<img class="aniview img-fluid" data-av-animation="slideInRight" src="<?php echo get_bloginfo('template_url') ?>/img/3-works.png"/>
			</div>
		</div>

	</div>
	<!-- Ecommerce -->
	<div class=" ecommerce_solution">
		<div class="container">
			<div class="row my-3 d-flex py-3">
			<div class="col-md-6 offset-md-1 my-auto p-3 my-box-shadow p-xl-4 order-md-1">
				<h4><img class="d-none d-sm-inline" src="<?php echo get_bloginfo('template_url') ?>/img/ecommerce.png"/>     Soluciones Ecommerce</h4>
				<hr>
				<h5 >Venta de Productos y Gestión de Inventario</h5>
				<p>Creamos una tienda online adaptada a sus necesidades, fácil gestión de productos, clasificación por categorías, gestión de inventario, pasarelas de pago, pero sobre todo lo principal un diseño adaptado y una magnífica experiencia de usuario</p>
			</div>
			<div class="col col-md col-pull-md-7 order-md-0">
				<img class="aniview img-fluid" data-av-animation="slideInLeft" src="<?php echo get_bloginfo('template_url') ?>/img/custom-web-design.png"/>
			</div>
		</div>
	</div>

	</div>
</div>

<!-- Icon 4 TEmatic -->
<div class="section_icon_tematic">
	<div class="container">
		<div class="row mt-md-5">
			<div class="col-12 aniview" data-av-animation="slideInUp">
				<h3 class="text-center mt-2">SEO Desarrollo Web</h3>
			<p class="text-center ">SEO está integrado en cada sitio que creamos. El SEO correcto comienza con un diseño adecuado. Cuando desarrollamos un nuevo sitio web, nuestros esfuerzos de optimización de motores de búsqueda ayudan a descubrir su sitio web.</p>
			</div>
		</div>
		<div class="row px-0 aniview" data-av-animation="slideInUp">

			<div class="col-sm-6 col-lg-3">
				<div class="card mt-2">
				  <img class="img-fluid mx-auto pt-2 icon-tematic" src="<?php echo get_bloginfo('template_url') ?>/img/business-affiliate-network.svg"/>
				  <div class="card-body">
				  	<h5 class="text-center">Estructura Sitio Web</h5>
				    <p class="card-text">Una estructura de página lógica, fácil de navegar, ayuda a los usuarios y los motores de búsqueda a encontrar lo que están buscando.</p>
				  </div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card mt-2" >
				   <img  class="img-fluid mx-auto pt-2 icon-tematic" src="<?php echo get_bloginfo('template_url') ?>/img/coding.svg"/>
				  <div class="card-body">
				  	<h5 class="text-center">Código Moderno</h5>
				    <p class="card-text">Nuestro equipo de diseño y desarrollo web utiliza prácticas de codificación actualizadas con HTML5 limpio y CSS3.</p>
				  </div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card mt-2">
				   <img class="img-fluid mx-auto pt-2 icon-tematic" src="<?php echo get_bloginfo('template_url') ?>/img/seo-meter.svg"/>
				  <div class="card-body">
				  	<h5 class="text-center">Optimización Rendimiento</h5>
				    <p class="card-text">Tiempos de carga rápidos = clientes felices. Google ha dejado en claro que prefieren sitios web que respondan rápidamente.</p>
				  </div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card mt-2" >
				   <img class="img-fluid mx-auto pt-2 icon-tematic" src="<?php echo get_bloginfo('template_url') ?>/img/smartphone.svg"/>
				  <div class="card-body">
					<h5 class="text-center">Diseño Adaptable</h5>
				    <p class="card-text">Todos nuestros sitios web están desarrollados para verse y funcionar maravillosamente en todos los dispositivos desde donde los usuarios lo ven.</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-know-wordpress mt-3">
	<div class="container">
		<div class="row p-2 ">
			<div class="col-md-2 offset-1 my-auto d-none d-md-inline" >
			<img class="aniview" data-av-animation="jello" src="<?php echo get_bloginfo('template_url') ?>/img/message.svg"/>
			</div>
			<div class="col-12 col-md-8 offset-md-1 my-auto text-center p-2" >
				<h3 class="text-center aniview" data-av-animation="slideInUp">Sabía usted que?</h3>
				<p class="aniview" data-av-animation="slideInUp">
				El 29% de todos los sitios web funcionan con WordPress. Las grandes y pequeñas empresas encuentran que WordPress es la plataforma óptima para el crecimiento.</p>
			</div>
		</div>
	</div> 	
</div>

	<div class="container-fluid p-0 m-0">
		<img style="height:100%" class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/img/ocean-effect.jpg"/>
	</div>

<div class="section-people-says">
	<div class="container p-3">
		<div class="row p-2 aniview" data-av-animation="slideInUp">
			
			<div class="col-12 col-md-8 offset-md-1 my-auto text-center p-2">
				<h3 class="text-center">The people says.</h3>
				<p>
				Web Ready is a relatively new company, with many talented people who make you feel very comfortable throughout the development process. I love your fresh ideas and the most important thing is that they have you in the smallest detail.</p>
			</div>
			<div class="col-md-2 offset-1 my-auto " >
			<img class="rounded-circle img-fluid" src="<?php echo get_bloginfo('template_url') ?>/img/people-says.png"/>
			</div>
		</div>
	</div>
</div>

<div class="section-start-now py-5" style="background: url(<?php echo get_bloginfo('template_url') ?>/img/bg-triangles.jpg) no-repeat center center;">
	<div class="container p-3">
		<div class="row p-4">
			<div class="col-md-3 col-1"></div>
			<div class="col-md-6 col-10 text-center">
				<h3 >Lets Get Started your project</h3>
				<p>We will help you to achieve your goals and to grow your business.</p>
				<a class="btn btn-info" href="#banner_home">Start Now!</a>
			</div>
			<div class="col-md-3 col-1"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>