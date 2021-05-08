<?php include "./header.php"; ?>

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
                <a href="index.html" class="d-block text-light p-3"> <i class="bi bi-grid-3x3-gap-fill mr-2 lead"></i>Home</a>    
                <a href="Student_home.html" class="d-block text-light p-3"> <i class="bi bi-grid-3x3-gap-fill mr-2 lead"></i>Dashboard</a>
                <a href="student_profile.html" class="d-block text-light p-3"> <i class="bi bi-person-square mr-2 lead"></i>Profile</a>
                <a href="give_feedback.html" class="d-block text-light p-3"> <i class="bi bi-menu-up mr-2 lead"></i>Give Feedbacks</a>
            </div>
        </div>
        <!--end of sidebar-->
        <!--Navbar-->
        <div class="flex-grow-1">
            <nav class="navbar navbar-expand-sm navbar-light bg-light border-bottom ">
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-light square shadow-sm px-2 mb-4"
                    onclick="openNav()">
                    <i class="fa fa-bars mr-1"></i>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span><img class="img-fluid rounded-circle mr-2" src="login_logo.png" alt="..." width="50"
                            height="50"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <span class=".pill"><img src="https://img.icons8.com/plasticine/40/000000/automatic.png" />Student</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="student_profile.html">Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--End of Navbar-->
            <!--content section-->
            <div id="container">
                <setion class="py-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="dash font-weight-bold m-0 text-dark mt-4 ml-4"><span
                                        style="margin-left: 60px;">Welcome to Student Feedback System.....!</span></h2>
                            </div>
                        </div>
                    </div>
                </setion>

                <section>
            </div>
            <!--end content section-->
            <!--Footer Section-->
            <div>
                <footer class="page-footer pt-4 p-3 mb-2 bg-light text-dark text-center border-top border-bottom">
                    <h3 class="text-dark"> Student Feedback System</h3>
                    <hr style="width:30%">
                    <p class="text-dark">Project By :<br> Khushboo,Ashwini,Mansi,Neha</p>
                </footer>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<?php include "./footer.php"; ?>