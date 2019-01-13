<?php
namespace View;

use Tasty\Util\Startup;
$this_directory = __DIR__;
$file_to_include = $this_directory."/classes/Tasty/Util/Startup.php";
require_once $file_to_include;
//require_once 'classes/Tasty/Util/Startup.php';

Startup::initiate();

require_once('resources/views/header.php');
?>

<?php
require_once('resources/views/pancakes.php');
?>
<?php
//require_once('showComments.php');
?>
