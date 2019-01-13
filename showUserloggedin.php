<?php
namespace View;

use Tasty\Util\Startup;
use Tasty\Controller\SessionManager;
$this_directory = __DIR__;
$file_to_include = $this_directory."/classes/Tasty/Controller/SessionManager.php";
require_once $file_to_include;
session_start();
echo $_SESSION['loginuser'];

?>
