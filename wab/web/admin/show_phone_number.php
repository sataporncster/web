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
            
<div class="container-fluid">
<div class="panel-heading">ข้อมูลโทรศัพท์ทั้งหมด  </div>                     
                    <div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="datatable-responsive">
						<thead>
							<tr >
							    <th class="column8">ลำดับ</th>
								<th class="column8">ชื่อหน่วยงาน</th>
								<th class="column9">ชื่ออาคาร/ชั้น</th>
								<th class="column10">ห้อง</th>
								<th class="column11">เบอร์</th>
								<th class="column12">กลุ่ม</th>
								<th class="column13">สถานะ</th>
                                <th class="column14">แก้ไข</th>
                                <th class="column14">ลบ</th>
							</tr>
							<tfoot>
							<tr >
							    <th class="column8">ลำดับ</th>
								<th class="column8">ชื่อหน่วยงาน</th>
								<th class="column9">ชื่ออาคาร/ชั้น</th>
								<th class="column10">ห้อง</th>
								<th class="column11">เบอร์</th>
								<th class="column12">กลุ่ม</th>
								<th class="column13">สถานะ</th>
                                <th class="column14">แก้ไข</th>
                                <th class="column14">ลบ</th>
							</tr>
							</tfoot>
						</thead>
						<tbody>
                        <?php
                        		 $count = 0;
								$strSQL =  mysql_query("SELECT * FROM `telephone`  order by p_id ASC") or die ("Select Error");
								
											while($objResult = mysql_fetch_array($strSQL)){
												$count++;
												echo "<tr>";
												echo "<th>".$count."</th>";
												echo "<td class='column8'>".$objResult['department']."</td>";
												echo "<td class='column9'>".$objResult['building']."</td>";
												echo "<td class='column10'>".$objResult['room']."</td>";
												echo "<td class='column11'>".$objResult['phone']."</td>";
												echo "<td class='column12'>".$objResult['group']."</td>";
												echo "<td class='column13'>".$objResult['status']."</td>";
												echo '<td class="column14" align="center" onclick="document.location = \'edit_phone_number.php?id='.$objResult['p_id'].'\';"><img src="../images/notepad.png" width="32" height="32" title="แก้ไข"></td>';
												echo "<td class='column14' align='center'>"?><a href=delete_phone_number.php?id=<?=$objResult['p_id']?> onClick="return confirm('ต้องลบ <?=$objResult['phone']?> ใช่ หรือ ไม่ ?');"><img src='../images/sign-delete.png' width='32' height='32' title="ลบ"></a><?php "</td>";
												echo "</tr>";
									
                                 			}
								 	
                                	?>
						</tbody>
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

    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#datatable-responsive').DataTable({
            responsive: true
			});
    });
    </script>
    </body>
</html>