<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <title>FMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css"></link>
    <script src=""></script>
</head>

<body class="admin">
    <!--sidebar-->
    <div class="d-flex justify-content-between">
        <div id="sidebar-container" class="bg-info ">
            <div class="logo media-body">
                <h4 class="text-light font-weight-bold m-0">Student Feedback System</h4>
                <button id="close_btn" type="button" class="close" aria-label="Close" onclick="closeNav()">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="menu ">
                <a href="index.html" class="d-block text-light p-3"><i class="bi bi-grid-3x3-gap-fill mr-2 lead"></i>Home</a>
                <a href="#" class="d-block text-light p-3"><i class="bi bi-grid-3x3-gap-fill mr-2 lead"></i>Dashboard</a>
                <a href="#" class="d-block text-light p-3"><i class="bi bi-person-square mr-2 lead"></i>Profile</a>
                <a href="#" class="d-block text-light p-3"><i class="bi bi-plus-square-fill mr-2 lead"></i>Add Faculty </a>
                <a href="#" class="d-block text-light p-3"><i class="bi bi-menu-up mr-2 lead"></i>View Feedbacks</a>
                <a href="#" class="d-block text-light p-3"><i class="bi bi-ui-checks mr-2 lead"></i>Give Important Instuctions</a>
            </div>
        </div>
        <!--end of sidebar-->
        <!--Navbar-->
        <div class="flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-light square shadow-sm px-2 mb-4" 
                    onclick="openNav()" >
                    <i class="fa fa-bars mr-1"></i>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img class="img-fluid rounded-circle mr-2" src="login_logo.png" alt="..." width="50" height="50"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <img src="user_login.png"></img>
                                Ashwini Pawar
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Change Password</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>   
            </nav>
            <!--End of Navbar-->
            <div id="container">
                <setion class="py-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="font-weight-bold m-0 text-dark mt-4 ml-4">Dashboard</h1>
                                <p class="text-muted lead ml-4">It's only the overview for the <span class="font-weight-bold text-dark">Admin</span>!!!</p>
                            </div>
                        </div>
                    </div>
                </setion>
                
                <section>
                    <center>
                    <div class="container-fluid">
                        <div class="row ml-4 mt-2 mb-4 ">
                        <div class="card col-lg-3" style="width:300px">
                            <img class="card-img-top " width="50px" height="200px" src="login_logo.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">John Doe</h4>
                                <p class="card-text">Some example text.</p>
                            </div>
                        </div>
                        <div class="card col-lg-3" >
                            <div class="card-body">
                                
                        </div>
                        </div>
                        
                    </div>
                    </center>
                </section>
               
               
            </div>
            <!--Footer Section-->
            <div>
                <footer>
                    <div class=" p-3 mb-2 bg-light text-dark text-center border-top border-bottom">
                        <h3 class="text-dark"> Student Feedback System</h3>
                        <span>
                            <hr style="width:30%">
                        </span>
                        <p class="text-dark">Project By :<br> Khushboo,Ashwini,Mansi,Neha</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    
<script>
    const openNav = () => {
        document.getElementById('sidebar-container').style.width = "350px";
        document.getElementById('close_btn').style.display = "block";
    }
    const closeNav = () => {
        document.getElementById('sidebar-container').style.width = "0";
        document.getElementById('close_btn').style.display = "none";
    }

</script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>  
</html>