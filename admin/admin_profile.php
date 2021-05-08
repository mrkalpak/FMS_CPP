<?php include "./header.php"; ?>
<!--Content section-->
            <div id="container">
                <setion class="py-3 container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2 class="dash font-weight-bold text-dark mt-4 " >Admin Profile</h2>
                        </div>
                    </div>
                </setion>
                <section>
                   <center>
                    <div class="container">
                        <div class="row mt-2 mb-4 ">
                        <div class="card card-body col-sm update" >
                            <form id="card_content">
                                <label >Full Name:</label>
                                <input type="text"  class="form-control" placeholder="Enter Full Name" id="fname" name="fname">
                                <br>
                                <label >Username:</label>
                                <input type="text" class="form-control" placeholder="Enter Username " id="uname">
                                <br>
                                <label >E-mail:</label>
                                <input type="email" class="form-control" placeholder="Enter email" id="email">
                                <br>
                                <label>Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                <br>
                                <button  class="btn btn-primary" onclick="changeContent(); return false">Update</button>
                            </form>
                        </div>
                        </div> 
                    </div>
                    </center>
                </section>
            </div>
<!--End of content section-->
               
            
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
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>  
</html>