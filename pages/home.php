<?php
// Aquí va tu código PHP
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Cafeteria y Pasteleria Chan K'íiwik</title>
		<link rel="icon" type="image/png" href="/img/Logo2.png">
		<link rel="stylesheet" href="styles.css" />
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Atención al cliente</span>
							<span class="number">999 - ### - ####</span>
						</div>
					</div>

					<div class="container-logo">
						<i class="fa-solid fa-mug-hot"></i>
						<h1 class="logo"><a href="/">Chan K'íiwik</a></h1>
					</div>

					<div class="container-user">
						<i class="fa-solid fa-user"></i>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="index.html">Inicio</a></li>
						<li><a href="index.html">Cafeteria</a></li>
						<li><a href="index.html">Pasteleria</a></li>
						<li><a href="index.html">Info</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
		</header>

		<section class="banner">
			<div class="content-banner">
				<p>Café Delicioso</p>
				<h2> "Lo mejor para tu paladar" <br />Café Fresco</h2>
				<a href="#">Comprar ahora</a>
			</div>
		</section>

	

			<section class="container top-categories">


				<h1 class="heading-1">Mejores Categorías</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Café moca</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-expreso">
						<p>Expreso Americano</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-capuchino">
						<p>Capuchino</p>
						<span>Ver más</span>
					</div>
				</div>
				
			</section>

			<section class="container top-products">
				<h1 class="heading-1">Mejores Productos</h1>

				<div class="container-options">
					<span class="active">Destacados</span>
					<span>Más recientes</span>
					<span>Mejores Vendidos</span>
				</div>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-irish.jpg" alt="Cafe Irish" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$34.80 <span>$40.00</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/cafe-ingles.jpg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Inglés</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$23.40 <span>$30.00</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="img/cafe-australiano.jpg"
								alt="Cafe Australiano"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cafe Australiano</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$25.00</p>
						</div>
					</div>
					
					</div>
				</div>
			</section>

			<section class="gallery">
				<img
					src="img/gallery1.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="img/gallery2.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="img/gallery3.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="img/gallery4.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="img/gallery5.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>


			<footer class="footer">
				<div class="container container-footer">
					<div class="menu-footer">
						<div class="contact-info">
							<p class="title-footer">Información de Contacto</p>
							<ul>
								<li>
									Dirección: Opichen, Yucatan
								</li>
								<li>Teléfono: 999 - ### - #### </li>
								<li>Fax: 6566556</li>
								<li>EmaiL: chankiiwik@support.com</li>
							</ul>
							<div class="social-icons">
								<span class="facebook">
									<i class="fa-brands fa-facebook-f"></i>
								</span>
								<span class="youtube">
									<i class="fa-brands fa-youtube"></i>
								</span>
								<span class="tiktok">
									<i class="fa-brands fa-tiktok"></i>
								</span>
								<span class="instagram">
									<i class="fa-brands fa-instagram"></i>
								</span>
							</div>
						</div>
	
						<div class="information">
							<p class="title-footer">Información</p>
							<ul>
								<li><a href="#">Acerca de Nosotros</a></li>
								<li><a href="#">Información Delivery</a></li>
								<li><a href="#">Politicas de Privacidad</a></li>
								<li><a href="#">Términos y condiciones</a></li>
								<li><a href="#">Contactános</a></li>
							</ul>
						</div>
	
						<div class="my-account">
							<p class="title-footer">Mi cuenta</p>
	
							<ul>
								<li><a href="#">Mi cuenta</a></li>
								<li><a href="#">Historial de ordenes</a></li>
								<li><a href="#">Lista de deseos</a></li>
								<li><a href="#">Boletín</a></li>
								<li><a href="#">Reembolsos</a></li>
							</ul>
						</div>
	
						<div class="newsletter">
							<p class="title-footer">Boletín informativo</p>
	
							<div class="content">
								<p>
									Gracias por visitar nuestra pagina, cualquier aclaracion comunicarse con nuestro servicio de atencion
								</p>
								<input type="email" placeholder="Ingresa el correo aquí...">
								<button>Correo</button>
							</div>
						</div>
					</div>
	
					<div class="copyright">
						<p>
							 &copy; 2023
						</p>
	
						<img src="/img/payment.png" alt="Pagos">
					</div>
				</div>
			</footer>
	
			<script
				src="https://kit.fontawesome.com/81581fb069.js"
				crossorigin="anonymous"
			></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>