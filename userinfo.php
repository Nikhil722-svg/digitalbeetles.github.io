<?php

$con = mysqli_connect('localhost' , 'root');
if($con){
    echo "Connection Successfully";
}else{
    echo "No Connection";
}

mysqli_select_db($con , 'digitalbeetlesa1');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$WebsiteInfo = $_POST['WebsiteInfo'];

$query = "insert into userinfodata (user , email , mobile , WebsiteInfo)
            values ('$user' , '$email' , '$mobile' , '$WebsiteInfo')";

echo "$query";
mysqli_query($con , $query);
header('location:index.php');





?>