# PHP Web Editorial Library
Create a CMS website, in a little bit.

- [PHP Web Editorial Library](#php-web-editorial-library)
- [Local PHP server](#local-php-server)
  - [php docker \[optional\]](#php-docker-optional)
- [Local php setup](#local-php-setup)
  - [Composer ⬇️ download](#composer-️-download)
  - [Install requirements](#install-requirements)
- [Snippets](#snippets)
  - [Include library into `.php` page](#include-library-into-php-page)
  - [Read objects](#read-objects)

<br/>
<br/>
<br/>

# Local PHP server

## php docker [optional]
Execute interactive php docker server by using `cmd.exe`:
```bash
cmd
docker run --rm -it -v %cd%:/usr/src/myapp -p 9988:8000 -w /usr/src/myapp php:8-cli-alpine3.17 sh
```

Launch php server:
```bash
php -S 0.0.0.0:8000
```

Launch website here: http://localhost:9988

<br/>
<br/>
<br/>

# Local PHP setup

## Composer ⬇️ download
[Donwload composer](https://getcomposer.org/download/)


## Install requirements
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
