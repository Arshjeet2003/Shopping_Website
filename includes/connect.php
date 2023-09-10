<?php
    $con=  mysqli_connect('localhost','root','','mystore');//Third parameter for password
    if(!$con){
        die(mysqli_error($con));
    }
?>