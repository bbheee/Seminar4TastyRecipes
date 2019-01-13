<?php
namespace Tasty\Model;
use Tasty\Integration\DatabaseHandler;


class User{

  private $dbHandler;
  private $username;
  private $password;

  public function __construct($username, $password)
  {
      $this->username = $username;
      $this->password = $password;
      $this->dbHandler = new DatabaseHandler();
  }

  /**
   * @return mixed
   */
  public function loginuser()
  {
      $result = $this->dbHandler->login($this->username);
      if(password_verify($this->password, $result['password'])) {
          return $res = TRUE;
      }
      else{
          return $res = FALSE;
      }
  }
  public function addUser(){
    $res=$this->dbHandler->login($this->username);
    if(empty($res)){
    $res=  $this->dbHandler->addUser($this->username, $this->password);
    return $res;
    }
    else{
      return;
    }
  }
}
