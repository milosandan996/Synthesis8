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
                                <a class="nav-link text-uppercase" href="redirect.php">POČETNA<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <main  style="background-image: url(../images/synthesisbackground3.jpg); min-height: 500px" class="text-center pb-5" >

            <h1 style="background-color: rgba(255,255,255,0.7); margin-top: 50px;" class="profaktura-h1 text-center">CENA PREVOZA</h1>
            <div class="container">
                <table class="table table-bordered search-users mb-0 table-responsive" style="background-color: rgba(255,255,255,0.7)">
                    <thead>

                        <tr>
                            <td>SEARCH:</td>
                            <td><input class="form-control" type="text" name="name" data-target=".name" value=""></td>
                            <td><input class="form-control" type="text" name="material" data-target=".material" value=""></td>
                            <td><input class="form-control" type="text" name="truck" data-target=".truck" value=""></td>
                            <td><input class="form-control" type="text" name="price" data-target=".price" value=""></td>
                        </tr>

                        <tr>
                            <th>br.</th>
                            <th>FIRMA(LOKACIJA)</th>
                            <th>MATERIJAL</th>
                            <th>PREVOZ</th>
                            <th>CENA</th>
                            <th>TELEFON</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td >1</td>
                            <td class="name">CMC GROUP</td>
                            <td class="material">20 P</td>
                            <td class="truck">MAN</td>
                            <td class="price">9.000</td>
                        </tr>
                        <tr>
                            <td >2</td>
                            <td class="name">KOPRA(KLINIČKI)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                        </tr>
                        <tr>
                            <td >3</td>
                            <td class="name">KOPRA(BATAJNICA)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">15.300</td>
                        </tr>
                        <tr>
                            <td >4</td>
                            <td class="name">VANAS(STOVARIŠTE)</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">8.800</td>
                        </tr>
                        <tr>
                            <td >5</td>
                            <td class="name">VANAS(STOVARIŠTE)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">8.000</td>
                        </tr>
                        <tr>
                            <td >6</td>
                            <td class="name">DEMETRA(BW)</td>
                            <td class="material">5 F4</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">3.750</td>
                        </tr>
                        <tr>
                            <td >7</td>
                            <td class="name">DEMETRA(BW)</td>
                            <td class="material">18 F4</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                        </tr>
                        <tr>
                            <td >8</td>
                            <td class="name">KIZZA D.O.O.(KRNJAČA) </td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">3.500</td>
                        </tr>
                        <tr>
                            <td >9</td>
                            <td class="name">DEMETRA(LOLA)</td>
                            <td class="material">10 F4</td>
                            <td class="truck">LOLA</td>
                            <td class="price">7.500</td>
                        </tr>
                        <tr>
                            <td >10</td>
                            <td class="name">UNIPOINT D.O.O. (ATANASIJA PULJE)</td>
                            <td class="material">18 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.000</td>
                            <td><a href="tel:0600391139">0600391139</a></td>
                        </tr>
                        <tr>
                            <td >11</td>
                            <td class="name">QUADRA LINE NOVI SAD</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">7.200</td>
                        </tr>
                        <tr>
                            <td >12</td>
                            <td class="name">GP ZLATIBOR GRADNJA (PEKE DAPČEVIĆA)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0638102568">0638102568</a></td>
                        </tr>
                        <tr>
                            <td >13</td>
                            <td class="name">DEMI INTERNACIONAL</td>
                            <td class="material">18 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">7.200</td>
                            <td><a href="tel:0644855508">0644855508</a></td>
                        </tr>
                        <tr>
                            <td >14</td>
                            <td class="name">MC CORONA</td>
                            <td class="material">26 P</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">14.300</td>
                        </tr>
                        <tr>
                            <td >15</td>
                            <td class="name">RD INŽENJERING</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">6.400</td>
                        </tr>
                        <tr>
                            <td >16</td>
                            <td class="name">DAXI LINE</td>
                            <td class="material">12F1,4F2,4F3</td>
                            <td class="truck">MAN</td>
                            <td class="price">14.000</td>
                            <td><a href="tel:0642041114">0642041114</a></td>
                        </tr>
                        <tr>
                            <td >17</td>
                            <td class="name">ELKOP PROJEKT(BOLEČ)</td>
                            <td class="material">20 P</td>
                            <td class="truck">MAN</td>
                            <td class="price">12.000</td>
                            <td><a href="tel:0648343388">0648343388</a></td>
                        </tr>
                        <tr>
                            <td >18</td>
                            <td class="name">BEOGRAMAT</td>
                            <td class="material">15 F4</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">6.000</td>
                        </tr>
                        <tr>
                            <td >19</td>
                            <td class="name">FORTIS TIM</td>
                            <td class="material">2 P</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:0645505125">0645505125</a></td>
                        </tr>
                        <tr>
                            <td >20</td>
                            <td class="name">BEOGRAMAT(VIŠNJIČKA)</td>
                            <td class="material">15 F4</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:063294136">063294136</a></td>
                        </tr>
                        <tr>
                            <td >21</td>
                            <td class="name">KONSTRUKTIVA D.O.O. (KARTONKA AVALA)</td>
                            <td class="material">20 Š</td>
                            <td class="truck">MAN</td>
                            <td class="price">6.400</td>
                            <td><a href="tel:0606864777">0606864777</a></td>
                        </tr>
                        <tr>
                            <td >22</td>
                            <td class="name">VANAS (LJUBE DAVIDOVICA)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.000</td>
                        </tr>
                        <tr>
                            <td >23</td>
                            <td class="name">PORTA NOVA INŽENJERING</td>
                            <td class="material">20 P</td>
                            <td class="truck">MAN</td>
                            <td class="price">8.000</td>
                            <td><a href="tel:063402203">063402203</a></td>
                        </tr>
                        <tr>
                            <td >24</td>
                            <td class="name">TRUDBENIK (PREKO PUTA)</td>
                            <td class="material">5</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:063429211">063429211</a></td>
                        </tr>
                        <tr>
                            <td >25</td>
                            <td class="name">TRUDBENIK (PREKO PUTA)</td>
                            <td class="material">18</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">7.000</td>
                            <td><a href="tel:063429211">063429211</a></td>
                        </tr>
                        <tr>
                            <td >26</td>
                            <td class="name">FINIS LINE (NOVI DORĆOL)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.000</td>
                            <td><a href="tel:0642583404">0642583404</a></td>
                        </tr>
                        <tr>
                            <td >27</td>
                            <td class="name">PPM SISTEM (GOSPODARA VUČIĆA)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.000</td>
                            <td><a href="tel:0646414265">0646414265</a></td>
                        </tr>
                        <tr>
                            <td >28</td>
                            <td class="name">PPM SISTEM (SUBOTIČKA 17)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.000</td>
                            <td><a href="tel:0646414265">0646414265</a></td>
                        </tr>
                        <tr>
                            <td >29</td>
                            <td class="name">AL INVEST (VUKICE MITROVIC 74)</td>
                            <td class="material">5 DROBLJENI IBER</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.000</td>
                            <td><a href="tel:0642218655">0642218655</a></td>
                        </tr>
                        <tr>
                            <td >30</td>
                            <td class="name">KARA ORMAN (LUKA BEOGRAD)</td>
                            <td class="material">5 IBER</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:063573624">063573624</a></td>
                        </tr>
                        <tr>
                            <td >31</td>
                            <td class="name">KOPAONIK AD (ŠUMADIJSKE DIVIZIJE)</td>
                            <td class="material">20 IBER</td>
                            <td class="truck">MAN</td>
                            <td class="price">12.000</td>
                            <td><a href="tel:0692228413">0692228413</a></td>
                        </tr>
                        <tr>
                            <td >32</td>
                            <td class="name">FK ČUKARIČKI</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">12.000</td>
                            <td><a href="tel:0618158382">0618158382</a></td>
                        </tr>
                        <tr>
                            <td >33</td>
                            <td class="name">ZOMARK PRO</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0641207590">0641207590</a></td>
                        </tr>
                        <tr>
                            <td >34</td>
                            <td class="name">AUTLET MBG D.O.O.</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">20.000</td>
                            <td><a href="tel:0692266529">0692266529</a></td>
                        </tr>
                        <tr>
                            <td >35</td>
                            <td class="name">BEOROOFING (MIHAJLA PUPINA 85B)</td>
                            <td class="material">4.5 F3</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:0607060764">0607060764</a></td>
                        </tr>
                        <tr>
                            <td >36</td>
                            <td class="name">PIM (EURO TREND KOMERC) (SKENDER BEGOVA 41)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:0648549714">0648549714</a></td>
                        </tr>
                        <tr>
                            <td >37</td>
                            <td class="name">BG HIDRO (KNEZA VIŠESLAVA CERAK)</td>
                            <td class="material">20 P</td>
                            <td class="truck">MAN</td>
                            <td class="price">14.000</td>
                            <td><a href="tel:0658062724">0658062724</a></td>
                        </tr>
                        <tr>
                            <td >38</td>
                            <td class="name">BG HIDRO (ŠIMANOVCI)</td>
                            <td class="material">5 IBER</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">10.000</td>
                            <td><a href="tel:0658062724">0658062724</a></td>
                        </tr>
                        <tr>
                            <td >39</td>
                            <td class="name">BG HIDRO (ŠIMANOVCI)</td>
                            <td class="material">15 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">15.000</td>
                            <td><a href="tel:0658062724">0658062724</a></td>
                        </tr>
                        <tr>
                            <td >40</td>
                            <td class="name">BG HIDRO (ŠIMANOVCI)</td>
                            <td class="material">18 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">16.000</td>
                            <td><a href="tel:0658062724">0658062724</a></td>
                        </tr>
                        <tr>
                            <td >41</td>
                            <td class="name">DG INVEST (MIRIJEVSKI BULEVAR 50A)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">3.500</td>
                        </tr>
                        <tr>
                            <td >42</td>
                            <td class="name">ZEMUN INVEST</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">10.000</td>
                            <td><a href="tel:0655604599">0655604599</a></td>
                        </tr>
                        <tr>
                            <td >43</td>
                            <td class="name">ZEMUN INVEST</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">12.000</td>
                            <td><a href="tel:0655604599">0655604599</a></td>
                        </tr>
                        <tr>
                            <td >44</td>
                            <td class="name">M ENTERIJER</td>
                            <td class="material">25 F1(SA F2)</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">21.250</td>
                        </tr>
                        <tr>
                            <td >45</td>
                            <td class="name">SB GRADNJA</td>
                            <td class="material">15 Š</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">7.000</td>
                            <td><a href="tel:0641303844">0641303844</a></td>
                        </tr>
                        <tr>
                            <td >46</td>
                            <td class="name">AD DIMNIČAR</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">3.500</td>
                            <td><a href="tel:063375910">063375910</a></td>
                        </tr>
                        <tr>
                            <td >47</td>
                            <td class="name">METEOR</td>
                            <td class="material">5 Š</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:063217996">063217996</a></td>
                        </tr>
                        <tr>
                            <td >48</td>
                            <td class="name">VRČIN KEŠ</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">16.000</td>
                            <td><a href="tel:0653021908">0653021908</a></td>
                        </tr>
                        <tr>
                            <td >49</td>
                            <td class="name">DG INVEST (DOBROPOLJSKA)</td>
                            <td class="material">3 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">3.500</td>
                            <td><a href="tel:0653306609">0653306609</a></td>
                        </tr>
                        <tr>
                            <td >50</td>
                            <td class="name">KOPRA (NOVI BEOGRAD)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:063294320">063294320</a></td>
                        </tr>
                        <tr>
                            <td >51</td>
                            <td class="name">KOPRA (BW)</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">11.000</td>
                        </tr>
                        <tr>
                            <td >52</td>
                            <td class="name">GEAĐEVINSKA ŠKOLA BEOGRAD (HAJDUK STANKOVA 2)</td>
                            <td class="material">3 P</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.100</td>
                            <td><a href="tel:0643471528">0643471528</a></td>
                        </tr>
                        <tr>
                            <td >53</td>
                            <td class="name">RANKIĆ PRO 2018 (DELTA CITY)</td>
                            <td class="material">18 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0648050880">0648050880</a></td>
                        </tr>
                        <tr>
                            <td >54</td>
                            <td class="name">BEOROOFING</td>
                            <td class="material">20 F3</td>
                            <td class="truck">MAN</td>
                            <td class="price">10.000</td>
                            <td><a href="tel:0607060764">0607060764</a></td>
                        </tr>
                        <tr>
                            <td >55</td>
                            <td class="name">MULTI FLORA</td>
                            <td class="material">4 P</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.800</td>
                            <td><a href="tel:0604484088">0604484088</a></td>
                        </tr>
                        <tr>
                            <td >56</td>
                            <td class="name">CMC GRAMAX (PRIMORSKA)</td>
                            <td class="material">18 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">7.200</td>
                            <td><a href="tel:063413040">063413040</a></td>
                        </tr>
                        <tr>
                            <td >57</td>
                            <td class="name">M ENTERIJERC (BAKIĆEVA 4A)</td>
                            <td class="material">18 M</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0605677783">0605677783</a></td>
                        </tr>
                        <tr>
                            <td >58</td>
                            <td class="name">KOPAONIK AP (ŠUMADIJSKE DIVIZIJE 29)</td>
                            <td class="material">18 IBER</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">10.800</td>
                            <td><a href="tel:0692228413">0692228413</a></td>
                        </tr>
                        <tr>
                            <td >59</td>
                            <td class="name">SAV GRADNJA (GROČANSKA)</td>
                            <td class="material">5 F1(SA F2)</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">12.000</td>
                            <td><a href="tel:0637603450">0637603450</a></td>
                        </tr>
                        <tr>
                            <td >60</td>
                            <td class="name">SAV GRADNJA (GRČIĆA MILENKA)</td>
                            <td class="material">3 (F1 F2 POLA POLA)</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:0668020507">0668020507</a></td>
                        </tr>
                        <tr>
                            <td >61</td>
                            <td class="name">SAV GRADNJA (BRANIČEVSKA)</td>
                            <td class="material">2M + 2F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.500</td>
                            <td><a href="tel:0648239986">0648239986</a></td>
                        </tr>
                        <tr>
                            <td >62</td>
                            <td class="name">CMC GROUP</td>
                            <td class="material">18 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">8.100</td>
                        </tr>
                        <tr>
                            <td >63</td>
                            <td class="name">IZOL INVEST (DOBANOVCI)</td>
                            <td class="material">20 Š</td>
                            <td class="truck">MAN</td>
                            <td class="price">16.000</td>
                            <td><a href="tel:0628045737">0628045737</a></td>
                        </tr>
                        <tr>
                            <td >64</td>
                            <td class="name">V PLUS KONSTRUKCIJE (KOSTE JOVANOVICA 2)</td>
                            <td class="material">5 Š</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:0698801244">0698801244</a></td>
                        </tr>
                        <tr>
                            <td >65</td>
                            <td class="name">KIZZA D.O.O.</td>
                            <td class="material">18 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">5.000</td>
                            <td><a href="tel:0646482447">0646482447</a></td>
                        </tr>
                        <tr>
                            <td >66</td>
                            <td class="name">FINIS LINE</td>
                            <td class="material">20 F1</td>
                            <td class="truck">MAN</td>
                            <td class="price">5.500</td>
                            <td><a href="tel:0641510305">0641510305</a></td>
                        </tr>
                        <tr>
                            <td >67</td>
                            <td class="name">KOLOR GRADNJA (ŠIMANOVCI)</td>
                            <td class="material">25 M</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">16.000</td>
                            <td><a href="tel:0691118997">0691118997</a></td>
                        </tr>
                        <tr>
                            <td >68</td>
                            <td class="name">VANAS (OMEGA IMPEX)</td>
                            <td class="material">18 IBER</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">6.660</td>
                            <td><a href="tel:069676435">069676435</a></td>
                        </tr>
                        <tr>
                            <td >69</td>
                            <td class="name">GLOBAL STAR</td>
                            <td class="material">20 P</td>
                            <td class="truck">MAN</td>
                            <td class="price">5.000</td>
                        </tr>
                        <tr>
                            <td >70</td>
                            <td class="name">IZOL INVEST</td>
                            <td class="material">25 Š</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">22.500</td>
                            <td><a href="tel:0628045737">0628045737</a></td>
                        </tr>
                        <tr>
                            <td >71</td>
                            <td class="name">VAR VAR (VOJVODE SKOPLJANCA)</td>
                            <td class="material">4 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:063292422">063292422</a></td>
                        </tr>
                        <tr>
                            <td >72</td>
                            <td class="name">ČUPA (NARODNOG FRONTA 75)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0642913931">0642913931</a></td>
                        </tr>
                        <tr>
                            <td >73</td>
                            <td class="name">ČUPA (B. KOSA)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:0642913931">0642913931</a></td>
                        </tr>
                        <tr>
                            <td >74</td>
                            <td class="name">ČUPA (PREŠEVSKA)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:0642913931">0642913931</a></td>
                        </tr>
                        <tr>
                            <td >75</td>
                            <td class="name">ČUPA (VIŠNJICA)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">3.500</td>
                            <td><a href="tel:0642913931">0642913931</a></td>
                        </tr>
                        <tr>
                            <td >76</td>
                            <td class="name">V PLUS KONSTRUKCIJE (LJUBE ŠERCERA)</td>
                            <td class="material">2 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">10.000</td>
                            <td><a href="tel:0698801237">0698801237</a></td>
                        </tr>
                        <tr>
                            <td >77</td>
                            <td class="name">TEKA GRADNJA</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.000</td>
                        </tr>
                        <tr>
                            <td >78</td>
                            <td class="name">FONAS</td>
                            <td class="material">25 F1</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">13.750</td>
                        </tr>
                        <tr>
                            <td >79</td>
                            <td class="name">FONAS</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0638563515">0638563515</a></td>
                        </tr>
                        <tr>
                            <td >80</td>
                            <td class="name">FONAS</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0638563515">0638563515</a></td>
                        </tr>
                        <tr>
                            <td >81</td>
                            <td class="name">ČUPA (JAJINCI)</td>
                            <td class="material">10 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price"></td>
                            <td><a href="tel:0638714729">0638714729</a></td>
                        </tr>
                        <tr>
                            <td >82</td>
                            <td class="name">SB GRADNJA (ZGRINOVAČKA 107)</td>
                            <td class="material">4 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:0641303844">0641303844</a></td>
                        </tr>
                        <tr>
                            <td >83</td>
                            <td class="name">DC ENERGO COOP</td>
                            <td class="material">20 P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">10.000</td>
                            <td><a href="tel:0637363501">0637363501</a></td>
                        </tr>
                        <tr>
                            <td >84</td>
                            <td class="name">DG INVEST (NAUM)</td>
                            <td class="material">5 F2</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:0653306609">0653306609</a></td>
                        </tr>
                        <tr>
                            <td >85</td>
                            <td class="name">DG INVEST (PRESPANSKA 17)</td>
                            <td class="material">5 Š</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:0644551449">0644551449</a></td>
                        </tr>
                        <tr>
                            <td >86</td>
                            <td class="name">DG INVEST (PRESPANSKA 17)</td>
                            <td class="material">18 IBER</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">8.000</td>
                            <td><a href="tel:0644551449">0644551449</a></td>
                        </tr>
                        <tr>
                            <td >87</td>
                            <td class="name">DG INVEST (JUHORSKA 23)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:0654419049">0654419049</a></td>
                        </tr>
                        <tr>
                            <td >88</td>
                            <td class="name">DG INVEST (KAJMAKČALANSKA 37)</td>
                            <td class="material">3 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                        </tr>
                        <tr>
                            <td >89</td>
                            <td class="name">TEKA GRADNJA (DRAGIŠE LAPČEVIĆA 26)</td>
                            <td class="material">18 F1 (10% F2)</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                        </tr>
                        <tr>
                            <td >90</td>
                            <td class="name">BM GRADNJA LUX (DUBRAVAČKA 8)</td>
                            <td class="material">4 Š</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:0648985848">0648985848</a></td>
                        </tr>
                        <tr>
                            <td >91</td>
                            <td class="name">STOVARIŠTE UGLJA</td>
                            <td class="material">18 M</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">29.900</td>
                            <td><a href="tel:0638712973">0638712973</a></td>
                        </tr>
                        <tr>
                            <td >92</td>
                            <td class="name">TEKA GRADNJA (VOJVODE STEPE 159)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0694414273">0694414273</a></td>
                        </tr>
                        <tr>
                            <td >93</td>
                            <td class="name">DEMI INTERNACIONAL</td>
                            <td class="material">10 M</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:063234078">063234078</a></td>
                        </tr>
                        <tr>
                            <td >94</td>
                            <td class="name">GORAN ŠARANČIĆ (VAROVNIČKA)</td>
                            <td class="material">18 IBER</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">7.000</td>
                            <td><a href="tel:0658419045">0658419045</a></td>
                        </tr>
                        <tr>
                            <td >95</td>
                            <td class="name">NIKŠA KOMERC</td>
                            <td class="material">3 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:0600229137">0600229137</a></td>
                        </tr>
                        <tr>
                            <td >96</td>
                            <td class="name">UGRINOVAČKA 152</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">10.000</td>
                        </tr>
                        <tr>
                            <td >97</td>
                            <td class="name">VANAS (OMEGA IMPEKS)</td>
                            <td class="material">26 P</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">12.000</td>
                            <td><a href="tel:0645500800">0645500800</a></td>
                        </tr>
                        <tr>
                            <td >98</td>
                            <td class="name">ČUPA (PLAVI HORIZONTI)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.500</td>
                        </tr>
                        <tr>
                            <td >99</td>
                            <td class="name">BOŽUR KOP</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0603600051">0603600051</a></td>
                        </tr>
                        <tr>
                            <td >100</td>
                            <td class="name">AL INVEST (GRUŽANSKA 15)</td>
                            <td class="material">5 F1</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:0642218655">0642218655</a></td>
                        </tr>
                        <tr>
                            <td >101</td>
                            <td class="name">KOPRA (FILIP TOLSTOJEVA 5)</td>
                            <td class="material">18 F1</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">9.900</td>
                            <td><a href="tel:0642218655">0621525436</a></td>
                        </tr>
                        <tr>
                            <td >102</td>
                            <td class="name">BM GRADNJA LUX (GROČANSKA 13)</td>
                            <td class="material">5 P</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.000</td>
                            <td><a href="tel:0648280250">0648280250</a></td>
                        </tr>
                        <tr>
                            <td >103</td>
                            <td class="name">BM GRADNJA LUX (GROČANSKA 13)</td>
                            <td class="material">4 P</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.500</td>
                            <td><a href="tel:0648280250">0648280250</a></td>
                        </tr>
                        <tr>
                            <td >104</td>
                            <td class="name">BM GRADNJA LUX (GROČANSKA 13)</td>
                            <td class="material">3 Š</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:0648280250">0648280250</a></td>
                        </tr>
                        <tr>
                            <td >105</td>
                            <td class="name">FULL ELEKTRO</td>
                            <td class="material">25M (17+4+4)</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">11.250</td>
                            <td><a href="tel:0602666634">0602666634</a></td>
                        </tr>
                        <tr>
                            <td >106</td>
                            <td class="name">PPM SISTEM(Surčin)</td>
                            <td class="material">18F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">16.000</td>
                            <td><a href="tel:0646414265">0646414265</a></td>
                        </tr>
                        <tr>
                            <td >107</td>
                            <td class="name">PPM SISTEM(Surčin)</td>
                            <td class="material">25F1</td>
                            <td class="truck">ACTROS</td>
                            <td class="price">14.000</td>
                            <td><a href="tel:0646414265">0646414265</a></td>
                        </tr>
                        <tr>
                            <td >108</td>
                            <td class="name">ZIDAR NEGOTIN(BW)</td>
                            <td class="material">20F4</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">11.000</td>
                            <td><a href="tel:063668742">063668742</a></td>
                        </tr>
                        <tr>
                            <td >109</td>
                            <td class="name">PEJOVIĆ GRADNJA(METRO)</td>
                            <td class="material">10M</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:0644935437">0644935437</a></td>
                        </tr>
                        <tr>
                            <td >110</td>
                            <td class="name">MMV GRADNJA(BIP)</td>
                            <td class="material">20P</td>
                            <td class="truck">MAN</td>
                            <td class="price">4.000</td>
                            <td><a href="tel:0631170194">0631170194</a></td>
                        </tr>
                        <tr>
                            <td >111</td>
                            <td class="name">MMV GRADNJA(BIP)</td>
                            <td class="material">18P</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">3.600</td>
                            <td><a href="tel:0631170194">0631170194</a></td>
                        </tr>
                        <tr>
                            <td >112</td>
                            <td class="name">GALEX(Z.VENAC)</td>
                            <td class="material">5M</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">5.000</td>
                            <td><a href="tel:0637795711">0637795711</a></td>
                        </tr>
                        <tr>
                            <td >113</td>
                            <td class="name">GRAS GARDEN D.O.O.(DEDINJE)</td>
                            <td class="material">5P</td>
                            <td class="truck">ATEGO</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:063366535">063366535</a></td>
                        </tr>
                        <tr>
                            <td >114</td>
                            <td class="name">STANDARD INVEST GMP(KANAREVO BRDO)</td>
                            <td class="material">20M</td>
                            <td class="truck">MAN</td>
                            <td class="price">14.000</td>
                            <td><a href="tel:063606101">063606101</a></td>
                        </tr>
                        <tr>
                            <td >115</td>
                            <td class="name">PEJOVIĆ GRADNJA(PANČEVO)</td>
                            <td class="material">12F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">14.000</td>
                            <td><a href="tel:0644935437">0644935437</a></td>
                        </tr>
                        <tr>
                            <td >116</td>
                            <td class="name">PEJOVIĆ GRADNJA(METRO)</td>
                            <td class="material">18F1</td>
                            <td class="truck">ACTROS 2</td>
                            <td class="price">6.000</td>
                            <td><a href="tel:0644935437">0631111081</a></td>
                        </tr>
                        <tr>
                            <td >117</td>
                            <td class="name">GRAS GARDEN(BW)</td>
                            <td class="material">20P</td>
                            <td class="truck">MAN</td>
                            <td class="price">12.000</td>
                            <td><a></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>





        </main>

      <?php
      include './partials/footer.php';
      ?>