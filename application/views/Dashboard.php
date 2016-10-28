    
    <style>
	.Changeclr{
		color: #ffffff;
	}
    </style><!-- begin #content -->
    <div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
	    <li><a href="javascript:;">Home</a></li>
	    <li class="active">Dashboard</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Dashboard <small></small></h1>
	<!-- end page-header -->
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-md-3 col-sm-6">
			<div class="widget widget-stats bg-green">
				<div class="stats-icon"><i class="fa fa-male"></i></div>
				<div class="stats-info">
				    <h3 class="Changeclr">Customers</h3>
				    <p><?php echo $customer ?></p>	
				</div>
				<div class="stats-link">
				    <a href="Customer_View">View Detail &nbsp;<i class="fa fa-arrow-circle-o-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-md-3 col-sm-6">
		    <div class="widget widget-stats bg-blue">
			<div class="stats-icon"><i class="fa fa-group"></i></div>
			<div class="stats-info">
			    <h3 class="Changeclr">Employees</h3>
			    <p><?php echo $employee ?></p>	
			</div>
			<div class="stats-link">
			    <a href="Emp_View">View Detail &nbsp;<i class="fa fa-arrow-circle-o-right"></i></a>
			</div>
		    </div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-md-3 col-sm-6">
		    <div class="widget widget-stats bg-purple">
			<div class="stats-icon"><i class="fa fa-user-plus"></i></div>
			<div class="stats-info">
			    <h3 class="Changeclr">Suppliers</h3>
			    <p><?php echo $supplier ?></p>	
			</div>
			<div class="stats-link">
			    <a href="Supplier_View">View Detail &nbsp;<i class="fa fa-arrow-circle-o-right"></i></a>
			</div>
		    </div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-md-3 col-sm-6">
		    <div class="widget widget-stats bg-red">
			<div class="stats-icon"><i class="fa fa-cubes"></i></div>
			<div class="stats-info">
			    <h3 class="Changeclr">Products</h3>
			    <p><?php echo $product ?></p>	
			</div>
			<div class="stats-link">
			    <a href="Product_View">View Detail &nbsp;<i class="fa fa-arrow-circle-o-right"></i></a>
			</div>
		    </div>
		</div>
		<!-- end col-3 -->
	</div>
	<!-- end row -->
	<!-- begin row -->
	<div class="row">
	    <!-- begin col-12 -->
	    <div class="col-md-12">
		<div class="panel panel-inverse" data-sortable-id="flot-chart-8">
		    <div class="panel-heading">
			<div class="panel-heading-btn">
			    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
			<h4 class="panel-title">Service Calls</h4>
		    </div>
		    <div class="panel-body">
			<div class="row">
			<div class="col-md-4">
			    <h4>Inbound and Onsite Calls</h4>
			    <div id="donut-chart" class="height-sm"></div>
			    <ul>
				<li><i class="fa fa-circle fa-fw text-success"></i><span style="color:#00acac"> <?php echo $inbound;?> Inbound Calls</span></li>
				<li><i class="fa fa-circle fa-fw text-primary"></i> <span style="color:#348fe2">  <?php echo $onsite;?> Onsite Calls</span></li>
			    </ul>
			</div>
			<div class="col-md-8">
			    <center><h4>Inbound and Onsite Status</h4></center>
			    <div id="chart" class="height-sm"></div>
			    <ul style="list-style-type: none;padding-left:70px;">
				<div class="col-md-3">
				<h5>Request</h5>
				<li><i class="fa fa-circle fa-fw text-success"></i> <span style="color:#00ACAC"><?php echo $InboundReq ?> Inbound </span></li>
				<li><i class="fa fa-circle fa-fw text-primary"></i> <span style="color:#348FE2"> <?php echo $OnsiteReq;?> Onsite </span></li>
				</div>				
                                <div class="col-md-3">
				<h5>Process</h5>
				<li><i class="fa fa-circle fa-fw text-success"></i><span style="color:#00ACAC"> <?php echo $InboundProcess ?> <span>Inbound </span></li>
				<li><i class="fa fa-circle fa-fw text-primary"></i><span style="color:#348FE2"> <?php echo $OnsiteProcess;?> <span>Onsite </span></li>
				</div>
				<div class="col-md-3">
				<h5>Completed</h5>
				<li><i class="fa fa-circle fa-fw text-success"></i> <span style="color:#00ACAC"><?php echo $InboundComp ?> <span>Inbound </span></li>
				<li><i class="fa fa-circle fa-fw text-primary"></i> <span style="color:#348FE2"><?php echo $OnsiteComp;?> <span>Onsite </span></li>
				</div>
				<div class="col-md-3">
				<h5>Delivered</h5>
				<li><i class="fa fa-circle fa-fw text-success"></i><span style="color:#00ACAC"> <?php echo $InboundDel ?> <span>Inbound </span></li>
				<li><i class="fa fa-circle fa-fw text-primary"></i> <span style="color:#348FE2"><?php echo $OnsiteDel;?> <span>Onsite </span></li>
				</div>
			    </ul>
			</div>
			</div>
		    </div>
		</div>
	    </div>
	    <!-- end col-12 -->
	</div>
	<!-- end row -->
    </div>
    <!-- end #content -->
    <script>
	var handleDonutChart = function() {
	    "use strict";
	    if ($("#donut-chart").length !== 0) {
		var e = [];
		var t = 2;
		var n = [green, blue];
		var r = ["INBOUND CALLS", "ONSITE CALLS"];
		var i = ['<?php echo $inbound ?>', '<?php echo $onsite ?>'];
		for (var s = 0; s < t; s++) {
		    e[s] = {
			label: r[s],
			data: i[s],
			color: n[s]
		    }
		}
		$.plot($("#donut-chart"), e, {
		    series: {
			pie: {
			    innerRadius: 0.4,
			    show: true,
			    combine: {
				color: "#999",
				threshold: .1
			    }
			}
		    },
		    grid: {
			borderWidth: 0,
			hoverable: true,
			clickable: true
		    },
		    legend: {
			show: false
		    }
		})
	    }
	};
    </script>
    
<script>
    Morris.Bar({
        element: 'chart',
  data: [
    { y: 'REQUEST', a: <?php echo $InboundReq ?>, b: <?php echo $OnsiteReq;?> },
    { y: 'PROCESS', a: <?php echo $InboundProcess ?>,  b: <?php echo $OnsiteProcess;?>  },
    { y: 'COMPLETED', a: <?php echo $InboundComp ?>,  b: <?php echo $OnsiteComp ;?> },
    { y: 'DELIVERED', a: <?php echo $InboundDel ?>,  b: <?php echo $OnsiteDel;?> }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  barColors: ['#00ACAC','#348FE2'],
  labels:['Inbound','Onsite']

});
</script>
    