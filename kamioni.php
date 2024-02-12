<!DOCTYPE html>

<html>
    <head>
        <title>0</title>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    <a class="navbar-brand first-logo" href="index.php"><img src="images/headerlogo-yellow.png" width="70" height="70" alt="Slika nije ucitana"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#main-nav" aria-controls="main-nav" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="redirect.php">početna<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <main style="background-image: url(../images/synthesisbackground3.jpg)" class="text-center">

            <h1 class="text-center p-4 mt-4 d-inline-block aaaaa products-h1" style="background-color: rgba(255,255,255,0.7)">Kamioni</h1>            
            <div class="container min-w pt-5 pb-5">
                <ul class="category-menu list-group">
                    <li class="list-group-item">
                        <h2 class="d-block">
                            Actros osovina
                            <span class="fas fa-plus toggle-submenu"></span>
                        </h2>
                        <div class="category-submenu row text-center">
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/actrososovina.jpg" alt="Slika nije ucitana"/>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </main>

       <?php
       include './partials/footer.php';
       ?>