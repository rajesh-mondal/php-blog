<?php include "includes/header.php"?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">View All Users</h1>

    <?php
      $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

      if( $do == 'Manage' ){?>
        <div class="row">
          <div class="col-md-12">
            <!-- All Users Table Start -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
              </div>
              <div class="card-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">Avater</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  
                    $query = "SELECT * FROM users";
                    $all_users = mysqli_query($connect, $query);
                    $i=0;
                    while ( $row = mysqli_fetch_assoc($all_users) ) {
                      $id       = $row['id'];
                      $name     = $row['name'];
                      $username = $row['username'];
                      $password = $row['password'];
                      $email    = $row['email'];
                      $phone    = $row['phone'];
                      $address  = $row['address'];
                      $avater   = $row['avater'];
                      $role     = $row['role'];
                      $join_date= $row['join_date'];
                      $i++; 
                    ?>
                      <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><img src="img/users-avater/<?php echo $avater ?>" class="user-avater"></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $role; ?></td>
                        <td>
                          <div class="action-bar">
                            <ul>
                              <li><i class="fa fa-eye"></i></li>
                              <li><i class="fa fa-edit"></i></li>
                              <li><i class="fa fa-trash"></i></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
              </div>
            </div>
            <!-- All Users Table End -->
            <div class="add-btn-box">
              <a href="users.php?do=Add" class="btn btn-primary">Add New User</a>
            </div>
          </div>
        </div>
      <?php
      }
      else if( $do == "Add" ){ ?>
        
        <div class="row">
          <div class="col-md-12">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Users</h6>
              </div>
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <form action="?do=Insert" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label>Full Name</label>
                          <input type="text" name="name" class="form-control" required="required" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" required="required" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" required="required" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label>Re-Type Password</label>
                          <input type="text" name="re-password" class="form-control" required="required" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label>Email Address</label>
                          <input type="email" name="email" class="form-control" required="required" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                          <label>Phone No.</label>
                          <input type="text" name="phone" class="form-control" required="required" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="address" class="form-control" required="required" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control">
                            <option>Please Select User Role</option>
                            <option value="1">Administrator</option>
                            <option value="2">Editor</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Profile Picture</label>
                          <input type="file" name="avater" class="form-control-file">
                        </div>
                        
                        <div class="form-group">
                          <input type="submit" name="submit" value="Add New User" class="btn btn-primary btn-flat btn-sm">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php }
      else if( $do == "Insert" ){
        echo "Add new users info into the DB";
      }
      else if( $do == "Edit" ){
        echo "User Profile Update Page";
      }
      else if( $do == "Update" ){
        echo "Update users info into the DB";
      }
      else if( $do == "Delete" ){
        echo "This is the User Delete Page";
      }
    ?>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
<?php include "includes/footer.php"?>