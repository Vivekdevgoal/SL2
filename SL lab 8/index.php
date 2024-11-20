<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input values
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Check if the credentials are correct
        if ($login == "Galgotias" && $password == "university") {
            // Redirect to Welcome.html if the login is successful
            header("Location: Welcome.html");
            exit(); // Ensure no further code is executed
        } else {
            // Redirect to Sorry.html if the login fails
            header("Location: Sorry.html");
            exit();
        }
    }
    ?>

    <form method="POST" action="">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>