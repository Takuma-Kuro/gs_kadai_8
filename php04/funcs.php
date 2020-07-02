<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//logincheck


  function loginCheck(){
    if (!isset( $_SESSION["chk_ssid"] ) || $_SESSION["chk_ssid"] != session_id()){
      
      exit("LOGIN ERROR"); 
    }else{
      // echo $_SESSION["chk_ssid"];
      // exit();
      session_regenerate_id(true);
      $_SESSION["chk_ssid"] = session_id();
    }
  }

//DB接続
function db_conn(){
  try {

    //MAMP
    return new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');

  } catch (PDOException $e) {
    exit('DB Connection Error:'.$e->getMessage());
  }
}

//SQLエラー
function sql_error($stmt){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}
