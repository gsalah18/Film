<?php
$path="C:/xampp/htdocs/gradProject/film/" ; 
require($path."handlers/db.php");   
require($path."admin/handlers/get-cats.php");  


?>
  
                <?php
                if(isset($_SESSION['success']))  { ?>
                <div class="alert alert-success">
                 <?php echo $_SESSION['success']; ?>
                </div>
                <?php unset($_SESSION['success']);  }

                 if(isset($_SESSION['errors'])) { ?>
                <div class="alert alert-danger"> <?php
                foreach ($_SESSION['errors'] as $error){
                 echo $error ;
                 } ?>
                </div>
                <?php unset($_SESSION['errors']);
                  }
              ?>          

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">add client payment </h3>
              </div>
              <!-- /.card-header --> 
              <!-- form start -->    
              <form method="post" action="<?= URL ?>handlers/add-paymentDetails.php" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">amount</label>                  
                    <input type="text" name="amount"  placeholder="amount" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">note</label>                  
                    <input type="text" name="note" class="form-control" placeholder="note" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">plan</label>
                    <input type="textarea" name="plan" class="form-control" id="exampleInputEmail1" placeholder="plan">
                  </div>

                                      <input type="text" name="userId" value="<?= ($_SESSION['userId']) ?>" />

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

