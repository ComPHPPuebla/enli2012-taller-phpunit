# Taller de PHPUnit ENLi 2012

## Instalación

Para instalar este proyecto usando Composer ejecuta los siguientes comandos:

```bash
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar create-project comphppuebla/phpunitws path/to/app
```

Remplaza `path/to/app` por el directorio donde quieres instalar el proyecto.

## Ejecutar los tests

Puedes ejecutar los tests uno por uno.

```bash
$ bin/phpunit tests/TestsAEjecutar.php
```

Debes reemplazar `TestsAEjecutar.php` por el nombre de la clase de la que quieres ejecutar
los tests, por ejemplo: `FactorialTest.php`. También puedes ejecutar todos los tests 
usando el archivo de configuración `phpunit.xml`.

```bash
$ bin/phpunit
```

Además de ejecutar todos los tests obtendrás dos reportes code coverage en formato HTML y 
testdox en HTML.