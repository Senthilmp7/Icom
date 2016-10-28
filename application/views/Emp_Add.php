<style>
.superbox-img {
    margin-top:-33px;
    margin-left:173px;
    width: 57%;
    height:130px;
}
.checkbox{display:none}
.switch
{
width: 62px;
height: 32px;
background: #FF5B57;
border-radius:16px;
}
.switch:before
{
background: #eee;
}
.switch:after 
{
content: 'No';
font-weight:bold;
color:#FF5B57;
padding-top:6px;
padding-left:6px;
height: 29px;
width: 29px;
border-radius: 28px;
background: #FFFFFF;
position: absolute;
top: 1px;
left: 1px;
}
.switchOn
{
background: #49C4C5 !important;
}
.switchOn:after
{
content: 'Yes';
font-weight:bold;
padding-left:4px;
color:#49C4C5;
left: 30px !important;
}
</style>
<div id="content" class="content">
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Products</a></li>
    </ol>
    <h1 class="page-header">Products<small> You may view products details here...</small></h1>
    <div class="row">
	<div class="col-12">
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
		    </div>
		    <h4 class="panel-title">Employee Details</h4>
		</div>
		<div class="panel-body">
		    <form action="<?php echo site_url('IcomCtr/Emp_Add'); ?>" method="post" enctype="multipart/form-data" id="form_validation" name="form_validation">
			<div class="row">
			    <div class="col-md-3">
				<div class="row">
				    <div class="form-group col-md-12">
					<div class="col-md-12 ImageView AdjustPadding" style="padding-bottom:20px;"  >
					 <label class="col-md-6">Image</label>
					 <div class="form-group">
					     <img src="<?php echo base_url('application/assets/img/dummy.jpg');?>"  class="col-md-12 previewimage img-responsive" id="dummy1" style="height: 140px; width: 140px;padding-bottom:15px">
					     <input type="file" id="preview" name="EMP_IMAGE_FILE" onchange="attachmentss(this);" class="col-md-12">
					 </div>
					</div>
				    </div>
				</div>
			    </div>
			    <div class="col-md-9">
				<div class="row">
				    <div class="form-group col-md-4">
					<label class="control-label">Employee Name</label>
					<input type="text" class="form-control input-sm" name="EMP_NAME" placeholder="Enter First Name" />
				    </div>
				    <div class="form-group col-md-4">
					<label class="control-label">Employee Designation</label>
					<input type="text" class="form-control input-sm" name="EMP_DESIGNATION" placeholder="Enater Last Name" />
				    </div>
				    <div class="form-group col-md-4">
					<label class="control-label">Employee Email</label>
					<input type="text" class="form-control input-sm" name="EMP_EMAIL" placeholder="Enter Email" />
				    </div>
				</div>
				<div class="row">
				    <div class="form-group col-md-4">
					<label class="control-label">Address 1</label>
					<input type="text" class="form-control input-sm" name="EMP_ADD1" placeholder="Employee Address">
				    </div>
				    <div class="form-group col-md-4">
					<label class="control-label">Address 2</label>
					<input type="text" class="form-control input-sm" name="EMP_ADD2" placeholder="Employee Address">
				    </div>
				    <div class="form-group col-md-4">
					<label class="control-label">Phone No</label>
					<input type="text" class="form-control input-sm" name="EMP_PHONE_NO" placeholder="Enter Phone No" />
				    </div>
				</div>
				<div class="row">
				    <div class="form-group col-md-4">
					<label class="control-label">Mobile No</label>
					<input type="text" class="form-control input-sm" name="EMP_MOBILE_NO" placeholder="Enter Mobile No" />
				    </div>
				    <div class="form-group col-md-4">
					<label class="col-md-4">City</label>
					<select name="EMP_CT_CODE" id="EMP_CT_CODE" class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm" onchange="GetCityCode($(this));">
					    <option selected="" disabled="">Select</option>
					    <?php
					    foreach ($City as $row)
					    {?>
					    <option value="<?php echo $row['CITY_CODE']; ?>"><?php echo $row['CITY_DESC']; ?></option>
					    <?php } ?>
					</select>
				    </div>
				    <div class="form-group col-md-4">
					<label class="control-label">AR Code</label>
					<select name="EMP_AR_CODE" id="EMP_AR_CODE" class="form-control input-sm ss selectpicker" data-live-search="true" data-style="btn-white btn-sm">
					   <option selected="" disabled="">Select</option>
					</select>
				    </div>
				</div>
				<div class="row">
				    <div class="form-group col-md-12 switch">
					<input type="checkbox" class="checkbox">
					<input type="hidden" id="EMP_ACTIVE_YN" name="EMP_ACTIVE_YN" value="N" >
				    </div>
				</div>
			    </div>
			</div>
			<div class="pager form-group">
			    <div class="col-md-12 control-label">
				<button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Save">Save</button>
				<button class="btn btn-sm btn-info" id="clear_data"  type="button">Reset</button>
				<button class="btn btn-sm btn-danger" onclick="window.history.back();" type="button">Cancel</button>
			    </div>
			</div>
		    </form>
		</div>
	    </div>
	</div>
    </div>
</div>

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
		EMP_NAME:{
		    validators:{
			notEmpty:{
			    message:'This field is required and can\'t be empty'
			},
			regexp: {
			    regexp: /^[a-z\s]+$/i,
			    message: 'The Employee name should consist of alphabetical characters and spaces only'
			}					 
		    }
		},
		EMP_DESIGNATION:{
		    validators:{
			notEmpty:{
			    message:'This field is required and can\'t be empty'
			},
			regexp: {
			    regexp: /^[a-z\s]+$/i,
			    message: 'The Employee name should consist of alphabetical characters and spaces only'
			}					 
		    }
		},
		EMP_EMAIL:
		{
		    trigger:'blur',
		    validators:{
			notEmpty:{
			    message: 'Mail id is required'
			},
			regexp:{
			    regexp: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/,
			    message: 'Enter Valid Emnil address'
			}
		    }
		},
		EMP_ADD1: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
		EMP_ADD2: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
		EMP_MOBILE_NO: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			},
			regexp: {
			    regexp: /^[0-9-]+$/,
			    message: 'Customer mobile number field should contain numbers only'
			}
		    } 
		},
		EMP_PHONE_NO: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			},
			regexp: {
			    regexp: /^[0-9-]+$/,
			    message: 'Customer mobile number field should contain numbers only'
			}
		    } 
		},
		EMP_CT_CODE: {
		    validators: {		    
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    }
		},
		EMP_AR_CODE: {
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
    function GetCityCode($this){
	var Citycode = $this.find("option:selected").val();
	$.ajax({
	    type:'POST',
	    url:"<?= site_url('IcomCtr/AjaxGetArea'); ?>",
	    data: {Citycode:Citycode},
	    //dataType:'json',
	    success:function(data){
		$('#EMP_AR_CODE').html(data).selectpicker('refresh');
	    }
	});
    }

    function attachmentss($this) {
	var oFReader = new FileReader();
	oFReader.readAsDataURL($this.files[0]);
	oFReader.onload = function (oFREvent) {
	$($this).parents('.ImageView').find('img').attr("src",  oFREvent.target.result);
	};
    };
    
</script>

<script>
$('.switch').click(function()
{
    $(this).toggleClass("switchOn");
    if($(this).hasClass('switchOn')){
       $('#EMP_ACTIVE_YN').val('Y');
    }
    else{
       $('#EMP_ACTIVE_YN').val('N');
    }
});
</script>