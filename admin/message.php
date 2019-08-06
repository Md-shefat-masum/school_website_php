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
                    <h3 class="text-themecolor">NMDC CSE DEPARTMENT</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">dashboard</li>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-xlg-2 col-lg-3 col-md-4">
                                            <div class="card-body inbox-panel"><a href="app-compose.html" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Compose</a>
                                                <ul class="list-group list-group-full">
                                                    <li class="list-group-item active"> <a href="javascript:void(0)"><i class="mdi mdi-gmail"></i> Inbox </a><span class="badge badge-success ml-auto">6</span></li>
                                                    
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)"> <i class="mdi mdi-delete"></i> Trash </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                                            <div class="card-body p-t-0">
                                                <div class="card b-all shadow-none" style="margin-top:30px;"> 
                                                    <div class="inbox-center table-responsive" >
                                                        <table class="table table-hover no-wrap" >
                                                            <thead>
                                                                <tr>
                                                                    <td>name</td>
                                                                    <td>email &amp; Message</td>
                                                                    <td>mobile No</td>
                                                                    <td>GENDER</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody >
                                                                <?php 
                                                                    $select = 'SELECT * FROM contact ORDER BY id DESC';
                                                                    $query = mysqli_query($con,$select);
                                                                    while($data = mysqli_fetch_assoc($query))
                                                                    // foreach($query as $data)
                                                                    {
                                                                ?>
                                                                <tr class="unread" >
                                                                    <td class="hidden-xs-down"><?= $data['name'];?></td>
                                                                    <td class="max-texts"> <a href="app-email-detail.html"><span class="label label-info m-r-10"><?= $data['email'];?></span> <?= $data['message'];?></a></td>
                                                                    <td class="hidden-xs-down"><?= $data['phone'];?></td>
                                                                    <td class="text-right"> <?= $data['gender'];?></td>
                                                                </tr>
                                                                    <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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