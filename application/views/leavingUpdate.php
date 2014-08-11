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
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

	
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
	<!-- END PAGE LEVEL  STYLES -->

	<!-- GLOBAL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" />
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<link href="<?php echo base_url('assets/css/jquery-ui.css')?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/uniform/themes/default/css/uniform.default.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/chosen/chosen.min.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/colorpicker/css/colorpicker.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/tagsinput/jquery.tagsinput.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/css/datepicker.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/timepicker/css/bootstrap-timepicker.min.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/switch/static/stylesheets/bootstrap-switch.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/validationengine/css/validationEngine.jquery.css')?>" />
	<!-- END PAGE LEVEL  STYLES -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body >

	<!-- MAIN WRAPPER -->
	<div id="wrap" >

		<!--PAGE CONTENT -->
		<div>

			<div class="inner">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2> แก้ไขฟอร์มพนักงาน </h2>
					</div>
				</div>
				<hr />

				<!-- ************************************ เขียนโปรแกรม ************************************ -->
				<div class="row">
					</header>
					<div id="collapseOne" class="accordion-body collapse in body">
						<form action="<?php echo base_url('index.php/leavingUpdate_controller/updateemp')?>" class="form-horizontal" id="block-validate"
						method="post">
							<div class="form-group">
						<label class="control-label col-lg-4">ID :</label>
						<div class="col-lg-5">
						<input type="hidden" id="empid" name="empid" class="form-control"   value="<?php echo $leaving[0]['EMP_ID'] ?>" required />
							<label class="control-label col-lg-1">
								<?php echo $leaving[0]['EMP_ID'] ?>
							</label>
							
						</div>
					</div>

							<div class="form-group">
								<label class="control-label col-lg-4">ประเภทการลา :</label>
								<div class="col-lg-4">
									<select class="form-control" id="TYL_NAME" name="TYL_NAME" required>
									<option <?php if($leaving[0]['TYL_NAME'] == 'ลาป่วย'){echo("selected");}?>>ลาป่วย</option>
									<option <?php if($leaving[0]['TYL_NAME'] == 'ลากิจ'){echo("selected");}?>>ลากิจ</option>
									<option <?php if($leaving[0]['TYL_NAME'] == 'ลาพักร้อน'){echo("selected");}?>>ลาพักร้อน</option>
									<option <?php if($leaving[0]['TYL_NAME'] == 'ลาคลอด'){echo("selected");}?>>ลาคลอด</option>
									</select>
								</div>
								</label>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4" for="reservation">ตั้งแต่วันที่ - ถึงวันที่ :</label>
								<div class="col-lg-4">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="icon-calendar"></i>
										</span>
										<input type="text"  data-date-format="dd-mm-Y" name="DAY"  value="<?php echo date("d-m-Y", strtotime($leaving[0]['LEA_DATESTART']))." - ".date("d-m-Y", strtotime($leaving[0]['LEA_DATEEND']))  ?>" id="reservation" class="form-control" />
									</div>
								</div>
							</div>

							<div class="form-group ">
									<label class="control-label col-lg-4">หมายเหตุ :</label>
									<div class="col-lg-4">
										<textarea class="form-control" rows="6" name="LEA_ETC" id="LEA_ETC" required><?php echo $leaving[0]['LEA_ETC']?></textarea>
									</div>
							</div>

					</div>

					<div class="form-actions no-margin-bottom" style="text-align:center;">
						<input type="submit" value="ยืนยัน" class="btn btn-primary btn-lg" />
						<a href="<?php echo base_url('index.php/leaving_controller')?>" class="btn btn-danger btn-lg" >ยกเลิก</a>
		

					</div>
					</form>
				</div>
			</div>

			<!-- ************************************ เขียนโปรแกรม ************************************ -->
		</div>
	</div>
	</div>
	<!--END PAGE CONTENT -->

	</div>

	<!--END MAIN WRAPPER -->

	<!-- Modal -->
	<script>
		$('#modal-submit').click(function () {
			$('#block-validate').submit();
		});

		</script>


	<!-- End Modal  -->

	<!-- GLOBAL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
	<!-- END GLOBAL SCRIPTS -->

	  <!-- PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url('assets/js/validationInit.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validationengine/js/jquery.validationEngine.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/chosen/chosen.jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/colorpicker/js/bootstrap-colorpicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/tagsinput/jquery.tagsinput.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validVal/js/jquery.validVal.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/datepicker/js/bootstrap-datepicker.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/timepicker/js/bootstrap-timepicker.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/switch/static/js/bootstrap-switch.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/autosize/jquery.autosize.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jasny/js/bootstrap-inputmask.js')?>"></script>
	<script src="<?php echo base_url('assets/js/formsInit.js')?>"></script>
	<script>
		$(function () {
			formInit();
		});
	</script>
	<script>
        $(function () { formValidation(); });
        </script>
	<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->

</html>
