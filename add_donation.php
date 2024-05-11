<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="donation";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_donation']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $deadline=$_POST['deadline'];
    

    $sql="INSERT INTO donations(name,email,phone,message,deadline) VALUES ('$name','$email','$phone','$message','$deadline')";

        $result=mysqli_query($data,$sql);

        if($result)
        {
            echo "<script type='text/javascript'>
            alert('Donation added Successully');
            </script>";
            
        }
        else
        {
            echo "Upload Failed";
        }
       
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UNITY GIVING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        .div_deg {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid bg-primary">
            <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="" width="100" height="80" class="d-inline-block align-text-top"> <h1>Unity Giving</h1>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Unity Giving</h2>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body bg-primary my-2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page " href="index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="available_donations.php">Available Donations</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex ">
                <input class="form-control me-2 " type="search " placeholder="Search " aria-label="Search ">
                <button class="btn btn-outline-success " type="submit ">Search</button>
            </form>
           
        
        </nav>
    </header>
    <div class="container-fluid py-5 my-4">
        <center>
            <h1>Add Donation</h1>

            <div class="div_deg">
            <form action="#" method="POST">
        
        <div class="adm_int my-4">
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div class="adm_int my-4">
            <label>email</label>
            <input type="email" name="email">
        </div>
        <div class="adm_int my-4">
            <label>Phone</label>
            <input type="text" name="phone">
        </div>
        <div class="adm_int my-4">
            <label>Details</label>
            <input type="text" name="message">
        </div>

        <div class="adm_int my-4">
            <label>Deadline</label>
            <input type="date" name="deadline">
        </div>       

        <div class="adm_int my-4">
            <input type="submit" class="btn btn-primary" name="add_donation" value="Add Donation">
        </div>
        </form>
            </div>
        </center>
    </div>
    <footer class="page-footer font-small blue ">

        <div class="container-fluid  py-3 bg-primary">
            <div class="text-center">Copyright©unitygiving. All Rights Reserved</div>
        </div>
    </footer>
</body>

</html>