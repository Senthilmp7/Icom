	<div id="content" class="content">
	    <!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">State</a></li>
		<li class="active">Edit State</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">State<small> You may Edit State details here...</small></h1>
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
			    <h4 class="panel-title">Edit State</h4>
			</div>
			<div class="panel-body">
			    <form action="<?php echo base_url('IcomCtr/State_Edit/'.$State[0]['ST_CODE']); ?>" class="form-horizontal" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">                   
				<div class="well">
				<legend class="pullmenu">Edit State Details</legend>
				<div class="row">
				    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">State Code</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="StateCode" value="<?php echo $State[0]['ST_CODE']?>" type="text" placeholder="State Code">
					    </div>
					</div>
				    </div>
				    <div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">State Desc</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="StateDesc" value="<?php echo $State[0]['ST_DESC']?>" type="text" placeholder="State Description">
					    </div>
					</div>
				    </div>
                                    <div class="col-md-4">
                                        <label class="col-md-4">Country Code</label>
                                        <select name="StateCountryCode" id="StateCountryCode" class="form-control input-sm">
                                            <option selected="" disabled="">Select</option>
                                            <?php
                                            foreach ($Country as $row)
                                            {?>
                                            <option value="<?php echo $row['CN_CODE'];?>" <?php if($row['CN_CODE'] == $State[0]['ST_CN_CODE']) echo "selected"; ?>><?php echo $row['CN_DESC']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!--<div class="col-md-4">
					<div class="form-group">
					    <label class="col-md-4">Country Code</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="CountryStateCode" value="" type="text" placeholder="Country Description">
					    </div>
					</div>
				    </div>-->
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
					<button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Update">Save</button>
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
