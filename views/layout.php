<pre>
    <?php
        //print_r($_SESSION);
    ?>
</pre>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Equipe Quad | Equipement pilote quad</title>
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">
    <link rel="stylesheet" href="http://www.equip-quad.gldev.fr/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
    <header>
        <div class="container">
            <a href="<?php echo \controllers\superController\superController::URL . 'index' ?>"><img src="http://www.equip-quad.gldev.fr/img/logo.png"></a>
        </div>
    </header>
    <nav class="zoneMenu">
        <div class="menu">
            <ul class="menuPrincipal">
                <li><a href=" <?php echo \controllers\superController\superController::URL . 'routeur.php?c=site&a=index' ?>">Accueil</a></li>
                <li class="sousMenuPrincipal">
                    <a href="">Boutique</a>
                    <!--<ul class="niveauInfSousMenu">
                        <li>toto</li>
                    </ul>-->
                </li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>




                <li>
                    <?php
                    if(isset($_SESSION['user']['email']) && !empty($_SESSION['user']['email'])){
                        echo "<li class='sousMenuCompte'>";
                        echo "    <table>";
                        echo "        <tr>";
                        echo "            <td class='sousMenuCompteTdLogo'><img src=\"". controllers\superController\superController::URL ."img/icon_profil.png\" alt='icon_profil'></td>";
                        echo "            <td><a href='#'>Mon compte</a></td>";
                        echo "            <td><img src='" . controllers\superController\superController::URL . "img/icon_down.png' alt='icon_down'></td>";
                        echo "        </tr>";
                        echo "    </table>";
                        echo "    <div class='clear'></div>";
                        echo "    <ul class='sousMenuCompteNivInf'>";
                        echo "        <li><a href='" . \controllers\superController\superController::URL . "routeur.php?c=membre&a=compte'>Coordonnées</a></li>";
                        echo "        <li><a href='" . \controllers\superController\superController::URL . "routeur.php?c=membre&a=deconnexion'>Déconnexion</a></li> ";
                        echo "    </ul>";
                        echo "</li>";
                        }else{
                            echo "<a href='" . \controllers\superController\superController::URL . "routeur.php?c=membre&a=connexion'>Connexion</a>";
                        }
                    ?>
                    </li>
            </ul>
        </div>
    </nav>


    <?php

        if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
            echo $_SESSION['msg'];
        }
        echo $content;

    ?>


    <section class="blocFull200">
        <div class="container">
            <div class="priorite">
                <div class="blocPrioriteleft">
                    <h3>Le plus grand choix</h3>
                    <p>d'accessoires moto cross et quad</p>
                </div>
                <div class="blocPrioriteMiddle">
                    <h3>Livraison gratuite</h3>
                </div>
                <div class="blocPrioriteMiddle">
                    <h3>Retour gratuit</h3>
                </div>
                <div class="blocPrioriteMiddle">
                    <h3>Payez en 3 fois</h3>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <footer>

    </footer>

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://www.equip-quad.gldev.fr/js/jquery-1.7.min.js">\x3C/script>')</script>

    <!-- FlexSlider -->
    <script defer src="http://www.equip-quad.gldev.fr/js/jquery.flexslider.js"></script>

    <script type="text/javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</body>
</html>