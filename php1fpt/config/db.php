<?php
    $connect = mysqli_connect('localhost','root','','php1fpt');
    if($connect){
        mysqli_query($connect, "SET NAMES 'UTF8");
        // echo "Ket noi thanh cong";
    }else{
        echo "Ket noi that bai";
    }
?>