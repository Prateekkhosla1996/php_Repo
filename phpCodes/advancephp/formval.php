<?php
    $email = 'prateekk96.com@gmail.com';
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Please enter valid email id";
    }else{
        echo "email is valid";
    }
    print_r( filter_list());
    echo serialize(filter_list());
    echo serialize(FILTER_VALIDATE_REGEXP);
    echo readfile("read.txt");
    $myFile = fopen("read.txt",'w');
    $txt = "john doe is a softwere developer\n";
    fwrite($myFile,$txt);
    fclose($myFile);