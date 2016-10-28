	<div id="content" class="content">
	    <!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Country</a></li>
		<li class="active">Add Country</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Country<small> You may add Country details here...</small></h1>
	    <!-- end page-header -->
	    <!-- begin row -->
	    <div class="row">
		<!-- begin col-10 -->
		<div class="col-md-12">
		    <!-- begin panel -->
		    <div class="panel panel-inverse">
			<div class="panel-heading">
			    <div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			    </div>
			    <h4 class="panel-title">Add Country</h4>
			</div>
			<div class="panel-body">
			    <form action="<?php echo base_url('IcomCtr/Country_Add'); ?>" class="form-horizontal" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">                   
				<div class="well">
				<legend class="pullmenu">Add Country Details</legend>
				<div class="row">
				    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">Country Code</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="CountryCode" value="" type="text" placeholder="City Code">
					    </div>
					</div>
				    </div>
				    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">City Description</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="CountryDesc" value="" type="text" placeholder="City Description">
					    </div>
					</div>
				    </div>
				    <!--<div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">Password</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="UserPassword" value="" type="password" placeholder="Password">
					    </div>
					</div>
				    </div>-->
				</div>                                        
				<div class="pager form-group">
				    <div class="col-md-7 control-label">
					<button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Save">Save</button>
					<button class="btn btn-sm btn-info" id="clear_data"  type="button">Reset</button>
					<button class="btn btn-sm btn-danger" onclick="window.history.back();" type="button">Cancel</button>
				    </div>
				</div>
				</div>
			    </form>
			</div>
		    </div>
		</div>
	    </div>
	    <!-- begin scroll to top btn -->
	    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	    <!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
    </body>
</html>
<script>
    
    $('#clear_data').click(function()
    {
	$(':input').val('');
	$('#form_validation').data('bootstrapValidator').resetForm();
    });
  
</script>
