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
                <h6 class="m-0 font-weight-bold text-primary">Add Users</h6>
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
          </div>
        </div>
      <?php
      }
      else if( $do == "Add" ){
        echo "Add New User Page";
      }
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