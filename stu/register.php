<!DOCTYPE html>
<?php include '../includes2/check_reply.php'; ?>
<html>

<head>

    <title>Student Login</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="../assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="../assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <!-- <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="../assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
    <link href="../assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
    <link href="../assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
    <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
    <link href="../assets/images/icon.png" rel="icon">
    <link href="../assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/snack.css" rel="stylesheet" type="text/css"/>
    <script src="../assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="../assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

</head>
<body <?php if ($ms == "1") { print 'onload="myFunction()"'; } ?>  class="page-login">

    <main class="page-content" >

        <div class="page-inner">
            <!-- <img src="institute.png" alt="" height="100" width="250"> -->
            <div id="main-wrapper" style="position:relative;top:50px;">
                <div class="row">
                    <div class="col-md-4" style="position:relative;bottom:70px;"><img src="student.png" alt="" height="370" width="350"></div>
                    <div class="col-md-8 center">
                        <div class="login-box">
                            <a href="./" class="logo-name text-lg text-center">E-CLASSROOM REGISTRATION FOR STUDENT</a>
                            <p class="text-center m-t-md">Please <a href="index.php" style="text-decoration: none">login</a> if you are already registered.</p>
                            <form class="m-t-md" action="../stu_pages/authentication.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name"  autocomplete="off" name="fname" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name"  autocomplete="off" name="lname" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email or Registration No."  autocomplete="off" name="user" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Your strong password" name="login" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile Number"  autocomplete="off" name="mobile" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="D.O.B"  autocomplete="off" name="dob" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="gender" class="form-control" autocomplete="off" required >
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="department" class="form-control" autocomplete="off" required >
                                            <option>Select Department</option>
                                            <?php 

                                            $sql = "SELECT * FROM tbl_departments";
                                            $res = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_array($res)){
                                            
                                            ?>
                                            <option><?php echo $row['name'] ?></option>

                                            <?php 

                                            }
                                            
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="branch" class="form-control shadow-sm" autocomplete="off" required >
                                            <option>Select Branch</option>
                                            <?php 

                                            $sql = "SELECT * FROM tbl_categories";
                                            $res = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_array($res)){
                                            
                                            ?>
                                            <option><?php echo $row['name'] ?></option>

                                            <?php 

                                            }
                                            
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                <a href="../forgot_pw.php" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php if ($ms == "1") {
    ?> <div class="alert alert-success" id="snackbar"><?php echo "$description"; ?></div> <?php	
}else{

}
?>
<script src="../assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/plugins/pace-master/pace.min.js"></script>
<script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<!-- <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/plugins/switchery/switchery.min.js"></script>
<script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="../assets/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="../assets/plugins/waves/waves.min.js"></script>
<script src="../assets/js/modern.min.js"></script>
<script>
    function myFunction() {
        var x = document.getElementById("snackbar")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>
</body>
</html>