

<?php
include './partials/header.php';
include './partials/registracije.php';
?>
<!--HEADER END-->
<style>
    .reminder{
        color: red;
        padding: 20px;
    }
    main{
        background: center center;
    }
    label{
        border: 2px solid blue;
        padding: 2px 15px;
        border-radius: 20px;
        margin: 3px 0px;
        background-color: yellow;
        color: blue;
    }
    input{
        border: 2px solid blue;
        padding: 2px 15px;
        border-radius: 20px;
        margin: 3px 0px;
        background-color: yellow;
        color: blue;
        max-width: 120px;
    }
    button{
        border: 2px solid blue;
        padding: 5px 15px;
        border-radius: 30px;
        margin: 30px 10px;
        background-color: yellow;
        color: blue;
        font-size: 2.5rem;
    }
    #sum{
        color: red;
        font-size: 4rem;
        margin-top: 10rem;
    }
    p{
        margin-top: 2rem;
        font-size: 2rem;
    }
</style>
<!--MAIN START-->

<main style="background-image: linear-gradient(to right, rgba(255,255,255,0.3),rgba(255,255,255,1)), url(images/loaders/komatsu1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form id="reset" class="mt-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="trt">Trtica</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" id="trt" name="trt" value="trtica1">
                        </div>

                        <div class="col-6">
                            <label for="separisani">Separisani šljunak</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="separisani" step="0.5" name="separisani" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="f1">Frakcija F1</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="f1" step="0.5" name="f1" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="f2">Frakcija F2</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="f2" step="0.5" name="f2" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="f3">Frakcija F3</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="f3" step="0.5" name="f3" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="f4">Frakcija F4</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="f4" step="0.5" name="f4" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="ps">Prirodni šljunak</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="ps" step="0.5" name="ps" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="dr">Drobljeni kamen</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="dr" step="0.5" name="dr" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="pr">Prljavi pesak</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="pr" step="0.5" name="pr" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="ib">Iberlauf</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="ib" step="0.5" name="ib" value="0" min="0" max="1000000000">
                        </div>

                        <div class="col-6">
                            <label for="pes">Pesak</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="pes" step="0.5" name="pes" value="0" min="0" max="1000000000">
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 text-left">
                <p id="result1"></p>
                <p id="result2"></p>
                <p id="result3"></p>
                <p id="result4"></p>
                <p id="result5"></p>
                <p id="result6"></p>
                <p id="result7"></p>
                <p id="result8"></p>
                <p id="result9"></p>
                <p id="result10"></p>
                <p id="result20"></p>
                <p class="text-center" id="sum"></p>



                <div class="col-6">
                    <label for="kus">Uplaćeno</label>
                </div>
                <div id="kusur" class="col-6">
                    <input type="number" id="kus" step="0.5" name="kus" value="0" min="0" max="1000000000">
                </div>
                <p id="result11"></p>
            </div>

            <div class="col-12 text-center">
                <button id="izracunaj" onclick="processInput()"><b>Izračunaj</b></button>
                <button id="restart" onclick="reload()"><b>Restart</b></button>
            </div>
        </div>
    </div>
    <script>
        function processInput() {
            // Get the input element
            let separisani = document.getElementById("separisani");
            let f1 = document.getElementById("f1");
            let f2 = document.getElementById("f2");
            let f3 = document.getElementById("f3");
            let f4 = document.getElementById("f4");
            let ps = document.getElementById("ps");
            let dr = document.getElementById("dr");
            let pr = document.getElementById("pr");
            let ib = document.getElementById("ib");
            let pes = document.getElementById("pes");
            let trtica = document.getElementById("trt");
            let kus = document.getElementById("kus");

            // Get the value from the input element
            let separisanisljunak = separisani.value;
            let frakcija1 = f1.value;
            let frakcija2 = f2.value;
            let frakcija3 = f3.value;
            let frakcija4 = f4.value;
            let prirodni = ps.value;
            let drobljeni = dr.value;
            let prljavi = pr.value;
            let iber = ib.value;
            let pesak = pes.value;
            let kusur = kus.value;

            // Convert the user input to a number
            let number1 = parseFloat(separisanisljunak);
            let number2 = parseFloat(frakcija1);
            let number3 = parseFloat(frakcija2);
            let number4 = parseFloat(frakcija3);
            let number5 = parseFloat(frakcija4);
            let number6 = parseFloat(prirodni);
            let number7 = parseFloat(drobljeni);
            let number8 = parseFloat(prljavi);
            let number9 = parseFloat(iber);
            let number10 = parseFloat(pesak);
            let numberKusur = parseFloat(kusur);



            //separisani
            if (!isNaN(number1)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena1 = 1850 * number1;
                } else {
                    var cena1 = 1850 * number1;
                }
                if (cena1 === 0) {
                    document.getElementById("result1").style.display = "none";
                } else {
                    document.getElementById("result1").style.display = "block";
                    document.getElementById("result1").textContent = "Cena separisanog šljunka je:" + " " + " " + cena1 + "   " + "din";
                }
            } else {
                document.getElementById("result1").textContent = "Niste uneli brojnu vrednost!";
            }

            //frakcija f1
            if (!isNaN(number2)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena2 = 1770 * number2;
                } else {
                    var cena2 = 1800 * number2;
                }
                if (cena2 === 0) {
                    document.getElementById("result2").style.display = "none";
                } else {
                    document.getElementById("result2").style.display = "block";
                    document.getElementById("result2").textContent = "Cena frakcije F1 je:" + " " + " " + cena2 + "   " + "din";
                }
            } else {
                document.getElementById("result2").textContent = "Niste uneli brojnu vrednost!";
            }

            //frakcija f2
            if (!isNaN(number3)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena3 = 1770 * number3;
                } else {
                    var cena3 = 1800 * number3;
                }
                if (cena3 === 0) {
                    document.getElementById("result3").style.display = "none";
                } else {
                    document.getElementById("result3").style.display = "block";
                    document.getElementById("result3").textContent = "Cena frakcije F2 je:" + " " + " " + cena3 + "   " + "din";
                }
            } else {
                document.getElementById("result3").textContent = "Niste uneli brojnu vrednost!";
            }

            //frakcija f3
            if (!isNaN(number4)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena4 = 1770 * number4;
                } else {
                    var cena4 = 1800 * number4;
                }
                if (cena4 === 0) {
                    document.getElementById("result4").style.display = "none";
                } else {
                    document.getElementById("result4").style.display = "block";
                    document.getElementById("result4").textContent = "Cena frakcije F3 je:" + " " + " " + cena4 + "   " + "din";
                }
            } else {
                document.getElementById("result4").textContent = "Niste uneli brojnu vrednost!";
            }

            //frakcija f4
            if (!isNaN(number5)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena5 = 1630 * number5;
                } else {
                    var cena5 = 1660 * number5;
                }
                if (cena5 === 0) {
                    document.getElementById("result5").style.display = "none";
                } else {
                    document.getElementById("result5").style.display = "block";
                    document.getElementById("result5").textContent = "Cena frakcije F4 je:" + " " + " " + cena5 + "   " + "din";
                }
            } else {
                document.getElementById("result5").textContent = "Niste uneli brojnu vrednost!";
            }

            //prirodni sljunak
            if (!isNaN(number6)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena6 = 1540 * number6;
                } else {
                    var cena6 = 1570 * number6;
                }
                if (cena6 === 0) {
                    document.getElementById("result6").style.display = "none";
                } else {
                    document.getElementById("result6").style.display = "block";
                    document.getElementById("result6").textContent = "Cena prirodnog šljunka je:" + " " + " " + cena6 + "   " + "din";
                }
            } else {
                document.getElementById("result6").textContent = "Niste uneli brojnu vrednost!";
            }

            //drobljeni kamen
            if (!isNaN(number7)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena7 = 1770 * number7;
                } else {
                    var cena7 = 1800 * number7;
                }
                if (cena7 === 0) {
                    document.getElementById("result7").style.display = "none";
                } else {
                    document.getElementById("result7").style.display = "block";
                    document.getElementById("result7").textContent = "Cena drobljenog kamena je:" + " " + " " + cena7 + "   " + "din";
                }
            } else {
                document.getElementById("result7").textContent = "Niste uneli brojnu vrednost!";
            }

            //prljavi pesak
            if (!isNaN(number8)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena8 = 480 * number8;
                } else {
                    var cena8 = 480 * number8;
                }
                if (cena8 === 0) {
                    document.getElementById("result8").style.display = "none";
                } else {
                    document.getElementById("result8").style.display = "block";
                    document.getElementById("result8").textContent = "Cena prljavog peska je:" + " " + " " + cena8 + "   " + "din";
                }
            } else {
                document.getElementById("result8").textContent = "Niste uneli brojnu vrednost!";
            }

            //iberlauf
            if (!isNaN(number9)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena9 = 1270 * number9;
                } else {
                    var cena9 = 1300 * number9;
                }
                if (cena9 === 0) {
                    document.getElementById("result9").style.display = "none";
                } else {
                    document.getElementById("result9").style.display = "block";
                    document.getElementById("result9").textContent = "Cena iberlaufa je:" + " " + " " + cena9 + "   " + " din";
                }
            } else {
                document.getElementById("result9").textContent = "Niste uneli brojnu vrednost!";
            }

            //pesak
            if (!isNaN(number10)) {
                // Check if the conversion was successful
                if (trtica.checked) {
                    var cena10 = 760 * number10;
                } else {
                    var cena10 = 760 * number10;
                }
                if (cena10 === 0) {
                    document.getElementById("result10").style.display = "none";
                } else {
                    document.getElementById("result10").style.display = "block";
                    document.getElementById("result10").textContent = "Cena peska je:" + " " + " " + cena10 + "   " + "din";
                }
            } else {
                document.getElementById("result10").textContent = "Niste uneli brojnu vrednost!";
            }





            var sum = cena1 + cena2 + cena3 + cena4 + cena5 + cena6 + cena7 + cena8 + cena9 + cena10;
            if (!isNaN(sum)) {
                if (sum === 0) {
                    document.getElementById("sum").textContent = "Niste ništa uneli!!!";
                } else {
                    document.getElementById("sum").textContent = "Ukupno:" + " " + " " + sum + "   " + "din";
                }
            }

            if (!isNaN(numberKusur)) {
                document.getElementById("result11").textContent.display = "block";
                document.getElementById("result11").textContent = "Kusur je:" + "  " + (numberKusur - sum) + "  " + "din";
            } else {
                document.getElementById("result11").textContent.display = "none";
            }

        }


        function reload() {
            document.getElementById("reset").reset();
            location.reload();
        }




        separisani.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        f1.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        f2.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        f3.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        f4.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        ps.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        dr.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        pr.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        ib.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        pes.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });
        kus.addEventListener("keypress", function (event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("izracunaj").click();
            }
        });

    </script>
</main>


<!--MAIN END-->
