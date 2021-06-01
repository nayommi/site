<?php 
$hostIP = "localhost";
$dbUser = "user2";
$dbPass = "user2";
$dbName = "isip15";

$mysqli = new mysqli($hostIP, $dbUser, $dbPass, $dbName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.80.0">
<title>Форма авторизации</title>

<script>
function Show_HidePassword(id) {
element = document.getElementById(id);
if (element.type == 'password') {
var inp = document.createElement("input");
inp.id = id;
inp.type = "text";
inp.value = element.value;
element.parentNode.replaceChild(inp, element);
}
else {
var inp = document.createElement("input");
inp.id = id;
inp.type = "password";
inp.value = element.value;
element.parentNode.replaceChild(inp, element);
}
}
</script>

<style> 
.bd-placeholder-img {
font-size: 1.125rem;
text-anchor: middle;
-webkit-user-select: none;
-moz-user-select: none;
user-select: none;
}

min-width: 768px {
.bd-placeholder-img-lg {
font-size: 3.5rem;
}
}
</style>
<link href="signin.css" rel="stylesheet">
</head>
<body style="background: url(images/unnamed.jpg); background-size: 100%; display: flex; align-items: center; padding-top: 80px; padding-bottom: 80px; background-color: #f5f5f5;" class="text-center">
<main class="form-signin">
<form method="POST">
<h1 class="form">Форма авторизации</h1>
<input type="textbox" id="inputEmail" name="login" class="form-control" placeholder="Аккаунт">

<br><br><input type="password" id="pid" name="password" class="password-control " placeholder="Пароль" > 
<br><label style="color: white;"><input type="checkbox" class="password-checkbox" onclick="Show_HidePassword('pid')"> Показать пароль</label>

<br><tr>
<td colspan="2" class="text_center" >
<label style="color:white;">
<input type="checkbox" name="remember_me" checked="checked" /> Запомнить меня
</label>
</td>
</tr></div>

<br><br><br><button class="b1" name="submit" type="submit">Войти</button>

<br><br><br><a class="b1" href="registration/reg.php" style="text-decoration: none;">Нет аккаунта? Зарегистрируйтесь</a>
<?php
if (isset($_POST['submit'])) 
{
$query = mysqli_query($mysqli, "SELECT * FROM users WHERE userName='".$_POST['login']."' AND userPass='".$_POST['password']."'");
while ($result = mysqli_fetch_array($query)) 
{
echo "Авторизация успешна";
}
}
?>

</form>
</main>
</body>
</html>