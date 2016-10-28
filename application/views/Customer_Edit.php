<div id="content" class="content">
    <ol class="breadcrumb pull-right">
	    <li><a href="javascript:;">Home</a></li>
	    <li><a href="javascript:;">Form Stuff</a></li>
	    <li class="active">Form Elements</li>
    </ol>
    <h1 class="page-header">ICOM <small>Customer Details</small></h1>
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
		    <h4 class="panel-title">Customer Details</h4>
		</div>
		<div class="panel-body">
		    <form action="<?php echo site_url('IcomCtr/Customer_Edit/'.$Customer[0]['CUST_ID']); ?>" method="post" id="form_validation" name="form_validation" enctype="multipart/form-data">
			<div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Customer Code</label>
				<input type="text" class="form-control input-sm" value="<?php echo $Customer[0]['CUST_CODE']?>" name="CUST_CODE" placeholder="Customer name" readonly>
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Customer Name</label>
				<input type="text" class="form-control input-sm" value="<?php echo $Customer[0]['CUST_NAME']?>" name="CUST_NAME" placeholder="Customer name">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Residential Type</label>
				<select class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm" name="CUST_RESI_TYPE">
				    <option disabled="">Select</option>
				    
				    <option value="House" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'House') echo "selected"; ?>>House</option>
				    <option value="Flat" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'Flat') echo "selected"; ?>>Flat</option>
				    <option value="Apartment" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'Apartment') echo "selected"; ?>>Apartment</option>
				    <option value="Office" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'Office') echo "selected"; ?>>Office</option>
				    
				</select>
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Customer Email</label>
				<input type="text" class="form-control input-sm" value="<?php echo $Customer[0]['CUST_EMAIL']?>" name="CUST_EMAIL" placeholder="Customer Email">
			    </div>
			</div>
			<div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Address 1</label>
				<input type="text" class="form-control input-sm" value="<?php echo $Customer[0]['CUST_ADD1']?>" name="CUST_ADDRESS1" placeholder="Customer Address">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Address 2</label>
				<input type="text" class="form-control input-sm" value="<?php echo $Customer[0]['CUST_ADD2']?>" name="CUST_ADDRESS2" placeholder="Customer Address">
			    </div>
			    <div class="form-group col-md-3">
				<label class=" control-label">Mobile No</label>
				<input type="text" class="form-control input-sm" value="<?php echo $Customer[0]['CUST_MOBILE_NO']?>" name="CUST_MOBILE_NO" placeholder="Enter Moiler No" />
			    </div>
			    <div class="form-group col-md-3">
				<label class="col-md-4">City</label>
				<select name="CUST_CT_CODE" id="CUST_CT_CODE" class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm" onchange="GetCityCode($(this));">
				    <option selected="" disabled="">Select</option>
				    <?php
				    foreach ($City as $row)
				    {?>
				    <option value="<?php echo $row['CITY_CODE']; ?>" <?php if($row['CITY_CODE'] == $Customer[0]['CUST_CT_CODE']) echo "selected"; ?>><?php echo $row['CITY_DESC']; ?></option>
				    <?php } ?>
				</select>
			    </div>
			</div>
			<div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">AR Code</label>
				<select name="CUST_AR_CODE" id="CUST_AR_CODE" class="form-control input-sm ss selectpicker" data-live-search="true" data-style="btn-white btn-sm">
					<option selected="" disabled="">Select</option>
					<?php
					foreach ($Area as $row)
					{?>
					<option value="<?php echo $row['AR_CODE']; ?>" <?php if($row['AR_CODE'] == $Customer[0]['CUST_AR_CODE']) echo "selected"; ?>><?php echo $row['AR_DESC']; ?></option>
					<?php } ?>
				</select>
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Last Visit</label>
				<input type="text" class="form-control input-sm" value="<?php echo $Customer[0]['CUST_EMP_LAST_VISIT']?>" name="CUST_EMP_LAST_VISIT" placeholder="Provide last visited detail" />
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Customer Feedback</label>
				<textarea class="form-control input-sm" name="CUST_FEEDBACK" placeholder="Enter Your Feedback here.." rows="1"><?php echo $Customer[0]['CUST_FEEDBACK']?></textarea>
			    </div>				
			</div>
			<div class="pager form-group">
				<div class="col-md-12 control-label">
				    <button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Update">Save</button>
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
	
    function GetCityCode($this){
	var Citycode = $this.find("option:selected").val();
	$.ajax({
	    type:'POST',
	    url:"<?= site_url('IcomCtr/AjaxEditGetArea'); ?>",
	    data: {Citycode:Citycode},
	    //dataType:'json',
	    success:function(data){
		$('#CUST_AR_CODE').html(data).selectpicker('refresh');
	    }
	});
    }
    
</script>

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
		CUST_CODE:{
		    validators:{
			notEmpty:{
			    message:'This field is required and can\'t be empty'
			},
			regexp: {
			    regexp: /^[A-Z0-9]+$/,
			    message: 'The Customer Code should consist of numbers and uppercase letters and spaces Only'
			}					 
		    }
		},
		CUST_NAME:{
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
		CUST_RESI_TYPE: {
		    validators: {		    
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    }
		},
		CUST_EMAIL:
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
		CUST_ADDRESS1: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
		CUST_ADDRESS2: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
		CUST_MOBILE_NO: {
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
		CUST_CT_CODE: {
		    validators: {		    
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    }
		},
		CUST_AR_CODE: {
		    validators: {		    
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    }
		},
		CUST_EMP_LAST_VISIT: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
		CUST_FEEDBACK: {
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
