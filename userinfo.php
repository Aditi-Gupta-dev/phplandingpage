<?php

$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
 else{
        echo "not connecteced";
    }

mysqli_select_db($con,'landingpageuserdata');
$user=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$messsage=$_POST['message'];

$query= " insert into userinfodata (username,email,mobile,message) values ('$user','$email','$mobile','$messsage')";

mysqli_query($con,$query);

header('location:index.php');




?>
