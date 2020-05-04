<?php

include 'header.php';

if (isset($_SESSION['principal']) == false || $_SESSION['principal'] == false)
{
    header("Location: login.php");
}
else {
    header("Location: products.php");
}

?>
