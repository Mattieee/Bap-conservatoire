<?php
/**
* Template Name: index
*/
get_header();
?>	

<!-- HEADER -->

<!-- Accueil -->

<header class="masthead" >

	<div style="padding-top: 80px;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">

			


			<div class="carousel-item active">
				<div class='items5'>
					<div class='item5' alt="First slide">
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<div class='items5'>
					<div class='item5' alt="Second slide">
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<div class='items5'>
					<div class='item5' alt="Third slide">
					</div>
				</div>
			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

		<div class="bouton1 col-md-12" >
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">En savoir plus</a>
		</div>

		<div class="intro-text col-md-12" style="position: absolute; top:20%;" >
			<div class="intro-lead-in">Evènement à venir</div>
			
			
		</div>
		



	</div>
</header>

<div class="qui-somme-nous">

	<h2 class="titre1">Qui sommes nous ?</h2>
	<img class="img_logo col-md-12" src="<?php echo get_template_directory_uri();?>/img/logo11.png">

	<p class="text-center" style="padding-left:10px;padding-right:10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus voluptatum exercitationem, <br>iure eveniet temporibus pariatur cumque reprehenderit, corporis natus perspiciatis<br> repellat officia veritatis magnam facere. Id odit natus voluptatibus maiores?</p>

	
</div>

<div class="Gallerie">


</div>

<div class="trouver-nous">

	<h2 class="titre2">Où nous trouver ?</h2>

	

</div>

<div class="nous-contacter">

	<h2 class="titre1">Nous contacter</h2>
	<form class="cf">
		<div class="half left cf">
			<input type="text" id="input-name" placeholder="Name">
			<input type="email" id="input-email" placeholder="Email address">
			<input type="text" id="input-subject" placeholder="Subject">
		</div>
		<div class="half right cf">
			<textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
		</div>  
		<input type="submit" value="Submit" id="input-submit">
	</form>


</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


<script src="<?php bloginfo('url'); ?>/wp-content/themes/Bap-conservatoire/js/agency.min.js"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/Bap-conservatoire/js/jquery-3.1.1.js"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/Bap-conservatoire/js/bootstrap.js"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/Bap-conservatoire/js/bootstrap.min.js"></script>

</body>
</html>