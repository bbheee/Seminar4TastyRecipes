<?php
namespace Tasty\Util;

final class Startup
{
    private function __construct() {

    }

    public static function initiate() {

        Self::pathConstants();

        spl_autoload_register(function ($class) {
            require_once  'classes/' . \str_replace('\\', '/', $class) . '.php';
        });
        session_start();

    }

    private static function pathConstants(){
        define('VIEWS_PATH', realpath(dirname(($_SERVER['DOCUMENT_ROOT']))). '/resources/views/');
        define('DOCUMENT_PATH', realpath(dirname(($_SERVER['DOCUMENT_ROOT']))). '/resources/');
        define('ROOT_PATH', realpath(dirname(($_SERVER['DOCUMENT_ROOT']))). '/');
    }
}
