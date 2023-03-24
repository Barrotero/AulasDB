<?php

session_start();
$_SESSION['matricula'] = null;
session_destroy();
$_SESSION['matricula'] = null;
header('Location: index.php');

?>