
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

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

<link href="reg123.css" rel="stylesheet">
</head>
<body class="text-center">
<main class="form-signin">
<form method="POST">
<h1 class="form">Форма авторизации</h1>
<input type="textbox" id="inputEmail" name="login" class="form-control" placeholder="Имя">
<br><br><input type="textbox" id="inputEmail" name="login" class="form-control" placeholder="Аккаунт">

<br><br><input type="password" id="pid" name="password" class="password-control " placeholder="Пароль" > 
<br><label style="color: white;"><input type="checkbox" class="password-checkbox" onclick="Show_HidePassword('pid')"> Показать пароль</label>

<br><tr>


<br><br><br><button class="b1" name="submit" type="submit">Войти</button>

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