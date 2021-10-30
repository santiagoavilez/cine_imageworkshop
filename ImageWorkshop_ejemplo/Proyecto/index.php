<?php

#Requiero todas las dependencias de la libreria
use PHPImageWorkshop\ImageWorkshop;

require_once('../src/ImageWorkshop.php');
require_once('../src/Core/ImageWorkshopLayer.php');
require_once('../src/Core/ImageWorkshopLib.php');
require_once('../src/Exception/ImageWorkshopBaseException.php');
require_once('../src/Exception/ImageWorkshopException.php');

# Ejemplo de donde nos basamos.
# https://phpimageworkshop.com/quickstart.html 

/**
 * Se puede obtener la altura y ancho de una imagen con estos metodos
 * @link https://phpimageworkshop.com/documentation.html#chapter-initialization-of-a-layer
 * 
 * 
 * echo $layerBase->getWidth(). ' x ';
 * echo $layerBase->getHeight();
 * 
 * 
 * Se puede aplica acciones como resize
 * $layerBase->resizePixel(400, null, true); Aquí elijo cambiar el tamaño de la capa para que tenga un ancho de 400px
 * y también auto-redimensionar la altura para conservar proporciones.
 * 
 * 
 * Hay mas acciones como rotar, cortar etc...
 * @link https://phpimageworkshop.com/documentation.html#chapter-actions-on-layers
 * 
 * 
 * Mas sobre posiciones https://phpimageworkshop.com/doc/22/corners-positions-schema-of-an-image.html
 * Mas sobre Superposiciones https://phpimageworkshop.com/documentation.html#chapter-layer-notion
*/


#Inicializamos una capa
$layerBase = new PHPImageWorkshop\ImageWorkshop;
#Image Path
$pathImage1 = __DIR__ . '.\Imagenes\stock_1.jpg';
#Traemos la imagen a la capa inicializada
$layerBase = ImageWorkshop::initFromPath($pathImage1);


#Superponiendo imagenes
#Inicializamos nuevas capas con imagenes...
$layerLogo = new PHPImageWorkshop\ImageWorkshop;
$pathImageLogo = __DIR__ . '.\Imagenes\Steam-Emblema.png';
$layerLogo = ImageWorkshop::initFromPath($pathImageLogo);


#Calculo el tamaño de la imagen base para poder crear un logo con 15% de tamaño de la capa base, la cual voy a superponer
$anchoBaseCalc = ($layerBase->getWidth()) * 0.15;
$anchoLogo = $anchoBaseCalc;

#Reescalamos
$layerLogo->resizeInPixel($anchoLogo, null, true); #El ancho asignado, null es el alto, true es la para mantener la relacion de aspecto


#Agregamos la capa nueva arriba de la base
$layerBase->addLayerOnTop($layerLogo, 20, 20, 'LB'); //(Capa sobre expuesta, X, Y, 'LB, RB, LT, RT') Left, Right, Bottom, Top


#------------------------------------------------------------------------------------------------
#Manejando y guardando el resultado 
$resultadoDir = __DIR__ . '.\Imagenes\resultado';
$filename = "resultado"."1".".png";
$crearCarpeta = true; #Si la carpeta no existe, se creara automaticamente
$backgroundColor = null; #transparente, solo para PNG (De lo contrario sera blanco si se establece nulo)
$imageQuality = 100; #No sirve para GIF, pero es util para PNG y JPEG (0 to 100);

$layerBase->save($resultadoDir, $filename, $crearCarpeta, $backgroundColor, $imageQuality);
#------------------------------------------------------------------------------------------------

#Imprimiedo 
echo "Imagen Base <br> <img src= .\Imagenes\stock_1.jpg>";
echo "<br><br><br>";
echo "Imagen Logo <br> <img src= .\Imagenes\Steam-Emblema.png width='800' height='450'>";
echo "<br><br><br>";
echo "Resultado <br> <img src= ./Imagenes/resultado/resultado1.png>";
echo "<br> fin.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImageWorkshop</title>
</head>
<body>
</body>
</html>