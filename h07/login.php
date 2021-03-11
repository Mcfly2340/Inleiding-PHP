<?php
session_start();

//$_SESSION['username'] = "username";
//echo $_SESSION['username'];

//$users = array(
//    "1" => "1234",
//    "2" => "2345",
//    "3" => "3456"
//);

$users = array(
    "1" => array("password" => "1234", "rol" => "Administrator"),
    "2" => array("password" => "2345", "rol" => "Gebruiker"),
    "3" => array("password" => "3456", "rol" => "Administrator"),
);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['knop'])
&& isset($users[$_POST["login"]])
&& $users[$_POST["login"]]["password"] == $_POST['password']) {
    $_SESSION['user'] = array("naam" => $_POST["login"],
                            "password" => $users[$_POST["login"]]['password'],
                            "rol" => $users[$_POST["login"]]['rol']
        );
    $message = "welkom ".$_SESSION["user"]["naam"]." met de rol ".$_SESSION["user"]["rol"];
} else {
    $message = "Inloggen";
}




?>

<html lang="en">
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="form-group">
    <label for="login">Login:</label>
    <input type="text" name="login" value="">
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" value="">
</div>
<input type="submit" name="knop">
</form>
<a href="website.php">website</a><br>
<a href="admin.php">admin</a><br>
<a href="login.php?loguit">uitloggen</a>

</body>
</html>