<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Voyage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>
<body>

    <div class="topnav w-100" id="myTopnav">
        <a href="#home" class="active">Logo</a>
        <a href="#contact">Acceuil</a>
        <a href="#contact">Contact</a>
        <a href="#account">Creer un compte</a>
        <a href="#login">Se connecter</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

<header class="d-flex align-items-center justify-content-center flex-column">
    <h1 id="title">Reservez en groupe</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <section id="research">
                    <form method="post" action="list.php">
                        <div class="form-group">
                            <label for="start_trip">Depart (ville ou pays)</label>
                            <input type="text" class="form-control" name="name" autocomplete="off" id="start_trip"
                                   placeholder="Départ de">
                            <div id="show_up"></div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput2">Destination (ville ou pays)</label>
                            <input type="text" class="form-control" autocomplete="off" name="name"
                                   id="exampleFormControlInput2"
                                   placeholder="Arrivé à">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nombre de passagers</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="reservation_start">Date de départ</label>
                                    <input type="date" min="2018-07-20" id="reservation_start">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="reservation_back">Date de retour</label>
                                    <input type="date" id="reservation_back">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit">Réserver</button>
                    </form>
                </section>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
</header>

<main>
    <section id="trip">
        <div class="container">
            <h2 id="trip-title">Les bons plans de voyages</h2>
            <div class="col-lg-3">
                <img src="assets/image/shanghai-voyage.jpg" class="w-100" alt="">
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
        </div>
    </section>
</main>


</body>
<script type="text/javascript" src="assets/js/script.js"></script>
</html>