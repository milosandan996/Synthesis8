<?php
//mailing
$to = "milos.andan996@gmail.com";
$to2 = "gaga.ponjavic@gmail.com";
$subject = "USKORO ISTICE!!!";

//variable
//moje
$currentDate = date("d.m.Y");
$milosVozackaC1 = '16.03.2027';
$milosVozackaB = '16.03.2032';

//Porsche
$porsch1 = '17.08.2024';
$porsch11 = '20.08.2024';
$porsch111 = '23.08.2024';
$porsch1111 = '26.08.2024';
$porsch11111 = '29.08.2024';

//BMW
$bmw1 = '29.11.2024';
$bmw11 = '02.12.2024';
$bmw111 = '05.12.2024';
$bmw1111 = '08.12.2024';
$bmw11111 = '11.12.2024';

//Fabia
$fabia1 = '';
$fabia11 = '';
$fabia111 = '';
$fabia1111 = '';
$fabia11111 = '';

//Astra
$astra1 = '26.05.2024';
$astra11 = '29.05.2024';
$astra111 = '01.06.2024';
$astra1111 = '04.06.2024';
$astra11111 = '07.06.2024';

//Actros I
$actros1 = '14.06.2024';
$actros11 = '17.06.2024';
$actros111 = '20.06.2024';
$actros1111 = '23.06.2024';
$actros11111 = '26.06.2024';

//Actros II
$actros2 = '06.03.2024';
$actros22 = '09.03.2024';
$actros222 = '12.03.2024';
$actros2222 = '15.03.2024';
$actros22222 = '18.03.2024';

//Atego
$atego1 = '16.02.2024';
$atego11 = '19.02.2024';
$atego111 = '21.02.2024';
$atego1111 = '24.02.2024';
$atego11111 = '27.02.2024';

//Man
$man1 = '01.02.2024';
$man11 = '04.02.2024';
$man111 = '07.02.2024';
$man1111 = '10.02.2024';
$man11111 = '13.02.2024';

if ($currentDate == $milosVozackaC1 || $currentDate == $milosVozackaB) {
    // Slanje e-maila
    $message = "Za 21 dan ističe vozačka!!!";
    mail($to, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan ističe vozačka!!!
    </h2>
    <?php
} else if ($currentDate == $actros1) {
    // Slanje e-maila
    $message = "Za 21 dan Actrosu I ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Actrosu I ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros11) {
    // Slanje e-maila
    $message = "Za 18 dana Actrosu I ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Actrosu I ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros111) {
    // Slanje e-maila
    $message = "Za 15 dana Actrosu I ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Actrosu I ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros1111) {
    // Slanje e-maila
    $message = "Za 12 dana Actrosu I ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Actrosu I ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros11111) {
    // Slanje e-maila
    $message = "Za 9 dana Actrosu I ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Actrosu I ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros2) {
    // Slanje e-maila
    $message = "Za 21 dan Actrosu II ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Actrosu II ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros22) {
    // Slanje e-maila
    $message = "Za 18 dana Actrosu II ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Actrosu II ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros222) {
    // Slanje e-maila
    $message = "Za 15 dana Actrosu II ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Actrosu II ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros2222) {
    // Slanje e-maila
    $message = "Za 12 dana Actrosu II ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Actrosu II ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $actros22222) {
    // Slanje e-maila
    $message = "Za 9 dana Actrosu II ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Actrosu II ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $atego1) {
    // Slanje e-maila
    $message = "Za 21 dan Ategu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Ategu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $atego11) {
    // Slanje e-maila
    $message = "Za 18 dana Ategu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Ategu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $atego111) {
    // Slanje e-maila
    $message = "Za 15 dana Ategu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Ategu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $atego1111) {
    // Slanje e-maila
    $message = "Za 12 dana Ategu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Ategu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $atego11111) {
    // Slanje e-maila
    $message = "Za 9 dana Ategu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Ategu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $man1) {
    // Slanje e-maila
    $message = "Za 21 dan Manu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Manu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $man11) {
    // Slanje e-maila
    $message = "Za 18 dana Manu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Manu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $man111) {
    // Slanje e-maila
    $message = "Za 15 dana Manu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Manu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $man1111) {
    // Slanje e-maila
    $message = "Za 12 dana Manu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Manu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $man11111) {
    // Slanje e-maila
    $message = "Za 9 dana Manu ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Manu ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $astra1) {
    // Slanje e-maila
    $message = "Za 21 dan Astri ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Astri ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $astra11) {
    // Slanje e-maila
    $message = "Za 18 dana Astri ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Astri ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $astra111) {
    // Slanje e-maila
    $message = "Za 15 dana Astri ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Astri ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $astra1111) {
    // Slanje e-maila
    $message = "Za 12 dana Astri ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Astri ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $astra11111) {
    // Slanje e-maila
    $message = "Za 9 dana Astri ističe registracija!!!";
    mail($to, $subject, $message);
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Astri ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $fabia1) {
    // Slanje e-maila
    $message = "Za 21 dan Fabiji ističe registracija!!!";
    mail($to, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Fabiji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $fabia11) {
    // Slanje e-maila
    $message = "Za 18 dana Fabiji ističe registracija!!!";
    mail($to, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Fabiji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $fabia111) {
    // Slanje e-maila
    $message = "Za 15 dana Fabiji ističe registracija!!!";
    mail($to, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Fabiji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $fabia1111) {
    // Slanje e-maila
    $message = "Za 12 dana Fabiji ističe registracija!!!";
    mail($to, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Fabiji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $fabia11111) {
    // Slanje e-maila
    $message = "Za 9 dana Fabiji ističe registracija!!!";
    mail($to, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Fabiji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $bmw1) {
    // Slanje e-maila
    $message = "Za 21 dan Andriji ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Andriji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $bmw11) {
    // Slanje e-maila
    $message = "Za 18 dana Andriji ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Andriji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $bmw111) {
    // Slanje e-maila
    $message = "Za 15 dana Andriji ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Andriji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $bmw1111) {
    // Slanje e-maila
    $message = "Za 12 dana Andriji ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Andriji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $bmw11111) {
    // Slanje e-maila
    $message = "Za 9 dana Andriji ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Andriji ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $porsch1) {
    // Slanje e-maila
    $message = "Za 21 dan Gagi ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 21 dan Gagi ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $porsch11) {
    // Slanje e-maila
    $message = "Za 18 dana Gagi ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 18 dana Gagi ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $porsch111) {
    // Slanje e-maila
    $message = "Za 15 dana Gagi ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 15 dana Gagi ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $porsch1111) {
    // Slanje e-maila
    $message = "Za 12 dana Gagi ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 12 dana Gagi ističe registracija!!!
    </h2>
    <?php
} else if ($currentDate == $porsch11111) {
    // Slanje e-maila
    $message = "Za 9 dana Gagi ističe registracija!!!";
    mail($to2, $subject, $message);
    ?>
    <h2 class="reminder">
        Za 9 dana Gagi ističe registracija!!!
    </h2>
    <?php
}
?>