<?php
include 'header.php';
include 'autoLoader.php';

// require_once 'SecurityService.php';

$nameAttempt = $_POST['username'];
$pwordAttempt = $_POST['password'];

$service = new SecurityService($nameAttempt, $pwordAttempt);
$status = $service->Authenticate();

if ($status == true)
{
    include "loginSuccess.php";
    $_SESSION['principal'] = true;
}
else
{
    include "loginFailed.php";
    $_SESSION['principal'] = false;
        
}

?>