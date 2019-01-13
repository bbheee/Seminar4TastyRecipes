<?php
namespace Tasty\Integration;

use Tasty\DTO\CommentDTO;

class DatabaseHandler
{
    private function connectDB() {

        define('dbServername', 'localhost');
        define('dbUsername', 'root');
        define('dbPassword', 'myadmin123');
        define('dbName', 'loginsystem');
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        return mysqli_connect(dbServername,dbUsername,dbPassword,dbName);

        $mysqli->set_charset("utf8");
        return $mysqli;

    }

    public function login($username){
        $db = Self::connectDB();


        $sql = $db->prepare("SELECT password FROM users WHERE user = ?;");
        $sql->bind_param('s', $username);
        $sql->execute();
        return $sql->get_result()->fetch_assoc();

    }

      public function addUser($username,$password) {
            $db = Self::connectDB();
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = $db->prepare(
                "INSERT INTO users (user,password) VALUES (?,?);"
            );
            $sql->bind_param("ss", $username, $hashedpassword);
            return $sql->execute();
    }

    public function showComments($page){
        $db = Self::connectDB();

        $sql = "select * from comments where page = '$page'";
        $result = $db->query($sql);
        $comments = array();
        while($row=mysqli_fetch_array($result))
        {
          array_push($comments, $row);
          //$comments[] = new CommentDTO($row['user'],$row['comment'],$row['page'],$row['timestamp']);
        }

        return ($comments);
    }

    public function addComment($username, $comment, $mypage) {
        $db = Self::connectDB();

        $sql = $db->prepare(
            "INSERT INTO comments (user,comment,page)
        VALUES ( ?, ?, ?);"
        );
        $sql->bind_param("sss", $username, $comment, $mypage);
      return $sql->execute();

    }

    public function deleteComment($username, $mypage, $timestamp){
        $db = Self::connectDB();
        //$timestamp = $comment->getTime();
        //$username = $comment->getUsername();

        $sql = $db->prepare(
            "DELETE FROM comments WHERE timestamp =  ? AND user = ?;"
         );
        $sql->bind_param("ss", $timestamp, $username);

        return $sql->execute();
    }

}
