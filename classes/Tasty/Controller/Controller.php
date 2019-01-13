<?php
namespace Tasty\Controller;
use Tasty\Model\User;
use Tasty\Model\Comment;

class Controller
{

    private $sessManager;
    public function __construct() {

        $this->sessManager = new SessionManager();

    }

    public function login($username, $password){
        $loginuser= new User($username, $password);
        return $loginuser->loginuser();
   }


    public function logout(){
        return $this->sessManager->logout();
    }

    public function addUser($username, $password) {
        $adduser = new User($username, $password);
        return $adduser->addUser();
    }

    public function showComments($page){
        $comment = new Comment();
      return $comment->showComments($page);

    }

    public function addComment($username, $com, $mypage) {
      $comment = new Comment();
      return $comment->addComment($username, $com, $mypage);

    }

    public function deleteComment($username, $mypage, $timestamp) {
        $comment = new Comment();
      return $comment->deleteCom($username, $mypage, $timestamp);

    }
}
