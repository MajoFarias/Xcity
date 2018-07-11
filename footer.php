<footer>
	<section class="containerIn">
		<!-- <article class="row"> -->
			<div class="">
				<img src="assets/images/logo-white.png" alt="">
			</div>
			<div class="">
				<h2>Deportes extremos</h2>
				<ul>
					<li><a href="">Agua</a></li>
					<li><a href="">Aire</a></li>
					<li><a href="">Tierra</a></li>
					<li><a href="">Montaña</a></li>
				</ul>
			</div>
			<div class="">
				<h2><a href="">Top 100 aventuras en méxico</a></h2>
				<h2><a href="">Eventos</a></h2>
				<h2><a href="">Embajadores</a></h2>
				<h2><a href="">Blog</a></h2>
				<h2><a href="">Xcity</a></h2>
			</div>
			<div class="">
				<h2>Contacto</h2>
				<p><a href="">contacto@xcity.com.mx</a></p>
				<h2>Síguenos</h2>
				<div class="redes-footer">
					<a href=""><span class="icon-excity-06"></span></a>
					<a href=""><span class="icon-excity-05"></span></a>
					<a href=""><span class="icon-excity-04"></span></a>
				</div>
			</div>
			<div class="">
				<h2 class="white">suscríbete a nuestro newsletter</h2>
				<form action="">
					<input type="text" placeholder="Escribe tu e-mail">
				</form>
				<button class="btn-diagonal btn-border-yellow btn--3 btn-ex"><span>Suscribirse</span></button>
			</div>
		<!-- </article> -->
	</section>

	
</footer>

<!--Scripts-->
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/owl.carousel2.thumbs.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.mobile.custom.js"></script>
<script src="assets/js/rellax.js"></script>


<script>
    $(document).ready(function() {

    	//Remove add class
    	$('#menu-mix li a').click(function(){
    		if($(this).parent().hasClass("drop-show")){
    		  $(this).parent().removeClass("drop-show");	
    		}
    		else{
    		 $(this).parent().addClass("drop-show");
    		}
    	})

		//que rellax solo se ejecute si hay 1 o más elementos//
    	if($(".rellax").lenght>0){
    		//quitar parallax en mobile
			var ancho = $(window).width();
    		if(ancho>=1200){
    			var rellax = new Rellax('.rellax');
			}
			//
    	}
    	//


		$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
			$(this).toggleClass('open');
		});

		//smothscroll
    	// jQuery.scrollSpeed(200, 1000);

		//wow
    	wow = new WOW({
			animateClass: 'animated',
			offset: 100,
			callback: function(box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		});
		wow.init();

		$(document).on('click', '#moar', function(event) {
			var section = document.createElement('section');
			section.className = 'section--purple wow fadeInDown';
			this.parentNode.insertBefore(section, this);
		});


		
      $('.owl-one').owlCarousel({
         	loop:true,
	        margin: 15,
	        nav: true,
	        mouseDrag: true,
	        touchDrag: false,
		    responsive:{
		        0:{
		            items:1,
		            autoHeight: true,
		            mouseDrag: false,
		            touchDrag: true
		        },
	        	600:{
		            items: 1,
		            // autoHeight: true,
		            mouseDrag: false,
		            touchDrag: true
          		},
          		1050: {
		            items: 1,
		            mouseDrag: true,
	        		touchDrag: false,
		            // autoWidth: true
          		}
		       
		    }
      });

      $('.owl-historia').owlCarousel({
         	loop:false,
	        nav: false,
	        mouseDrag: true,
	        touchDrag: false,		    
	        responsive:{
		        0:{
		            items:1,
		            mouseDrag: false,
		            touchDrag: true
		        },
	        	600:{
		            items: 1,
		            mouseDrag: false,
		            touchDrag: true
          		},
		       
		    }
      });

      $('.owl-leyendas').owlCarousel({
         	loop:true,
	        nav: true,
	        mouseDrag: true,
	        touchDrag: false,		    
	        responsive:{
		        0:{
		            items:1,
		            mouseDrag: false,
		            touchDrag: true
		        },
	        	600:{
		            items: 1,
		            mouseDrag: false,
		            touchDrag: true
          		},
		       
		    }
      });

      // $('.owl-embajador').owlCarousel({
      //    	loop:true,
	     //    nav: true,
	     //    mouseDrag: true,
	     //    touchDrag: false,
	     //    thumbs: true,
		    // thumbsPrerendered: true,		    
	     //    responsive:{
		    //     0:{
		    //         items:1,
		    //         mouseDrag: false,
		    //         touchDrag: true
		    //     },
	     //    	600:{
		    //         items: 1,
		    //         mouseDrag: false,
		    //         touchDrag: true
      //     		},
		       
		    // }
      // });

      //mobile swipe
		$(".swipe").swiperight(function() {
			$(this).carousel('prev');
		});
		$(".swipe").swipeleft(function() {
			$(this).carousel('next');
		});


		//header fixed effect//
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 10) {
				$(".clearMargin").addClass("addMargin");
			} else {
				$(".clearMargin").removeClass("addMargin");
			}
		});

		$('.dropdown-submenu a.test').on("click", function(e){
    		$(this).next('ul').toggle();
    		e.stopPropagation();
    		e.preventDefault();
  		});
    })
</script>
<!-- <script src="assets/js/scrollsmooth.js"></script>
 -->
</body>
</html>