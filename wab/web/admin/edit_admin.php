<?php 
	include ('destroy_session.php');
	include('../pages/connect.php');
	$username = $_SESSION["username"];
	$strHin =  mysql_query("SELECT * FROM `admin` where username = '$username'") or die ("Error select 01");	
	$objHin = mysql_fetch_array($strHin);	
    $admin_id = $_GET['id_admin'];
	$strHi =  mysql_query("SELECT * FROM `admin` where admin_id = '$admin_id'") or die ("Error select 01");	
	$objHi = mysql_fetch_array($strHi);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <title>Telephone MSU</title>
		  <!-- DataTables Responsive CSS -->
		 <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    </head>
	<?php include('header.php'); ?> 
	 <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">สวัสดี คุณ<?=$objHin['firstname']." ".$objHin['lastname']?></h2> 
                <p> เข้าสู่ระบบบริหารจัดการ </p>
            </div>
<div class="container-fluid">
<div class="panel-heading">ข้อมูลโทรศัพท์ทั้งหมด  </div>                     
                    <div class="panel-body">
  
					<table width="100%" class="table table-striped table-bordered table-hover" id="datatable-responsive">
		<form class="contact100-form validate-form" action="update_edit_admin.php" method="get">
		<span class="contact100-form-title"> แก้ไขข้อมูลส่วนตัว
				</span>
                <label class="label-input100">ชื่อผู้ใช้ รหัสผ่าน *</label>
                <div class="wrap-input100 rs1 validate-input">
                	<input type="hidden" name="id" value="<?=$objHi['admin_id'];?>">
					<input name="username" type="text" class="input100" id="first-name" value="<?=$objHi['username'];?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="password" value="<?=$objHi['password'];?>">
					<span class="focus-input100"></span>
				</div>
                <label class="label-input100">ชื่อ นามสกุล *</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="firstname" value="<?=$objHi['firstname'];?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="lastname" value="<?=$objHi['lastname'];?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">อีเมล *</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" value="<?=$objHi['email'];?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">เบอร์โทรศัพท์ *</label>
				<div class="wrap-input100 validate-input">
					<input id="phone" class="input100" type="text" name="phone" value="<?=$objHi['phone'];?>">
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>ตกลง<i class="zmdi zmdi-arrow-right m-l-8"></i></span>
					</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Profile_admin.php"><button class="contact100-form-btn" type="button">
						<span>ยกเลิก<i class="zmdi zmdi-arrow-right m-l-8"></i></span>
					</button></a>
				</div>
		  </form>
		</table>
				</div>
		</div>		
<!-- สิ้นสุดเขียนหน้าตาตรงนี้-->					

        <?php include('footer.php'); ?> 
        </div>
		
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
        <script src="assets/js/demo/home.js"></script>
		.
		 <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    

    
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
