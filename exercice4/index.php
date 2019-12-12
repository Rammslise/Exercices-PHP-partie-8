<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name= "viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Variables superglobales, sessions et cookies, exercice 4</title>
    </head>
    <!-- Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches. -->
    <body>
        <!--Header du site avec une image -->
        <header>
            <img src="assets/img/header.png" class ="img-fluid" alt="Responsive image"/>
        </header>
        <!-- Navbar avec les exercices-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand">Partie 8 php, Variables superglobales, sessions et cookies</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../exercice1/index.php">Ex.1<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../exercice2/index.php">Ex.2<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../exercice3/index.php">Ex.3<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../exercice4/index.php">Ex.4<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../exercice5/index.php">Ex.5<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>
        </nav>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#data">Informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#connexion">Connexion</a>         
            </li>
        </ul>

        <!-- Form avec les infos concernant l'utilisateur-->
        <div id="content" class="tab-content">
            <div class="tab-pane fade show active" id="data">                                            
                <div class="row justify-content-center">
                    <div class="card border-info mb-3 text-center ">
                        <h3 class="card-header">Bonjour et bienvenue</h3>
                        <div class="card-body text-center">                      
                            <form method="POST" action="index.php">
                                <div class="form-row">
                                    <div class="card-body text-center">
                                        <p>CookieLogin =  <?= $_COOKIE['cookieLogin'] ?></p>
                                        <p>CookiePassword = <?= $_COOKIE['cookiePassword'] ?></p>                                 
                                    </div>                                                  
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page de la connexion et actualités-->
        <div class="tab-pane fade" id="connexion">
            <div class="row">
                <form class="form-menu-md-3 mb-4 p-4">
                    <div class="form-group">
                        <label for="login">Identifiant</label>
                        <input type="email" class="form-control" id="loginMail" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="passwordID">Mot de passe</label>
                        <input type="password" class="form-control" id="passwordID" placeholder="Entrez votre mot de passe">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Se souvenir de moi
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Se connecter</button>
                </form>
                <div class="card mb-3 justify-content-center">
                    <h3 class="card-header">Actualités</h3>
                    <div class="card-body">
                        <h5 class="card-title">Blacksad</h5>
                        <h6 class="card-subtitle text-muted">PC, PS4, One, Switch</h6>
                    </div>
                    <img style="height: 200px; width: 100%; display: block;" src="assets/img/BlackSad.jpg" alt="Card image">
                    <div class="card-body">
                        <p class="card-text">Regroupant l'univers de la bd et qui permet de raconter nos déboires humains à travers ces animaux.</p>
                    </div>
                    <div class = "card-body">
                        <a href = "#" class = "card-link">Lire notre test</a>
                        <a href = "#" class = "card-link">Le jeu vous intéresse</a>
                    </div>
                    <div class = "card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
            <div class = "row justify-content-center">
                <div class = "card mb-2">
                    <h3 class = "card-header">Actualités</h3>
                    <div class = "card-body">
                        <h5 class = "card-title">Disco Elysium</h5>
                        <h6 class = "card-subtitle text-muted">PC</h6>
                    </div>
                    <img style = "height: 260px; width: 100%; display: block;" src = "assets/img/DiscoElysium.png" alt = "Card image">
                    <div class = "card-body">
                        <p class = "card-text">Voilà le commencement : vous êtes amnésique, foutu raté et ce n'est pas qu'une question de fringues.</p>
                    </div>
                    <div class = "card-body">
                        <a href = "#" class = "card-link">Lire notre test</a>
                        <a href = "#" class = "card-link">Le jeu vous intéresse</a>
                    </div>
                    <div class = "card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>         
        </div>
    </div>
</div>
<script src = "assets/js/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>            
</body>
</html>