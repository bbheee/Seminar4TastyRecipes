<?php
namespace View;
ob_start();
header( "Content-type: application/json");
use Tasty\Util\Startup;
use Tasty\Controller\SessionManager;
$this_directory = __DIR__;
$file_to_include = $this_directory."/classes/Tasty/Util/Startup.php";
require_once $file_to_include;
Startup::initiate();
$controller = SessionManager::getController();
//$_SESSION['page'] = basename($_SERVER['REQUEST_URI'], ".php");
ob_end_clean();
echo json_encode($controller->showComments($_SESSION['page']));
