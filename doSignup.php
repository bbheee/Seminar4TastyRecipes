<?php
namespace View;
use Tasty\Controller\SessionManager;
use Tasty\Util\Startup;

require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();
if(!empty($_POST['username'])&& !empty($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(ctype_print($username) && ctype_print($password)){
    $controller = SessionManager::getController();
    if($controller->addUser($username, $password)){
        header("location:doLogin.php");
    }
    else{
      header("location:showSignup.php?unsuccessful");
    }
  }
}
SessionManager::storeController($controller);
?>
