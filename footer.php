    <footer class="footer container-fluid">
        <div class="container-fluid footer__content">
            <div class="row">
                <div class="col-12 col-md-4 p-3 pt-5 p-md-5 text-center">
					<div class="footer__logo text-center text-md-left">
						<img src="./img/logotipo-light.png" alt="">
					</div>
					
					<div class="text-center text-md-left p-3 pl-md-0 footer__redes">
						<a href="https://www.facebook.com/linosbanquetes" target="_blank">
							<i class="fab fa-facebook-square"></i>
						</a>

						<a href="https://www.instagram.com/linosbanquetes/" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
                </div>

				<div class="col-12 col-md-4 p-3 p-md-5">
					<div class="row">
						<div class="col-12">
							<h5 class="text-center text-md-left mb-3">Lino´s Banquetes japoneses</h5>
						</div>
						
						<div class="col-12 col-md-6">
							<ul class="text-center text-md-left">
								<li><a class="footer__enlace" href="./platillos-japoneses.php"><i class="fas fa-angle-right"></i> Platillos</a></li>
								<li><a class="footer__enlace" href="./cocinados-al-momento.php"><i class="fas fa-angle-right"></i> Menús</a></li>
								<li><a class="footer__enlace" href="./experiencia-linos-servicios.php"><i class="fas fa-angle-right"></i> Servicios</a></li>
							</ul>
						</div>

						<div class="col-12 col-md-6">
							<ul class="text-center text-md-left">
								<li><a class="footer__enlace" href="politicas-y-reservaciones.php"><i class="fas fa-angle-right"></i> Políticas de Servicio</a></li>
								<li><a class="footer__enlace" href="aviso-de-privacidad.php"><i class="fas fa-angle-right"></i> Aviso de Privacidad</a></li>
								<!-- <li><a class="footer__enlace" href="index.php"><i class="fas fa-angle-right"></i> Créditos</a></li> -->
							</ul>
						</div>
					</div>
					

                </div>

				<div class="col-12 col-md-4 pl-1 pr-1 p-3 p-md-5">
					<h5 class="text-center text-md-left">Contacto</h5>
					<p class="text-center text-md-left">
						<a class="footer__enlace" href="tel:5558223521"><i class="fas fa-phone"></i>55 5822 3521</a><br>
						<a class="footer__enlace" href="tel:5558249437"><i class="fas fa-phone"></i>55 5824 9437</a><br>
						<a class="footer__enlace" href="https://wa.me/5215540843940"><i class="fab fa-whatsapp"></i> 55 4084 3940</a><br>
						
						<a class="footer__enlace" href="mailto:info@linosbanquetesjaponeses.com.mx"><i class="fas fa-envelope"></i> info@linosbanquetesjaponeses.com.mx</a>
					</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-4 text-center text-md-right">
                    Lino´s Banquetes, Derechos Reservados 2021.
                </div>
            </div>
        </div>
    </footer>


    <!-- <input type="radio" class="theme-switch" name="theme-switch" id="theme-switch1">
	<label for="theme-switch1" class="switch-label">Light</label>
	<input type="radio" class="theme-switch" name="theme-switch" id="theme-switch2">
	<label for="theme-switch2" class="switch-label">Dark</label>
	
	

	<div id="page">
		<div id="content">
			<main>
				<h1>CSS Only Theme Switcher</h1>
				<p>This is a website theme switcher made using CSS only. This is the radio button–version, allowing you
					to use more than two themes! Here I use three, but you can create <em>as many as you'd like</em>.
				</p>
			</main>
		</div>
	</div> -->


	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- ===========================	Slider     =========================== -->
	<script type="text/javascript" src="./node_modules/swiper/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="./node_modules/flickity/dist/flickity.pkgd.min.js"></script>
	<!-- ===========================	Main Script 	=========================== -->

	<!-- Galería Ordenamiento -->
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="./node_modules/isotope-layout/dist/isotope.pkgd.min.js"></script>

	<script type="text/javascript" src="js/main.js"></script>


	<script>
		// =========================================================================================================
		// ===========================		Colorea el menú activo en la barra superior		========================
		// =========================================================================================================
		var path = window.location.pathname.replace('\/', '');
		
		var pathCompleto = path + window.location.search;
		console.log("El path completo es: ", pathCompleto);
		
		$(".menu li a[href='" + path + "']").addClass('active');

		$(".menu-lateral-activos a[href='" + pathCompleto + "']").addClass('active');
	</script>
</body>

</html>