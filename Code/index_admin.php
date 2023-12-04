<?php

// checking if user is logged in

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Časopis VŠPJ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <style>
        .img_clanek {
            height: 200px;
            width: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Umělá inteligence</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hardware</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Software</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Periférie</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile_editor.php">Přidat článek</a>
                        <a class="dropdown-item" href="profile_editor.php">Správa článek</a>
                        <a class="dropdown-item" href="profile_editor.php">Správa uživatelů</a>
                        <a class="dropdown-item" href="profile_editor.php">Správa komentářů</a>
                        <a class="dropdown-item" href="profile_editor.php"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Odhlásit</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ROW 1 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW 2 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW 3 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img class="rounded img_clanek" src="https://i0.wp.com/impact.hugoapp.com/wp-content/uploads/2021/08/qi-bin-w4hbafegiac-unsplash.jpg?fit=1600%2C1066&ssl=1">
                <div class="text-center">
                    <a class="nadpis_clanek">Lorem Ipsum</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>