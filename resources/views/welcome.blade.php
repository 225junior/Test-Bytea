<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{ asset ('css/app.css')}}"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Test Bitea</title>
</head>
<body>
    <!-- menu -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Basculer la navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Marque</a>
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Relier <span class="sr-only">(actuel)</span></a></li>
                <li><a href="#">Relier</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu déroulant <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">action</a></li>
                    <li><a href="#">Une autre action</a></li>
                    <li><a href="#">Quelque chose d'autre ici</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Lien séparé</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Un autre lien séparé</a></li>
                </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Rechercher">
                </div>
                <button type="submit" class="btn btn-default">Soumettre</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Relier</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- fin menu -->











</body>
</html>