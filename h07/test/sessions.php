<?php
session_start();

//$_SESSION['username'] = "username";
//echo $_SESSION['username'];

$users = array(
    "1" => "1234",
    "2" => "2345",
    "3" => "3456"
);

if (isset($_POST['knop'])
&& isset($users[$_POST["login"]])
&& $users[$_POST["login"]] == $_POST['password']) {
    $message = "welkom ".$_SESSION["user"];
    $_SESSION['user'] = $_POST["login"];
} else {
    $message = "Inloggen";
}




?>

<html lang="en">
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"></form>
<div class="form-group">
    <label for="login">Login:</label>
    <input type="text" name="login" value="">
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" value="">
</div>
<input type="submit" name="knop">

</body>
</html>
