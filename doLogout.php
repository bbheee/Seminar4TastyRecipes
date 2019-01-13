<?php
namespace View;
use Tasty\Controller\SessionManager;
use Tasty\Util\Startup;

require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();

$controller = SessionManager::getController();
if ($controller->logout()){
    header("Location: doLogin.php");
}
?>
