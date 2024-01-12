
<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/header.php') ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/nav.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Categories</h1>
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
          <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Categories</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr class="row_<?=$row['id']?>">
                                <td>
                                    <img width="100px" src="<?=url()?>/assets/images/category/<?=$row['image']?>" alt="">
                                    
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-danger delete_btn" value="<?=$row['id']?>">Delete</button>
                                    <a href="edit.php?id=<?=$row['id']?>" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                        
                            <tr >
                                <td colspan="6" style="text-align: center;">No Data Found</td>
                            </tr>
                        
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <!-- /.content -->
  </div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/my_blog/layout/footer.php'); ?>