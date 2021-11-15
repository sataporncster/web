<?php
ob_start();
date_default_timezone_set("Asia/Bangkok"); 
require ('../pages/connect.php');
require_once('mpdf/mpdf.php');
$range_first = $_GET["range_first"];
$range_last = $_GET["range_last"];
$first = $_GET["range_first"];
$last = $_GET["range_last"];
function ConvDate($convD) {
	$GGyear=substr($convD,0,4)+543; //ตัดเอาปี ค.ศ. มาทำเป็น พ.ศ.
	$GGmonth=substr($convD,5,2); //ตัดเอาเดือน
	$GGdate =substr($convD,8,2); //ตัดเอาวันที่
	$Buffdate=$GGdate."-".$GGmonth."-".$GGyear; //เรียงใหม่
	return $Buffdate;
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    	
    </style>
</head>
<body>
	<div id="body">
    	<table width="50%" border="0" align="center">
          <tbody>
            <tr style="font-family: 'TH Sarabun New'; font-size: 30px;">
              <th width="33%" align="center">รายงานจาก วันที่ :</th>
              <th width="24%"><?php 
                if($range_first != ''){
                    echo $ThDate=ConvDate($first);
                }else{echo '';}
              ?></th>
              <th width="17%" align="center">ถึง วันที่ :</th>
              <th width="26%"><?php
                    if($range_last != ''){
                    echo $ThDate=ConvDate($last);
                    }else{echo '';}
                ?></th>
            </tr>
          </tbody>
      </table>
<div>&nbsp;</div>
		<table width="100%" align="center">
            <thead>
                <tr style="font-family: 'TH Sarabun New'; font-size: 30px;">
                	<th width="2%">ลำดับ</th>
                    <th width="10%">วันที่อัพเดท</th>
                    <th width="15%">ผู้ดูแลงาน</th>
                    <th width="13%">เบอร์โทรติดต่อ</th>
                    <th width="15%">ชื่อหน่วยงาน</th>
                    <th width="8%">เบอร์ที่เสีย</th>
                    <th width="10%">อาการ</th>
                    <th width="13%">ชื่อผู้แจ้ง</th>
                    <th width="10%">วันที่แจ้งซ่อม</th>
                </tr>
            </thead>
				<tbody align="center">
                   <?php
				   $count = 0;
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
												$count++;
												
												echo "<tr style='font-family: 'TH Sarabun New'; font-size: 30px;'>";
												echo "<th width='2%'>".$count."</th>";
												echo "<td width='10%'>";
												if($objResult['d_update'] != ''){
													echo $ThDate=ConvDate($date_u);
												}else{echo '-';}
												echo "</td>";
												echo "<td width='15%'>".$objResult['supervisor']."</td>";
												echo "<td width='13%'>".$objResult['contact_tel']."</td>";
												echo "<td width='15%'>".$objResult['department']."</td>";
												echo "<td width='8%'>".$objResult['phone']."</td>";
												echo "<td width='10%'>".$objResult['other']."</td>";
												echo "<td width='13%'>".$objResult['name_user']."</td>";
												echo "<td width='10%'>".$ThDate=ConvDate($date_d)."</td>";
												echo "</tr>";
									
                                 			}
								 		}
								
                                	?>
						</tbody>
					</table>
    </div>
</body>
</html>
<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4-L', '0', 'THSaraban');
$pdf->autoScriptToLang = false;
$pdf->SetDisplayMode('fullpage');
//$pdf->setFooter('{PAGENO}');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>

