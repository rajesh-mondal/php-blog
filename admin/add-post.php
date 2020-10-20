<?php include "includes/header.php"?>
  <!-- Begin Page Content -->
  <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Publish New Post</h1>

      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4">
            <!-- Card Section Title -->
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add New Post</h6>
            </div>

            <!-- Body Section Body -->
            <div class="card-body">
                <!-- Add New Post Form Start -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" name="post-title" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="post-desc" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="post-author">Post Author</label>
                        <input type="text" name="post-author" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="post-thumbnail">Post Thumbnail</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label for="post-category">Post Category</label>
                        <input type="text" name="post-category" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" name="post-tags" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="add-post" value="Publish Post" class="btn btn-primary">
                    </div>
                </form>
                <!-- Add New Post Form End -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
    <?php
    
    //Add New Blog Post Function
    if( isset($_POST['add-post']) ){
      $post_title       = $_POST['post-title'];
      $post_desc        = $_POST['post-desc'];
      $post_author      = $_POST['post-author'];

      $post_image       = $_FILES['image']['name'];
      $post_image_temp  = $_FILES['image']['temp_name'];

      $post_category    = $_POST['post-category'];
      $post_tags        = $_POST['post-tags'];

      move_uploaded_file($post_image_temp, "img/posts-thumbnail/$post_image");

      $query = "INSERT INTO posts (post_title, post_description, post_author,	post_thumb, post_category,	post_tags, post_date) VALUES ('$post_title','$post_desc','$post_author','$post_image','$post_category','$post_tags', now())";

      $add_new_post = mysqli_query($connect, $query);

      if ( !$add_new_post ) {
        die( "Query Failed" . mysqli_error( $connect ) );
      } else {
          header("Location: allposts.php");
      }
    }

    ?>
  </div>
  <!-- End of Main Content -->
<?php include "includes/footer.php"?>