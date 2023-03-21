<?php

use Symfony\Component\Yaml\Yaml;

class EditorLib
{
    const BASE_PATH = './content';
    const VERSION = 1;

    public static function markdown_file($filename)
    {
        return self::markdown(file_get_contents(self::BASE_PATH . "/$filename"));
    }

    public static function markdown($string)
    {
        $Parsedown = new Parsedown();
        return $Parsedown->text($string);
    }

    public static function getObject($filename)
    {
        $fullpath = self::BASE_PATH . '/' . $filename;
        $el = Yaml::parseFile($fullpath);
        return json_decode(json_encode($el));
    }

    public static function getObjectById($filename, $id)
    {
        foreach (self::getObjects($filename) as $el) {
            $match = strval($el->id) == strval($id);
            if ($match) return $el;
        }
        return null;
    }

    public static function getObjects($filename)
    {
        $fullpath = self::BASE_PATH . '/' . $filename;
        $arr = Yaml::parseFile($fullpath);
        for ($i = 0; $i < count($arr); $i++) {
            $el = $arr[$i];
            // Create an object from an array
            yield json_decode(json_encode($el));
        }
    }
}
