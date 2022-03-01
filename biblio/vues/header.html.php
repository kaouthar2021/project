<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblio</title>
    <!-- Bootstrap 4.6-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
            <a class="navbar-brand" href="/biblio">Biblio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if( !empty($_SESSION["abonne"]) ) : ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <?= $_SESSION["abonne"]["pseudo"] ?>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="deconnexion.php">
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                       </li>
                       <?php else:?>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">
                            <i class="fa fa-sign-in-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">
                            <i class="fa fa-user-plus"></i>
                        </a>
                    </li>

                    <?php endif ?>
                    
                    

                   


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Livres
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="livre_liste.php">Liste</a>
                            <a class="dropdown-item" href="livre_nouveau.php">Ajouter</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Abonnés
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="abonne_liste.php">Liste</a>
                            <a class="dropdown-item" href="abonne_nouveau.php">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Emprunts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="emprunt_liste.php">Liste</a>
                            <a class="dropdown-item" href="emprunt_nouveau.php">Ajouter</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <?php if (!empty($_SESSION["message"])) : ?>
            <div class="alert alert-danger"><?= $_SESSION["message"] ?></div>
            <?php unset($_SESSION["message"]) // l'indice "message" est détruit 
            ?>
        <?php endif ?>