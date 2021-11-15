<?php
ob_start();
date_default_timezone_set("Asia/Bangkok"); 
include('../pages/connect.php');
include('mpdf/ccphone.php');
$id = $_GET['id'];
$date = date('Y');
$date = $date+543;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../images/logo_msu.png"/>
<link rel="stylesheet" type="text/css" href="css/main2.css">
</head>

<body>
<center>
<div class="report_body">
    
    <?php
    	$strSQL =  mysql_query("SELECT * FROM `rehearsal` where `rehearsal`.`r_id` = '$id' ")or die ("Error Select");
		$objResult = mysql_fetch_array($strSQL);
	?>
	<div  style="border:solid" >
    <table width="100%" >
      <tbody>
      	<tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2" style="text-align: right; font-size: 24px;">เลขที่ : <?=$objResult['r_id']?></td>
        </tr>
        <tr>
          <td width="12%" rowspan="2"><center><img src="../images/logo_msu.png" width="120" height="135"></center></td>
          <td height="63" colspan="3" style="text-align: center; font-size: 24px;"><strong>แบบฟอร์มขอรับบริการ</strong></td>
        </tr>
        <tr>
          <td height="72" colspan="3" style="text-align: center; font-size: 18px;"><strong>งานระบบโทรศัพท์  สำนักคอมพิวเตอร์ มหาวิทยาลัยมหาสารคาม</strong></td>
        </tr>
        <tr>
          <td height="40" colspan="4" class="text01" style="font-size: 14px"><strong>1) ผู้แจ้ง (นาย / นาง / นางสาว)</strong><span class="text01" style="font-size: 14px">&nbsp;&nbsp;&nbsp;<?=$objResult['name_user']?></span></td>
        </tr>
        <tr>
          <td height="40" colspan="4" style="font-size: 14px"><strong>หน่วยงานที่แจ้ง :</strong>&nbsp;&nbsp;<?=$objResult['department']?>&nbsp;&nbsp;&nbsp;<strong>โทรศัพท์ ติดต่อ :</strong>&nbsp;&nbsp;<?=$objResult['contact_tel']?></td>
        </tr>
        <tr>
          <td colspan="40" style="font-size: 14px"><strong>หมายเลขโทรศัพท์ : ติดตั้ง / ตรวจเช็ค / แก้ไข : </strong>&nbsp;&nbsp;<?=$objResult['phone']?>&nbsp;&nbsp;&nbsp;<strong>วัน เดือน ปี (นัดหมาย)</strong>...................................................</td>
        </tr>
        <tr>
          <td colspan="40" style="font-size: 14px"><strong>สถานที่ดำเนินการ : อาคาร / ชั้น : </strong>&nbsp;&nbsp;<?=$objResult['building']?>&nbsp;&nbsp;<strong>ห้อง :</strong>&nbsp;&nbsp;<?=$objResult['room']?></td>
        </tr>
        <tr>
          <td colspan="40" style="font-size: 14px"><strong>ระบุสาเหตุที่ชำรุด / อาการเบื้องต้น : </strong>&nbsp;&nbsp;<?=$objResult['other']?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="38%">&nbsp;</td>
          <td width="40%" height="40" style="font-size: 14px" align="center">ลงชื่อ........................................................</td>
          <td width="10%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">ผู้แจ้ง / ผู้ขอรับบริการ</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">วันที่...................เดือน.......................พ.ศ. <?=$date?></td>
          <td>&nbsp;</td>
        </tr>
		</div>
		<div  style="border:solid" >
        <tr>
          <td height="40" colspan="4" class="text01" style="font-size: 14px">2) งานระบบโทรศัพท์ สำนักคอมพิวเตอร์ มอบหมายให้................................................ดำเนินการติดตั้ง แก้ไข ระบบโทรศัพท์</td>
        </tr>
        <tr>
          <td height="40" colspan="4" style="font-size: 14px">เพื่อให้ระบบโทรศัพท์มหาวิทยาลัยมหาสารคาม. ใช้งานได้ตามปกติ และมีประสิทธิภาพสูงสุด</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="40%" height="40" style="font-size: 14px" align="center">ลงชื่อ.......................................................</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">หัวหน้างานระบบโทรศัพท์</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">วันที่...................เดือน.........................พ.ศ.<?=$date?></td>
          <td>&nbsp;</td>
        </tr>
		</div>
		<div  style="border:solid" >
        <tr>
          <td height="40" colspan="4" class="text01" style="font-size: 14px">3) รายงานผลการปฏิบัติงาน : ได้ดำเนินการ ใน วันที่ ........................... / ........................................... / พ.ศ.<?=$date?></td>
        </tr>
        <tr>
          <td height="40" colspan="4" class="text01" style="font-size: 14px">ผลการดำเนินงาน&nbsp;&nbsp;&nbsp;&nbsp;<img src="/CCPhone/images/box.png"> เสร็จ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/CCPhone/images/box.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไม่เสร็จเนื่องจาก.....................................................................................................</td>
        </tr>
        <tr>
          <td height="40" colspan="4" style="font-size: 14px">วัสดุ / อุปกรณ์ / ที่ใช้ในการดำเนินงาน...................................................................................................................................</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="40%" height="40" style="font-size: 14px" align="center">ลงชื่อ.....................................................</td>
          
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">ผู้ปฏิบัติงาน</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
		<td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">วันที่...................เดือน.........................พ.ศ.<?=$date?></td>
          <td>&nbsp;</td>
        </tr>
		</div>
		<div  style="border:solid" >
        <tr>
          <td height="40" colspan="4" class="text01" style="font-size: 14px">4) เสนอผู้อำนวยการสำนักคอมพิวเตอร์</td>
        </tr>
        <tr>
          <td height="40" colspan="4" class="text01" style="font-size: 14px">- เพื่อโปรดทราบ / โปรดพิจารณา</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="40%" height="40" style="font-size: 14px" align="center">ลงชื่อ.........................................................</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">(ผู้ช่วยศาสตร์จารย์ ดร.จรวย สาวิถี)</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">ผู้อำนวยการสำนักคอมพิวเตอร์</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td height="40" style="font-size: 14px" align="center">วันที่...................เดือน.........................พ.ศ.<?=$date?></td>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
    </div>
    </div>
    </center>
</body>
</html>
<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4-P', '0', 'THSarabunNew');
$pdf->autoScriptToLang = false;
$pdf->SetDisplayMode('fullpage');
//$pdf->setFooter('{PAGENO}');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>