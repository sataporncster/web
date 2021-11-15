<?php 
	include ('destroy_session.php');
	include('../pages/connect.php');
	$id = $_GET['id'];
	$strHi =  mysql_query("SELECT * FROM `telephone` where p_id = '$id'") or die ("Error select 01");	
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
<div class="panel-heading">แก้ไขข้อมูลโทรศัพท์ </div>                     
                    <div class="panel-body">
					<table>
			<form class="form-control" action="update_edit_phone_number.php" method="post">
				
                <div >
                	<input type="hidden" name="p_id" value="<?=$objHi['p_id'];?>">
					<input class="form-control" type="text" name="department_phone" id="department_phone" placeholder="ชื่อหน่วยงาน" value="<?=$objHi['department'];?>">
					<span class="focus-input100"></span>
				</div>
				<div >
					<input class="form-control" type="text" name="building_phone" id="building_phone" placeholder="ชื่ออาคาร/ชั้น" value="<?=$objHi['building'];?>">
					<span class="focus-input100"></span>
				</div>
				<div >
					<input class="form-control"" type="text" name="room_phone" id="room_phone" placeholder="ห้อง" value="<?=$objHi['room'];?>">
					<span class="focus-input100"></span>
				</div>
				<div >
					<input id="tel_phone" class="form-control" type="text" name="tel_phone" placeholder="เบอร์โทรศัพท์" value="<?=$objHi['phone'];?>">
					<span class="focus-input100"></span>
				</div>
                <div >
                	<select class="form-control" id="group_phone" name="group_phone">
                    	<option value="<?=$objHi['group'];?>">ค่าเดิม : <?=$objHi['group'];?></option>
                    	<option value="ภายใน">ภายใน</option>
                        <option value="ภายนอก">ภายนอก</option>
                        <option value="IP Phone">IP Phone</option>
                    </select>
					<span class="focus-input100"></span>
				</div>
				<div>
					<select class="form-control" id="status_phone" name="status_phone">
                    	<option value="<?=$objHi['status'];?>">ค่าเดิม : <?=$objHi['status'];?></option>
                    	<option value="ปกติ">ปกติ</option>
                        <option value="เสีย">เสีย</option>
                        <option value="ไม่มีคู่สาย">ไม่มีคู่สาย</option>ไม่ทราบสาเหตุ
                        <option value="ไม่ทราบสาเหตุ">ไม่ทราบสาเหตุ</option>
                    </select>
					<span class="focus-input100"></span>
				</div>
				<div >
					<button class="form-control btn-success" type="submit">
						<span>ตกลง</span>
					</button>
                    <a href="show_phone_number.php"><button class="form-control btn-gray" type="button">
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

    
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
