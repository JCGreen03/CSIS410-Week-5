<?php
function redirectLogin() {
    header("Location: http://www.krustywalrus.com/Week-5/CMS-Sessions/Landing.php");
}
?>
<?php
session_start();

if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){
    session_unset();
    session_destroy();
    redirectLogin();
}
?>