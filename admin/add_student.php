<?php 
    require_once('./includes/header.php'); 
    require_once('./function/function.php'); 

    if(!empty($_POST)){
        $Name = $_POST['Name'];
        $Department = $_POST['Department'];
        $Semester = $_POST['Semester'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Gender = $_POST['Gender'];
        $Address = $_POST['Address'];
        $insert = "INSERT INTO stdinfo(Name,Department,Semester,Email,Phone,Gender,Address)
        VALUES('$Name','$Department','$Semester','$Email','$Phone','$Gender','$Address')";
        if(mysqli_query($con,$insert)){
            echo "<script> alert('success'); </script>";
        }
        else{
            echo "<script> alert('not success'); </script>";
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
                    <h3 class="text-themecolor">Add Student Info</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">admin</li>
                        <li class="breadcrumb-item active">Add student</li>
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
                                        <form method="POST" action="" class="form-material m-t-40">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" name="Name"  placeholder="name" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            
                                            <div class="form-group">
                                                <label></label>
                                                <input type="email" name="Email" placeholder="email" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="number" name="Phone"  placeholder="mobile no" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" placeholder="Semester" name="Semester" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" placeholder="Department" name="Department" class="form-control form-control-line" value="" autofocus=""> 
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <select type="text" name="Gender" class="form-control form-control-line" value="" autofocus=""> 
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                </select>
                                            </div>
                                            <div class="form-group" >
                                                <label></label>
                                                <textarea type="text" name="Address"  placeholder="Address" rows="4" class="form-control form-control-line" value="" autofocus=""></textarea> 
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