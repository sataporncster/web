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
		
		  <!-- DataTables Responsive CSS -->
		 <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
	
        <title>Telephone MSU</title>
    </head>
   <?php include('header.php'); ?> 
<!-- เริ่มเขียนหน้าตาตรงนี้-->

 <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">กำลังปรับปรุง........</h2> 
                <p>โทรศัพท์ภายในมหาวิทยาลัยมหาสารคาม เบอร์กลางมหาวิทยาลัย โทร. 043-754333 ,043-754321-40</p>
            </div>
			<!--
<div class="container-fluid">
<div class="panel-heading">ข้อมูลโทรศัพท์ </div>   
                    <div class="panel-body">
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
					<thead>
						<tr >
                        	<th >ลำดับ</th>
							<th >ชื่อหน่วยงาน</th>
							<th >ชื่ออาคาร/ชั้น</th>
							<th >ห้อง</th>
							<th >เบอร์โทรศัพท์</th>
							<th >กลุ่ม</th>
                            <th >สถานะ</th>
						</tr>
					</thead>			
				<tbody>
                <?php
					include('connect.php');
					$count = 0;
						$strSQL =  mysql_query("SELECT * FROM `telephone`   order by p_id ASC") or die ("Select Error");
							
											while($objResult = mysql_fetch_array($strSQL)){
												$count++;
												echo "<tr>";
											    echo "<th>".$count."</th>";
												echo "<td>".$objResult['department']."</td>";
												echo "<td>".$objResult['building']."</td>";
												echo "<td>".$objResult['room']."</td>";
												echo "<td>".$objResult['phone']."</td>";
												echo "<td>".$objResult['group']."</td>";
												echo "<td>".$objResult['status']."</td>";
												echo "</tr>";
	                             			
								 		}

                                	?>
				</tbody>
			</table>
			<div class="panel-heading">สำนักงานอธิการบดี</div>
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables2">
					<thead>
						<tr >
                        	<th >ลำดับ</th>
							<th >ชื่อหน่วยงาน</th>
							<th >ชื่ออาคาร/ชั้น</th>
							<th >ห้อง</th>
							<th >เบอร์โทรศัพท์</th>
							<th >กลุ่ม</th>
                            <th >สถานะ</th>
						</tr>
					</thead>			
				<tbody>
                <?php
					include('connect.php');
					$count = 0;
						$strSQL =  mysql_query("SELECT * FROM `telephone`  order by p_id ASC") or die ("Select Error");
							
											while($objResult = mysql_fetch_array($strSQL)){
												$count++;
												echo "<tr>";
											    echo "<th>".$count."</th>";
												echo "<td>".$objResult['department']."</td>";
												echo "<td>".$objResult['building']."</td>";
												echo "<td>".$objResult['room']."</td>";
												echo "<td>".$objResult['phone']."</td>";
												echo "<td>".$objResult['group']."</td>";
												echo "<td>".$objResult['status']."</td>";
												echo "</tr>";
	                             			
								 		}

                                	?>
				</tbody>
			</table>
					</div>
					-->
<!-- สิ้นสุดเขียนหน้าตาตรงนี้-->					

                
            </div>
            <?php include('footer.php'); ?> 
        </div>
        <script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
        <script src="assets/js/jquery.cookie.min.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/clearmin.min.js"></script>
		 <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables1').DataTable({
            responsive: true
			});
    });
    </script>
	<script>
    $(document).ready(function() {
        $('#dataTables2').DataTable({
            responsive: true
			});
    });
    </script>
    </body>
</html>