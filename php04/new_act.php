<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$lid   = $_POST["lid"];
$lpw  = $_POST["lpw"];


//2. DB接続します
require "funcs.php";
$pdo = db_conn();
$hashpass = password_hash("$lpw",PASSWORD_DEFAULT);
//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_kadai3_user_table(name,email,lid,lpw)VALUES(:name,:email,:lid,:lpw)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $hashpass, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("mypage.php");
}
?>