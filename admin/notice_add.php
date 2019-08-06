<?php 
    require_once('./includes/header.php'); 
    require_once('./function/function.php'); 
    if(!empty($_POST)){
        $name = $_POST['name'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $file = $_FILES['file'];
        $fileName = 'file-'.time().'-'.rand(100000,1000000000).'.'.pathinfo($file['name'],PATHINFO_EXTENSION);
       
    $insert = "INSERT INTO notice(name,title,file,description) 
                        VALUES('$name','$title','$fileName','$description')";
    if(!empty($name)){
            if(mysqli_query($con, $insert)){
                move_uploaded_file($file['tmp_name'],'noticeboard/'.$fileName);
                echo "<script>";
                echo "window.location.replace('notice_all.php')";
                echo "</script>";
                echo "<script> alert('registration success'); </script>";
            }
        }
    }
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
                    <h3 class="text-themecolor">All Notices</h3>
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
                            <div class="col-md-6 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data" action="" class="form-material m-t-40">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" name="name"  placeholder="name" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="title" placeholder="title" name="title" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <textarea type="text" name="description"  placeholder="description" rows="4" class="form-control form-control-line" value="" autofocus=""></textarea> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="file" placeholder="Semester" name="file" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <button type="submit" class="btn btn-outline-success">Add info</button>
                                        </form>
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