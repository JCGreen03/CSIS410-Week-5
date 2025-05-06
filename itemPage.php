<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Item</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSSessions.css">
</head>


<body>
    <?php
    session_start();
    include("./Components/Header.php"); 
    ?>

    <?php

    if(isset($_GET['item']) && $_GET['item']==0){
        include("./Components/ItemShirt.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==1){
        include("./Components/ItemHat.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==2){
        include("./Components/ItemBible.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==3){
        include("./Components/ItemCalendar.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==4){
        include("./Components/ItemWaterBottle.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==5){
        include("./Components/ItemDevotional.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==6){
        include("./Components/RentalLights.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==7){
        include("./Components/RentalCanopy.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==8){
        include("./Components/RentalFoodWarmer.php");
    }

    elseif(isset($_GET['item']) && $_GET['item']==9){
        include("./Components/RentalGenerator.php");
    }

    else{
        header("Refresh: 2; url=http://localhost/Week-5/CMS-Sessions/Store.php");
        echo "Item not found. Returning to store...";
    }

    ?>
    <?php
    if(isset($_SESSION['valid']) && $_SESSION['valid']){
    echo "<br><form action='./Components/addtocart.php' method='POST'>
        <input type='hidden' name='item' value='" . htmlspecialchars($_GET["item"]) . "'>
        <input type='submit' value='Add to cart'>
    </form>";
    } else{
        echo "<br>Please log in to add items to the cart";
    }
    ?>

<?php include ("./Components/menu.php"); ?>
<?php include("./Components/Footer.php"); ?>
</body>