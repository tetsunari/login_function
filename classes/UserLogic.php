<?php

require_once '../dbconnect.php';
ini_set('display_errors', true);

class UserLogic
{
  /**
   * ユーザーを登録する
   * @pram array $userData
   * @return bool $result
   */
  public static function createUser($userData)  //register.phpでnew UserLogicにしてないから
  {
    $sql = 'INSERT INTO users (name, email, password)
    VALUES (?, ?, ?)';
    //ユーザーデータを配列に
    $arr = [];
    $arr[] = $userData['username'];
    $arr[] = $userData['email'];
    $arr[] = password_hash($userData['password'], PASSWORD_DEFAULT);
    try{
      $stm = connect()->prepare($sql);
      $result = $stm->execute($arr);
      return $result;
    }catch(\Exception $e){
      return false;
    }
  }
}