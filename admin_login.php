<?php include "./header.php"; ?>
<!--Body of the page-->
<section>
   <center>

      <div class="col-lg-6  col-md-6  col-12">
         <img class="avatar" src="./img/login_logo.png" width="60px" height="70px" alt="avatar"></img><br><br><br>
         <h1 class="heading">Admin Login</h1><br>
      </div>

      <form name="myform" method="post" action="#" class="was-validated w-50">
         <div class="form-group">
            <img src="./img/user_login.png"></img>
            <input type="text" class="form-control " placeholder="Enter username" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
         </div>
         <div class="form-group">
            <img src="./img/pwd_icon.png"></img>
            <input type="password" class="form-control " placeholder="Enter password" name="pswd" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
         </div>
         <button type="button" class="btn btn-primary">Login</button>
      </form>
   </center>
</section>
<br>
<br>
<!--Ends Content of the page-->
<!--Footer-->
<?php include "./footer.php"; ?>