
<footer>
    <div class="container d-flex justify-content-between align-items-center">
        <a href="index.php">
            <img src="images/headerlogo-yellow.png" width="70" height="70" alt="Slika nije ucitana"/>  
        </a>
        <div>
            <p>Copyright © Synthesis D.O.O. – <?php echo date('Y') ?></p>
        </div>
    </div>
</footer>
<?php
$curentpageuri = $_SERVER['REQUEST_URI'];

if ($curentpageuri == '/redirect.php' || $curentpageuri == '/actros1.php' || 
        $curentpageuri == '/actros2.php' || $curentpageuri == '/atego.php'|| 
        $curentpageuri == '/cat950g1.php' || $curentpageuri == '/cat950h-2.php' ||
        $curentpageuri == '/cat950h.php' || $curentpageuri == '/kamioni.php' ||
        $curentpageuri == '/komatsuwa380.php' || $curentpageuri == '/man.php' ||
        $curentpageuri == '/separacija1.php' || $curentpageuri == '/separacija2.php' ||
        $curentpageuri == '/transportprices.php' ||
        $curentpageuri == '/catg2.php' || $curentpageuri == '/lab.php') {
    echo '<script src="../js/excavators.js" type="text/javascript"></script>';
}
?>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>



<!--font awesome icons-->
<script src="https://kit.fontawesome.com/af4151337a.js" crossorigin="anonymous"></script>
</body>
</html>
