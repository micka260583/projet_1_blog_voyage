<?php
     include 'layout/_header.php';
     require 'weather/weather_jordanie.php';
?>

<h1 class="pays"> La Jordanie </h1>

<section class="présentation">
    <div class="articleprésentation">
        <h2 class="soustitre"> Présentation </h2> 
            <p> La Jordanie (en arabe : الأردن), ou officiellement le Royaume hachémite de Jordanie, est un pays du Moyen-Orient. <br>
            Son territoire est entouré par la Cisjordanie, Israël, l'Arabie saoudite, l'Irak et la Syrie. <br>Le pays compte 10 millions d'habitants.
            Sa capitale et plus grande ville est Amman (3 millions d'habitants).<br>
            La Jordanie se compose de monuments anciens, de réserves naturelles et de stations balnéaires.<br><br>
            Le pays abrite notamment le célèbre site archéologique de Pétra, la capitale nabatéenne fondée autour de 300 ans av.J-C.<br>
            Installée dans une vallée étroite et pourvue de tombeaux, de temples et de monuments sculptés dans les falaises en grès rose qui l'entourent, Pétra mérite bien son surnom de « cité rose ».<br>
            Des civilisations occidentales ont également régné en Jordanie comme les Macédoniens, les Romains, les Byzantins et les ottomans. Dès le VIIe siècle, la région a été culturellement musulmane et arabe, à l'exception d'une brève période de domination par les croisés et, au XXe siècle, sous le mandat britannique.
            </p>
        </div>
    
    <div> 
        <img class="imageprésentation" src="https://zupimages.net/up/21/12/ofth.jpeg" alt=""/>
    </div>
</section>

<section class="plat">
    <div> 
        <img class="imageplat" src="https://zupimages.net/up/21/12/w09p.jpeg" alt=""/>
    </div>
    <div class="articleplat">
        <h2 class="soustitre"> Plat traditionnel </h2>
            <p> Le mansaf est un plat typiquement jordanien préparé avec des morceaux d’agneau mijotés en ragoût, <br>
            arrosés d’une sauce au yaourt de chèvre fermenté (jamid) et accompagnés de riz agrémenté de pignons de pins. 
            </p>
        <h2 class="soustitre"> Recette </h2>
        <table class="recette">
            <tr>
                <td>
                    <ul>
                        <li class="ingrédient">-1kg d'agneau</li>
                        <li class="ingrédient">-250g de riz</li>
                        <li class="ingrédient">-4 gousses d'ail</li>
                        <li class="ingrédient">-700g de yaourt</li>
                        <li class="ingrédient">-une poignée de pignons de pignons</li>
                </td>
                <td>
                    <ul>
                        <li class="ingrédient">-2cs d'huile d'olives</li>
                        <li class="ingrédient">-1cs de poudre de cardamone</li>
                        <li class="ingrédient">-2cs de persil frais</li>
                        <li class="ingrédient">-sel, poivre</li>
                    </ul>
                </td>
            </tr>
        </table>
                <p> Pour réaliser la recette, c'est par ici: <br>
                    <a href="https://www.ptitchef.com/recettes/plat/agneau-au-riz-a-la-jordanienne-mansaf-fid-1187321".>Bonne dégustation!!!</a>
                </p>

    </div>
</section>

<section class="activité">
    <div class="articleactivité">
        <h2 class="soustitre">Activités</h2>
            <p>Après une journée à vous émerveiller devant la cité troglodyte de Pétra, vous pourrez profiter d’une soirée au coin du feu dans un camp de bédouins. Vous pourrez alors papoter, savourer des mets nouveaux et admirer les étoiles.<br>
            Au lendemain, vous pourrez partir faire un safari en 4x4 à travers les dunes et rochers afin de profiter un somptueux panorama.
            Durant ce safari, vous pourrez faire une pause afin de déguster un délicieux thé traditionnel, préparé par un bédouin.</p>
    </div>
    <div>
        <img class="imageactivité" src="https://zupimages.net/up/21/12/1qke.jpeg" alt=""/>
    </div>
</section>

<!--debut de la meteo-->

<div class="container">
                <h1>Météo du jour à <strong><?php echo $nameWeather; ?></strong></h1>

                <div class="a">
                    <?php
                        switch ($weather) {
                            case 'Clear':
                                ?>
                                   <div class="icon sunny">
                                        <div class="sun">
                                            <div class="rays"></div>
                                        </div>
                                    </div>           
                                <?php
                                break;

                                case 'Drizzle':
                                ?>
                                <div class="icon sun-shower">
                                    <div class="cloud"></div>
                                        <div class="sun">
                                            <div class="rays"></div>
                                    </div>
                                        <div class="rain"></div>
                                </div>
                                <?php
                                break;

                                case 'Rain':
                                ?>
                                <div class="icon rainy">
                                    <div class="cloud"></div>
                                    <div class="rain"></div>
                                </div>
                                <?php
                                break;

                                case 'Clouds':
                                ?>
                                <div class="icon cloudy">
                                    <div class="cloud"></div>
                                    <div class="cloud"></div>
                                </div>
                                <?php
                                break;

                                case 'Thunderstorm':
                                ?>
                                <div class="icon thunder-storm">
                                    <div class="cloud"></div>
                                        <div class="lightning">
                                            <div class="bolt"></div>
                                            <div class="bolt"></div>
                                    </div>
                                </div>
                                <?php
                                break;

                                case 'Snow':
                                ?>
                                <div class="icon flurries">
                                    <div class="cloud"></div>
                                        <div class="snow">
                                            <div class="flake"></div>
                                            <div class="flake"></div>
                                    </div>
                                </div>
    
                                <?php
                                break;
                        }
                        ?>

                        <div class="meteo_desc">
                            <h2>
                                <?php echo $temp; ?> °C / Ressenti <?php echo $feel_like; ?> °C <br />
                                <?php echo $speed; ?> Km/h - <?php echo $deg; ?> ° <br /> 
                                <?php echo $descWeather; ?>
                        </h2>
                    </div>
                </div>
            </div>

<?php include 'layout/_footer.php'; ?>