<?php
namespace View;
/*use Tasty\Controller\SessionManager;
use Tasty\Util\Startup;

require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();*/

use Tasty\Controller\SessionManager;
use Tasty\Util\Startup;
$this_directory = __DIR__;
$file_to_include = $this_directory."/classes/Tasty/Util/Startup.php";
require_once $file_to_include;

//require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();


$timestamp = $_POST['deleteid'];
$mypage = $_SESSION['page'];
$username = $_SESSION['loginuser'];


$controller = SessionManager::getController();
$controller->deleteComment($username, $mypage, $timestamp);

if($controller->deleteComment($username, $mypage, $timestamp)){
    echo ("success");
}

?>
