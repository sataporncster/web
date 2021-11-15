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
	  <?php 
		if (!isset($_GET['action']) or $_GET['action']=='')
		{
			//include("show_rehearsal.php"); 
			include("phoneall.php"); 
		} 
		else
		{
			switch ($_GET['action'])
			{
				case "phoneall":
					include("phoneall.php");
					break;
				case "phonedepart":
					include("phonedepart.php");					
					break;
					case "phonetot":
					include("phonetot.php");
					break;			
				case "phonemsu":
					include("phonemsu.php");
					break;				
				case "phonevoip":
					include("phonevoip.php");
					break;
				case "rehearsal":
					include("rehearsal.php");
					break;
				case "show_rehearsal":
					include("show_rehearsal.php");
					break;
				case "show_reactive":				
					include("show_reactive.php");
					break;
				case "show_reconfirm":
					include("show_reconfirm.php");
					break;	
				case "mannualphone":
					include("mannualphone.php");
					break;
					case "mannualpc":
					include("mannualpc.php");
					break;
				case "mannualvoip":
					include("mannualvoip.php");
					break;
				case "mannualsmartphone":
					include("mannualsmartphone.php");
					break;
				case "personal":
					include("personal.php");
					break;
				case "present":
					include("present.php");
					break;
				case "download":
					include("download.php");
					break;
					case "showdetail_rehearsal":
					include("showdetail_rehearsal.php");
					break;
				
					
			}
		}
	?>
    </body>
</html>