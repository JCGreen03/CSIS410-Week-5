<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Sessions - Missions</title>
    <link rel="stylesheet" type="text/css" href="./CSS/CMSSessions.css">
</head>

<body>
    <!--Page 5: Mission details page
Contains:
Information on the missions
Links to volunteer page
Links to socials

TODO: fill with content - DONE
TODO: Format and style - 
TODO: Link to pages - DONE
-->

<?php 
session_start();
include("./Components/Header.php");
?>
<div class="title">
<h1>Building A Better World Through Ministry</h1>
<p>"...go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit"</p>
<!--picture of missions work-->
</div>

<!--list of mission locations and dates-->
<div class="title"><h1>Upcoming Missions</h1></div>

<div class="missiongrid">

<div class="national">
<div class="center">
<h3>National Missions</h3>
    <li>Florida - 4/28/25</li>
    <li>Washington - 5/1/25</li>
    <li>North Carolina - 5/10/25</li>
    <li>Montana - 5/25/25</li>
    <li>Maine - 6/10/25</li>
    </div>
</div>

<div class="center">
<div class="international">

<h3>International Missions</h3>
    <li>Peru - 4/29/25</li>
    <li>Brazil - 5/12/25</li>
    <li>Germany - 5/25/25</li>
    <li>The Netherlands - 6/5/25</li>
    <li>South Korea - 6/18/25</li>
    </div>
</div>

</div>

<div class="center">
<h1>Other Ways You Can Make A Difference</h1>

<?php
include("./Components/MeetingBTN.php");

include("./Components/DonateBTN.php");

include("./Components/VolunteerBTN.php");
?>
</div> 
<?php 
include("./Components/Menu.php");
include("./Components/Footer.php");
?>
</body>


</body>