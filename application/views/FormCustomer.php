<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
	<meta charset="UTF-8" />
	<title>BCORE Admin Dashboard Template | Form Validations</title>
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
	<link rel="stylesheet" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/validationengine/css/validationEngine.jquery.css')?>" />
	<!-- END PAGE LEVEL  STYLES -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png')?>">  

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png')?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png')?>">


</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
 <body>
<!-- MAIN WRAPPER -->
<div id="wrap">

	<!--PAGE CONTENT -->

	<div class="inner">
		<div class="row">
			</header>
			<div id="collapseOne" class="accordion-body collapse in body">
				<div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form action="<?php echo base_url('index.php/FormCustomer_controller/addcustomer')?>" role="form" class="f1" method="post">

                    		<h3>แบบฟอร์มกรอกข้อมูลลูกค้า</h3>
                    		<!-- <p>Fill in the form to get instant access</p> -->
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>ข้อมูลลูกค้า</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>การจอง</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>รายละเอียดการจอง</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>ข้อมูลลูกค้า:</h4>
                    			<div class="form-group">
                    			    <label class="sr-only"></label>
                                    <input value="asdasdasd" type="text" name="" placeholder="ชื่อจริง.." class="f1-first-name form-control" id="j">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="asdasdasd" type="text" name="f1-last-name" placeholder="นามสกุล..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="asdsad" type="text" name="f1-last-name" placeholder="รหัสบัตรประชาชน..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="asdasdas" type="text" name="f1-last-name" placeholder="เบอร์โทร..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="asdsad" type="text" name="f1-last-name" placeholder="อีเมล์..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <!-- <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">About yourself</label>
                                    <textarea name="f1-about-yourself" placeholder="About yourself..." 
                                    	                 class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
                                </div> -->
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>การจอง:</h4>
                                <div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="123123" type="text" name="f1-email" placeholder="ID..." class="f1-email form-control" id="f1-email">
                                </div>
								<!-- <div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input type="text" name="f1-last-name" placeholder="จำนวนห้องพัก..." class="f1-last-name form-control" id="f1-last-name">
                                </div> -->
								<div class="form-group"  >
									<label class="sr-only" ></label>
									<select class="form-control" id="numRoom" onchange="test() " type="text"  >
										<option value="">จำนวนห้องพัก</option>									
										<option value="1">1</option>
										<option value="2">2</option>
									</select>
								</div>

								<div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="asdasdsad" type="text" name="f1-last-name" placeholder="สถานะการจอง..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="f1-buttons">
								<div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="asdasdas" type="text" name="f1-last-name" placeholder="มัดจำ..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
								<div class="form-group">
                                    <label class="sr-only" ></label>
                                    <input value="23232" type="text" name="f1-last-name" placeholder="ราคารวม..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
								<div id="detail">
									<!-- <h4>รายละเอียดการจอง:</h4>
									<div class="form-group" >
										<label class="sr-only" ></label>
										<input type="text" name="f1-facebook" placeholder="IDรายละเอียดการจอง..." class="f1-facebook form-control" id="f1-facebook">
									</div>
									<div class="form-group">
										<label class="sr-only" ></label>
										<input type="text" name="f1-twitter" placeholder="ราคา..." class="f1-twitter form-control" id="f1-twitter">
									</div>
									<div class="form-group">
										<label class="sr-only" ></label>
										<input type="date" name="f1-google-plus" placeholder="วันที่เข้า..." class="f1-google-plus form-control" id="f1-google-plus">
									</div>
									<div class="form-group">
										<label class="sr-only" ></label>
										<input type="date" name="f1-google-plus" placeholder="วันที่v..." class="f1-google-plus form-control" id="f1-google-plus">
									</div> -->
									<!-- <div class="f1-buttons">
										<button type="button" class="btn btn-previous">Previous</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div> -->
								</div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>



			</div>
		</div>
		<!--END PAGE CONTENT -->
	</div>
	<!--END MAIN WRAPPER -->

	<!-- FOOTER -->
	<!--END FOOTER -->

	<script>
		// $document.read(function(){
		// 	var check = document.getElementById('numRoom');
		// 	if(check.value == ""){
				
		// 	}
		// });
		function test() {
			var num = document.getElementById("numRoom");
			var tagDetail =  $("#detail");
			var html = '<h4>รายละเอียดการจอง:</h4>'+
						'<div class="form-group" >'+
							'<label class="sr-only" ></label>'+
							'<input type="text" name="f1-facebook" placeholder="IDรายละเอียดการจอง..." class="f1-facebook form-control" id="f1-facebook">'+
						'</div>'+
						'<div class="form-group">'+
							'<label class="sr-only" ></label>'+
							'<input type="text" name="f1-twitter" placeholder="ราคา..." class="f1-twitter form-control" id="f1-twitter">'+
						'</div>'+
						'<div class="form-group">'+
							'<label class="sr-only" ></label>'+
							'<input type="date" name="f1-google-plus" placeholder="วันที่เข้า..." class="f1-google-plus form-control" id="f1-google-plus">'+
						'</div>'+
						'<div class="form-group">'+
							'<label class="sr-only" ></label>'+
							'<input type="date" name="f1-google-plus" placeholder="วันที่v..." class="f1-google-plus form-control" id="f1-google-plus">'+
						'</div><br>';
			for(var i=0; i < num.value;i++){
				tagDetail.append(html);
			}
			
			var button = '<div class="f1-buttons">'+
							'<button type="button" class="btn btn-previous">Previous</button>'+
							'<button type="submit" class="btn btn-submit">Submit</button>'+
						'</div>';
			tagDetail.append(button);
      }

	</script>

	<!-- GLOBAL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
	<!-- END GLOBAL SCRIPTS -->

	<!-- PAGE LEVEL SCRIPTS -->

	<script src="<?php echo base_url('assets/plugins/validationengine/js/jquery.validationEngine.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/validationInit.js')?>"></script>
	<script>
		$(function () {
			formValidation();
		});

	</script>
	<!--END PAGE LEVEL SCRIPTS -->
	
	 <!-- Javascript -->
		<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.	backstretch.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/retina-1.1.0.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
	
	</body>
	<!-- END BODY -->

</html>

