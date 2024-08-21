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
                <h2 class="display-4 text-center">"VEHICLE RENTAL"</h2><br>
                    <img src="{{ asset('images/mustang.jpeg') }}" alt="Imagen descriptiva" class="img-fluid">
                    <div class="text-content">
                        
                        <p class="lead">
                        Take advantage of our great vehicle rental offer! Get a 30% discount on all our cars. We have a fleet of new and well-maintained vehicles, perfect for any type of trip. Our booking process is easy and quick, whether online or by phone. This offer is valid until August 31st, so don't miss the chance to travel with comfort and safety. Visit us at VehiculosDeportivos.com or call us at 123-456-7890 to make your reservation. Choose our modern and reliable cars, enjoy competitive prices, and receive exceptional customer service. Don't wait any longer and take the first step toward a worry-free travel experience!
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
                            <h5 class="card-title">SPORTS</h5>
                            <p class="card-text">Sports cars are vehicles designed to deliver high performance, speed, and an exciting driving experience. They often feature powerful engines, finely tuned suspension for precise handling, and a lightweight structure to enhance agility. Their design is usually aerodynamic to minimize air resistance and maximize stability at high speeds.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 vehicle-card">
                    <div class="card">
                        <img src="{{ asset('images/camioneta.jpeg') }}" class="card-img-top vehicle-img" alt="Motocicleta">
                        <div class="card-body">
                            <h5 class="card-title"> ALL-TERRAIN</h5>
                            <p class="card-text">These vehicles typically have higher ground clearance, allowing them to overcome obstacles such as rocks and logs without damaging the chassis. Four-wheel drive (4x4) is a common feature in off-road vehicles, enhancing grip and control on slippery or uneven surfaces. Additionally, they often come equipped with reinforced suspensions and tires specifically designed to withstand wear and provide traction in adverse conditions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 vehicle-card">
                    <div class="card">
                        <img src="{{ asset('images/suburban.jpg') }}" class="card-img-top vehicle-img" alt="Camión">
                        <div class="card-body">
                            <h5 class="card-title">EXECUTIVE</h5>
                            <p class="card-text">
                            Executive cars are designed to offer a combination of luxury, comfort, and performance, primarily intended for professionals and executives who value both comfort and prestige in their daily transportation. These vehicles often feature an elegant and sophisticated design, with high-quality finishes and advanced technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>

    <section id="services" class="services-section text-center">
        <div class="container">
            <h2 class="display-4">Monthly Rentals</h2><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/shelby.jpg') }}" class="card-img-top" alt="SUV">
                        <div class="card-body">
                            <h5 class="card-title">SHELBY</h5>
                            <p class="card-text">Robust and powerful, ideal for those seeking an exciting driving experience and a distinctive design.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/ferrari2.jpg') }}" class="card-img-top" alt="Sedán">
                        <div class="card-body">
                            <h5 class="card-title">FERRARI</h5>
                            <p class="card-text">Impressive and thrilling in every detail. Ideal for those seeking an unparalleled driving experience and an iconic design.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/maserati.jpg') }}" class="card-img-top" alt="Camioneta">
                        <div class="card-body">
                            <h5 class="card-title">MASERATI</h5>
                            <p class="card-text">Elegant and powerful. Perfect for luxury sports driving and high-end experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contact" class="contact-section bg-light text-center">
        <div class="container">
            <h2 class="display-4">Contact Us</h2>
            <p class="lead">¿
            "Do you have any questions? Feel free to contact us.".</p>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
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