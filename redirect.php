<!DOCTYPE html>

<html>
    <head>
        <title>0</title>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan">

        <!--CSS FILES-->

        <!--Bootstrap-->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <!--Theme css-->
        <link href="../css/proba.css" rel="stylesheet" type="text/css"/>
        <link href="../css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <header>
            <div id="top" class="container">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand first-logo" href="index.php"><img src="../images/headerlogo-yellow.jpg" width="70" height="70" alt="Slika nije ucitana"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#main-nav" aria-controls="main-nav" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="index.php">početna<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <main class="vh-100" style="background-image: url(../images/synthesisbackground3.jpg)">

            <div class="container pt-5">
                <ul class="category-menu list-group">
                    <li class="list-group-item">
                        <h2 class="d-block" >
                            MEHANIZACIJA
                            <span class="fas fa-plus toggle-submenu"></span>
                        </h2>


                        <ul class="category-submenu">
                            <li>
                                <a class="d-block" href="komatsuwa380.php">Komatsu WA380</a>
                            </li>
                            <li>
                                <a class="d-block" href="catg2.php">Cat 950G2</a>
                            </li>
                            <li>
                                <a class="d-block" href="cat950h.php">Cat 950H</a>
                            </li>
                            <li>
                                <a class="d-block" href="cat950h-2.php">Cat 950H-2</a>
                            </li>
                            <li>
                                <a class="d-block" href="cat950g1.php">Cat 950G1</a>
                            </li>
                            <li>
                                <a class="d-block" href="actros1.php">Actros 1</a>
                            </li>
                            <li>
                                <a class="d-block" href="actros2.php">Actros 2</a>
                            </li>
                            <li>
                                <a class="d-block" href="atego.php">Atego</a>
                            </li>
                            <li>
                                <a class="d-block" href="man.php">Man</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <h2 class="d-block">
                            SEPARACIJA
                            <span class="fas fa-plus toggle-submenu"></span>
                        </h2>
                        <ul class="category-submenu">
                            <li>
                                <a class="d-block" href="separacija1.php">Lokacija 1</a>
                            </li>
                            <li>
                                <a class="d-block" href="separacija2.php">Lokacija 2</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <h2 class="d-block">
                            OPREMA
                            <span class="fas fa-plus toggle-submenu"></span>
                        </h2>
                        <ul class="category-submenu">
                            <li>
                                <a class="d-block" href="kamioni.php">KAMIONI</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item">
                        <h2 class="d-block">
                            MILOŠ
                            <span class="fas fa-plus toggle-submenu"></span>
                        </h2>
                        <ul class="category-submenu">
                            <li>
                                <a class="d-block" href="transportprices.php">CENA PREVOZA</a>
                            </li>
                            <li>
                                <a class="d-block" href="calculator.php">KALKULATOR</a>
                            </li>
                            <li>
                                <a class="d-block" href="lab.php">LABORATORIJA</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>






        </main>

<?php
include './partials/footer.php';
?>