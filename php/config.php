<?php
    $conn=mysqli_connect("localhost","root","","chat");
    if(!$conn){
        echo "DataBase not Connected ".mysqli_connect_error();
    }
?>