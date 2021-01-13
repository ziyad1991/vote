<!DOCTYPE html>
<html lang="en">

<?php 

include  "includes/header.php"; 
include  "includes/functions.php"; 


?>
<?php


if($_SESSION['role'] != 'admin'){


        header("Location: ../vote/visit.php");
    

}

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php 
include "includes/sidebar.php";

?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
               <?php include "includes/navbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->

          <!-- Content Row -->
            <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">عدد المستخدمين</div>
                      <?php 
                      $connection = mysqli_connect('localhost','root','','vote');

                      $getusers = "SELECT * FROM users";
                      $result = mysqli_query($connection,$getusers);

                      $rowcount=mysqli_num_rows($result);





                       ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">عدد  المستفتين</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <?php 
                      $connection = mysqli_connect('localhost','root','','vote');

                      $getusers1 = "SELECT * FROM users WHERE voted = 'yes'";
                      $result = mysqli_query($connection,$getusers1);

                      $rowcount1=mysqli_num_rows($result);





                     

                      echo $rowcount1   ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <!-- /.container-fluid --><div class="col-lg-6 mb-2">

              <div class="row">                                                                                <!-- /first month -->

           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">نظرة عامة </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                   <?php 
                      $connection = mysqli_connect('localhost','root','','vote');

                      $getusers2 = "SELECT * FROM answers WHERE questionid = '1'";
                      $result = mysqli_query($connection,$getusers1);

                      $rowcount2=mysqli_num_rows($result);





                     

                       ?>


                  <thead>
                    <tr>
                      <th> البند</th>
                      <th>موافق</th>
                      <th>غير موافق</th>
                     

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                 <?php visitstable1();?>
               </tr>

                    <tr>
                 <?php visitstable2();?>
               </tr>
                    <tr>
                 <?php visitstable3();?>
               </tr>
                    <tr>
                 <?php visitstable4();?>
               </tr>
                    <tr>
                 <?php visitstable5();?>
               </tr>
                    <tr>
                 <?php visitstable6();?>
               </tr>

                    <tr>
                 <?php visitstable7();?>
               </tr>     <tr>
                 <?php visitstable8();?>
               </tr>
                    <tr>
                 <?php visitstable9();?>
               </tr>
                    <tr>
                 <?php visitstable10();?>
               </tr>
                    <tr>
                 <?php visitstable11();?>
               </tr>
                    <tr>
                 <?php visitstable12();?>
               </tr>
                    <tr>
                 <?php visitstable13();?>
               </tr>
                        <tr>
                 <?php visitstable14();?>
               </tr>

         <tr>
                 <?php visitstable15();?>
               </tr>

         <tr>
                 <?php visitstable16();?>
               </tr>

         <tr>
                 <?php visitstable17();?>
               </tr>

         <tr>
                 <?php visitstable18();?>
               </tr>

         <tr>
                 <?php visitstable19();?>
               </tr>

         <tr>
                 <?php visitstable20();?>
               </tr>

         <tr>
                 <?php visitstable21();?>
               </tr>

         <tr>
                 <?php visitstable22();?>
               </tr>

         <tr>
                 <?php visitstable23();?>
               </tr>

         <tr>
                 <?php visitstable24();?>
               </tr>

         <tr>
                 <?php visitstable25();?>
               </tr>

         <tr>
                 <?php visitstable26();?>
               </tr>

         <tr>
                 <?php visitstable27();?>
               </tr>

         <tr>
                 <?php visitstable28();?>
               </tr>

         <tr>
                 <?php visitstable29();?>
               </tr>

         <tr>
                 <?php visitstable30();?>
               </tr>

         <tr>
                 <?php visitstable31();?>
               </tr>

         <tr>
                 <?php visitstable32();?>
               </tr>

         <tr>
                 <?php visitstable33();?>
               </tr>

         <tr>
                 <?php visitstable34();?>
               </tr>

         <tr>
                 <?php visitstable35();?>
               </tr>

         <tr>
                 <?php visitstable36();?>
               </tr>

         <tr>
                 <?php visitstable37();?>
               </tr>

         <tr>
                 <?php visitstable38();?>
               </tr>

         <tr>
                 <?php visitstable39();?>
               </tr>

         <tr>
                 <?php visitstable40();?>
               </tr>
  <tr>
                 <?php visitstable41();?>
               </tr>
  <tr>
                 <?php visitstable42();?>
               </tr>
  <tr>
                 <?php visitstable43();?>
               </tr>
  <tr>
                 <?php visitstable44();?>
               </tr>
  <tr>
                 <?php visitstable45();?>
               </tr>
  <tr>
                 <?php visitstable46();?>
               </tr>
  <tr>
                 <?php visitstable47();?>
               </tr>
  <tr>
                 <?php visitstable48();?>
               </tr>
  <tr>
                 <?php visitstable49();?>
               </tr>
  <tr>
                 <?php visitstable50();?>
               </tr>
  <tr>
                 <?php visitstable51();?>
               </tr>
  <tr>
                 <?php visitstable52();?>
               </tr>
  <tr>
                 <?php visitstable53();?>
               </tr>
  <tr>
                 <?php visitstable54();?>
               </tr>
  <tr>
                 <?php visitstable55();?>
               </tr>
  <tr>
                 <?php visitstable56();?>
               </tr>
  <tr>
                 <?php visitstable57();?>
               </tr>
  <tr>
                 <?php visitstable58();?>
               </tr>
  <tr>
                 <?php visitstable59();?>
               </tr>



               </tbody>


              </table>
              </div>
            </div>
          </div>

              


              <!-- Color System -->
              
            </div>     <!-- Content Column -->
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Developed By Enginner Ziyad Shoeky</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Developed By Enginner Ziyad Shoeky</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../vote/login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
