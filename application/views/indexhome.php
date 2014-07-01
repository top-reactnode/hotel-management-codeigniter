<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
	<meta charset="UTF-8" />
	<title>BCORE Admin Dashboard Template | Data Tables</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
	<!-- GLOBAL STYLES -->
	<!-- GLOBAL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<link href="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fullcalendar-1.6.2/fullcalendar/fullcalendar.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/calendar.css')?>" />
	<!-- END PAGE LEVEL  STYLES -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="padTop53 ">

	<!-- MAIN WRAPPER -->
	<div id="wrap">

		<!--PAGE CONTENT -->
		<div id="content">
			<div class="inner" style="min-height: 700px;">
				<div class="row">
					<div class="col-lg-8 ">
						<h1> หน้าหลัก </h1>
					</div>
				</div>
				<hr>

				<!-- ************************************ เขียนโปรแกรม ************************************ -->

				<!--PAGE CONTENT -->
				<div class="row">
					<div class="col-lg-12">
						<div class="box">
							<div class="body">
								<div class="row">
									<!-- STATUS ROOM -->
									<div class="col-lg-6 text-center" style="font-size:25px">
										<div class="panel panel-default">
											<div class="panel-heading">
												สถานะห้องพัก
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th>ห้อง</th>
																<th>ชื่อห้อง</th>
																<th>สถานะ</th>
																<!-- <th>ชื่อลูกค้า</th>
																<th>สถานะ</th> -->
															</tr>
														</thead>
														<tbody>
														<?php if($room != null){
															// print_r($room);
                  											foreach($room as $key => $row){
                    										echo "<TR>";
                    										echo "<TD>" . $row["ROOM_ID"]. "</TD>";
                    										echo "<TD>" . $row["ROOM_NAME"]. "</TD>";
                    										echo "<TD>" . $row["TYPEROOM_TYR_ID"]. "</TD>";
														 }
							
													}?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!-- END STATUS ROOM -->
									<div class="col-lg-6">
										<div id="calendar">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--PAGE CONTENT -->

			<!-- ************************************ เขียนโปรแกรม ************************************ -->
		</div>
	</div>
	</div>
	<!--END PAGE CONTENT -->


	</div>
	<!--END MAIN WRAPPER -->

	<!-- FOOTER -->
	<div id="footer">
		<p>&copy; binarytheme &nbsp;2014 &nbsp;</p>
	</div>
	<!--END FOOTER -->
	<!-- GLOBAL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
	<!-- END GLOBAL SCRIPTS -->
	<!-- PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/fullcalendar-1.6.2/fullcalendar/fullcalendar.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/calendarInit.js')?>"></script>
	<script>
		$(function () {
			CalendarInit();
		});

	</script>
	<script src="<?php echo base_url('assets/plugins/dataTables/jquery.dataTables.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.js')?>"></script>
	<script>
		$(document).ready(function () {
			$('#dataTables-example').dataTable();
		});

	</script>
	<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->

</html>
