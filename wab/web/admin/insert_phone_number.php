<?php 
	include ('destroy_session.php');
	include('../pages/connect.php');
	$username = $_SESSION["username"];
	$strHi =  mysql_query("SELECT * FROM `admin` where username = '$username'") or die ("Error select 01");	
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
                <h2 style="margin-top:0;">สวัสดี คุณ<?=$objHi['firstname']." ".$objHi['lastname']?></h2> 
                <p> เข้าสู่ระบบบริหารจัดการ </p>
            </div>
			 <div class="container-fluid">
                <div class="row cm-fix-height">
<div class="col-sm-6">
 <div class="panel panel-default">
<div class="panel-heading">เพื่มข้อมูลโทรศัพท์</div>                     
                    <div class="panel-body">
	<table>
			<form class="form-control" action="add_insert_phone_number.php" method="post">
				
                <div >
				  <span >ชื่อหน่วยงาน</span>
					<input class="form-control" type="text" name="department_phone" id="department_phone" placeholder="ชื่อหน่วยงาน">
					
				</div>
				<div >
				   <span >ชื่ออาคาร/ชั้น</span>
					<input class="form-control" type="text" name="building_phone" id="building_phone" placeholder="ชื่ออาคาร/ชั้น">
					
				</div>
				<div>
				<span >ห้อง</span>
					<input class="form-control"type="text" name="room_phone" id="room_phone" placeholder="ห้อง">
					
				</div>
				<div >
				<span >เบอร์โทร</span>
					<input id="tel_phone" class="form-control" type="text" name="tel_phone" placeholder="เบอร์โทร">
					
				</div>
                <div >
				<span >กลุ่ม</span>
                	<select class="form-control" id="group_phone" name="group_phone">
                    	<option value="ภายใน">ภายใน</option>
                        <option value="ภายนอก">ภายนอก</option>
                         <option value="IP Phone">IP Phone</option>
                    </select>
					
				</div>
				<div >
				<span>สถานะ</span>
					<select class="form-control" id="status_phone" name="status_phone">
                    	<option value="ปกติ">ปกติ</option>
                        <option value="เสีย">เสีย</option>
                        <option value="ไม่มีคู่สาย">ไม่มีคู่สาย</option>ไม่ทราบสาเหตุ
                        <option value="ไม่ทราบสาเหตุ">ไม่ทราบสาเหตุ</option>
                    </select>
					
				</div>
				</br>
				<div >
					<button class="form-control btn-success" type="submit">
						<span>ตกลง</span>
					</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="show_phone_number.php"><button class="form-control btn-info" type="button">
						<span>ยกเลิก</span>
					</button></a>
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

    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>    
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
