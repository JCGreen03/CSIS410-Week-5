<?php include("./Components/loginVariables.php") ?>

<?php
session_start();
$inputUsername = $_POST["username"];
$inputPassword = $_POST["password"];

if (in_array($inputUsername, $username)) {
    $index = array_search($inputUsername, $username);
    if ($password[$index] === $inputPassword) {
        $_SESSION["username"] = $inputUsername;
        $_SESSION["accesslevel"] = $access[$index];
        $_SESSION["valid"] = true;
        header("Location: http://www.krustywalrus.com/Week-5/CMS-Sessions/Landing.php");
        exit();
    }
}else{
    header("Location: http://www.krustywalrus.com/Week-5/CMS-Sessions/LoginPage.php?validLogin=incorrect");
}


?>