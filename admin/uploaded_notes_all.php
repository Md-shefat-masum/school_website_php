<?php 
    require_once('./includes/header.php'); 
    require_once('./function/function.php'); 
?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">uploaded Notes</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">uploads</li>
                    </ol>
                </div>
                <div>
                    <button
                        class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                            class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                    <div class="card card-default">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">All Students</h4>
                            </div>
                            <div class="card-body collapse show">
                                <div class="table-responsive">
                                    <table class="table product-overview">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Institue</th>
                                                <th>Semester</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>File Name</th>
                                                <th>Subject</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $select = 'SELECT * FROM student ORDER BY sub ASC';
                                                $query = mysqli_query($con,$select);
                                                while($data = mysqli_fetch_assoc($query))
                                                // foreach($query as $data)
                                                {
                                            ?>
                                            <tr>
                                                <td><?=$data['name']?></td>
                                                <td><?=$data['institute']?></td>
                                                <td><?=$data['semester']?></td>
                                                <td><?=$data['phone']?></td>
                                                <td><?=$data['gender']?></td>
                                                <td><?=$data['email']?></td>
                                                <td><?=$data['fname']?></td>
                                                <td><?=$data['sub']?></td>
                                                <td>
                                                    <a href="uploads/<?= $data['file'];?>" download class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit"><i class="ti-download"></i></a> 
                                                    <a onClick="return confirm('Delete This account?')" href="uploaded_notes_delete.php?d=<?= $data['file'];?>" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?php require_once('./includes/footer.php') ?>