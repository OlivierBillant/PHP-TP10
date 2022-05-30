<?php
session_start();

if(isset($_SESSION["result"])){
    echo " {$_SESSION['result'] } = {$_SESSION['op1']} {$_SESSION['op']} {$_SESSION['op2']}";
}


?>