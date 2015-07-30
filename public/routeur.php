<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 22/07/15
 * Time: 10:38
 */

include('..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'route.php');

if(isset($_GET) && !empty($_GET)){

    $controller = '';
    $action = '';
    $arg1 = '';
    $arg2 = '';

    if(isset($_GET['c']) && !empty($_GET['c'])){
        $controller .= $_GET['c'];

        if(isset($_GET['a']) && !empty($_GET['a'])){
            $action .= $_GET['a'];

            if(isset($_GET['arg1']) && !empty($_GET['arg1'])){
                $arg1 .= $_GET['arg1'];

                if(isset($_GET['arg2']) && !empty($_GET['arg2'])){
                    $arg2 .= $_GET['arg2'];
                }
            }
        }
        // Si la valeur de $_GET['c'] existe bien dans le tableau des routes nous verifions que le fichier ainsi que la class existent aussi
        if(array_key_exists($controller, $route)){
            $fileController = $controller . 'Controller.php';
            $classController = $controller . 'Controller';
            $adresseController = '\\controllers\\' . $classController . '\\' . $classController;

            include('..' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $fileController);

            // Si la valeur de $_GET['a'] existe bien dans le tableau route[nomDuController], alors je verifie l'existance de la methode dans la class
            if(array_key_exists($action, $route[$controller])){
                $methode = $route[$controller][$action];

                if(method_exists($adresseController, $methode)){

                    $objet = new $adresseController;
                    $objet->$methode($arg1, $arg2);

                } else{
                    echo 'la methode est inexistante dans la class';
                }
            }

        }else{
            echo $controller;
            echo '<br />c\'est pas bon';
        }

    }
}