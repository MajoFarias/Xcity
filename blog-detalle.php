<?php include 'header.php' ?>


<main>
	<section class="eyeIn bkg-black">
		<h1 class="titleEx before-after yellow">Blog</h1>
		<h2 class="titleCategory">Noticias</h2>
	</section>
	<section class="blog-search bkg-yellow">
		<article class="container">
			<form>
				<div class="form-row">
					<div class="form-group col-md-8 col-lg-9">
						<input type="text" class="form-control" id="inputSearch" placeholder="escribe lo que estás buscando">
					</div>
					<div class="form-group col-md-4 col-lg-3">
						<p class="button text-center button-contact">
							<button class="btn-diagonal btn-center btn--4 btn-ex btn-black"><span>Buscar</span></button>
						</p>
					</div>
				</div>
			</form>
		</article>
	</section>
	<section class="blog-detalle container">
		<article class="row">
			<div class="col-lg-8 col-xl-9">
				<div class="blog-img">
					<img src="assets/images/ex-city-blog-detalle.jpg" alt="">
				</div>
				<div class="blog-text">
					<p class="category red-cat">Tierra</p>
					<h2 class="titleExPetite title-blog">La vuelta en mundo en patineta dentro de un skatepark, por Pedro Barros</h2>
					<div class="author-fecha">	
						<p class="author">Por Enrique blancas</p>
						<p class="fecha">12 abril 2018</p>
						<hr>
					</div>
					<div class="blog-content-text">
						<blockquote>El patinador brasileño Pedro Barros le dio la vuelta al mundo en su patineta sin tener que salir de un mismo skatepark lleno de creatividad y arte.</blockquote>
						<p>¿Quién no sueña con viajar y darle la vuelta al mundo? Para muchísima gente el tener un trabajo que le permita tomar muchos aviones es un trabajo de ensueño. Para otros, su mayor anhelo es jamás bajarse de la patineta (o cualquier actividad que te apasione) y recibir dinero por ello. ¿Qué pasaría si te dijera que Pedro Barros hizo las dos al mismo tiempo? ¡Qué envidia! ¿Cierto?</p>
						<p>En colaboración con los artistas Ryno, Steve Fawler, Kirsten Poulsen, Sophia Langner, Marco Reinhardt, PTLN y NXT LVL; además del constructor de rampas Andreas Schützenberger; durante ocho semanas se diseñó y construyó un skatepark que reúne diferentes y distinguidos puntos del mundo. DesdeChina Banks hasta la Zona de Besos en Barcelona. Todo gracias a Red Bull y Samsung. </p>
						<iframe src="https://www.youtube.com/embed/3yelqLW3H_E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="tag-social row">
						<div class="tag col-sm-8 no-padding">
							<p><span>TAGS:</span>  <a href="">Arte</a> - <a href="">Mundo</a> - <a href="">Patineta</a> - <a href="">Pedro Barros</a> - <a href="">Red bull</a> - <a href="">Skate</a> - <a href="">Skate Park</a></p>
						</div>
						<div class="comments-num col-sm-1"><span class="icon-excity-05"></span>9</div>
						<div class="icon-share col-sm-3">
						
						</div>
						
					</div>
					<hr>	
				</div>
				<div class="form-comment contact-form">
					<h5>Escribe un comentario</h5>
					<h3>Tu dirección de correo electrónico no será publicada. <br>
Los campos obligatorios están marcados con *</h3>
					<div class="container no-padding">
						<form>
							<div class="form-row">
								<div class="form-group col-sm-12">
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*Nombre">
								</div>
								<div class="form-group col-sm-12">
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email:">
								</div>
								<div class="form-group col-sm-12">
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Mensaje:"></textarea>
								</div>
							</div>
							<p class="button text-center button-contact">
							<a class="btn-diagonal btn-center btn-yellow btn--2 btn-ex"><span>Enviar</span></a>
							</p>
						</form>
					</div>
				</div>
			</div>	
			<aside class="col-lg-4 col-xl-3">
				<div class="categorias">
					<h3>Categorias</h3>
					<p><a class="blue-hover-link" href="">Agua</a></p>
					<p><a class="red-hover-link" href="">Tierra</a></p>
					<p><a class="purple-hover-link" href="">Montaña</a></p>
					<p><a class="orange-hover-link" href="">Aire</a></p>
				</div>
				<div class="post-recientes">
					<h3>Post Recientes</h3>
					<div class="one-recent-post">
						<div class="image-recent-post">
							<a href=""><img src="assets/images/ex-city-blog-detalle.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""></a>
						</div>
						<p><a href="#">Un hombre se aventó del bungee junto a su hija de dos años.</a></p>
					</div>
					<div class="one-recent-post">
						<div class="image-recent-post">
							<a href=""><img src="assets/images/ex-city-blog-detalle.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""></a>				
						</div>
						<p><a href="#">Un hombre se aventó del bungee junto a su hija de dos años.</a></p>
					</div>
					<div class="one-recent-post">
						<div class="image-recent-post">
							<a href=""><img src="assets/images/ex-city-blog-detalle.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""></a>		
						</div>
						<p><a href="#">Un hombre se aventó del bungee junto a su hija de dos años.</a></p>
					</div>
				</div>
				<div class="tags">
					<h3>Tags</h3>
					<a href="">Arte</a>
					<a href="">Skatepark</a>
					<a href="">Skate</a>
					<a href="">Patineta</a>
					<a href="">Red bull</a>
				</div>
			</aside>
		</article>
	</section>
	
</main>

<?php include 'footer.php' ?>

