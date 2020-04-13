<?php
include_once 'src/views/elements/footer.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">DamienLocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./src/views/location.php">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./src/views/contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./src/views/gererMesBien.php">Gérer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./src/views/addLocation.php">Ajouter</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-xs-5 col-sm-5 col-md-5  col-lg-4  col-xl-4 ">
            <img class="card-img-top" src="public/img/BernardBlier.jpg" alt="Card image cap">
        </div>

        <div class="col-xs-5 col-sm-5 col-md-5  col-lg-5  col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bienvenue sur IMMO-Blier!!</h5>
                    <p class="card-text">Le site de ventes et locations de biens immobiliers de Bernard Blier!</p>

                        <p>"Chez moi on ne vends pas, on ventile!!"</p>
                    <a href="src/views/contact.html" class="btn btn-outline-secondary">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>


<?php
footer();
?>