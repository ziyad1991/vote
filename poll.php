<!DOCTYPE html>
<html lang="en">
<?php
include  "includes/header.php"; 
include  "includes/functions.php"; 

?>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <?php 
include "includes/sidebar.php";

?>
    <!-- Content Wrapper -->
            <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>

                        <div class="col-xs-6">
                          <?php //add categroise 
                             
                          ?>
                            <?php insert_categorise(); ?>
                           
                        <div class="col-xs-20">
                        <form action="" method="post">
                          <div class="form-group">
                            <label for="cat_title">استفتاء</label>
                            <input type="text" class="form-control" name="cat_title"> 
                          </div>
                          <div class="form-group">                            
                            <input class="btn btn-primary"type="submit" name="submit" value="اضافة"> 
                          </div>
                          </div>                          
                        </form>



                        <?php
                        if(isset($_GET['edit'])){
                            $the_cat_id = $_GET['edit'];
                            include "includes/update.php";
                        }
                        ?>
                        </div>


                        <div class="col-lg-6">
                          <table class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>id</th>
                                <th>content</th>
                                <th>edit</th>
                                <th>delete</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>


                          <?php findAllcateogrise(); ?>


                                <?php //delete categorize 


                               deletecategrorize();
                                ?>
                                    
                            
                            </tbody>
                          </table>         
                    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
