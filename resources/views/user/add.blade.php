<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <title>Live-Wire</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Basculer la navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="mr-auto navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Domicile
                <span class="sr-only">(actuel)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users')}}">Utilisateurs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tarification</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">À propos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu déroulant</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">action</a>
                <a class="dropdown-item" href="#">Une autre action</a>
                <a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Lien séparé</a>
              </div>
            </li>
          </ul>
          <form class="my-2 form-inline my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
            <button class="my-2 btn btn-secondary my-sm-0" type="submit">Rechercher</button>
          </form>
        </div>
      </nav>


<div class="container mt-1">
  
  
  <div class="row">
      
  
    <form class="col-md-6 offset-3">
        <fieldset>
          <legend>Création</legend>
          
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Nom">
          </div>

          <div class="form-group">
            <label for="prenoms">Email address</label>
            <input type="email" class="form-control" id="prenoms" placeholder="Prenoms">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
         
         
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
    
    </div>
  
  
</div>

</body>
@livewireScripts
<script src="{{ asset('js/app.js')}}"></script>
</html>