<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="/bootstrap/bootstrap.css"/>
    <script type="text/javascript" src="/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="/bootstrap/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Imobiliaria ECGM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Inicio<span class="sr-only">(atual)</span></a>
      <a class="nav-item nav-link" href="{{route('comprar')}}">Comprar</a>
      <a class="nav-item nav-link" href="{{route('arrendar')}}">Arrendar</a>
        <a class="nav-item nav-link" href="{{route('contactenos')}}">Contacte-nos</a>
        <a class="nav-item nav-link" href="http://127.0.0.1:8000/admin">Login</a>
    </div>
  </div>
</nav>
<div>

</div>
 <div style=" height:1500px;"class="bbbootstrap1">

     <div class="container">
         <form>
             <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
             <input type="text" id="Form_Search" value="" placeholder="Escolhe uma Cidade" role="searchbox" class="InputBox " autocomplete="off">
             <input type="submit" id="Form_Go" class="Button" value="GO">
         </form>
     </div>
 </div>

</body>
</html>

