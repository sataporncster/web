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
        <link href="../vendor/datatables-scroller/css/scroller.dataTables.min.css" rel="stylesheet">
	
        <title>Telephone MSU</title>
    </head>
 <?php include('header.php'); ?> 
<!-- เริ่มเขียนหน้าตาตรงนี้-->
	<body style="padding:0px;margin:0px;width:100vw;height:100vw; background-color:#eee;">
<iframe
  id="app"
src="https://script.google.com/macros/s/AKfycbw6Oty1olrUfLNst8ENviopMlmicSvkQ17Vpm5dACgUuSSc9T1aR8oR9efxCqpL04EmCQ/exec"
frameborder="0"
scrolling="no"
style="width: 100%; height: 100%">
</iframe>
</body>
<!-- สิ้นสุดเขียนหน้าตาตรงนี้-->					
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
