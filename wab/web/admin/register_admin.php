<?php 
	include ('destroy_session.php');
	include('../pages/connect.php');
	$username = $_SESSION["username"];
	$strHin =  mysql_query("SELECT * FROM `admin` where username = '$username'") or die ("Error select 01");	
	$objHin = mysql_fetch_array($strHin);	
   
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
                <div class="row cm-fix-height">
<div class="col-sm-6">
 <div class="panel panel-default">
<div class="panel-heading">เพื่มข้อมูลโทรศัพท์</div>                     
                    <div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" >
			<form class="form-control" action="add_register_admin.php" method="post">
				<span class="contact100-form-title">
					เพิ่ม Admin
				</span>
                <label  >ชื่อผู้ใช้ รหัสผ่าน *</label>
                <div  >
					<input id="first-name" class="form-control"  type="text" name="username" placeholder="ชื่อผู้ใช้">
					<span></span>
				</div>
				<div >
					<input class="form-control"  type="password" name="password" placeholder="รหัสผ่าน">
					<span ></span>
				</div>
                <label  >ชื่อ นามสกุล *</label>
				<div  >
					<input id="first-name" class="form-control"  type="text" name="firstname" placeholder="ชื่อ">
					<span  ></span>
				</div>
				<div >
					<input class="form-control"  type="text" name="lastname" placeholder="นามสกุล">
					<span  ></span>
				</div>

				<label   for="email">อีเมล *</label>
				<div  >
					<input id="email" class="form-control"  type="text" name="email" placeholder="example@email.com">
					<span ></span>
				</div>

				<label   for="phone">เบอร์โทรศัพท์ *</label>
				<div >
					<input id="phone"class="form-control"  type="text" name="phone" placeholder="0888888888">
					<span class="focus-input100"></span>
				</div>
				<div >
					<button class="form-control btn-success" type="submit"><span>ตกลง</span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="profile_admin.php"><button class="form-control btn-info"  type="button"><span>ยกเลิก</span></button></a>
				</div>
			</form>
		</table>
		</div>
		</div>
		</div>
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
