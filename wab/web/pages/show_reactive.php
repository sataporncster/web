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
        <link href="../vendor/datatables-scroller/css/scroller.dataTables.min.css" rel="stylesheet">
    </head>
	<?php include('header.php'); ?> 
	 <div id="global">
           <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">ข้อมูลการดำเนินการล่าสุด</h2> 
                <p>ติดตามการแจ้งซ่อม โทร 2505</p>
            </div>
           <div class="container-fluid">
		   <div class="panel panel-default">
                    <div class="panel-heading">ข้อมูลการดำเนินการล่าสุด</div>
                    <div class="panel-body">                       
			<table width="100%" class="table table-striped table-bordered table-hover" id="datatables-example">
					<thead>
						<tr >
                        <th >ลำดับ</th>
						<th >วันที่</th>
						<th >เบอร์ที่เสีย</th>
						<th>รายงานผล</th>
						<th >ข้อมูล</th>
					</tr>
                    </thead>
					<tfoot>
					<tr >
                        <th >ลำดับ</th>
						<th >วันที่</th>
						<th >เบอร์ที่เสีย</th>
						<th>รายงานผล</th>
						<th >ข้อมูล</th>
					</tr>
					</tfoot>
				<tbody>
						
						
				
               <?php
					include('connect.php');
					
					function ConvDate($convD) {
						$GGyear=substr($convD,0,4)+543; //ตัดเอาปี ค.ศ. มาทำเป็น พ.ศ.
						$GGmonth=substr($convD,5,2); //ตัดเอาเดือน
						$GGdate =substr($convD,8,2); //ตัดเอาวันที่
						$Buffdate=$GGdate."-".$GGmonth."-".$GGyear; //เรียงใหม่
						return $Buffdate;
					}
					
						$strSQL =  mysql_query("SELECT * FROM `rehearsal` where `rehearsal`.`status` = 0 ORDER BY `d_update` DESC") or die ("Select Error");
				
											while($objResult = mysql_fetch_array($strSQL)){
												$count++;
												$date_to= date($objResult['date']);												
												echo "<th >".$count."</th>";
												echo "<td >".$ThDate=ConvDate($date_to)."</td>";
												echo "<td >".$objResult['phone']."</td>";
												echo "<td >";
														if($objResult['status']==0){echo '<span class="btn-warning">กำลังดำเนินการ</span>'.'<br>'.'<strong>วันที่รายงาน:-</strong>'.$objResult['d_update'].'<br>'.'<strong>รายงานผล:-</strong>'.$objResult['service_report'];}
												echo "</td>";												
												echo "<td ><a href='index.php?action=showdetail_rehearsal&&id=".$objResult['r_id']."'><img src='../images/paperclip.png' width='32' height='32'  title='รายละเอียด'></a></td>";
												echo "</tr>";
									
                                 			}
								 		

                                	?>
				</tbody>
			</table>
				
				</div>
      </div>
  </div>

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
    <script src="../vendor/datatables-scroller/js/dataTables.scroller.min.js"></script>

    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
   $(document).ready(function() {
    $('#datatables-example').DataTable( {
        deferRender:    true,
        scrollY:        400,
        scrollCollapse: true,
        scroller:       true
    } );
} );
    </script>
    </body>
</html>