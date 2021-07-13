<?php 
    include 'layout/_header.php';
    require 'weather/weather_reunion.php'
?>

<h1 class="pays"> L'ile de la Réunion </h1>

<section class="présentation">
    <div class="articleprésentation">
        <h2 class="soustitre"> Présentation </h2> 
            <p> Située dans l’océan Indien, à 800 km à l’est de Madagascar, l’île de La Réunion, au climat tropical, constitue, avec les îles Maurice et Rodrigues, l’archipel des Mascareignes. Française depuis 1638, La Réunion devient département français en 1946. 
            D’une superficie totale de 2512 kilomètres carrés, l’île est bordée par 210 kilomètres de côtes. 
            Dans la partie Nord-Ouest, le Piton des Neiges 3 070,50 mètres domine les trois cirques de Cilaos, Salazie et Mafate qui l’enserrent. 
            Au sud-est, le Piton de la Fournaise 2 631 mètres est un volcan actif, de type hawaïen. Il s’agit d’un volcan particulièrement actif. 
            Le climat de La Réunion, de type tropical, est marqué par l’influence des vents alizés. La côte orientale de l’île, dite "côte au vent", très arrosée, où plusieurs rivières, 
            comme celles du Mât, des Marsouins, de l’Est, sont pérennes, contraste avec la côte occidentale, "sous le vent", aux terres arides. La saison des cyclones dure de décembre à avril. La population de La Réunion, avec 833 944 habitants (2012), avec une densité de 332 habitants/km², est la plus importante de tout l’Outre-Mer.
            Étant donné la présence de différentes ethnies au sein de la population réunionnaise, d'autres langues sont présentes sur l'île comme le hakka, le cantonais, le gujarati, l'ourdou, l'arabe, le tamoul, le malgache, le mahorais et le comorien. 
        
            </p>
        </div>
    
    <div> 
        <img class="imageprésentation" src="https://zupimages.net/up/21/12/7yxf.jpg" alt=""/>
    </div>
</section>

<section class="plat">
    <div> 
        <img class="imageplat" src="https://zupimages.net/up/21/12/kqmx.jpg" alt=""/>
    </div>
    <div class="articleplat">
        <h2 class="soustitre"> Plat traditionnel </h2>
            <p> Le rougail saucisse est un plat traditionnel réunionnais, à base de saucisses de porc ou de poulet  préparées à la créole, souvent fumées, mais parfois fraîches. Celles-ci sont ensuite coupées en morceaux,   auxquels on ajoute des tomates coupées en petits dés, des oignons émincés, et souvent des piments pour les  personnes qui en mangent.
             A la Réunion, le rougail saucisse est traditionnellement accompagné par un zembrocal (mélange de riz avec des haricots rouges ou des pommes de terre selon les recettes), ainsi que du piment (rougail tomate ou autre). Il peut cependant être servi avec du riz et des grains (lentilles de Cilaos, haricots). 
            </p>
        <h2 class="soustitre"> Recette </h2>

        <table class="recette">
            <tr>
                <td>
                    <ul>
                        <li class="ingrédient">-6 saucisses de Montbéliard ou saucisses à cuire</li>
	                    <li class="ingrédient">-4 ou 5 tomates</li>
	                    <li class="ingrédient">-4 gousses d'ail</li>
	                    <li class="ingrédient">-3 ou 4 oignons (selon la grosseur)</li>
	                    <li class="ingrédient">-Thym - laurier</li>
                </td>
                <td>
                    <ul>
	                    <li class="ingrédient">-1 cuillère à café de curcuma + 1 de gingembre</li>
	                    <li class="ingrédient">-1 piment oiseau ou du piment d'Espelette</li>
	                    <li class="ingrédient">-1 cuillère à café de concentré de tomates</li>
	                    <li class="ingrédient">-sel, poivre, huile d'olives</li>
                    </ul>
                </td>
            </tr>
        </table>
        <p class="lienrecette">Pour réaliser la recette, c'est par ici: <br>
                <a href="https://cuisine.journaldesfemmes.fr/recette/352712-rougail-saucisses">Bonne dégustation!</a>        
        </p>
    </div>
</section>

<section class="activité">
    <div class="articleactivité">
    <h2 class="soustitre"> Activités </h2>
        <p> Il vous suffit simplement d'un masque et d'une paire de palme pour plonger dans un autre monde. A la réunion, une bande récifale de 25 km de long borde de façon discontinue la cote ouest et sud de l'île. Ce récif corallien formé au fil du temps abrite aujourd'hui près de 150 espèces de coraux, 2000 espèces de mollusques et 900 espèces de poissons. Il constitue un véritable paradis pour les plongeurs. Quelques espèces communes : Chirurgien bagnard, poisson Demoiselle, poisson Perroquet, Idole des Maures, poisson cocher commun, Ange empereur, poisson Soldat, Papillon Raton Laveur, poisson coffre, Baliste Picasso, Murène, poisson Labre, Rascasse volante, poisson Pierre. Il vous suffit simplement d'un masque et d'une paire </p>
    </div>
    <div> 
        <img class="imageactivité" src="https://zupimages.net/up/21/12/pjdt.jpg" alt=""/>
    </div>
</section>

<!--debut de la meteo-->

<div class="container">
                <h1>Météo du jour à <strong><?php echo $nameWeather; ?></strong></h1>

                <div class="a">
                    <?php 
                        switch($weather)
                        {
                            case "Clear":
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

<!--FIN meteo -->

<?php include 'layout/_footer.php';?>