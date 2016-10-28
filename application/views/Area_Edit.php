	<div id="content" class="content">
	    <!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Area</a></li>
		<li class="active">Edit Area</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Area<small> You may edit area details here...</small></h1>
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
			    <h4 class="panel-title">Edit Area</h4>
			</div>
			<div class="panel-body">
			    <form action="<?php echo base_url('IcomCtr/Area_Edit/'.$Area[0]['AR_CODE']); ?>" class="form-horizontal" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">                   
				<div class="well">
				<legend class="pullmenu">Edit Area Details</legend>
				<div class="row">
				    <div class="col-md-3">
					<div class="form-group">
					    <label class="col-md-12">Area Code</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="AreaCode" value="<?php echo $Area[0]['AR_CODE'] ?>" type="text" placeholder="Area Code">
					    </div>
					</div>
				    </div>
				    <div class="col-md-3">
					<div class="form-group">
					    <label class="col-md-12">Area Description</label>
					    <div class="col-md-12">
						<input class="form-control input-sm" name="AreaDesc" value="<?php echo $Area[0]['AR_DESC'] ?>" type="text" placeholder="Area Description">
					    </div>
					</div>
				    </div>
                                    <div class="col-md-3">
                                        <label class="col-md-12">City Code</label>
                                        <select name="AreaCityCode" id="AreaCityCode" class="form-control input-sm">
                                            <option selected="" disabled="">Select</option>
                                            <?php
                                            foreach ($City as $Code)
                                            {?>
                                            <option value="<?php echo $Code['CITY_CODE'];?>" <?php if($Code['CITY_CODE'] == $Area[0]['AR_CT_CODE']) echo "selected"; ?>><?php echo $Code['CITY_DESC']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
				    <div class="col-md-3">
					<div class="form-group">
					    <label class="control-label">Active?</label><br>
					    <input type="checkbox"  onclick="ActiveCheck(this);" <?php if($Area[0]['AR_ACTIVE_YN'] == "Y") echo 'checked="checked"'; ?> >
					    <input type="hidden" id="AR_ACTIVE_YN" value="<?php echo $Area[0]['AR_ACTIVE_YN']; ?>" name="AR_ACTIVE_YN">
					</div>
				    </div>
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
    
    $(document).ready(function(){
	
	$('#form_validation').bootstrapValidator
	({
	    message: 'This value is not valid',
	    feedbackIcons:
	    {
		valid: 'fa fa-check',
		invalid: 'fa fa-times',
		validating: 'fa fa-refresh'
	    },
	    fields:{
		AreaCode:{
		    validators:{
			notEmpty:{
			    message:'This field is required and can\'t be empty'
			},
			regexp: {
			    regexp: /^[a-z\s]+$/i,
			    message: 'The Customer name should consist of alphabetical characters and spaces only'
			}					 
		    }
		},
		AreaDesc:{
		    validators:{
			notEmpty:{
			    message:'This field is required and can\'t be empty'
			},
			regexp: {
			    regexp: /^[a-z\s]+$/i,
			    message: 'The Customer name should consist of alphabetical characters and spaces only'
			}					 
		    }
		},
		AreaCityCode: {
		    validators: {		    
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    }
		},
	    }
	});
    });
    
</script>

<script>
    
    $('#clear_data').click(function()
    {
	$(':input').val('');
	$('#form_validation').data('bootstrapValidator').resetForm();
    });
    
    function ActiveCheck($this) {
        if ($this.checked) {
            $('#AR_ACTIVE_YN').val('Y');
        }else{
            $('#AR_ACTIVE_YN').val('N');
        }
    }
  
</script>
