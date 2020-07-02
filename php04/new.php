<!--ユーザー登録画面-->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>新規登録</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="toppage.php">トップページ</a></div>
    </div>
  </nav>
</header>
<h2>新規登録フォーム</h2>

<form name="form1" action="new_act.php" method="post">
name:<input type="text" name="name">
Email:<input type="text" name="email">
ID:<input type="text" name="lid" >
PW:<input type="password" name="lpw" >
<input type="submit" value="登録" >
</form>


</body>
</html>