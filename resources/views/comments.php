<?php
$mypage = $_SESSION['page'];
header( "Cache-Control: max-age=<50>");
?>

<textarea id = "text" name="comment" form="commentform" class="writebox" placeholder="Enter comment here..." required></textarea>
<form id="comment">
    <button id="submit" name="commentbtn">Comment</button>
    <input id ="commentarea" type='hidden' name='thepage' value='<?php echo "$mypage";?>'/>
</form>
