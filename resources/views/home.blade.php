@extends('template.template')
@section('content')
<section id="inicio" class="hero mb-3">
    <h1>Bienvenidos a Nuestra Agencia Digital</h1>
    <p>Ofrecemos soluciones digitales que transforman tu negocio.</p>
    <a href="https://wa.me/525510062644" target="_blank" class="btn btn-lg btn-success px-5">Escríbenos</a>
</section>

<section id="beneficios" class="beneficios py-4 mb-4">
	<div class="container">
        <h2 class="text-center mb-4">¿Por qué nosotros?</h2>
        <div class="row services pt-3">
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card border-0 service">
                    <img src="{{ asset('images/service1.jpg') }}" alt="Beneficio 1">
                    <h3>Estrategias personalizadas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel sapien elit.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card border-0 service">
                    <img src="{{ asset('images/service2.jpg') }}" alt="Beneficio 2">
                    <h3>Innovación constante</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel sapien elit.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card border-0 service">
                    <img src="{{ asset('images/service3.jpg') }}" alt="Beneficio 3">
                    <h3>Resultados medibles</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel sapien elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonios" class="testimonials py-4">
	<div class="container">
        <h2 class="text-center mt-3 mb-4">Lo que dicen nuestros clientes</h2>
        <div class="testimonial row align-items-center">
        	<div class="col-lg-1 col-md-2 mb-3 text-center text-md-start">
            	<img src="{{ asset('images/client1.jpg') }}" alt="Juan Pérez" class="client-photo" />
            </div>
            <div class="testimonial-content ps-md-4 col-md-10">
                <p class="text-center text-md-start">"La agencia transformó completamente nuestra presencia en línea. Gracias a ellos, hemos incrementado nuestras ventas en un 50% en los últimos seis meses."</p>
                <h4 class="text-center text-md-start">Juan Pérez, CEO de Empresa XYZ</h4>
            </div>
        </div>
        <div class="testimonial row align-items-center">
        	<div class="col-lg-1 col-md-2 mb-3 text-center text-md-start">
            	<img src="{{ asset('images/client2.jpg') }}" alt="María López" class="client-photo" />
        	</div>
            <div class="testimonial-content ps-md-4 col-md-10">
                <p class="text-center text-md-start">"El equipo de la agencia es profesional y siempre está dispuesto a ayudar. Nos han guiado para implementar estrategias digitales que realmente funcionan."</p>
                <h4 class="text-center text-md-start">María López, Directora de Marketing de Empresa ABC</h4>
            </div>
        </div>
        <div class="testimonial row align-items-center">
        	<div class="col-lg-1 col-md-2 mb-3 text-center text-md-start">
            	<img src="{{ asset('images/client3.jpg') }}" alt="Carlos Martínez" class="client-photo" />
            </div>
            <div class="testimonial-content ps-md-4 col-md-10">
                <p class="text-center text-md-start">"Su enfoque innovador y su capacidad para adaptarse a nuestras necesidades han sido claves para el éxito de nuestras campañas de marketing."</p>
                <h4 class="text-center text-md-start">Carlos Martínez, Fundador de Startup 123</h4>
            </div>
        </div>
    </div>
</section>

<section id="contacto" class="contacto py-4 mb-3">
	<div class="container">
    	<h2 class="text-center mb-4">Contáctanos</h2>
    	<div class="row justify-content-between">
    		<div class="col-md-5 col-sm-12">
            	<form id="formContacto" name="formContacto">
            		<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            		<div class="mb-4">
            			<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" />
            		</div>
            		<div class="mb-4">
            			<input type="email" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" />
            		</div>
            		<div class="mb-4">
            			<textarea id="mensaje" name="mensaje" rows="4" class="form-control" placeholder="Mensaje"></textarea>
            		</div>
            		<div class="mb-4">
            			<button type="button" id="btnContacto" class="btn btn-primary px-4">Enviar</button>
            		</div>
            	</form>
    		</div>
    		<div class="col-md-5 col-sm-12">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.552066852049!2d-99.18802948903779!3d19.4317505406319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8ab46ac95e7%3A0xa7768746e2c68179!2sAv.%20Pdte.%20Masaryk%20101%2C%20Polanco%2C%20Polanco%20V%20Secc%2C%20Miguel%20Hidalgo%2C%2011560%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1723274775046!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    		</div>
    	</div>
	</div>
</section>
@endsection