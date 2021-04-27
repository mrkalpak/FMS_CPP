
<?php
 if(isset($_POST['uname'])){
  extract($_POST);
  session_start();
  include "./database.php";
  $query = "SELECT * FROM student WHERE uname = '$uname' AND upassword='$password'";
  $result = mysqli_query($conn, $query);
  
  if($result){
    if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_row($result);
      $_SESSION['id']=$row[0];
      $_SESSION['uname']= $row[1];
      header('location:./student/student_home.php');
    }else{
      echo "<script>alert('invalid name or password');document.location='./student_login.php';</script>";
    }
    
  }else{
      echo "<script>alert('error for database connection');document.location='./';</script>";
  }
  exit;
}
?>
<?php include "./header.php"; ?>

<center>
  <section class="Login">
    <div class="container">
      <div class="full-content-center">
        <div class="col-md-5">
          <div class="col-xs-4">
            <div class="avatar">
              <img src="./img/slogo.png" />
            </div>
        
              <div class="login-form">
                <h2 text-align="center" class="form-title">STUDENT LOGIN</h2><br>
                <form id="form" action="./student_login.php" method="POST" class="register-form">
                  <div class="form-group">
                    <label for="name">
                      <i class="zmdi zmdi-account material-icons-name"></i>
                    </label>
                    <input type="text" id="icon" style="text-indent:19px" class="form-control form-control-lg"  placeholder="Enter username" name="uname" size="35%" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="pass">
                      <i class="zmdi zmdi-lock"></i>
                    </label>
                    <input type="password" id="pass" style="text-indent:19px" class="form-control form-control-lg" id="pwd" placeholder="Enter password" name="password" size="35%" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember"> Remember Me.
                      <!--<div class="valid-feedback">Valid.</div>
                    <div class="form-check-label">Check this checkbox to continue.</div>-->
                    </label>
                  </div>
                  <div>
                    <input type="submit" value="Login" class="btn btn-primary margin-bottom:5px" id="btn">
                  </div>
                  <br>
                  <div>
                    <a href="./register_student.php" class="register-student">Click here to Register</a>
                  </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


</center>



<?php include "./footer.php"; ?>