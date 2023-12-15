<!DOCTYPE html>


<html>
    <head>
        <title>SYNTHESIS D.O.O.</title>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan">
        <meta name="description" content="Šljunkara Synthesis">
        <meta name="keywords" content="beograd,beograd sljunkara,synthesis beograd,
              synthesis,separacija,sljunkara,sljunkara synthesis,frakcije sljunka,
              sljunak,separisani sljunak,prirodni sljunak,pesak,dunavac">

        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Website title">
        <link rel="apple-touch-icon" href="iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="WebSite title">
        <link rel="icon" href="androidLogo.png">

        <!--CSS FILES-->

        <!--Bootstrap-->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <!--Theme css-->
        <link href="../css/proba.css" rel="stylesheet" type="text/css"/>
        <link href="../css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar  navbar-dark">
                    <a class="navbar-brand first-logo" href="index.php"><img src="../images/headerlogo-yellow.jpg" width="70" height="70" alt="Slika nije ucitana"/></a>
                    <div class="text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="index.php">početna</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <main style="background-image: url(../images/synthesisbackground4.jpg)" class="text-center position-relative profaktura-main">

            <h1 class="profaktura-h1">profaktura</h1>

            <h3 class="profaktura-h3">Pošaljite nam vaše podatke i mi ćemo vam u najkraćem mogućem roku proslediti profakturu</h3>


            <section class="profaktura container">

                <?php
                // Povezivanje na bazu podataka
                $servername = "localhost";
                $username = "sljunkarrs";
                $password = "synthesis2022";
                $database = "sljunkarrs_synthesis";

                $conn = new mysqli($servername, $username, $password, $database);

                // Provjera konekcije
                if ($conn->connect_error) {
                    die("Konekcija na bazu podataka nije uspjela: " . $conn->connect_error);
                }

                if (isset($_POST['ime'])) {
                    $ime = $_POST['ime'];
                    $email = $_POST['email'];
                    $poruka = $_POST['poruka'];
                    $telefon = $_POST['telefon'];
                    $pib = $_POST['pib'];

                    // Prihvaćanje podataka iz forme
                    // SQL upit za unos podataka u bazu
                    $sql = "INSERT INTO profaktura (ime, email, poruka, pib, telefon) VALUES ('$ime', '$email', '$poruka', '$pib', '$telefon')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p class='formMessage'>USPEŠNO STE POSLALI VAŠE PODATKE</p>";
                    } else {
                        echo "Greška pri unosu podataka u bazu: " . $conn->error;
                    }
                    $to = "sakkabg@gmail.com"; // Zamijenite s e-mail adresom primaoca
                    $subject = "Poruka sa web forme";
                    $message = "ImeFirme: $ime\nEmail: $email\nPoruka: $poruka\nPIB: $pib\nKontaktTelefon: $telefon";

                    // Slanje e-maila
                    mail($to, $subject, $message);

                    // Zatvaranje konekcije na bazu
                    $conn->close();
                } else {
                    
                }
                ?>


                <form method="post" action="">
                    <div class="form-group  profaktura-div row">
                        <div class="col-12 col-md-6 mb-4">
                            <label for="email">Vaša email adresa</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required="">
                            <p><span></span></p>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <label for="name">Naziv vaše firme</label>
                            <input type="text" class="form-control" id="name" name="ime" placeholder="Pun naziv firme" required="">
                            <p><span></span></p>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <label for="pib">PIB vaše firme</label>
                            <input type="text" class="form-control" name="pib" id="pib" placeholder="PIB" required="">
                            <p><span></span></p>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <label for="phone">Kontakt telefon</label>
                            <input type="text" class="form-control" name="telefon" id="phone" placeholder="06012345678" required="">
                            <p><span></span></p>
                        </div>
                        <div class="col-12 mb-4">
                            <label for="message">Unesite količinu i vrstu materijala</label>
                            <textarea class="form-control" name="poruka" id="message" required="" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Pošaljite</button>
                    </div>
                </form>
            </section>
        </main>

        <?php
        include './partials/footer.php';
        ?>