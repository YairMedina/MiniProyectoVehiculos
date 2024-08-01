@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >

    
<body>
    


</head>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="image-text-section">
                <h2 class="display-4 text-center">"RENTA DE VEHICULOS"</h2><br>
                    <img src="{{ asset('images/mustang.jpeg') }}" alt="Imagen descriptiva" class="img-fluid">
                    <div class="text-content">
                        
                        <p class="lead">
                        ¡Aprovecha nuestra gran oferta en renta de vehículos! Obtén un 30% de descuento en todos nuestros autos. Disponemos de una flota de vehículos nuevos y bien mantenidos, ideales para cualquier tipo de viaje. Nuestra reserva es fácil y rápida, ya sea en línea o por teléfono. Esta oferta es válida hasta el 31 de agosto, así que no pierdas la oportunidad de viajar con comodidad y seguridad. Visítanos en VehiculosDeportivos.com o llámanos al 123-456-7890 para hacer tu reserva. Elige nuestros autos modernos y confiables, disfruta de precios competitivos y recibe un servicio al cliente excepcional. ¡No esperes más y da el primer paso hacia una experiencia de viaje sin preocupaciones!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="container mt-5">
            <h1 class="text-center mb-4">Tipos de Vehículos</h1> <br>
            <div class="row">
                <div class="col-md-4 vehicle-card">
                    <div class="card">
                        <img src="{{ asset('images/deportivos.jpg') }}" class="card-img-top vehicle-img" alt="Ferrari">
                        <div class="card-body">
                            <h5 class="card-title">DEPORTIVOS</h5>
                            <p class="card-text">Los coches deportivos son vehículos diseñados para ofrecer un alto rendimiento, velocidad y una experiencia de conducción emocionante. A menudo cuentan con motores potentes, una suspensión afinada para un manejo preciso y una estructura ligera para mejorar la agilidad. Su diseño suele ser aerodinámico para minimizar la resistencia al aire y maximizar la estabilidad a altas velocidades.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 vehicle-card">
                    <div class="card">
                        <img src="{{ asset('images/camioneta.jpeg') }}" class="card-img-top vehicle-img" alt="Motocicleta">
                        <div class="card-body">
                            <h5 class="card-title">TODO TERRENO</h5>
                            <p class="card-text">Estos vehículos suelen tener una mayor altura al suelo, lo que les permite superar obstáculos como rocas y troncos sin dañar el chasis. La tracción en las cuatro ruedas (4x4) es una característica común en los coches todo terreno, mejorando la capacidad de agarre y control en superficies resbaladizas o irregulares. Además, suelen contar con suspensiones reforzadas y neumáticos diseñados específicamente para soportar el desgaste y ofrecer tracción en condiciones adversas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 vehicle-card">
                    <div class="card">
                        <img src="{{ asset('images/suburban.jpg') }}" class="card-img-top vehicle-img" alt="Camión">
                        <div class="card-body">
                            <h5 class="card-title">EJECUTIVOS</h5>
                            <p class="card-text">
                            Los coches ejecutivos están diseñados para ofrecer una combinación de lujo, confort y rendimiento, destinados principalmente a profesionales y ejecutivos que valoran la comodidad y el prestigio en su transporte diario. Estos vehículos suelen presentar un diseño elegante y sofisticado, con acabados de alta calidad y tecnología avanzada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

    <section id="services" class="services-section text-center">
        <div class="container">
            <h2 class="display-4">RENTAS DEL MES</h2><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/shelby.jpg') }}" class="card-img-top" alt="SUV">
                        <div class="card-body">
                            <h5 class="card-title">SHELBY</h5>
                            <p class="card-text">Robusto y potente, ideal para quienes buscan una experiencia de conducción emocionante y un diseño distintivo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/ferrari2.jpg') }}" class="card-img-top" alt="Sedán">
                        <div class="card-body">
                            <h5 class="card-title">FERRARI</h5>
                            <p class="card-text">Impresionante y emocionante en cada detalle. Ideal para quienes buscan una experiencia de conducción inigualable y un diseño icónico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/maserati.jpg') }}" class="card-img-top" alt="Camioneta">
                        <div class="card-body">
                            <h5 class="card-title">MASERATI</h5>
                            <p class="card-text">Elegante y potente. Perfecto para una conducción deportiva de lujo y experiencias de alta gama.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contact" class="contact-section bg-light text-center">
        <div class="container">
            <h2 class="display-4">Contáctanos</h2>
            <p class="lead">¿Tienes alguna pregunta? No dudes en ponerte en contacto con nosotros.</p>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Tu mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection