<?php
namespace View;
use Tasty\Controller\SessionManager;
use Tasty\Util\Startup;
$this_directory = __DIR__;
$file_to_include = $this_directory."/classes/Tasty/Util/Startup.php";
require_once $file_to_include;

//require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();

$comment = $_POST['comment']; //
$mypage = $_SESSION['page'];

$controller = SessionManager::getController();
$username = $_SESSION['loginuser'];
if ($controller->addComment($username, $comment, $mypage)){
  echo 'success';  //header("location: $mypage.php"); // ECHO comment has been created
}

?>
