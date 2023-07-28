<?php
$con=mysqli_connect("localhost","root","","freezer");
if(!$con){
    die("connection failled");
}
else{
    $username=$_POST['username1'];
    $password=$_POST['password1'];
    $sql="INSERT INTO freezzer_table(USERNAME,PASSWORD) VALUES('$username','$password')";
    if(mysqli_query($con,$sql)){
        echo"data inserted successfully and";
    }
    die("login successfull ");

}
?>