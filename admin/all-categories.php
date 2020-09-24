<?php include "includes/header.php"?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <!-- Page Heading -->
        <h3 class="h3 mb-4 text-gray-800">View All Categories</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <!-- Add New Category Field Start -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
          </div>
          <div class="card-body">
            <!-- Category Form Start -->
            <form action="" method="">
              <div class="form-group">
                <label for="Category">Add Category Name</label>
                <input type="text" name="category" class="form-control" required="required" autocomplete="off">
              </div>
              <div class="form-group">
                <input type="submit" name="addCategory" value="Add Category" class="btn btn-primary">
              </div>
            </form>
            <!-- Category Form End -->
          </div>
        </div>
      </div>
      <!-- Add New Category Field End -->

      <!-- View All Category list Start -->
      <div class="col-lg-6">

      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View All Category</h6>
          </div>
          <div class="card-body">    
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM categories";
                  $select_categories = mysqli_query( $connect, $query );

                  while ($row = mysqli_fetch_assoc($select_categories)){
                    
                    $cat_id   = $row['cat_id'];
                    $cat_name = $row['cat_name'];

                    ?>
                    <tr>
                      <th scope="row"><?php echo $cat_id; ?></th>
                      <td><?php echo $cat_name; ?></td>
                      <td>
                        <div class="btn-group">
                          <a href="" class="btn btn-primary btn-sm">Update</a>
                          <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </td>
                    </tr>

                    <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- View All Category list Start -->
    </div>
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

<?php include "includes/footer.php"?>