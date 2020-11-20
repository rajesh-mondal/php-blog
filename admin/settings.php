<?php include "includes/header.php"?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Website Settings</h1>

    <div class="row">
      <div class="col-md-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Website Logo and Favicon</h6>
          </div>
          <div class="card-body">
            <!--- Website Logo and Favicon Upload Start --->
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Upload Logo</label>
                <input type="file" name="logo" class="form-control-file">
              </div>

              <div class="form-group">
                <label>Upload Favicon</label>
                <input type="file" name="favicon" class="form-control-file">
              </div>

              <div class="form-group">
                <input type="submit" name="addSettings" value="Save" class="btn btn-primary btn-flat btn-sm">
              </div>
            </form>
            <!--- Website Logo and Favicon Upload End --->
          </div>
        </div>
        <?php
          if(isset($_POST['addSettings'])){
            $logo         = $_FILES['logo'];
            $logoName     = $_FILES['logo']['name'];
            $logoTmp      = $_FILES['logo']['tmp_name'];

            $favicon      = $_FILES['favicon'];
            $faviconName  = $_FILES['favicon']['name'];
            $faviconTmp   = $_FILES['favicon']['tmp_name'];

            $logoFile      = rand(0,200000). '_' . $logoName;
            $faviconFile   = rand(0,200000). '_' . $faviconName;
            move_uploaded_file($logoTmp, "img\\" . $logoFile);
            move_uploaded_file($faviconTmp, "img\\" . $faviconFile);

            $sql = "UPDATE settings SET logo='$logoFile', favicon = '$faviconFile' WHERE set_id = 1";
            $add_media = mysqli_query($connect, $sql);

            if( !$add_media ){
              die("Operation Failed");
            }else{
              header("Location: settings.php");
            }
          }
        ?>
      </div>

    </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
<?php include "includes/footer.php"?>