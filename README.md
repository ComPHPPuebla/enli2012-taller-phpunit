# Taller de PHPUnit ENLi 2012

## Instalación

Para instalar este proyecto usando Composer ejecuta los siguientes comandos:

	curl -s http://getcomposer.org/installer | php
	php composer.phar create-project comphppuebla/phpunitws path/to/app

Remplaza `path/to/app` por el directorio donde quieres instalar el proyecto.

## Ejecutar los tests

Para ejecutar los tests ingresa al directorio `vendor\bin`. Puedes probar ejecutando uno
por uno.

	php phpunit ../../tests/TestsAEjecutar.php

Debes reemplazar `TestsAEjecutar.php` por el nombre de la clase de la que quieres ejecutar
los tests, por ejemplo: `FactorialTest.php`. También puedes ejecutar todos los tests 
usando el archivo de configuración en el directorio `tests`.

	php phpunit --configuration ../../tests/phpunit.xml
	
Además de ejecutar todos los tests obtendrás dos reportes code coverage en formato HTML y 
testdox en HTML.