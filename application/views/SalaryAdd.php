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
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
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

	<!-- PAGE LEVEL STYLES -->
	<link href="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- END PAGE LEVEL  STYLES -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body>

	<!-- MAIN WRAPPER -->
	<div id="wrap">

		<!--PAGE CONTENT -->
		<div>
			<div class="inner">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2> ฟอร์มการจ่ายเงิน</h2>
					</div>
				</div>
				<hr />

				<!-- ************************************ เขียนโปรแกรม ************************************ -->
				<div class="row">
					</header>
					<div id="collapseOne" class="accordion-body collapse in body">
						
						<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>ลำดับ</th>
												<th>วันที่ทำงาน</th>
												<th>ID</th>
												<th>ชื่อ</th>
												<th>นามสกุล</th>
												<th>เวลาเข้างาน</th>
												<th>เวลาออกงาน</th>
												<th>ชั่วโมง</th>
												<th>จำนวนเงิน(THB)</th>
												<th>สถานะการจ่ายเงิน</th>
												<th style="display:none;"></th>
											</tr>
										</thead>
										<tbody>
										<?php if($working != null)
												foreach($working as $key => $row) :?>
												<tr>
												<th> <?php echo $key+1?> </th>
												<td> <?php echo $row["WOR_DATEWORK"] ?></td>
												<td> <?php echo $row["EMP_ID"] ?></td>
												<td> <?php echo $row["EMP_FNAME"] ?></td>
												<td> <?php echo $row["EMP_LNAME"] ?></td>
												<td> <?php echo $row["WOR_TIMEWORK"] ?> </td>
												<td> <?php echo $row["WOR_TIMEOUT"] ?> </td>
												<td> <?php echo $row["test"] ?></td>
												<td> <?php echo $row["test"]*25 ?></td>
												<td  class="text-center">
													<input  class="checkToSave" type="checkbox" value="<?php echo $key?>" name="datas[]" onclick='changeStatus(this);' />
												</td>
												<td style="display:none;"><?php echo $row["WOR_ID"] ?></td>
												<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>


					</div>

					<div class="form-actions no-margin-bottom" style="text-align:center;">
						<a id="submit" class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/Salary_controller')?>">ยืนยัน</a>
						<a href="<?php echo base_url('index.php/Salary_controller')?>" class="btn btn-danger btn-lg">ยกเลิก</a>


					</div>

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
	var employee = [];
	function changeStatus(check) {
		var table = document.getElementById("dataTables-example");
		var index = parseInt(check.value)+1;
    	if(check.checked == true){
			employee.push({
				id: table.rows[index].cells[10].innerHTML,
				date: table.rows[index].cells[1].innerHTML,
				emp_id: table.rows[index].cells[2].innerHTML,
				hour: table.rows[index].cells[7].innerHTML,
				wage: table.rows[index].cells[8].innerHTML,
			})	
			console.log(employee)		
		}else{
			for(var i = 0; i < employee.length; i++){
				if(employee[i].id == table.rows[index].cells[10].innerHTML){
					employee.splice(i,1);
				}
			}
			console.log(employee)
		}
	 }
	
	 $(document).on('click','#submit',function(e) {		
		$.ajax({
				data: {employee: employee},
				type: "post",
				url: "<?php echo base_url();?>index.php/SalaryAdd_controller/AddSalary"
			});
		});
</script>

	<!-- End Modal  -->

	<!-- GLOBAL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
	<!-- END GLOBAL SCRIPTS -->

	<!-- PAGE LEVEL SCRIPTS -->
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
	<!-- END PAGE LEVEL SCRIPTS -->
	
		<!-- PAGE LEVEL SCRIPTS -->
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
