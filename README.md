# PHP Web Editorial Library
Create a CMS website, in a little bit.

# Local PHP server

## php docker Windows
Execute interactive php docker server by using `cmd.exe`:
```bash
cmd
docker run --rm -it -v %cd%:/usr/src/myapp -p 9988:8000 -w /usr/src/myapp php:8-cli-alpine3.17 sh
```

## php docker Mac and Linux
```shell
docker run --rm -it -v "$PWD":/usr/src/myapp -p 9988:8000 -w /usr/src/myapp php:8-cli-alpine3.17 sh
```


## Composer ⬇️ download
[Donwload composer](https://getcomposer.org/download/)


## Install requirements

Quick install:
```shell
php composer.phar install
```

First time manually install:
```bash
php composer.phar require erusev/parsedown
php composer.phar require symfony/yaml
```

## Launch php server
Launch php server:
```bash
php -S 0.0.0.0:8000
```

Launch website here: http://localhost:9988

<br/>
<br/>
<br/>



# Snippets

## Include library into `.php` page
```php
<?php
    require_once 'vendor/autoload.php';
    require_once 'editor.lib.php';
?>
```

## Read objects
```php
<?php
    $intro       = EditorLib::getObject('intro.yaml');
    $introBlocks = EditorLib::getObjects('intro-blocks.yaml');
?>
