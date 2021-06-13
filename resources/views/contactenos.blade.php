

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
            <a class="nav-item nav-link" href="{{route('welcome')}}">Inicio</a>
            <a class="nav-item nav-link" href="{{route('comprar')}}">Comprar</a>
            <a class="nav-item nav-link" href="{{route('arrendar')}}">Arrendar</a>
            <a class="nav-item nav-link active" href="#">Contacte-nos<span class="sr-only">(atual)</span></a>
            <a class="nav-item nav-link" href="http://127.0.0.1:8000/admin">Login</a>
        </div>
    </div>
</nav>
{{--resgistooooooooooooooooooooooooooooooooooooooooo--}}

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

<div style=" height:1080px;" class="bbbootstrap">
    <div style="margin: 0 auto; width:1500px;">
    <form style="margin: 20px" action ="{{route('contactPost')}}" method="POST">
        @csrf
        <div class="form-group col-md-6">
        <div class="form-group">
            <label style="color:black; text-shadow: 2px black;" for="exampleFormControlInput1">Nome</label>
            <input type="text"  name= "name" class="form-control" id="exampleFormControlInput1" placeholder="Exemplar">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" name= "email" class="form-control" id="exampleFormControlInput1" placeholder="exemplar@gmail.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cidade</label>
            <input type="text"  name= "city" class="form-control" id="exampleFormControlInput1" placeholder="Porto">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Codigo Postal</label>
            <input type="number"  name= "zip" class="form-control" id="exampleFormControlInput1" placeholder="XXXX-XXX">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Assunto</label>
            <input type="text"  name= "assunto" class="form-control" id="exampleFormControlInput1" placeholder="Descreva da melhor forma possivel o problema encontrado">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descreva o problema</label>
            <textarea  name= "matter" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-secondary" style="margin:40px;">Enviar</button>
        </div>
    </form>
    </div>
</div>
</body>
</html>
