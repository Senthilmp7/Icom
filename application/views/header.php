<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Icom</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/animate.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/style.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/style-responsive.min.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/css/theme/default.css');?>" rel="stylesheet" id="theme" />
	<link href="<?php echo site_url('application/assets/plugins/bootstrap-validation/css/bootstrapValidator.css');?>" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo site_url('application/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/bootstrap-datepicker/css/datepicker.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/bootstrap-datepicker/css/datepicker3.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/gritter/css/jquery.gritter.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/scrollplugin/jquery.mCustomScrollbar.css');?>" rel="stylesheet" />
	<link href="<?php echo site_url('application/assets/plugins/bootstrap-select/bootstrap-select.min.css');?>" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo site_url('application/assets/plugins/pace/pace.min.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE Data tables================== -->
	<link href="<?php echo site_url('application/assets/plugins/DataTables/css/data-table.css');?>" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
        
        <!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo site_url('application/assets/plugins/jquery/jquery-1.9.1.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery/jquery-migrate-1.1.0.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/bootstrap-validation/js/bootstrapValidator.js');?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/html5shiv.js');?>"></script>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/respond.min.js');?>"></script>
		<script src="<?php echo site_url('application/assets/crossbrowserjs/excanvas.min.js');?>"></script>
	<![endif]-->
	<script src="<?php echo site_url('application/assets/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-cookie/jquery.cookie.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/login-v2.demo.min.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo site_url('application/assets/plugins/gritter/js/jquery.gritter.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/flot/jquery.flot.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/flot/jquery.flot.time.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/flot/jquery.flot.resize.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/flot/jquery.flot.pie.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/sparkline/jquery.sparkline.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/dashboard.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/apps.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/bootbox.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/table-manage-combine.demo.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/table-manage-default.demo.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/jquery.dataTables.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/jquery.dataTables.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.autoFill.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.colReorder.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.colVis.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.fixedHeader.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.keyTable.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.tableTools.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.responsive.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.buttons.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/buttons.print.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/DataTables/js/buttons.html5.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/scrollplugin/jquery.mCustomScrollbar.concat.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/morris/raphael.min.js');?>"></script>
        <script src="<?php echo site_url('application/assets/plugins/morris/morris.js');?>"></script>
	<script src="<?php echo site_url('application/assets/js/chart-morris.demo.min.js');?>"></script>
	<script src="<?php echo site_url('application/assets/plugins/bootstrap-select/bootstrap-select.min.js');?>"></script>
	
	 <!--================== END PAGE LEVEL JS ================== -->
	
	 <!--================== BEGIN PAGE LEVEL JS Data tables================== -->
	<!--<script src="<?php echo site_url('application/assets/plugins/DataTables/js/jquery.dataTables.js');?>"></script>-->
	<!--<script src="<?php echo site_url('application/assets/plugins/DataTables/js/dataTables.responsive.js');?>"></script>-->
	<!--<script src="<?php echo site_url('application/assets/js/table-manage-responsive.demo.min.js');?>"></script>-->
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
		
	</script>
	<style>
	    .Notificate {
		border-radius: 50%;
		color: #fff;
		font-size: 14px;
		height: 36px;
		line-height: 36px;
		text-align: center;
		width: 36px !important;
	    }
	    .media-heading{
		font-weight: 600;
	    }
	    .media-body{
		vertical-align: middle !important;
	    }
	</style>
	

        
