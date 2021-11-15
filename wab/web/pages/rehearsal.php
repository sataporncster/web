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
		<!--sweetalert2-->
        <script src="../package/dist/sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="../package/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="../package/dist/sweetalert2.min.css">
		
		<link href="style.css" rel="stylesheet" type="text/css">
		<script language="javascript">
		
			function check_null(){
				if(frm.phone.value ==''){
					swal({title:'กรุณากรอกเลขหมายให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.phone.focus();
					return false;
				}
				else if(frm.department.value ==''){
					swal({title:'กรุณากรอกหน่วยงานให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.department.focus();
					return false;
				}
				else if(frm.building.value ==''){
					swal({title:'กรุณากรอกที่ตั้งอาคารให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.building.focus();
					return false;
				}
				else if(frm.room.value ==''){
					swal({title:'กรุณากรอกห้องให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.room.focus();
					return false;
				}
				else if(frm.group_phone.value ==''){
					swal({title:'กรุณากรอกกลุ่มให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.group_phone.focus();
					return false;
				}
				else if(frm.name_user.value ==''){
				    swal({title:'กรุณากรอกผู้แจ้งให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.name_user.focus();
					return false;
				}
				else if(frm.contact_tel.value ==''){
					swal({title:'กรุณากรอกเบอร์ติดต่อให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.contact_tel.focus();
					return false;
				}
				else if(frm.other.value ==''){
					swal({title:'กรุณากรอกเบอร์อาการเสียให้ครบถ้วน !!',type:'error',confirmButtonText:'ตกลง'});
					frm.other.focus();
					return false;
				}
			}
		</script> 
		
    </head>
	<?php include('header.php'); ?> 
	<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
	 <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">แจ้งซ่อมโทรศัพท์</h2> 
                <p>แจ้งซ่อมโทรศัพท์ โทร 2505</p>
            </div>

	<div class="container-fluid">
	<div class="row cm-fix-height">
	<div class="col-sm-6">
	<div class="panel panel-default">
	<div class="panel-heading">ข้อมูลโทรศัพท์  </div>      
      <div class="panel-body">
    
        
            <?php
			include('connect.php');
			date_default_timezone_set('Asia/Bangkok');
				$d = date('d');
				$m = date('m');
				$y = date('Y')+543;
				$time = date('H:i:s');
			$id = $_GET['id'];
	$strSQL =  mysql_query("SELECT * FROM `telephone` where p_id = '$id'") or die ("Select Error");
	$objResult = mysql_fetch_array($strSQL)
			?>
			<form action="insert_rehearsal.php"  method="post" name="frm" id="upload_form" onSubmit="return check_null()">
						<div class="input-group input-group-lg"> 										
							<input class="form-control " name="datetinme" type="text" disabled  value="<?php echo $d.'-'.$m.'-'.$y.'&nbsp;'.$time.'&nbsp;น.'?>">
							<span class="input-group-btn">
                                        <button class="btn btn-info" type="button">วันที่</button>
                                    </span>
                                </div>
						<div class="input-group input-group-lg"> 		
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="เบอร์โทรศัพท์" value="<?=$objResult['phone']?>">
						<span class="input-group-btn">
                                        <button class="btn btn-info" type="button">เบอร์ที่แจ้ง</button>
                                    </span>
                                </div>
						<div class="input-group input-group-lg"> 		
                            <input class="form-control" type="text" name="department" placeholder="คณะ/หน่วยงาน" value="<?=$objResult['department']?>" >
						<span class="input-group-btn">
                                        <button class="btn btn-info" type="button">หน่วยงาน</button>
                                    </span>
                                </div>
						<div class="input-group input-group-lg"> 		
                             <input class="form-control" type="text" name="building" placeholder="อาคาร/ชั้น" value="<?=$objResult['building']?>" >
						<span class="input-group-btn">
                                        <button class="btn btn-info" type="button">อาคาร</button>
                                    </span>
                                </div>
						<div class="input-group input-group-lg"> 		 
                             <input class="form-control" type="text" name="room" placeholder="ห้อง/เลขห้อง" value="<?=$objResult['room']?>" >
						<span class="input-group-btn">
                                        <button class="btn btn-info" type="button">ห้อง</button>
                                    </span>
                                </div>
						<div class="input-group input-group-lg"> 		 
                              <input name="group_phone" type="text" class="form-control" placeholder="ภายในภายนอก" value="<?=$objResult['group']?>" >
						 <span class="input-group-btn">
                                        <button class="btn btn-info" type="button">กลุ่ม</button>
                                    </span>
                                </div> <br>
							  <div class="form-group" style="margin-bottom:0">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
							  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">ค้นหา</button>
							<a  href=index.php?action=show_rehearsal class="btn btn-danger btn-lg">ยกเลิก</a>	
							</div>
							</div>
                            </div> 
							</div>
					</div>
				
				<div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">ข้อมูลผู้แจ้ง</div>
                            <div class="panel-body">
						
							<div class="input-group input-group-lg"> 	
							<span class="input-group-btn">
                                        <button class="btn btn-info" type="button">ชื่อผู้แจ้ง</button>
                                    </span>
                               <input class="form-control" type="text" name="name_user" placeholder="ชื่อผู้แจ้ง">
							   </div>
							 <div class="input-group input-group-lg"> 	  
							   <span class="input-group-btn">
                                        <button class="btn btn-info" type="button">เบอร์ติดต่อกลับ</button>
                                    </span>
                                <input class="form-control" type="text" name="contact_tel" placeholder="เบอร์โทรติดต่อกลับ">
								</div>
								<div class="input-group input-group-lg " > 	
								<span class="input-group-btn" >
                                        <button class="btn btn-info" type="button">อาการเสีย</button>
                                    </span>
                                <textarea style="height:100px" class="form-control" name="other" id="other" placeholder="ระบุอาการเสีย เกิดจากสาเหตุ"></textarea>
								</div>
								<div id="upload-wrapper">
           
								<div class="input-group input-group-lg"> 	  
							   <span class="input-group-btn">   
							   
                                    </span>
                               
								</div>
								<hr>
								<div class="form-group" style="margin-bottom:0">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                <button class="btn btn-success btn-lg" type="submit" name="submit_rehearsal" id="submit_rehearsal">ส่งเรื่องดำเนินการ</button>
			      </div>
				  </div>
				  </form>
					   </div>
	   </div>
	   </div>
	  
        </div>
		 <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
  <div class="panel-body cm-container-white">
  
                   
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:red" aria-hidden="true">X</span></button>
                           
                        </div>
						  <div class="modal-body">
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
				
				<tr >
                        	<th >แจ้งซ่อม</th>
							<th >เบอร์โทรศัพท์</th>
							<th >ชื่อหน่วยงาน</th>													
							<th >กลุ่ม</th>		         
						</tr>
						<tfoot>
						<tr >
                        	<th >แจ้งซ่อม</th>
							<th >เบอร์โทรศัพท์</th>
							<th >ชื่อหน่วยงาน</th>														
							<th >กลุ่ม</th>		         
						</tr>
						</tfoot>
					</thead>			
				<tbody>	
                <?php
					include('connect.php');
					$count = 0;
						$strSQL =  mysql_query("SELECT * FROM `telephone`  order by p_id ASC") or die ("Select Error");
						
											while($objResult = mysql_fetch_array($strSQL)){
												$count++;
												echo "<tr>";
											    echo '<th><button class="btn btn-success" onclick="document.location = \'index.php?action=rehearsal&&id='.$objResult['p_id'].'\';">แจ้งซ่อม</button></th>';
												echo "<td>".$objResult['phone']."</td>";
												echo "<td >"."<strong>หน่วยงาน:  </strong>".$objResult['department']."<br>"." <strong>อาคาร:  </strong>".$objResult['building']."<br>"."<strong>ห้อง:   </strong>".$objResult['room']."</td>";																			
												echo "<td>".$objResult['group']."</td>";												
												echo "</tr>";
	                             			
								 		}

                                	?>
				</tbody>
			</table>
		</div>	
						<div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                            
					</div>		
				</div>
			</div>
		</div>
		<div class="alert alert-info shadowed" role="alert"> <i class="fa fa-fw fa-info-circle"></i>หากไม่มีเบอร์ที่ท่านต้องการค้นหากรุณาติดต่อเจ้าหน้าที่งานระบบโทรศัพท์ สำนักคอมพิวเตอร์     Tel:2505,1711   <a href="mailto:sataporn.g@msu.ac.th">sataporn.g@msu.ac.th</a> </div>
		
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
		 <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-scroller/js/dataTables.scroller.min.js"></script>

    

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
   $(document).ready(function() {
    $('#dataTables-example').DataTable( {
        deferRender:    true,
        scrollY:        400,
        scrollCollapse: true,
        scroller:       true
    } );
} );
    </script>
	</body>
	</html>
