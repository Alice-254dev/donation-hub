
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNITY GIVING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:teal">
            <div class="container-fluid py-3">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="" width="100" height="80" class="d-inline-block align-text-top"> <h1>Unity Giving</h1>
                </a>
            </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="card text-bg-dark m-5">
                <img src="images/background.jpeg" class="card-img" alt="..." width="400" height="350">
                <div class="card-img-overlay">
                    <h1 style="">Welcome to our platform</h1>
                    <p style=""><h3>Join our community of compassionate individuals dedicated to ensuring transparent donations. With our platform, you can effortlessly manage your donations, support causes you care about, and track your impact in real-time.Together, we can create
                        positive change and leave a lasting impact on the world.</h3></p>                    
                    </button>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="row ">
                <div class="col-sm-6 mb-3 mb-sm-0 ">
                    <div class="card ">
                        <div class="card-body ">
                            <h2 class="card-title text-center " style="color:rgb(17, 107, 125); ">Register as an orginization</h2>
                            <form action="organization_check.php" method="POST" >
                                <div class="adm_int my-4">
                                    <label class="label_text">Name</label>
                                     <input class="input_deg" type="text" name="name">
                                </div>
                                <div class="adm_int  my-4">
                                    <label class="label_text">Email</label>
                                    <input class="input_deg" type="email" name="email">
                                </div>
                                <div class="adm_int  my-4">
                                    <label class="label_text">Phone</label>
                                    <input class="input_deg" type="text" name="phone">
                                </div>
                                <div class="adm_int my-4">
                                    <label class="label_text">Registration Date</label>
                                    <input class="input_txt" type="date" name="date"></input>
                                </div>
                                <div class="adm_int my-4">
                                    <input type="submit" class="btn btn-primary" name="submit" value="submit">
                                </div>
                            </form>                                                    
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 ">
                    <div class="card ">
                        <div class="card-body ">
                            <h2 class="card-title text-center " style="color:rgb(17, 107, 125); ">Register as a donor</h2>
                            <form action="donor_check.php" method="POST" >
                                <div class="adm_int my-4">
                                    <label class="label_text">Name</label>
                                    <input class="input_deg" type="text" name="name">
                                </div>
                                <div class="adm_int  my-4">
                                    <label class="label_text">Email</label>
                                    <input class="input_deg" type="email" name="email">
                                </div>
                                <div class="adm_int  my-4">
                                    <label class="label_text">Phone</label>
                                    <input class="input_deg" type="text" name="phone">
                                </div>
                                <div class="adm_int my-4">
                                    <label class="label_text">Registration Date</label>
                                    <input class="input_txt" type="date" name="date"></input>
                                </div>
                                <div class="adm_int my-4">
                                    <input type="submit" class="btn btn-primary" name="submit" value="submit">
                                </div>
                            </form>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer class="page-footer font-small blue ">

        <div class="container-fluid  py-3 bg-primary">
            <div class="text-center">Copyright©unitygiving. All Rights Reserved</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
</body>

</html>