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
                <input type="submit" name="addSettings" class="btn btn-primary btn-flat btn-sm">
              </div>
            </form>
            <!--- Website Logo and Favicon Upload End --->
          </div>
        </div>
      </div>

    </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
<?php include "includes/footer.php"?>