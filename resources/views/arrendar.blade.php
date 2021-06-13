<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="/bootstrap/bootstrap.css"/>
    <script type="text/javascript" src="/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="/resources/js/app.js"></script>
    <script type="text/javascript" src="/bootstrap/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
            <a class="nav-item nav-link" href="{{route('welcome')}}">Inicio</a>
            <a class="nav-item nav-link " href="{{route('comprar')}}">comprar</a>
            <a class="nav-item nav-link active" >Arrendar<span class="sr-only">(atual)</span></a>
            <a class="nav-item nav-link" href="{{route('contactenos')}}">Contacte-nos</a>
            <a class="nav-item nav-link" href="http://127.0.0.1:8000/admin">Login</a>
        </div>
    </div>
</nav>

<div style=" height:auto;" class="bbbootstrap">
    <div class="container">
        <form>
            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text"
                                                                                                     id="Form_Search"
                                                                                                     value=""
                                                                                                     placeholder="Search for your best result in our community"
                                                                                                     role="searchbox"
                                                                                                     class="InputBox "
                                                                                                     autocomplete="off"><input
                type="submit" id="Form_Go" class="Button" value="GO">
        </form>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" >
                <section >

                    <!-- Section: Filters -->
                    <section class="filtros">

                        <h5 style="margin-top: 30px; font-size:30px; margin-left: 20px;">Filtros</h5>

                        <!-- Section: Condition -->

                        <section class="mb-4" style="margin-top: 30px; margin-left:20px;">

                            <h6 class="font-weight-bold mb-3">Destrito</h6>

                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input cityFilter" value="Braga"
                                       name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="under25">Braga</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input cityFilter" value="Porto"
                                       name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="2550">Porto</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="radio" class="form-check-input cityFilter" value="Lisboa"
                                       name="materialExampleRadios">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="50100">Lisboa</label>
                            </div>

                        </section>
                        <!-- Section: Price -->
                        <section class="mb-4" style="margin-left:20px;">

                            <h6 class="font-weight-bold mb-3">Preço</h6>

                            <form>
                                <div class="d-flex align-items-center mt-4 pb-1">
                                    <div class="md-form md-outline my-0">
                                        <input id="from" type="text" class="form-control mb-0">
                                        <label for="form">$ Min</label>
                                    </div>
                                    <p class="px-2 mb-0 text-muted"> - </p>
                                    <div class="md-form md-outline my-0">
                                        <input id="to" type="text" class="form-control mb-0">
                                        <label for="to">$ Max</label>
                                    </div>
                                </div>
                            </form>

                        </section>
                        <!-- Section: Size -->
                        <section class="mb-4" style="margin-left: 20px;">

                            <h6 class="font-weight-bold mb-3">Extras</h6>

                            <div class="form-check pl-0 mb-3">
                                <input type="checkbox" class="form-check-input filled-in" id="34">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="34">Internet</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="checkbox" class="form-check-input filled-in" id="36">
                                <label class="form-check-label small text-uppercase card-link-secondary"
                                       for="36">Gás</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="checkbox" class="form-check-input filled-in" id="38">
                                <label class="form-check-label small text-uppercase card-link-secondary" for="38">Piscina</label>
                            </div>
                            <div class="form-check pl-0 mb-3">
                                <input type="checkbox" class="form-check-input filled-in" id="40">
                                <label class="form-check-label small text-uppercase card-link-secondary"
                                       for="40">Jardim</label>
                            </div>
                            <a class="btn btn-link text-muted p-0" data-toggle="collapse" href="#collapseExample"
                               aria-expanded="false" aria-controls="collapseExample">
                            </a>
                        </section>
                        <!-- Section: Filters -->
                        <section>
                            <button href="{{route('contactenos')}}" type="button" class="btn btn-secondary"
                                    style="margin-left: 80px; margin-top: -30px;">Escolheu uma casa? <br> Contacte-nos
                            </button>
                        </section>
                    </section>
                </section>
            </div>

            <div class="col-md-10" style="margin-top:77px">
                <div id="listaCasas" class="row" style="height: 50%;">
                    @foreach($houses as $house)
                        <div class="card text-center row-cols-1" style="width: 18rem; margin: 10px;">
                            <img style="margin-top: 10px;" class="card-img-top" width="100%" src="{{ \Voyager::image( $house->fotos ) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5  class="card-title">{{$house->habitacao}}</h5>
                                <p class="card-text">{{$house->adress}}</p>
                                <a class="btn btn-primary " href="{{route("vercasa", $house)}}"> Ver mais</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>

<script>
    $(".cityFilter").change(function (e) {
        if (this.checked) {
            window.location.href = " {{route('filterByCity')}}/" + e.target.value;
        }
    });</script>
