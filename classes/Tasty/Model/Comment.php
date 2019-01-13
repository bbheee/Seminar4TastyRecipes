<?php
namespace Tasty\Model;
use Tasty\Integration\DatabaseHandler;
use Tasty\DTO\CommentDTO;

class Comment{

    public function showComments($page){
      $dbHandler = new DatabaseHandler();
      return $dbHandler->showComments($page);
    }

    public function addComment($username, $com, $mypage){
      $dbHandler = new DatabaseHandler();
      return $dbHandler->addComment($username, $com, $mypage);

    }
    public function deleteCom($username, $mypage, $timestamp){

      $dbHandler = new DatabaseHandler();
      return $dbHandler->deleteComment($username, $mypage, $timestamp);

    }
}