</head>
<body>
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
		    <div class="container-fluid">
			<!-- begin mobile sidebar expand / collapse button -->
			<div class="navbar-header">
				<a href="<?php echo site_url('IcomCtr/index');?>" class="navbar-brand"><img class="img-responsive" src="<?php echo base_url('application/assets/img/ITC_logo.png');?>"/></a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end mobile sidebar expand / collapse button -->
			<!-- begin header navigation right -->
			<ul class="nav navbar-nav navbar-right">
			    <li>
				<form class="navbar-form full-width">
				    <div class="form-group">
					<input type="text" class="form-control" placeholder="Enter keyword" />
					<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
				    </div>
				</form>
			    </li>
			    <?php
			        //$CurrentDate = date('d-m-Y');
				$nextDay = date('d-m-Y', strtotime(' +3 day'));
				$Notification = $this->IcomModel->GetNotification($nextDay);
				//$ss = $Notification[0]['TCL_SYS_ID'];
				//print_r($Notification);
				//exit;
				$NotiCount = count($Notification);
			    ?>
			    <li class="dropdown">
				<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
				    <i class="fa fa-bell-o"></i>
				    <span class="label"><?php echo $NotiCount; ?></span>
				</a>
				<ul class="dropdown-menu media-list pull-right animated fadeInDown">
				    <li class="dropdown-header">Today Services (<?php echo $NotiCount; ?>)</li>
				    <?php
				    $NotiCount = count($Notification);
				    if($Notification) {
				    $count=1;
				    foreach($Notification as $NotificationList) {
				    if($count > 4){
				    break;
				    } ?>
				    <li class="media">
					<a href="<?php echo site_url('IcomCtr/total_Edit/'.$NotificationList['TCL_TCH_SYS_ID']); ?>">
					    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
					    <div class="media-body">
						<h6 class="media-heading"><?php echo $NotificationList['TCL_EMP_ID']; ?></h6>
					    </div>
					</a>
				    </li>
				    <?php $count++; } } else{ ?>
				    <li class="dropdown-header"> No Notification </li>
				    <?php } ?>
				    <?php if($NotiCount > 4) { ?>
				    <li class="dropdown-footer text-center">
					<a data-toggle="modal" onclick="getFullView();" >View more</a>
				    </li>
				    <?php }?>
				</ul>
			    </li>
			    <div class="modal fade" id="modal-notification">
				<div class="modal-dialog modal-sm">
				    <div class="modal-content">
					<div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa  fa-times-circle "></i></button>
					    <img src="<?php echo base_url(); ?>application/assets/img/ITC_logo.png" data-id="login-cover-image" alt="" style="margin-bottom: 8px;" /><span style="color: #707070;font-size: 22px; font-family: fantasy;font-weight: 500;">Notification</span>
					</div>
					<?php
					    //$CurrentDate = date('d-m-Y');
					    //$Notifications = $this->IcomModel->GetNotification($CurrentDate);
					    //$CurrentDate = date('d-m-Y');
					    $nextDay = date('d-m-Y', strtotime(' +3 day'));
					    $Notification = $this->IcomModel->GetNotification($nextDay);
					    //$ss = $Notification[0]['TCL_SYS_ID'];
					    //print_r($Notification);
					    //exit;
					    $NotiCount = count($Notifications);
					?>
					<div class="modal-body" style="overflow-y: auto;height: 300px;">
					    <div id="model-notification">
						<?php 
						if($Notifications) {
						    foreach($Notifications as $Notificationlists) { ?>
						    <li class="media">
							<a href="<?php echo site_url('IcomCtr/total_Edit/'.$Notificationlists['TCL_TCH_SYS_ID']); ?>">
							    <div class="media-left"><i class="fa fa-bug media-object bg-red Notificate"></i></div>
							    <div class="media-body">
								<h6 class="media-heading"><?php echo $Notificationlists['TCL_EMP_ID']; ?></h6>
							    </div>
							</a>
						    </li>
						<?php } } ?> 
					    </div>
					</div>
					<div class="modal-footer">
					    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
					</div>
				    </div>
				</div>
			    </div>
			    <li class="dropdown navbar-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				    <img src="assets/img/user-13.jpg" alt="" /> 
				    <span class="hidden-xs"><?php echo $this->session->userdata('USER_NAME');?></span> <b class="caret"></b>
				</a>
				<ul class="dropdown-menu animated fadeInLeft">
				    <li class="arrow"></li>
				    <li><a href="javascript:;">Edit Profile</a></li>
				    <!--<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
				    <li><a href="javascript:;">Calendar</a></li>
				    <li><a href="javascript:;">Setting</a></li>
				    <li class="divider"></li>-->
				    <li><a href="<?php echo site_url('IcomCtr/Logout');?>">Log Out</a></li>
				</ul>
			    </li>
			</ul>
			    <!-- end header navigation right -->
		    </div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?php echo site_url('application/assets/img/user-13.jpg" alt=""')?>" /></a>
						</div>
						<div class="info">
							Admin
							<small>Icom Total Care</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="<?php echo site_url('IcomCtr/Dashboard');?>">
						    <!--<b class="caret pull-right"></b>-->
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
						 </a>
						<!--<ul class="sub-menu">
						    <li class="active"><a href="index.html">Dashboard v1</a></li>
						    <li><a href="index_v2.html">Dashboard v2</a></li>
						</ul>-->
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('IcomCtr/User_View');?>">
							<!--<b class="caret pull-right"></b>-->
							<i class="fa fa-user"></i> 
							<span>User</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-cogs"></i>
						    <span>Service</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo site_url('IcomCtr/serviceCall');?>">Inbound Calls</a></li>
							<li><a href="<?php echo site_url('IcomCtr/Onsite_View');?>">Onsite Calls</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('IcomCtr/Customer_View');?>">
						    <!--<b class="caret pull-right"></b>-->
						    <i class="fa fa-male"></i>
						    <span>Customer</span> 
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('IcomCtr/Emp_View');?>">
						   <!-- <b class="caret pull-right"></b>-->
						    <i class="fa fa-group"></i>
						    <span>Employee</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('IcomCtr/Supplier_View');?>">
						   <!-- <b class="caret pull-right"></b>-->
						    <i class="fa fa-user-plus"></i>
						    <span>Supplier</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('IcomCtr/Product_View');?>">
						   <!-- <b class="caret pull-right"></b>-->
						    <i class="fa fa-cubes"></i>
						    <span>Product</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="<?php echo site_url('IcomCtr/total');?>">
						   <!-- <b class="caret pull-right"></b>-->
						    <i class="fa fa-check-square-o"></i>
						    <span>Total Care Pack</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-location-arrow"></i>
						    <span>Location</span> 
						</a>
						<ul class="sub-menu">
							<!--<li><a href="</?php echo site_url('IcomCtr/Country_View');?>">Country</a></li>
							<li><a href="</?php echo site_url('IcomCtr/State_View');?>">State</a></li>-->
							<li><a href="<?php echo site_url('IcomCtr/City_View');?>">City</a></li>
							<li><a href="<?php echo site_url('IcomCtr/Area_View');?>">Area</a></li>
						</ul>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

</body>

<script>
    
    
    function getFullView(){
		//getNotificationInModal();
		$('#modal-notification').modal('show');
	}
</script>
