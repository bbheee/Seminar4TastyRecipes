<?php

namespace Tasty\Controller;

class SessionManager
{
    const CONTROLLER = 'controller';

    public static function getController() {
        if (isset($_SESSION[self::CONTROLLER])) {
            return unserialize($_SESSION[self::CONTROLLER]);
        } else {
            return new Controller();
        }
    }

    public function storeController(Controller $controller){
        $_SESSION[self::CONTROLLER] = serialize($controller);
    }

    public function login($username){
        return $_SESSION['loginuser'] = $username;

    }

    public function logout(){
        return session_destroy();
    }
}
?>
