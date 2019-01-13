$(document).ready(function () {
/**
*LOGS USER OUT
*/
  $("form#logout").submit(function (event) {
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url : '/doLogout.php',
        success : function(re){
         window.location.href = '/doLogin.php';
        }
      });
    });

  /**
  *LOGS USER IN
  */
  $("form#logins").submit(function (event){
    event.preventDefault();
    var data = {
      username: $('#login-user').val(),
      password: $('#login-pwd').val(),
    };

    $.ajax({
      type: 'POST',
      url : '/doLogin.php',
      data: data,
      success : function(re){
        //console.log('re');
        //$('#login').load('#logouts');
      window.location.href = '/showLogin.php';
      }
    });
});
// comments load when page is refreshed
getComment($("#commentarea").val());

  /**
  *Get comments
  */
    function getComment(pageid){
      console.log("getcomment");
      $.ajax({
      type: 'POST',
      url : '/showComments.php',
      contentType: "application/json",
      data: {page: pageid},
      dataType: "json",

      success : function(comments){
        console.log(comments);
        $("#commentbox").html("");
          for(var i = 0; i < comments.length; i++){
            addEntry(comments[i]);
          }
        },
        error: function(xml, error){
          console.log(error);
        }
        });
   }

   function addEntry(comment){
       $.ajax({
       type: 'POST',
       url:'showUserloggedin.php',
       success: function(re){
         console.log(re);
         if(removeQuotes(re) === removeQuotes(comment.user)){
           var timestamp = removeQuotes(comment.timestamp);
           console.log(timestamp);
          $("<form id='removecommentform'>").appendTo($("#commentbox"));
              $("<input id = 'deleteid' type='hidden' name='deleteid' value='" +timestamp  + "'/>").appendTo($("#commentbox"));
          $("<button id='delete'>Delete</button></form>").one("click", deleteComment).appendTo($("#commentbox"));
         }
         $("<ul class='commentstop'><li>"+removeQuotes(comment.timestamp)+ "<br>" +removeQuotes(comment.user)+ ":</li></ul>").appendTo($("#commentbox"));
        $("<ul class='comments'><li>"+removeQuotes(comment.comment)+"</li></ul>").appendTo($("#commentbox"));
       }
     });

   }

   function deleteComment(){
     var data = {
       deleteid: $('#deleteid').val(),
     };
     console.log(data);
      $.ajax({
        type: 'POST',
        url: '/doDeleteComment.php',
        data: data,
        success: function(re){
          //console.log("hej");
          getComment(data.deleteid);
        }
      })
   }

/**
*Post comment
*/
$('body').on('submit', 'form#comment',function (event){
  event.preventDefault();
  var data = {
    commentbtn: "submit",
    page: $('#commentarea').val(),
    comment: $('#text').val(),


  };
  $.ajax({
    type: 'POST',
    url : '/doComment.php',
    data: data,
    success : function(re){
      console.log(re);
      location.reload();
    }
  });
});
function removeQuotes(str) {
               return str.replace(/\"/g, "");
           }
});
