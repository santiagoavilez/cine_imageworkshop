<?php

//header('Content-Type: text/html; charset=utf-8');
//header ("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

$PROYECTO = '2021/cine_imageworkshop';

// Variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";
$GLOBALS['ROOT'] = $ROOT;
$funciones =$ROOT . 'util/funciones.php';

include_once($funciones);
//var_dump($GLOBALS['ROOT']);
//var_dump($ROOT);
// Variable que define la página de autenticación del proyecto
$INICIO = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/vista/tp5/2/login.php";

// Variable que define la página principal del proyecto (menú principal)
$PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/index.php";



