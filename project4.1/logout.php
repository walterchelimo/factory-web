
<?php
session_start();
$_SESSION = array();

header("location: farm.php");
exit;
 session_destroy();
?>