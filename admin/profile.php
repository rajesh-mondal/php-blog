<?php include "includes/header.php"?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Manage Your Profile</h1>

    <div class="row">
        <!--- Profile Card --->
        <div class="col-md-4">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Your Profile</h6>
            </div>
            <div class="card-body user-profile">
                <?php
                    $user_id = $_SESSION['id'];
                    $query = "SELECT * FROM users WHERE id = '$user_id' ";
                    $the_user = mysqli_query($connect, $query);
                    while( $row = mysqli_fetch_assoc($the_user) ){
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
                    }
                ?>
                <img src="img/users-avater/<?php echo $avater; ?>" class="img-fluid">
                <table class="table table-dark table-striped table-bordered">
                    <tbody>
                        <tr>
                        <th scope="col">Fullname</th>
                        <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                        <th scope="col">Username</th>
                        <td><?php echo $username; ?></td>
                        </tr>
                        <tr>
                        <th scope="col">Email Address</th>
                        <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                        <th scope="col">Phone No.</th>
                        <td><?php echo $phone; ?></td>
                        </tr>
                        <tr>
                        <th scope="col">User Role</th>
                        <td>
                            <?php
                            if ( $role == 0 ){
                                echo '<p>Administrator</p>';
                            }
                            else if ( $role == 1 ){
                                echo '<p>Editor</p>';
                            }
                            else {
                                echo '<p>Suspended</p>';
                            }
                            ?>
                        </td>
                        </tr>
                        <tr>
                        <th scope="col">Join Date</th>
                        <td><?php echo $join_date; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>

        <!--- Profile Update --->
        <div class="col-md-9">

        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
<?php include "includes/footer.php"?>