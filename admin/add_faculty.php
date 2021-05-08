<?php include "./header.php"; ?>
<!--content section-->
            <div id="container">
                <setion class="py-3 container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <h1 class="dash font-weight-bold m-0 text-dark mt-4 ml-4 ">
                                <span style="margin-left: 60px;">Add Faculty</span>
                            </h1>
                        </div>
                    </div>  
                </setion>
                <section>
                    <div class="container ">
                        <div class="row mt-2 mb-4 justify-content-center">
                            <div class="card card-body col-sm-6 update ">
                                <form id="card_content">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Full Name" id="fname" name="fname" required> 
                                    <br>
                                    <label>Username:</label>
                                    <input type="text" class="form-control" placeholder="Enter Username " id="uname" required>
                                    <br>
                                    <label>E-mail:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" id="email" required>
                                    <br>
                                    <label>Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter password" id="pwd" required>
                                    <br>
                                    <label>Subject:</label>
                                    <input type="text" class="form-control" placeholder="Enter Subject" id="sub" required>
                                    <br>
                                    <button class="btn btn-danger justify-content-center">Add</button>
                                </form>
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
            <!--end content section-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
