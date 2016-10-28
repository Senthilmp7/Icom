<div id="content" class="content">
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">User</a></li>
	<li class="active">Add user</li>
    </ol>
    <h1 class="page-header">User<small> You may add user details here...</small></h1>
    <div class="row">
	<div class="col-md-12">
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">Add User</h4>
		</div>
		<div class="panel-body">
		    <form action="<?php echo base_url('IcomCtr/User_Add'); ?>" class="form-horizontal" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">                   
			<div class="well">
			<legend class="pullmenu">Add User Details</legend>
			<div class="row">
			    <div class="col-md-4">
				<div class="form-group">
				    <label class="col-md-4">User Name</label>
				    <div class="col-md-12">
					<input class="form-control input-sm" name="UserName" value="" type="text" placeholder="User Name">
				    </div>
				</div>
			    </div>
			    <div class="col-md-4">
				<div class="form-group">
				    <label class="col-md-4">Email</label>
				    <div class="col-md-12">
					<input class="form-control input-sm" name="UserEmail" value="" type="text" placeholder="Email">
				    </div>
				</div>
			    </div>
			    <div class="col-md-4">
				<div class="form-group">
				    <label class="col-md-4">Password</label>
				    <div class="col-md-12">
					<input class="form-control input-sm" name="UserPassword" value="" type="password" placeholder="Password">
				    </div>
				</div>
			    </div>
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
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
<script>
    
    $(document).ready(function()
    {
        $('#form_validation').bootstrapValidator
	({
	    message: 'This value is not valid',
	    excluded:[':disabled'],
	    feedbackIcons:
	    {
		valid: 'fa fa-check',
		invalid: 'fa fa-times',
		validating: 'fa fa-refresh'
	    },
	    fields:
	    {
		UserName:
		{
		    trigger:'blur',
		    validators:
		    {
			notEmpty:
			{
			    message: 'Username is required'
			},
			remote:
			{
			    message: 'User Name Already Existed',
			    url: '<?php echo base_url('IcomCtr/UserCheck')?>',
			    type: 'POST'
			}
		    }
		},
		
		UserEmail:
		{
		    trigger:'blur',
		    validators:
		    {
			notEmpty:
			{
			    message: 'Mail id is required'
			},
			regexp:
			{
			    regexp: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/,
			    message: 'Enter Valid Emnil address'
			}
		    }
		},
		
		UserPassword:
		{
		    validators:
		    {
			notEmpty:
			{
			    message: 'Password is required'
			}
		    }
		}
	    }
	});
    });
    
    $('#clear_data').click(function()
    {
	$(':input').val('');
	$('#form_validation').data('bootstrapValidator').resetForm();
    });
    
</script>

