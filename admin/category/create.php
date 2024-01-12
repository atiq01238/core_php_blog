
<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/header.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/nav.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/sidebar.php'); ?>
<?php
    $category = new CategoryController($conn);
    $result = false;
    if(isset($_POST['submit']))
    {
        $result = $category->store();
    }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Category</h3>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <?php if($result){ ?>
                            <div class="callout callout-success">
                                <h5>Data Inserted</h5>
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="CategoryName">Category Name</label>
                                <input type="text" name="name" required class="form-control" id="CategoryName" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
</div>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <!-- /.content -->
  </div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/footer.php'); ?>