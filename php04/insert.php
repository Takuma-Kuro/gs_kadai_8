<?php
//1. POSTデータ取得
// $name   = $_POST["name"];
// $email  = $_POST["email"];
$naiyou = $_POST["naiyou"];
$image = $_POST["image"];

//2. DB接続します
require "funcs.php";
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_kadai3_table(naiyou,image,indate)VALUES(:naiyou,:image,sysdate())");
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':image', $image, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("mypage.php");
}
?>
