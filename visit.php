<!DOCTYPE html>

<html lang="en">
<?php 


include  "includes/header.php"; 
include  "includes/functions.php"; 

?>
<?php

include  "includes/db.php"; 


insertvisit()


?>
<style>
  
  legend{
  word-wrap: break-word;

  }
</style>
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

        <!-- Begin Page Content -->
        <div class="container-fluid">



          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">أرجو الأجابة علي مايأتي</h1>


<form action="" method="post" enctype="multipart/form-data">

<fieldset class="form-group">
      <div class="row">
 
 <p>

 </p>
</fieldset>
<ol>
   <?php
$connection = mysqli_connect('localhost','root','','vote');

$query = "SELECT * FROM poll";
$getbranches = mysqli_query($connection,$query);

$answeryes = 1;
$answerno = 1;
while($branches = mysqli_fetch_assoc($getbranches)){

   $branches = $branches['content'];

$answern = $answerno++;
$answery = $answeryes++;



echo "<li><fieldset class='form-group'>
    <div class='row'>
      <legend class='col-form-label col-lg-2 pt-0' required>$branches</legend>
      <div class='col-sm-10'>
        <div class='form-check'>
<input class='form-check-input' type='radio' name='$answery' id='gridRadios1' value='1' required >
          <label class='form-check-label' for='gridRadios1'>
           موافق
          </label>
        </div>
        <div class='form-check'>
          <input class='form-check-input' type='radio' name='$answery' id='gridRadios2' value='2' required>
          <label class='form-check-label' for='gridRadios2'>
            غير موافق
          </label>
        </div>
        


      </div>
    </div>
  </fieldset>
</li> <hr>"
;
}
?>
</ol>

  <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="تأكيد">
      </div>
</form>


        <!-- /.container-fluid -->



      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
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
          <a class="btn btn-primary" href="../vote/logout.php">Logout</a>
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

</body>

</html>




