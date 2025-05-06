<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Our Team</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSSessions.css">
</head>

<body>
    <!--Page 3: Employee page
Contains:
Information on the team
Links to individual employee pages

TODO: fill with content - DONE
TODO: Format and style - DONE
TODO: Session functionality - DONE
TODO: Link to pages - DONE

Page Links:
Reggie Bio
Guy Bio
Vincent Bio
Theo Bio
Lucas Bio

PAGE DONE
-->

<?php include("./Components/EmpVariables.php");
session_start();
include("./Components/Header.php");
?>

<div class="heirarchybox">
    <a href="guy.php">
<?php include("./Components/EmployeeGuy.php");?>
    </a>
</div>

<div class="heirarchybox">
<a href="reggie.php">
<?php include("./Components/EmployeeReggie.php");?>
    </a>
</div>

<div class="heirarchybox">
<a href="vincent.php">
<?php include("./Components/EmployeeVincent.php");?>
    </a>
</div>

<div class="heirarchybox">
<a href="theo.php">
<?php include("./Components/EmployeeTheo.php");?>
    </a>
</div>

<div class="heirarchybox">
<a href="lucas.php">
<?php include("./Components/EmployeeLucas.php");?>
    </a>
</div>

<?php include("./Components/Menu.php"); ?>

<?php include("./Components/Footer.php");?>



</body>