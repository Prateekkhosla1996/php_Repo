<?php 
$con = mysqli_connect('localhost','root','','photos',3308);

if(mysqli_connect_errno()){
    echo 'fali to connect'. mysqli_connect_error();
    die();
}
else{
    // echo 'connection success';
}
