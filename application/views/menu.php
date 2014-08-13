<!-- HEADER SECTION -->
<table border="3" width="60%">
	<div id="top">

		<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 5px;">
			<a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs"
			data-toggle="collapse" href="#menu" id="menu-toggle">
				<i class="icon-align-justify"></i>
			</a>

			<!-- LOGO SECTION -->
			<header class="navbar-header">

				<!-- <a href="<?php echo base_url('index.html')?>" class="navbar-brand"> -->
				<img src="<?php echo base_url('assets/img/logo.jpg')?>" alt="#" width="200" height="50" />
				</a>
			</header>
		</nav>
	</div>
</table>
<!-- END HEADER SECTION -->

<!-- MENU SECTION -->
<div id="left">
	<div class="media user-media well-small">
		<a class="user-link" >
			<img class="media-object img-thumbnail user-img " width="100" height="50" alt="User Picture" src="<?php echo base_url('assets/img/h1.jpg')?>"
			/>
		</a>
		<br />
		<div class="media-body">
			<h5 class="media-heading"> admin</h5>
			<ul class="list-unstyled user-info">

				<li>
					<a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

				</li>

			</ul>
		</div>
		<br />
	</div>

	<ul id="menu" class="collapse">

		<li class="panel active">
			<a href="<?php echo base_url('index.php/index_controller')?>">
				<i class="icon-home"></i> HOME
			</a>
		</li>

		<li class="panel ">
			<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
				<i class="icon-pencil"></i> เข้าพัก

				<span class="pull-right">
					<i class="icon-angle-left"></i>
				</span>
				<!-- &nbsp; <span class="label label-success"></span>&nbsp; -->
			</a>
			<ul class="collapse" id="form-nav">
				<li class="">
					<a href="<?php echo base_url('index.php/checkin_controller')?>">
						<i class="icon-angle-right"></i> จอง/เข้าพัก </a>
				</li>
				<li class="">
					<a href="<?php echo base_url('index.php/checkinhistory_controller')?>">
						<i class="icon-angle-right"></i> ประวัติการเข้าพัก </a>
				</li>
				<!-- <li class="">
					<a href="<?php echo base_url('index.php/calendar_controller')?>">
						<i class="icon-angle-right"></i> ปฎิทิน </a>
				</li> -->
				<li class="">
					<a href="<?php echo base_url('index.php/Promotion_controller')?>">
						<i class="icon-angle-right"></i> Promotion </a>
				</li>
			</ul>
		</li>

		<li class="panel">
			<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
				<i class="icon-user"></i> พนักงาน

				<span class="pull-right">
					<i class="icon-angle-left"></i>
				</span>
				<!-- &nbsp; <span class="label label-info"></span>&nbsp; -->
			</a>
			<ul class="collapse" id="pagesr-nav">
				<li>
					<a href="<?php echo base_url('index.php/EmployeeList_controller')?>">
						<i class="icon-angle-right"></i> รายชื่อพนักงาน </a>
				</li>
				<!-- <li>
					<a href="<?php echo base_url('index.php/EmployeeAdd_controller')?>">
						<i class="icon-angle-right"></i> เพิ่มพนักงาน </a>
				</li> -->
				<li>
					<a href="<?php echo base_url('index.php/TimeTable_controller')?>">
						<i class="icon-angle-right"></i> การเข้างาน </a>
				</li>
				<li>
					<a href="<?php echo base_url('index.php/leaving_controller')?>">
						<i class="icon-angle-right"></i> การลา </a>
				</li>
				<li>
					<a href="<?php echo base_url('index.php/Salary_controller')?>">
						<i class="icon-angle-right"></i> รอบการจ่ายเงินเดือน </a>
				</li>
			</ul>
		</li>

		<li class="panel">
			<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
				<i class="icon-inbox"></i> สินค้า

				<span class="pull-right">
					<i class="icon-angle-left"></i>
				</span>
			</a>
			<ul class="collapse" id="DDL-nav">

				<li>
					<a href="<?php echo base_url('index.php/Product_controller')?>">
						<i class="icon-angle-right"></i> ข้อมูลสินค้า </a>
				</li>
				<!-- <li>
					<a href="<?php echo base_url('index.php/ProductAdd_controller')?>">
						<i class="icon-angle-right"></i> เพิ่มข้อมูลสินค้า </a>
				</li> -->
			</ul>
		</li>

		</li>
		<li>
			<a href="<?php echo base_url('index.php/login_controller/check_login')?>">
				<i class="icon-signin"></i> Logout </a>
		</li>

	</ul>

</div>
<!--END MENU SECTION -->
