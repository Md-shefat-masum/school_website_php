<?php 
    require_once('./includes/header.php'); 
    require_once('./function/function.php'); 

    if(!empty($_POST)){
        $name = $_POST['name'];
        $institute = $_POST['institute'];
        $semester = $_POST['semester'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $sub = $_POST['sub'];
        $file = $_FILES['file'];
        $fileName = 'file-'.time().'-'.rand(100000,1000000000).'.'.pathinfo($file['name'],PATHINFO_EXTENSION);

        $insert = "INSERT INTO student(name,institute ,semester,phone,gender,email,file,fname,sub) 
                        VALUES('$name','$institute','$semester','$phone','$gender', '$email','$fileName','$fname','$sub')";
    
        if(!empty($name)){
            if(mysqli_query($con, $insert)){
                move_uploaded_file($file['tmp_name'],'uploads/'.$fileName);
                echo "<script>";
                echo "window.location.replace('uploaded_notes_all.php')";
                echo "</script>";
                echo "<script> alert('file uploaded'); </script>";
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
                    <h3 class="text-themecolor"> Upload new Note</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">add notes</li>
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
                                        <form method="POST" action="" enctype="multipart/form-data" class="form-material m-t-40">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" name="name"  placeholder="name" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" name="institute" placeholder="institute" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" name="semester"  placeholder="semester" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" placeholder="subject" name="sub" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" placeholder="file name" name="fname" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <input type="number" name="phone"  placeholder="phone" rows="4" class="form-control form-control-line" value="" autofocus="">
                                            </div>

                                            <div class="form-group">
                                                <label></label>
                                                <select type="text" name="gender" class="form-control form-control-line" value="" autofocus=""> 
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                </select>
                                            </div>

                                            <div class="form-group" >
                                                <label></label>
                                                <input type="text" name="email"  placeholder="email" rows="4" class="form-control form-control-line" value="" autofocus="">
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <input type="file" name="file"  placeholder="file" rows="4" class="form-control form-control-line" value="" autofocus="">
                                            </div>

                                            <button type="submit" class="btn btn-outline-success">Add FILE</button>
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