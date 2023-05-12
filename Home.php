<?php
session_start();
include('connect.php');
error_reporting(1);

if( !isset($_SESSION['userid']) ){
    header("location: Login.php");
}else{ 

    $userid = $_SESSION['userid'];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
   <?php include 'meta.php';?>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Top Bar Start -->
    <?php include "navbar.php"; ?>
    <div class="page-wrapper"> 
        <!-- Left Sidenav -->
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li> 
                               </ol>
                           </div>
                           <h4 class="page-title">Welcome <?php echo $_SESSION['name'];?> </h4>
                       </div><!--end page-title-box-->
                   </div><!--end col-->
               </div>

               <?php 
                $test1_classname = 'test-page-bg-pending';
               if($_SESSION['test1'] == 'Completed'){
                $test1_classname = 'test-page-bg-completed';
               }
                $test2_classname = 'test-page-bg-pending';

                 if($_SESSION['test2'] == 'Completed'){
                $test2_classname = 'test-page-bg-completed';
               }


               ?>
               <div class="row">
                <div class="col-sm-3 col-md-2 col-lg-3">
                    <a href="Test1.php"><div class=" <?php echo $test1_classname ?>">
                       <h5>Test 1</h5>
                       <h1>Learning Styles</h1>
                       <h3>Status - <span> <?php echo $_SESSION['test1'];?></span></h3>
                       <p>Click here to attempt the Test 1</p>

                   </div></a>
                   
               </div>

               <div class="col-sm-3 col-md-2 col-lg-3">
                <a  href="Test2.php"><div class=" <?php echo $test2_classname ?>">
                       <h5>Test 1</h5>
                    <h1>Multiple Intelligence</h1>
                       <h3>Status - <span> <?php echo $_SESSION['test2'];?></span></h3>

                   <p>Click here to attempt the Test 2</p>

               </div></a>
               
           </div>
       </div>
       






       
   </div><!-- container -->
   <?php include("footer.php");?>
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!--Plugins-->

<script src="assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>


<script src="functions/Staff.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>