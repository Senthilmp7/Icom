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
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	    <li><a href="javascript:;">Home</a></li>
	    <li><a href="javascript:;">Form Stuff</a></li>
	    <li class="active">Form Elements</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">ICOM <small>Supplier Details</small></h1>
    <!-- end page-header -->
		
    <!-- begin row -->
    <div class="row">
	<!-- begin col-12 -->
	<div class="col-12">
	    <!-- begin panel -->
	    <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
		    </div>
		    <h4 class="panel-title">Supplier Details</h4>
		</div>
		<div class="panel-body">
		    <form action="<?php echo site_url('IcomCtr/Supplier_Add'); ?>" method="post" id="form_validation" name="form_validation">
			<div class="row">
                            <div class="form-group col-md-3">
				<label class="control-label">Supplier Company</label>
				<input type="text" class="form-control input-sm" name="SUPL_COMPANY" placeholder="Supplier name">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Supplier Name</label>
				<input type="text" class="form-control input-sm" name="SUPL_PERSON_NAME" placeholder="Supplier name">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Materials</label>
				<input type="text" class="form-control input-sm" name="SUPL_PRODUCT" placeholder="Supplier name">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Supplier Email</label>
				<input type="text" class="form-control input-sm" name="SUPL_EMAIL" placeholder="Supplier Email">
			    </div>
			</div>
			<div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Address 1</label>
				<input type="text" class="form-control input-sm" name="SUPL_ADD1" placeholder="Supplier Address">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Address 2</label>
				<input type="text" class="form-control input-sm" name="SUPL_ADD2" placeholder="Supplier Address">
			    </div>
			    <div class="form-group col-md-3">
				<label class=" control-label">Mobile No</label>
				<input type="text" class="form-control input-sm" name="SUPL_MOBILE" placeholder="Enter Mobile No" />
			    </div>
                            <div class="form-group col-md-3">
				<label class="control-label">Phone</label>
				<input type="text" class="form-control input-sm" name="SUPL_PHONE" placeholder="Enter Phone No" />
			    </div>
			</div>
			<div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Postal</label>
                                <input type="text" class="form-control input-sm" name="SUPL_POSTAL" placeholder="Postal" />
			    </div>
                            <div class="form-group col-md-3">
				<label class="control-label">Fax</label>
                                <input type="text" class="form-control input-sm" name="SUPL_FAX" placeholder="Fax" />
			    </div>
                            <div class="form-group col-md-3">
				<label class="col-md-4">City</label>
				<select name="SUPL_CT_CODE" id="SUPL_CT_CODE" class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm" onchange="GetCityCode($(this));">
				    <option selected="" disabled="">Select</option>
				    <?php
				    foreach ($City as $row)
				    {?>
				    <option value="<?php echo $row['CITY_CODE']; ?>"><?php echo $row['CITY_DESC']; ?></option>
				    <?php } ?>
				</select>
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">AR Code</label>
				<!--<input type="text" class="form-control input-sm" name="CUST_AR_CODE" placeholder="Enter Ar code" />-->
				<select name="SUPL_AR_CODE" id="SUPL_AR_CODE" class="form-control input-sm ss selectpicker" data-live-search="true" data-style="btn-white btn-sm">
				   <option selected="" disabled="">Select</option>
				</select>
			    </div>
			</div>
			<div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Bank Name</label>
				<input type="text" class="form-control input-sm" name="SUPL_BANK_NAME" placeholder="Enter Bank Name">
			    </div>
			    <div class="form-group col-md-3">
				<label class=" control-label">Account Number</label>
				<input type="text" class="form-control input-sm" name="SUPL_ACC_NUM" placeholder="Enter Account Number" />
			    </div>
                            <div class="form-group col-md-3">
				<label class="control-label">Branch Code</label>
				<input type="text" class="form-control input-sm" name="SUPL_BRANCH_CODE" placeholder="Enter Branch Code" />
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">IFSC Code</label>
                                <input type="text" class="form-control input-sm" name="SUPL_IFSC_CODE" placeholder="IFSC Code" />
			    </div>
			</div>
			<div class="row">
			    <div class="form-group col-md-3 switch">
                                <!--<label class="control-label">Active?</label>-->
                                <!--<input type="checkbox"  onclick="ActiveCheck(this);">
                                <input type="hidden" id="SUPL_ACTIVE_YN" name="SUPL_ACTIVE_YN" value="N" >-->
				<input type="checkbox" class="checkbox">
				<input type="hidden" id="SUPL_ACTIVE_YN" name="SUPL_ACTIVE_YN" value="N" >
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
	    <!-- end panel -->
	</div>
	<!-- end col-6 -->
    </div>
<!-- end row -->
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
		SUPL_COMPANY:{
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
		SUPL_PERSON_NAME:{
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
		SUPL_EMAIL:
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
		SUPL_ADD1: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
		SUPL_ADD2: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
		SUPL_MOBILE: {
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
		SUPL_PHONE: {
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
		SUPL_POSTAL: {
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
		SUPL_FAX: {
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
		SUPL_CT_CODE: {
		    validators: {		    
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    }
		},
		SUPL_AR_CODE: {
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
		$('#SUPL_AR_CODE').html(data).selectpicker('refresh');
	    }
	});
    }

    //function ActiveCheck($this){
    //    if($this.checked){
    //       $('#SUPL_ACTIVE_YN').val('Y')
    //    }
    //}

</script>

<script>
$('.switch').click(function()
{
    $(this).toggleClass("switchOn");
    if($(this).hasClass('switchOn')){
       $('#SUPL_ACTIVE_YN').val('Y');
    }
    else{
       $('#SUPL_ACTIVE_YN').val('N');
    }
});
</script>
