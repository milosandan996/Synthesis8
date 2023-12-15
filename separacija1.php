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
                    <a class="navbar-brand first-logo" href="index.php"><img src="../images/headerlogo-yellow.jpg" width="70" height="70" alt="Slika nije ucitana"/></a>
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

            <h1 class="text-center p-4 mt-4 d-inline-block aaaaa products-h1" style="background-color: rgba(255,255,255,0.7)">Lokacija 1</h1>            
            <div class="container min-w pt-5 pb-5">
                
                <table class="radovi mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Datum</th>
                            <th scope="col">Pozicija</th>
                            <th scope="col">Opis</th>
                            <th scope="col">Majstor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="1" data-label="Datum">23/07/2023</td>
                            <td data-label="Pozicija">Sito</td>
                            <td data-label="Opis">
                                Zamjena svih sita
                            </td>
                            <td data-label="Majstor">Miljus</td>
                        </tr>
                    </tbody>
                   
                    
                </table>
                
                
                
                <ul class="category-menu list-group">

                    <li class="list-group-item">
                        <h2 class="d-block">
                            PUMPA ZA VODU
                            <span class="fas fa-plus toggle-submenu"></span>
                        </h2>
                        <div class="category-submenu row text-center">
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/pumpa1.1.jpg" alt="Slika nije ucitana"/>
                            </div>
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/pumpa1.2.jpg" alt="Slika nije ucitana"/>
                            </div>
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/pumpa1.3.jpg" alt="Slika nije ucitana"/>
                            </div>
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/pumpa1.4.jpg" alt="Slika nije ucitana"/>
                            </div>
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/pumpa1.5.jpg" alt="Slika nije ucitana"/>
                            </div>
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/pumpa1.6.jpg" alt="Slika nije ucitana"/>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="category-menu list-group">

                    <li class="list-group-item">
                        <h2 class="d-block">
                            Dehidrator
                            <span class="fas fa-plus toggle-submenu"></span>
                        </h2>
                        <div class="category-submenu row text-center">
                            <div class="col-12 col-md-5">
                                <img src="../images/equipment/dehidrator1.jpg" alt="Slika nije ucitana"/>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </main>

       <?php
       include './partials/footer.php';
       ?>
