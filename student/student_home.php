<?php include "./header.php"; ?>
<?php 
session_start();
if (isset($_SESSION['id'])) {
    include "../database.php";
    
    
}else{
    echo "<script>alert('You are not login');document.location='../student_login.php'; </script>";
}
?>


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

<?php include "./footer.php"; ?>