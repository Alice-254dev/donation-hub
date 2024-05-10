<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="donation";


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

if(isset($_POST['submit']))
{
    $data_name=$_POST['name']; 
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    // $data_date=$_POST['date'];


    $sql="INSERT INTO registration(name, email, phone) VALUES ('$data_name','$data_email','$data_phone')";


    $result=mysqli_query($data,$sql);

    if($result)
        {
            echo "<script type='text/javascript'>
            alert('Data Upload Success');
            </script>";
            header("location:add_donation.php");
        }
        else
        {
            echo "Upload Failed";
        }

}




?> 