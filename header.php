<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <title>FMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    </link>
    <script src="./js/index.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <!---<a class="navbar-brand" style="background-color:lightblue;" href="#">Navbar</a>--->
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ">
                        <a class="nav-link font-weight-normal" href="./index.php" ;><span class="pill"> Home</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link font-weight-normal " href="./admin_login.php" ;><span class="pill">&nbsp Admin</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link font-weight-normal " href="./student_login.php" ;><span class="pill">&nbsp Student</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link font-weight-normal" href="./faculty_login.php" ;><span class="pill">&nbsp Faculty</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link font-weight-normal" href="./about.php" ;><span class="pill">&nbsp About Us</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 font-weight-normal" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="container-fluid mt-2">
            <div class="jumbotron" style="background-image:url('./img/bg_image-1.jpg'); background-size: 100%;">
                <h1 style="color: rgb(141, 26, 26); text-align: center;">
                    <img src="./img/logo.png" width="60px" height="70px"></img>
                    <b>Student Feedback System</b>
                    <hr style="width:50%;color:rgb(22, 15, 15)">
                </h1>
                <h5 style="text-align: center;">Good Feedbacks is the key to improvement</h5>
                <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
            </div>
        </div>
    </header>