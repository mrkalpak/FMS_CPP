<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="keywords" content="">
   <title>FMS</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="index.css">
   </link>
   <script src="index.js"></script>
</head>

<body>
      <!-- Page content holder -->
      <div class="page-content pt-3"  id="content">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      
            <!-- Toggle button -->
            <button id="sidebarCollapse" type="button" class="btn btn-dark bg-dark square shadow-sm px-2 mb-4" onclick="closeNav()" ondblclick="openNav()">
               <i class="fa fa-bars mr-1"></i>
               <span class="navbar-toggler-icon" ></span>
            </button>
      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" width=100%>
               <span ><img loading="lazy" src="login_logo.png" alt="..." width="50" height="50"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html" ;>Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="admin_login.html" ;>&nbsp Admin</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="student_login.html" ;>&nbsp Student</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="faculty_login.html" ;>&nbsp Faculty</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html" ;>&nbsp About Us</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
            </div>
         </nav>
      <!-- Vertical navbar -->
      <div id="side-nav">
      <div class="vertical-nav bg-white mt-3" id="sidebar">
         <div class="py-4 px-3 mb-4 mt-4 bg-light">
            <div class="media d-flex align-items-center">
               <img loading="lazy" src="images/p-1.png" alt="..." width="80" height="80"
                  class="mr-3 rounded-circle img-thumbnail shadow-sm">
               <div class="media-body">
                  <h4 class="m-0">Ashwini</h4>
                  <p class="font-weight-normal text-muted mb-0">Web developer</p>
               </div>
            </div>
         </div>
      
         <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>
      
         <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
               <a href="#" class="nav-link text-dark bg-light">
                  <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                  home
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link text-dark">
                  <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                  about
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link text-dark">
                  <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                  services
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link text-dark">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  Gallery
               </a>
            </li>
         </ul>
      
         <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>
      
         <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
               <a href="#" class="nav-link text-dark">
                  <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                  area charts
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link text-dark">
                  <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                  bar charts
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link text-dark">
                  <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                  pie charts
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link text-dark">
                  <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                  line charts
               </a>
            </li>
         </ul>
      </div>
      </div>
      <!-- End vertical navbar -->
   
      <!--DEmo Content-->
      <div class="container-fluid" id="content_sec">
         <div class="row">
            <div class="col-lg-6  col-md-6  col-12">
               <br>
               <br>
               <h3 style="color:rgb(243, 107, 29)">
                  Students are our Pride
               </h3>
               <hr>
               <h6>
                  Their response are really important for our Institute...
               </h6>
               <br>
               <br>
               <p style="text-align: justify;">
                  Online STUDENT FEEDBACK SYSTEM is the web based application which is used to collecting information
                  from the Students, then store into the database and provides the automatic generation of a feedback
                  which is given by the students. This procedure explains that there is a good relationship between
                  the students learning environment and teachers.
                  <br>
                  <br>
                  The main advantage of this system is to giving feedback about the lecturers and viewing by the lecturers
                  also by Principal/HOD. We have developed Student Feedback System to provide Feedback in a quick and easy
                  manner which will be useful to your teacher(s) to enhance the quality of Education.
               </p>
            </div>
            <div class="col-lg-6  col-md-6  col-12">
               <img class="float-right img-fluid" id="img" src="430.jpg" width="100%" height="100px"></img>
            </div>
         </div>
      </div>
      <!--End DEmo Content-->
   <script>
      const openNav = () => {
         document.getElementById('sidebar').style.width="250px";
      }
      const closeNav = () => {
         document.getElementById('sidebar').style.width = "0rem";
         document.getElementById('content_sec').style.width = "100%";
      }

   </script>  

      

   <footer>
      <div class=" bg-dark text-white-50 text-center">
         <h3> Student Feedback System</h3>
         <hr>
         <p>Project By :<br> Khushboo,Ashwini,Mansi,Neha</p>
      </div>
   </footer>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>