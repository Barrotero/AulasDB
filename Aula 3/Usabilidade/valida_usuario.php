<?php

if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['matricula'] == null) {
    header('Location: index.php');
}

?>