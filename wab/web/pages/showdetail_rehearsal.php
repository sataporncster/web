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
		 
		
		       
    </head>
	<?php include('header.php'); ?> 
	 <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">รายละเอียดการแจ้งซ่อม</h2> 
                <p>ตรวจสอบรายละเอียดการแจ้งซ่อม</p>
            </div>
<div class="container-fluid">
<div class="panel panel-default">
<div class="panel-heading">รายละเอียดการแจ้งซ่อม  </div>   
                  
    <div class="panel-body ">  
    	
			<?php 
                include('connect.php');
                $id = $_GET['id'];
                $strSQL =  mysql_query("SELECT * FROM `rehearsal` where r_id = $id ");
                $objResult = mysql_fetch_array($strSQL);
				
				$date_to= date($objResult['date']);
				$date_update= date($objResult['d_update']);
				function ConvDate($convD) {
 					$GGyear=substr($convD,0,4)+543; //ตัดเอาปี ค.ศ. มาทำเป็น พ.ศ.
 					$GGmonth=substr($convD,5,2); //ตัดเอาเดือน
 					$GGdate =substr($convD,8,2); //ตัดเอาวันที่
 					$Buffdate=$GGdate."-".$GGmonth."-".$GGyear; //เรียงใหม่
 					return $Buffdate;
				}
            ?>
            <table class="table table-hover" style="margin-bottom:0" >
              <tbody>
                <tr  class="active">
                  <td scope="row" align="right"><h3>ชื่อผู้แจ้ง :</h3></td>
                  <td ><h3><?=$objResult['name_user'];?></h3></td>
                </tr>
                <tr class="active">
                  <td scope="row" align="right"><h3>เบอร์โทรติดต่อ :</h3></td>
                  <td><h3><?=$objResult['contact_tel'];?></h3></td>
                </tr>
                  <tr class="success">
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                 <td scope="row" align="right">วัน/เวลา ที่แจ้ง :</td>
                  <td><?php echo $ThDate=ConvDate($date_to).'&nbsp;'.$objResult['time'].'&nbsp;น.'?></td>
                </tr>
                <tr>
                  <td scope="row" align="right">คณะ/หน่วยงาน :</td>
                  <td><?=$objResult['department'];?></td>
                </tr>
                <tr>
                  <td scope="row" align="right">ชื่ออาคาร/ชั้น :</td>
                  <td><?=$objResult['building'];?></td>
                </tr>
                <tr>
                  <td scope="row" align="right">ห้อง :</td>
                  <td><?=$objResult['room'];?></td>
                </tr>
                <tr>
                  <td scope="row" align="right">เบอร์ที่เสีย :</td>
                  <td><?=$objResult['phone'];?></td>
                </tr>
                <tr>
                 <td scope="row" align="right">กลุ่ม :</td>
                  <td><?=$objResult['group'];?></td>
                </tr>
                <tr>
                  <td scope="row" align="right">อาการ :</td>
                  <td><?=$objResult['other'];?></td>
                </tr>
				<tr class="success">
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td scope="row" align="right">รายงานการซ่อม :</td>
                  <td class="detailtext"><?php if($objResult['service_report'] != ''){echo $objResult['service_report'];}else{echo '-';}?></td>
                </tr>
                <tr>
                  <td scope="row" align="right">ผู้ดูแล :</td>
                  <td class="detailtext"><?php if($objResult['supervisor'] != ''){echo $objResult['supervisor'];}else{echo '-';}?></td>
                </tr>
                <tr>
                  <td scope="row" align="right">วันที่/เวลาอัพเดท :</td>
                  <td class="detailtext">
				  	<?php 
					if($objResult['d_update']!= ''){
				  		echo $ThDate=ConvDate($date_update).'&nbsp;'.$objResult['t_update'].'&nbsp;น.';
					}else{ echo '-';}
					?>
                  </td>
                </tr>
				<tr class="danger">
                  <td>&nbsp;</td>
                  <td class="imgreport"><a href="report_rehearsal.php?id=<?=$_GET['id']?>"><img src="../images/print.png" title="ปริ้น" width="50" height="50">พิมพ์เอกสาร</a></td>
                </tr>
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
	</body>
</html>