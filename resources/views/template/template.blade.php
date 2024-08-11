<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Prueba Sube Agencia Digital</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,700&display=swap" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
	</head>
	<body class="d-flex flex-column min-vh-100">
		<!-- Header -->
		<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-5 shadow-sm">
			<div class="container">
				<nav class="navbar navbar-expand-lg w-100">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">
							<img alt="Logo" src="{{ asset('images/logo.png') }}" class="logo" />
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end text-end" id="navbarNavAltMarkup">
							<div class="navbar-nav menu-principal-scrollspy">
								<a class="nav-link active px-md-4" aria-current="page" href="#inicio">Inicio</a>
								<a class="nav-link px-md-4" href="#beneficios">Beneficios</a>
								<a class="nav-link px-md-4" href="#testimonios">Testimonios</a>
								<a class="nav-link px-md-4" href="#contacto">Contacto</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>  
		<!-- End header -->
		
		<!-- Main content -->
		<div data-bs-spy="scroll" data-bs-target="#menu-principal">
		@yield('content')
		</div>
		<!-- End main content -->
		
		<!-- Footer -->
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-4 mt-auto border-top">
			<div class="container">
				<div class="row">
    				<div class="col-md-4 d-flex mb-3 mb-md-0 justify-content-md-start justify-content-center align-items-center">
    					<img alt="Logo" src="{{ asset('images/logo.png') }}" class="logo" />
    					<span class="mb-0">&copy; <?php echo date('Y'); ?> Empresa</span>
    				</div>
    				<div class="col-md-4 d-flex mb-3 mb-md-0 justify-content-center align-items-center">
    					<ul class="nav col-sm-4 justify-content-center list-unstyled d-flex">
    						<li class="text-nowrap"><i class="fa-brands fa-whatsapp"></i> +52 55 5555 1234</li>
    						<li class="text-nowrap"><i class="fa-regular fa-envelope"></i> contacto@empresa.com</li>
    					</ul>
    				</div>
    				<ul class="social-media nav col-md-4 justify-content-md-end justify-content-center align-items-center list-unstyled d-flex">
    					<li class="ms-3"><a class="" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
    					<li class="ms-3"><a class="" href="#"><i class="fa-brands fa-instagram"></i></a></li>
    					<li class="ms-3"><a class="" href="#"><i class="fa-brands fa-tiktok"></i></a></li>
    				</ul>
				</div>
			</div>
		</footer>
		<!-- End footer -->
		<script src="https://kit.fontawesome.com/2141b25d30.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" crossorigin="anonymous"></script>
		<script src="{{ asset('js/home.js') }}"></script>
	</body>
</html>