<?php
session_start();

if (!isset($_SESSION["username"])) {
   header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <h1>Welcome to Dashboard</h1>

    <p>
        Hello,
        <?php echo htmlspecialchars($_SESSION["username"]); ?>!
    </p>

    <form action="./logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>

</body>

</html>