<?php
session_start(); //Make sure session settings is enabled in php.ini

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //checking wheter the resquest method is POST or not
     $_SESSION['cordinate'] =  $_POST['cordinate'];
    echo "1";
}
else{
    
    if(isset($_SESSION['cordinate']))
        echo $_SESSION['cordinate'];
    else
        echo "send data first!!!";
}
?>
