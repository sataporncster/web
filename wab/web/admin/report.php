<?php 
	include ('destroy_session.php');
	include('../pages/connect.php');
	$username = $_SESSION["username"];
	$strHi =  mysql_query("SELECT * FROM `admin` where username = '$username'") or die ("Error select 01");	
	$objHi = mysql_fetch_array($strHi);	
	if(isset($_GET["range_first"])){
	$range_first = $_GET["range_first"];
	}else{
	$range_first ='';
}

if(isset($_GET["range_last"])){
	$range_last = $_GET["range_last"];
}else{
	$range_last ='';
}
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
                    <div class="panel-body cm-container-white">
                
                    <table width="100%" class="table table-striped table-bordered table-hover">
				<form class="form-control" method="get" action="check_report.php">	
                        <tbody>
        					<tr>
          						<td width="32%">
          						  <input class="form-control" type="date" value="<?php
                            if(isset($_GET["range_first"])){
                                echo $_GET["range_first"];
                            }
                         ?>"name="range_first" id="range_first"></td>
          <td width="32%">
            <input class="form-control" type="date" value="<?php
                                if(isset($_GET["range_last"])){
                                    echo $_GET["range_last"];
                                }
                         ?>"name="range_last" id="range_last"></td>
          <td width="16%"><input class="form-control btn-success " type="submit" id="sub" value="ค้นหา"></td>
          <td width="20%"><a href="report_download.php?range_first=<?php echo $range_first;?>&range_last=<?php echo $range_last;?>">
		  <input class="form-control btn-info"type="button" value="พิมพ์รายงาน" id="report"></a></td>
        </tr>		
      </tbody>                
         </form>   	
            	</div>
            </table>
				<div class="panel-body" >
						<table width="100%" class="table table-striped table-bordered table-hover" id="datatable-responsive">
						<thead>
							<tr class="table100-head">
								<th class="column22">วันที่แจ้งซ่อม</th>
								<th class="column23">ชื่อผู้แจ้งซ่อม</th>
								<th class="column24">เบอร์โทรติดต่อ</th>
								<th class="column25">ชื่อหน่วยงาน</th>
								<th class="column26">เบอร์ที่เสีย</th>
                                <th class="column27">อาการ</th>
                                <th class="column28">ผู้ดูแลงาน</th>
                                <th class="column29">วันที่อัพเดท</th>
							</tr>
						</thead>
						<tbody>
                        <?php
							
                        function ConvDate($convD) {
						$GGyear=substr($convD,0,4)+543; //ตัดเอาปี ค.ศ. มาทำเป็น พ.ศ.
						$GGmonth=substr($convD,5,2); //ตัดเอาเดือน
						$GGdate =substr($convD,8,2); //ตัดเอาวันที่
						$Buffdate=$GGdate."-".$GGmonth."-".$GGyear; //เรียงใหม่
						return $Buffdate;
					}
					if($range_first!=""&&$range_last!=""){
						$strSQL =  mysql_query("SELECT * FROM `rehearsal` where `rehearsal`.`date` between '$range_first' and '$range_last' ORDER BY `d_update` DESC")  or die ("Select Error 01");
					}elseif($range_first!=""&&$range_last==""){
						$strSQL =  mysql_query("SELECT * FROM `rehearsal` where `rehearsal`.`date` >= '$range_first' ORDER BY `d_update` DESC")or die ("Select Error 02");
					}elseif($range_first==""&&$range_last!=""){
						$strSQL =  mysql_query("SELECT * FROM `rehearsal`where `rehearsal`.`date` <= '$range_last' ORDER BY `d_update` DESC") or die ("Select Error 03");
					}else{
							$strSQL =  mysql_query("SELECT * FROM `rehearsal` ORDER BY `d_update` DESC, t_update DESC, date DESC") or die ("Select Error 04");
					}
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
												$date_u= date($objResult['d_update']);
												$date_d= date($objResult['date']);
												
												echo "<tr>";
												echo "<td class='column22'>".$ThDate=ConvDate($date_d)."</td>";
												echo "<td class='column23'>".$objResult['name_user']."</td>";
												echo "<td class='column24'>".$objResult['contact_tel']."</td>";
												echo "<td class='column25'>".$objResult['department']."</td>";
												echo "<td class='column26'>".$objResult['phone']."</td>";
												echo "<td class='column27'>".$objResult['other']."</td>";
												echo "<td class='column28'>";
													if($objResult['supervisor'] != ''){
														echo $objResult['supervisor'];
													}else{echo '-';}
												echo "</td>";
												echo "<td class='column29'>";
												if($objResult['d_update'] != ''){
													echo $ThDate=ConvDate($date_u);
												}else{echo '-';}
												echo "</td>";
												echo "</tr>";
									
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