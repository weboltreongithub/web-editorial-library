# PHP Web Editorial Library
Create a CMS website, in a little bit.

- [PHP Web Editorial Library](#php-web-editorial-library)
- [Local PHP server](#local-php-server)
  - [php docker Windows](#php-docker-windows)
  - [php docker Mac/Linux](#php-docker-maclinux)
  - [Launch php server](#launch-php-server)
- [Local PHP setup](#local-php-setup)
  - [1. Composer ⬇️ download](#1-composer-️-download)
  - [2. Install requirements](#2-install-requirements)
- [Snippets](#snippets)
  - [Include library into `.php` page](#include-library-into-php-page)
  - [Read objects](#read-objects)

<br/>
<br/>
<br/>

# Local PHP server

## php docker Windows
Execute interactive php docker server by using `cmd.exe`:
```bash
cmd
docker run --rm -it -v %cd%:/usr/src/myapp -p 9988:8000 -w /usr/src/myapp php:8-cli-alpine3.17 sh
```

## php docker Mac/Linux
```shell
docker run --rm -it -v "$PWD":/usr/src/myapp -p 9988:8000 -w /usr/src/myapp php:8-cli-alpine3.17 sh
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

# Local PHP setup

## 1. Composer ⬇️ download
[Donwload composer](https://getcomposer.org/download/)


## 2. Install requirements
```bash
php composer.phar require erusev/parsedown
php composer.phar require symfony/yaml
```
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
