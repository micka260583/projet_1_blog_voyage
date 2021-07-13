<?php
include 'layout/_header.php';
require 'weather/weather_japon.php'
?>
<h1 class="pays"> Le Japon </h1>

<section class="présentation">
    <div class="articleprésentation">
        <h2 class="soustitre"> Présentation </h2>
        <p> Le Japon, en forme longue l'État du Japon, en japonais Nihon ou Nippon (日本) et Nihon-koku
            ou Nippon-koku (日本国) respectivement, est un pays insulaire de l'Asie de l'Est, situé entre l'océan
            Pacifique et la mer du Japon, à l'est de la Chine, de la Corée du Sud et de la Russie, et au nord de
            Taïwan. Étymologiquement, les kanjis (caractères chinois) qui composent le nom du Japon signifient
            « pays (国, kuni) d'origine (本, hon) du Soleil (日, ni) » ; c'est ainsi que le Japon est désigné comme
            le « pays du soleil levant ».<br>Le Japon est un archipel de 6 852 îles de plus de 100 m2, dont les quatre plus grandes
            sont Hokkaidō, Honshū, Shikoku et Kyūshū, représentant à elles seules 95 % de la superficie terrestre du
            pays. L'archipel s'étend sur plus de trois mille kilomètres.
            La plupart des îles sont montagneuses, parfois volcaniques. Ainsi, le plus haut sommet du Japon,
            le mont Fuji (3 776 m), est un volcan inactif depuis 1707.
        </p>
    </div>

    <div>
        <img class="imageprésentation" src="https://zupimages.net/up/21/12/pc6w.jpg" alt="" />
    </div>
</section>

<section class="plat">
    <div>
        <img class="imageplat" src="https://zupimages.net/up/21/12/kokg.jpg" alt="" />
    </div>
    <div class="articleplat">
        <h2 class="soustitre"> Plat traditionnel </h2>
        <p> Le sushi (寿司, 鮨, 鮓) est un plat traditionnel japonais, composé d'un riz vinaigré appelé
            shari (舎利) combiné avec un autre ingrédient appelé neta (寿司ネタ) qui est habituellement
            du poisson cru ou des fruits de mer. Cette forme d'art culinaire est un des emblèmes de la
            cuisine japonaise dans le monde, alors que sa consommation n'est qu'occasionnelle au Japon.
            Les types de sushis les plus répandus sont les nigirizushi, constitués d'une boule de shari
            formée à la main recouverte d'une tranche de neta, les makizushi qui sont des rouleaux de nori renfermant du shari et d'autres ingrédients ou le chirashizushi composé de shari recouvert de divers accompagnements. Il ne faut pas confondre les sushis avec les sashimis, un plat japonais constitué de tranches de poisson cru.
        </p>
        <h2 class="soustitre"> Recette </h2>
        <table class="recette">
            <tr>
                <td>
                    <ul>
                        <li class="ingrédient">-Riz japonais à sushi : 300 g</li>
                        <li class="ingrédient">-Eau : 33 cl</li>
                        <li class="ingrédient">-Vinaigre de riz : 4 cl</li>
                        <li class="ingrédient">-Sucre en poudre : 10 g</li>
                        <li class="ingrédient">-Sel fin : 4 g</li>
                </td>
                <td>
                    <ul>
                        <li class="ingrédient">-Filet(s)de saumon : 400 g</li>
                        <li class="ingrédient">-Thon rouge : 400 g</li>
                        <li class="ingrédient">-Feuille(s) de nori : 3 pièce(s)</li>
                        <li class="ingrédient">-Wasabi : 3 g</li>
                        <li class="ingrédient">-Sauce Soja : 10 cl</li>
                    </ul>
                </td>
            </tr>
        </table>
        <p class="lienrecette">Pour réaliser la recette, c'est par ici: <br>
            <a href="https://www.atelierdeschefs.fr/fr/recette/4996-sushis-et-makis-de-thon-et-saumon.php">Bonne dégustation</a>
        </p>
    </div>
</section>

<section class="activité">
    <div class="articleactivité">
        <h2 class="soustitre">Activités</h2>
        <p> Vous pouvez faire une multitudes de choses au Japon !! Que se soit culturel,
            comme visiter des temples anciens, assiter à un tournois de sumo, porter un kimono traditionnel,
            ou aller geeké dans un game center, goûter la gastronomie local, comme les fameux sushi,
            le ramen, les okonamiyaki, ou la fameuse fondu japonaise shabushabu,
            mais vous pourriez aussi penser à vous détendre dans les onsens les fameuses sources d'eau chaude naturels,
            pique-niquer sous les cerisiers en fleurs dans des gyoen (parc), ou si vous l'osez,
            se balader dans la rue en cosplay.</p>
    </div>
    <div>
        <img class="imageactivité" src="https://zupimages.net/up/21/12/ezba.jpg" alt="" />
    </div>
</section>

<!--debut de la meteo-->
<div class="container">
    <h1>Météo du jour à <strong><?php echo $nameWeather; ?></strong></h1>

    <div class="a">
        <?php
        switch ($weather) {
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



<?php include 'layout/_footer.php'; ?>

