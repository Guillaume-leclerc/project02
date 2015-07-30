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
                <li><a href=" <?php echo \controllers\superController\superController::URL . 'index' ?>">Accueil</a></li>
                <li class="sousMenuPrincipal">
                    <a href="">Boutique</a>
                    <!--<ul class="niveauInfSousMenu">
                        <li>toto</li>
                    </ul>-->
                </li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="<?php echo \controllers\superController\superController::URL . 'membre/connexion' ?>">Connexion</a></li>
            </ul>
        </div>
    </nav>


    <?php

        echo $_SESSION['msg'];
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