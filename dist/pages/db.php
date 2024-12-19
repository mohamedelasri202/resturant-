<?php 
$host ='localhost';
$user ='root';
$pass ='';
$dbname ='resturant';
$db =mysqli_connect($host ,$user ,$pass,$dbname);
if($db == false ){
    echo 'oho la';
}else {
    echo 'naddi';
}
?>