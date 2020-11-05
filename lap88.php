<?php
session_start();
$_SESSION['views']+=1;

echo "pageviews=".$_SESSION['views'];
?>
