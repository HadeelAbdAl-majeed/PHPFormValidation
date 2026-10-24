<?php
 session_start();
 
 if(isset($_POST["login"])) {

    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username == "admin" && $password  == "12345"){
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h2>Login Form</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($error)) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }
    ?>

</body>
</html>