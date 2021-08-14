<!-- header section -->
<?php require 'winclude/header.php'; ?>
<?php 
if (isset($_GET['fid'])) {
	include '../database/config.php';
	$faculty_id = mysqli_real_escape_string($conn, $_GET['fid']);
	$sql = "SELECT * FROM tbl_users WHERE user_id = '$faculty_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
	$sdfname = $row['first_name'];
	$sdlname = $row['last_name'];
	$sdgender = $row['gender'];
	$sddob = $row['dob'];
	$sdaddress = $row['address'];
	$sdemail = $row['email'];
	$sdphone = $row['phone'];
	$sddepartment = $row['department'];
	$sdcategory = $row['category'];
	$sdavatar = $row['avatar'];
	$sdstat = $row['acc_stat'];
	$qrcodetxt = 'ID:'.$faculty_id.', NAME: '.$sdfname.' '.$sdlname.', GENDER: '.$sdgender.', DEPARTMENT : '.$sddepartment.', CATEGORY : '.$sdcategory.'';

    }
} else {
    header("location:./");
}
	
}else{
	header("location:./");
}
?>

<body <?php if ($ms == "1") { print 'onload="myFunction()"'; } ?>  class="page-header-fixed">
    <div class="overlay"></div>
    <!-- profile side menu -->
    <?php require 'winclude/nav-sidemenu.php'; ?>
    <main class="page-content content-wrap">
     <!-- navbar section -->
     <?php require 'winclude/navbar.php'; ?>

     <!-- sidebar section -->
     <?php require 'winclude/sidebar.php'; ?>
     <!-- main section -->
            <div class="page-inner">
                <div class="page-title">
                    <h3>View Student - <?php echo "$sdfname"; ?> <?php echo "$sdlname"; ?></h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
						<div class="row">
                            <div class="col-md-5">

                                <div class="panel panel-white">
                                    <div class="panel-body">
									<div class="col-md-6">
                                <?php 
						        if ($sdavatar == NULL) {
						        print' <img class="img-responsive" src="../assets/images/'.$sdgender.'.png" alt="'.$sdfname.'">';
						        }else{
						        echo '<img src="data:image/jpeg;base64,'.base64_encode($sdavatar).'" class="img-responsive"  alt="'.$sdfname.'"/>';	
						        }
						
						        ?></div>
								<div class="col-md-6">
						        <?php print '<img width="150" src="../assets/qrcode/qr_img.php?d='.$qrcodetxt.'">'; ?>
						        </div>
								
                                    </div>
									<table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Registration Number</td>
                                                <td><b><?php echo "$faculty_id"; ?></b></td>
                                             
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>First Name</td>
                                                <td><b><?php echo "$sdfname"; ?></b></td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Last Name</td>
                                                <td><b><?php echo "$sdlname"; ?></b></td>
                                               
                                            </tr>
											<tr>
                                                <th scope="row">4</th>
                                                <td>Gender</td>
                                                <td><b><?php echo "$sdgender"; ?></b></td>
                                               
                                            </tr>
											<tr>
                                                <th scope="row">5</th>
                                                <td>Date of birth</td>
                                                <td><b><?php echo "$sddob"; ?></b></td>
                                               
                                            </tr>
											<tr>
                                                <th scope="row">6</th>
                                                <td colspan="2">Address<br><i><?php echo "$sdaddress"; ?></i></td>
                                          
                                               
                                            </tr>
											<tr>
                                                <th scope="row">7</th>
                                                <td>Email Address</td>
                                                <td><b><?php echo "$sdaddress"; ?></b></td>
                                               
                                            </tr>
											<tr>
                                                <th scope="row">8</th>
                                                <td>Phone Number</td>
                                                <td><b><?php echo "$sdphone"; ?></b></td>
                                               
                                            </tr>
											<tr>
                                                <th scope="row">9</th>
                                                <td>Department</td>
                                                <td><b><?php echo "$sddepartment"; ?></b></td>
                                               
                                            </tr>
											<tr>
                                                <th scope="row">10</th>
                                                <td>Category</td>
                                                <td><b><?php echo "$sdcategory"; ?></b></td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>  
  
                            </div>
							
							
							
							
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

        <div class="cd-overlay"></div>

        <script src="../assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/plugins/pace-master/pace.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="../assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="../assets/plugins/waves/waves.min.js"></script>
        <script src="../assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="../assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="../assets/plugins/moment/moment.js"></script>
        <script src="../assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="../assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="../assets/js/modern.min.js"></script>
        <script src="../assets/js/pages/table-data.js"></script>
		<script src="../assets/plugins/select2/js/select2.min.js"></script>
        <script src="../assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="../assets/js/pages/form-elements.js"></script>
		

		<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    </body>

</html>