<?php

$conn = mysqli_connect("localhost","root","","dbmahasiswa");

if(!$conn){
    echo "Failed";
    die();
} else {
    echo "Connect";
}
?>