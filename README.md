# PWD - Trabajo practico de Librerias (ImageWorkshop y Krumo)

## Tabla de contenido

- [Descripción](#descripción-)
  - [Objetivo](#objetivo-)
  - [Construido con](#construido-con-)
  - [Lo que aprendimos](#lo-que-aprendimos-)
  - [Prblemas y soluciones](#problemas-y-soluciones-)
  - [Recursos útiles](#recursos-útiles-)

## Descripción 📋

- <b>Participantes del grupo:</b> Santiago Avilez Ariza (FAI-2808) / Lucas Villarruel (FAI-1707)
- <b>Carrera:</b> Tecnicatura Universitaria en Desarrollo Web
- <b>Materia:</b> Programación Web Dinámica

### Objetivo 📌

Investigar e implementar una libreria de PHP a elección que resulva algun problema.

### Construido con 🛠️

- Visual Studio Code
- HTML5
- CSS3
- Jquery
- Bootstrap 5
- PHP
- Librerias: (ImageWorkshop / Krumo)

####Qué son estas librerias:
- Krumo: Es una librería simple que brinda una facilidad al debugear el codigo, esta librería remplazaría la utilidad del var_dump, así como del print_r, y permite ver detalladamente lo que compone una variable, al igual que los métodos que reemplaza. La curiosidad está en que agrega un estilo a estos resultados por pantalla, lo que permite leer e identificar mucho más fácil que compone las variables que imprimimos. 'Krumo($variable);'

- ImageWorkshop: Es una librería completa que utiliza de base el GD de PHP para realizar manipulaciones de imágenes subidas por medio de capas. De modo que es fácil realizar ediciones por medio de código, como resaltar las, manipular el formato, girarlas, sobre exponerlas, quitar calidad(lo cual minimiza el tamaño), entre muchas otras cosas. Por otro lado también permite obtener los datos y valores de las imágenes por medio de los métodos de las clases.
Esta librería crea capas por medio de instanciar objetos, lo cual la hace mucho más fácil de trabajar. La documentación de los métodos es clara, y los métodos son muy accesibles y fáciles de usar.
 

### Lo que aprendimos 🤓

- Muchas de las librerias se trabajan mendiante el gestor de paquetes de PHP Composer.
- Las librerias suelen trabajar con clases y los proyectos suelen incluir su propio autoload.
- La dumentación debe estar completa y ser clara para el correcto funcionamiento de la libreria, es muy dificil interpretarla si
e implementarla sin una comunidad activa y grande que de tutoriales o ejemplos de uso de las mismas.

### Problemas y soluciones 🔫

El problema más grande que tuvimos fue la implementación de las clases, el programa y el ejemplo implementado aparte mostraban un funcionamiento correcto. Pero a la hora de integrar las clases a los proyectos trabajados durante el año ocurrían muchas inconsistencias, casi en su totalidad por las rutas y directorios de estas.
Es probable que esto ocurra debido a que la librería cuenta con su propio autoload y cause algún conflicto con la clase de autoload que ya teníamos y con la que trabajamos siempre.

En un principio lo que pudimos hacer para solucionarlo es utilizar un 'requiere_once('...');' con cada clase de la que la libreria es independiente en el script donde se la utiliza para trabajar.

### Recursos útiles 👈

- [Repositorio de Claudia Carrasco](https://github.com/ClauCarrasco/TPBootstrap)
- [Documentación de Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

- [Krumo](http://krumo.kaloyan.info/)

- [ImageWorkshop](https://phpimageworkshop.com/)
- [ImageWorkshop: Instalacion](https://phpimageworkshop.com/installation.html)
- [ImageWorkshop: Documentacion](https://phpimageworkshop.com/documentation.html)
- [ImageWorkshop: Tutoriales](https://phpimageworkshop.com/tutorials.html)
- [ImageWorkshop: GitHub](https://github.com/Sybio/ImageWorkshop)
- [Imageworkshop: Ejemplo rapido](https://phpimageworkshop.com/quickstart.html)
- [Imageworkshop: Iniciacion de capas](https://phpimageworkshop.com/documentation.html#chapter-initialization-of-a-layer)
- [Imageworkshop: Acciones sobre las capas](https://phpimageworkshop.com/documentation.html#chapter-actions-on-layers)
- [Imageworkshop: Posicionamiento de esquinas](https://phpimageworkshop.com/doc/22/corners-positions-schema-of-an-image.html)
- [Imageworkshop: Más sobre las capas](https://phpimageworkshop.com/documentation.html#chapter-layer-notion)
- [Imageworkshop: Manejar los resultados](https://phpimageworkshop.com/documentation.html#chapter-getting-showing-or-saving-a-result)
- [Imageworkshop: Buenas practicas](https://phpimageworkshop.com/documentation.html#chapter-good-pratices)

