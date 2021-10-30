<?php
function data_submitted()
{
    $_AAux = array();
    if (!empty($_POST))
        $_AAux = $_POST;
    else
            if (!empty($_GET)) {
        $_AAux = $_GET;
    }
    if (count($_AAux)) {
        foreach ($_AAux as $indice => $valor) {
            if ($valor == "")
                $_AAux[$indice] = 'null';
        }
    }
    return $_AAux;
}
function verEstructura($e)
{
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}

spl_autoload_register(function ($clase) {
    //var_dump($GLOBALS['ROOT']);
    //echo "Se cargo la clase:  ".$clase ;


    $directorys = array(
        $GLOBALS['ROOT'] . 'modelo/',
        $GLOBALS['ROOT'] . 'modelo/conector/',
        $GLOBALS['ROOT'] . 'control/',
        $GLOBALS['ROOT'] . 'control/tp4/general/',
        $GLOBALS['ROOT'] . 'control/tp5/general/',
        $GLOBALS['ROOT'] . 'control/tp3/general/src/',
        $GLOBALS['ROOT'] . 'control/tp3/general/',
        $GLOBALS['ROOT'] . 'control/tp3/general/src/Core',
        $GLOBALS['ROOT'] . 'control/tp3/general/src/Core/Exception',
        $GLOBALS['ROOT'] . 'control/tp3/general/src/Exception',
        $GLOBALS['ROOT'] . 'control/tp3/general/src/Exif',
        $GLOBALS['ROOT'] . 'util/krumo-0.4.4/',      

        
    );


    //print_r($directorys);
    //echo $directorys;
        foreach ($directorys as $directory) {
        if (file_exists($directory . $clase . '.php')) {
              echo "se incluyo".$directory. $clase . '.php';
            require_once($directory . $clase . '.php');
            return;
        }
    }
});
