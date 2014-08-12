<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
	<meta charset="UTF-8" />
	<title>BCORE Admin Dashboard Template | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
	<!-- GLOBAL STYLES -->
	<!-- PAGE LEVEL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/magic/magic.css')?>" />
	<!-- END PAGE LEVEL STYLES -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body>

	<!-- PAGE CONTENT -->
	<div class="container">
		<div class="text-center">
			<img src="<?php echo base_url('assets/img/logo.jpg')?>" id="logoimg" alt=" Logo" />
		</div>
		<fieldset>
			<div class="tab-content">
				<div id="login" class="tab-pane active">
					<form action="<?php echo base_url('index.php/login_controller/check_login')?>" class="form-signin" method="POST">
						<input id="username" name="username" type="text" class="form-control" placeholder="Username" required="required">
						<input name="password" type="password" class="form-control" placeholder="Password" required="required">
						<div class="text-center">
							<input id="send" class="btn text-muted text-center btn-danger" type="submit" value="Sign in"> </div>
						<!-- <a href="<?php echo base_url('index.php/index_controller')?>" </a> -->
					</form>

				</div>
		</fieldset>
		</div>
	</div>

	<!--END PAGE CONTENT -->

	<!-- PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/login.js')?>"></script>
	<!--END PAGE LEVEL SCRIPTS -->

</body>
<!-- END BODY -->

</html>
