<?php include 'header.php' ?>

<main class="">
	<section class="eyeIn bkg-black">
		<h1 class="titleEx before-after yellow">Embajadores</h1>
		<h2 class="titleCategory">Xcity</h2>
	</section>

	<section class="embajador">
		<article>
			<div class="square"></div>
			<div class="img-embajador"><img src="assets/images/embajadora.jpg" alt=""></div>
		</article>
		<article>
			<div class="">
          		<h3>Itzel<br> Granados</h3>
          		<p class="especialidad">Skateboarding</p>
          		<div class="categoria">
          			<hr>
          			<p>Tierra</p>
          		</div>
          		<p>Fecha de nacimiento: 20/01/00</p>
          		<div class="destinos">
          			<h4><i class="icon-excity-1"></i><span>Destinos favoritos</span></h4>
          			<ul>
          				<li>La Malinche</li>
          				<li>El Ajusco</li>
          			</ul>
          		</div>
          		<div class="logros">
          			<h4><i class=" icon-excity-02"></i><span>Bio / Logros</span></h4>
					<ul>
						<li>Originaria de Ciudad de México.</li>
						<li>6 años patinando.</li>
						<li>Ganadora de Skate Girls Open Nike SB.</li>
						<li>Tercer Lugar Panamericanos de Skate de Colombia 2017.</li>
					</ul>
          		</div>
          		<div class="logros">
          			<h4><i class="icon-excity-12"></i><span>Marcas / Equipos</span></h4>
          			<ul>
          				<li>Vans</li>
          				<li>Distreeto Skateboards</li>
          				<li>Llantas Caracol</li>
          				<li>Ahua Lijas</li>
          			</ul>
          		</div>
	         </div>
		</article>

	</section>
	<section class="galeria-two">
		<h2 class="titleExtrasize white tx-center">Galería</h2>
		<div class="owl-gal owl-carousel" data-slider-id="d1">
			    <div class="item">
			      
			      	<img src="assets/images/galeria-1.jpg" alt="" />
			      
			  </div>
			  <div class="item black">
			      
			      <img src="assets/images/galeria-2.jpg" alt="" />
			      
			  </div>
			  <div class="item">
			      
			      <img src="assets/images/galeria-3.jpg" alt="" />
			      
			  </div>
			      <div class="item black">
			      
			      <img src="assets/images/galeria-4.jpg" alt="" />
			      
			  </div>
			  <div class="item">
			      
			      <img src="assets/images/galeria-3.jpg" alt="" />
			      
			  </div>
			   <div class="item black">
			      
			      <img src="assets/images/galeria-2.jpg" alt="" />
			      
			  </div>
			  <div class="item">
			      
			      <img src="assets/images/galeria-3.jpg" alt="" />
			      
			  </div>
			      <div class="item black">
			      
			      <img src="assets/images/galeria-4.jpg" alt="" />
			      
			  </div>
			  <div class="item">
			      
			      <img src="assets/images/galeria-3.jpg" alt="" />
			      
			  </div>


		</div>
		<div class="owl-thumbs-mega-container">
			<div class="owl-thumbs-container">
				<div id="owl-thumbs" class="owl-thumbs" data-slider-id="d1">
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-1.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-2.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-3.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-4.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-3.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-2.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-3.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-4.jpg" alt=""></button>
				    <button class="owl-thumb-item"><img class="img-fluid" src="assets/images/galeria-3.jpg" alt=""></button>
				</div>
			</div>
		    <a href="#" class="thumb-prev"><span class="icon-excity-03"></span></a>
		    <a href="#" class="thumb-next"><span class="icon-excity-03"></span></a>
		</div>

	</section>
	<section class="quote">
		<span class="comillas">“”</span>
		<blockquote>Mi vida giraba en no hacer nada, descubrí el skate y le dio el sentido que buscaba.</blockquote>
	</section>
	<section class="video-category bkg-img-yellow">
		<article>
			<div class="videoWrapper">
				<iframe src="https://www.youtube.com/embed/XBgbBrxj2to" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</article>
		<article>
			<h2 class="titleGobold">Itzel<br> Skate<br>boarding</h2>
		</article>
	</section>
	<section class="callToAction row">
		<article class="col-sm-8 col-xl-7">
			<p>Conoce más aventuras 
de este estado.</p>
		</article>
		<article class="col-sm-4 col-xl-5">
			<p class="button">
				<button class="btn-diagonal btn-yellow btn--2 btn-ex btn-left"><span>Ver más</span></button>
			</p>
		</article>
	</section>

</main>

<?php include 'footer.php' ?>
<script>
	$(document).ready(function() {
		$('.owl-gal').owlCarousel({
		    stagePadding: 200,
		    loop:true,
		    margin:10,
		    items:1,
		    lazyLoad: true,
		    nav:false,
		    thumbs: true,
		    thumbsPrerendered: true,
		  	responsive:{
		        0:{
		            items:1,
		            stagePadding: 60
		        },
		        600:{
		            items:1,
		            stagePadding: 100
		        },
		        1000:{
		            items:1,
		            stagePadding: 200
		        },
		        1200:{
		            items:1,
		            stagePadding: 250
		        },
		        1400:{
		            items:1,
		            stagePadding: 300
		        },
		        1600:{
		            items:1,
		            stagePadding: 350
		        },
		        1800:{
		            items:1,
		            stagePadding: 300
		        }
		    }
		});

		/* Calcular medidas thumbnail-container*/
		var $width_owl_thumbs_container = $(".owl-thumbs-container").width();
		$(window).on('resize', function(event) {
			$width_owl_thumbs_container = $(".owl-thumbs-container").width();

		});

		if($(".owl-thumb-item.active").length > 0){
			var $no_items = $(".owl-thumb-item").length;
			var $width_owl_thumbs_item = $(".owl-thumb-item.active").outerWidth(true);
			var $width_owl_thumbs = ($width_owl_thumbs_item*$no_items)+$width_owl_thumbs_item;
			$("#owl-thumbs").css('width', $width_owl_thumbs);

			$(".thumb-next").on('click', function(event) {
				event.preventDefault();
				var $item_activo = $(".owl-thumb-item.active");
				var $next = $item_activo.next();
				if($next.length > 0){
					$next.click();
					var $pos = $("#owl-thumbs").position();
					var $i = $width_owl_thumbs - (-$pos.left);
					console.log($width_owl_thumbs_container);
					if($i > ($width_owl_thumbs_container + $width_owl_thumbs_item)){
						$("#owl-thumbs").css('left', $pos.left-$width_owl_thumbs_item);
					}

				}
				else{
					$("#owl-thumbs").css('left', 0);
					$(".owl-thumb-item").first().click();
				}
			});

			$(".thumb-prev").on('click', function(event) {
				event.preventDefault();
				var $item_activo = $(".owl-thumb-item.active");
				var $prev = $item_activo.prev();
				if($prev.length > 0){
					$prev.click();
					var $pos = $("#owl-thumbs").position();
					$("#owl-thumbs").css('left', $pos.left+$width_owl_thumbs_item);
				}
			});
		}

	});
</script>
