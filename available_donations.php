<?php

session_start();

  $host="localhost";
  $user="root";
  $password="";
  $db="donation";

  $data=mysqli_connect($host, $user, $password, $db);

  $sql="SELECT * from donations";

  $result=mysqli_query($data, $sql);


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
        .table_th {
            padding: 20px;
            font-size: 20px;
        }
        
        .table_td {
            padding: 20px;
            background-color: skyblue;
        }
    </style>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid bg-primary">
            <a class="navbar-brand" href="#">
                    <img src="images/logo.jpeg" alt="" width="100" height="80" class="d-inline-block align-text-top"> <h1>Unity Giving</h1>
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
    </aside>
    <div class="content">
        <center>
            <h1>Available Donations</h1>

            <table border="1px">
                <tr>
                    <th class="table_th">Organization</th>
                    <th class="table_th">Email</th>
                    <th class="table_th">Phone</th>
                    <th class="table_th">Details</th>
                    <th class="table_th">Deadline</th>
                    <th class="table_th">Payment</th>
                </tr>
                <?php
                        while($info=$result->fetch_assoc())
                        {
                    ?>
                <tr>
                    <td class="table_td">
                        <?php echo "{$info['name']}";?>
                    </td>
                    <td class="table_td">
                        <?php echo "{$info['email']}";?>
                    </td>
                    <td class="table_td">
                        <?php echo "{$info['phone']}";?>
                    </td>
                    <td class="table_td">
                        <?php echo "{$info['message']}";?>
                    </td>
                    <td class="table_td">
                        <?php echo "{$info['deadline']}";?>
                    </td>
                    <td class="table_td">
                        <a class='btn btn-primary' href='#'>Donate</a>"
                    </td>
                </tr>

                <?php
                        }
                    ?>
            </table>
        </center>
    </div>
    <!-- <footer class="page-footer font-small blue ">

        <div class="container-fluid  py-3 bg-primary">
        <div class="text-center">Copyright©unitygiving. All Rights Reserved</div>
    </div>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
</body>

</html>