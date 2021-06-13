<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="/bootstrap/bootstrap.css"/>
    <script type="text/javascript" src="/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="/bootstrap/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Imobiliaria ECGM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Inicio</a>
                <a class="nav-item nav-link" href="{{route('comprar')}}">Comprar</a>
                <a class="nav-item nav-link" href="{{route('arrendar')}}">Arrendar</a>
                <a class="nav-item nav-link" href="{{route('contactenos')}}">Contacte-nos</a>
                <a class="nav-item nav-link" href="http://127.0.0.1:8000/admin">Login</a>
            </div>
        </div>
    </nav>
        <div style=" height:auto;" class="bbbootstrap">
            <div class="container">
            </div>

    <!-- Page content-->
    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div class="card mb-4">
                    <img style="padding: 20px;" class="card-img-top" width="100%" src="{{ \Voyager::image( $house->fotos ) }}" alt="Card image cap">

                    <div class="card-body">
                        <div class="text-muted">{{$house->habitacao}}</div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <h2  style="float: left;" class="card-title">{{$house->adress}}</h2>
                                </div>
                                <div class="col-sm">
                                    <h2 style="float: right;" class="card-title">{{$house->preco}} €</h2>
                                </div>
                            </div>
                        </div>
                        <p class="card-text">{{$house->descricao}}</p>
                    </div>
                    <a href="{{route('contactenos')}}" class="btn btn-primary" id="button-search" type="button">Contacte-nos</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Caracteristicas da casa</div>
                    <div class="card-body">Esta casa não possui caracteristicas</div>
                </div>
        </div>
    </div>
    <div>

        <section class="contact_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2 class="">
                        <span>Encontre no maps</span>
                    </h2>
                </div>

            </div>
            <div class="container container-bg">
                <div class="row">
                        <div class="map_container">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                    width="1000" height="600" style="padding: 10px; background-color: white; width: 100%; height:100%"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </body>
</html>
