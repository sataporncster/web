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
<div class="panel-heading">ข้อมูลโทรศัพท์ทั้งหมด  </div>                     
                    <div class="panel-body">
  
					<table width="100%" class="table table-striped table-bordered table-hover" id="datatable-responsive">
						<thead>
							<tr class="table100-head">
								<th class="column1">ชื่อ</th>
								<th class="column2">นามสกุล</th>
								<th class="column3">ชื้อผู้ใช้</th>
								<th class="column4">รหัสผ่าน</th>
								<th class="column5">เบอร์โทรศัพท์</th>
								<th class="column6">อีเมล</th>
                                <th class="column7">แก้ไข</th>
                                <th class="column7">ลบ</th>
							</tr>
						</thead>
						<tbody>
                        <?php
							if($objHi['status']==0){
                        		$strSQL =  mysql_query("SELECT * FROM admin  order by status ASC") or die ("Select Error");
								if(mysql_num_rows($strSQL)==0){
									echo    "<tr>";
									echo 		"<td style='text-align:center' bgcolor=#FF0004 colspan='8'>ไม่มีข้อมูลในระบบ</td>";
									echo 	"</tr>";    
			    		?>
                
						<?php
								}
									else
										{
											while($objResult = mysql_fetch_array($strSQL)){
												echo "<tr>";
												echo "<td class='column1'>".$objResult['firstname']."</td>";
												echo "<td class='column2'>".$objResult['lastname']."</td>";
												echo "<td class='column3'>".$objResult['username']."</td>";
												echo "<td class='column4'>".$objResult['password']."</td>";
												echo "<td class='column5'>".$objResult['phone']."</td>";
												echo "<td class='column6'>".$objResult['email']."</td>";
												echo '<td class="column7" align="center" onclick="document.location = \'edit_admin.php?id_admin='.$objResult['admin_id'].'\';"><img src="../images/notepad.png" width="32" height="32" title="แก้ไข"></td>';
												echo "<td class='column7' align='center'>"?> <a href=delete_admin.php?id_admin=<?=$objResult['admin_id']?> onClick="return confirm('ต้องลบ <?=$objResult['username']?> ใช่ หรือ ไม่ ?');"><img src='../images/sign-delete.png' width='32' height='32' title='ลบ'></a><?php "</td>";
												echo "</tr>";
									
                                 			}
								 		}
								}else{
									$strSQL =  mysql_query("SELECT * FROM admin where admin_id = ".$objHi['admin_id']."") or die ("Select Error");
										if(mysql_num_rows($strSQL)==0){
										echo    "<tr>";
										echo 		"<td style='text-align:center' bgcolor=#FF0004 colspan='8'>ไม่มีข้อมูลในระบบ</td>";
										echo 	"</tr>";    
			    					?>
                
									<?php
									}
										else
											{
												while($objResult = mysql_fetch_array($strSQL)){
													echo "<tr>";
													echo "<td class='column1'>".$objResult['firstname']."</td>";
													echo "<td class='column2'>".$objResult['lastname']."</td>";
													echo "<td class='column3'>".$objResult['username']."</td>";
													echo "<td class='column4'>".$objResult['password']."</td>";
													echo "<td class='column5'>".$objResult['phone']."</td>";
													echo "<td class='column6'>".$objResult['email']."</td>";
													echo '<td class="column7" align="center" onclick="document.location = \'edit_admin.php?id_admin='.$objResult['admin_id'].'\';"><img src="../images/notepad.png" width="32" height="32" title="แก้ไข"></td>';
													/*echo '<td class="column7" align="center" onclick="document.location = \'delete_admin.php?id_admin='.$objResult['admin_id'].'\';"><img src="../images/sign-delete.png" width="32" height="32"></td>';*/
													echo "</tr>";
                                 				}
								 			}	
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