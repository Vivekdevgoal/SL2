<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
</head>
<body>
<h2>Login Page</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$login = $_POST['login'];
$password =$_POST['password'];
if (
$login === "Galgotias" &&
$password === "university"
) {
header("Location: 8welcome.php");
exit();
} else {
header("Location:8sorry.php");
exit();
}
}
?>
<!-- Login Form -->
<form method="post" action="">
<label for="login">Login:</label>
<input type="text" id="login" name="login" required>
<br><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required>
<br><br>
<button type="submit">Login</button>
</form>
</body>
</html>