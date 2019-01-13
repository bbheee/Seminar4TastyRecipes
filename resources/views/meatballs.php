<?php
//use Tasty\Controller\Controller;
//use Tasty\Controller\SessionManager;
//use Tasty\Util\Startup;
//include "header.php";
header( "Cache-Control: max-age=<350>");
//$mypage = basename($_SERVER['REQUEST_URI'], ".php");
$_SESSION['page']="showMeatball";
$cookbook = simplexml_load_file("resources/xml/recipes.xml");
$recipeNo= 1;

?>
<!DOCTYPE html>
<html>
    <link href="resources/css/recipe.css" rel="stylesheet" type="text/css">
    <main>
    <img class= "image" src ="<?php echo $cookbook->recipe[$recipeNo]->imagepath; ?>"
     /> <br/>
    <?php echo $cookbook->recipe[$recipeNo]->quantity; ?> <br/>
    <?php echo $cookbook->recipe[$recipeNo]->cooktime; ?> <br/>
    <h3><b> Ingredients:</b> </h3>
    <ul class= "ingredients">
        <?php foreach ($cookbook->recipe[$recipeNo]->ingredient->li as $ingredient){
              echo "<li> $ingredient </li>";
              }
        ?>
    </ul>
    <h3><b> Steps:</b> </h3>
    <ol class= "steps">
         <?php foreach ($cookbook->recipe[$recipeNo]->recipetext->li as $recipetext){
                echo "<li> $recipetext </li>";
              }
        ?>
    </ol>
   <p><b>Comments</b></p>
   <div id ="commentbox"></div>
   <?php
   if(isset($_SESSION['loginuser'])) {
   require_once('resources/views/comments.php');
   }
   else{
       ?><h3><a href='showLogin.php'>Please login to write comments!</a></h3></div><?php
   }
    //require_once (__DIR__.'/../../showComments.php');

   ?>

    </main>
</html>
