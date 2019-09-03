<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sticky Footer Navbar Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <style>
        main#page-dish {
            background-image: url(assests/brown-floor-hardwood.jpg);
            background-repeat: repeat-y;
            background-size: cover;
            height: 100%;
        }

        main#page-sidedish {
            background-image: url(assests/brown-close-up);
            background-repeat: repeat-y;
            background-size: cover;
            height: 100%;
            background-position: center;

        }

        .card-pill {
            height: 120px;
            border-top-left-radius: 60px;
            border-bottom-left-radius: 60px;
            border-top-right-radius: 60px;
            border-bottom-right-radius: 60px;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Taste Restaurant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Dishes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sidedish.php">Side Dishes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="processorder.php">Process Order</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>