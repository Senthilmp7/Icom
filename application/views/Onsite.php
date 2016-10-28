<!-- begin #page-loader -->
<style>
    .checkbox{display:none}
.switch
{
width: 62px;
height: 32px;
background: #FF5B57;
border-radius:16px;
top:20px;

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
	<li class="active">Service</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Service call<small> You may add service call detail here...</small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
	<div class="panel-heading">
	    <div class="panel-heading-btn">
		<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
		<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
		<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
	    </div>
	<h4 class="panel-title"><?php echo $mode; ?>Service Form</h4>
	</div>
	<div class="panel-body">
	    <form <?php if($mode=="add"){?> action="<?php echo site_url('IcomCtr/Onsite_Edit/add');?>" <?php } else { ?> action="<?php echo site_url('IcomCtr/Onsite_Edit/edit/'.$ServiceEdit[0]['SH_SYS_ID']);?>" <?php } ?> id="form_validation"  enctype="multipart/form-data" method="POST">
		<!--well start-->
		<div class="well">
		    <div class="row"><!--OUTER row defined BEGIN-->
			<div class="col-md-6 ui-sortable">
			    <div class="well" id="myForm">
				
				<!--<div class="row">
				    <section class="col-sm-12 form-group">  
					<label class="radio-inline">
					    <input type="radio" name="SH_CUST_TYPE" id="SH_CUST_NEW" value="<?php if($mode=="add"){ echo "New"; }else{ echo $ServiceEdit[0]['SH_CUST_TYPE'];}?>" <?php if($mode=="edit") { if($ServiceEdit[0]['SH_CUST_TYPE']=="New"){ echo "checked";} }?> checked />
					    New Customer
					</label>
					<label class="radio-inline">
					    <input type="radio" name="SH_CUST_TYPE" id="SH_CUST_EXIST" value="<?php if($mode=="add"){ echo "Exist"; }else{ echo $ServiceEdit[0]['SH_CUST_TYPE'];}?>" <?php if($mode=="edit") { if($ServiceEdit[0]['SH_CUST_TYPE']=="Exist"){ echo "checked";} }?>/>
					    Existing Customer
					</label>
				    </section>
				</div>-->
				<div class="row">
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Customer Code</label>
					<?php if($mode=="add"){ ?>
					    <input type="text" name="SH_CUST_CODE" class="form-control input-sm" value="" id="SH_CUST_CODE" placeholder="Enter Code" />
					<?php }else{ ?>
					    <input type="text" name="SH_CUST_CODE" class="form-control input-sm" value="<?php  echo $ServiceEdit[0]['SH_CUST_CODE']; ?>" id="SH_CUST_CODE" readonly />
					<?php }?>
				    </section>
				</div>
				<!--<div class="row">
				    <section class="col-sm-6 form-group New">       
					<label class="control-label">Customer Id</label>
					<input type="text" name="SH_CUST_ID" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_CUST_ID'];}?>" id="SH_CUST_ID" placeholder="" />
				    </section>
				</div>-->
				<div class="row">
				    <section class="col-sm-6 form-group fetch_results">
					<input type="hidden" name="SH_CUST_ID" class="form-control input-sm" value="<?php if($mode=='edit') {echo $ServiceEdit[0]['SH_CUST_ID'];}?>" id="SH_CUST_ID" />
					<label class="control-label">Customer Name</label>
					<input type="text" name="SH_CUST_NAME" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_CUST_NAME']; } ?>" id="SH_CUST_NAME" placeholder="Enter Name" />
				    </section>
				    <section class="col-sm-6 form-group fetch_results">       
					<label class="control-label">Mobile No</label>
					<input type="text" name="SH_MOBILE_NO" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_MOBILE_NO'];}?>"  id="SH_MOBILE_NO" placeholder="Enter Mobile No" />
				    </section>
				</div>
				<!--<section class="col-sm-3 form-group">       
				    <label class="control-label">Customer Type</label>
				    <input type="text" name="SH_CUST_TYPE" class="form-control input-sm" value="</?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_CUST_TYPE'];}?>" id="SH_CUST_TYPE" placeholder="" />
				</section>-->
				<div class="row">
				    <section class="col-sm-6 form-group fetch_results">       
					<label class="control-label">Customer Email</label>
					<input type="text" name="SH_CUST_EMAIL" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $Customer[0]['CUST_EMAIL']; } ?>" id="SH_CUST_EMAIL" placeholder="Enter Email" />
				    </section>
				    <section class="col-sm-6 form-group fetch_results">
					<label class="control-label">Residential Type</label>
					<?php if($mode=="add") {?>
					<select class="form-control input-sm selectpicker" name="SH_CUST_RESI_TYPE" id="SH_CUST_RESI_TYPE" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
					    <option disabled="" selected >Select</option>
					    <option>House</option>
					    <option>Flat</option>
					    <option>Apartment</option>
					    <option>Office</option>
					</select>
					<?php } else {?>
					<select class="form-control input-sm selectpicker" name="SH_CUST_RESI_TYPE" id="SH_CUST_RESI_TYPE" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
					    <option disabled="">Select</option>
					    <option value="House" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'House') echo "selected"; ?>>House</option>
					    <option value="Flat" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'Flat') echo "selected"; ?>>Flat</option>
					    <option value="Apartment" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'Apartment') echo "selected"; ?>>Apartment</option>
					    <option value="Office" <?php if($Customer[0]['CUST_RESI_TYPE'] == 'Office') echo "selected"; ?>>Office</option>
					</select>
					<?php } ?>
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-6 form-group fetch_results">       
					<label class="control-label">Customer Address1</label>
					<input type="text" name="SH_CUST_ADD1" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $Customer[0]['CUST_ADD1']; } ?>" id="SH_CUST_ADD1" placeholder="Enter Address" />
				    </section>
				    <section class="col-sm-6 form-group fetch_results">       
					<label class="control-label">Customer Address2</label>
					<input type="text" name="SH_CUST_ADD2" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $Customer[0]['CUST_ADD2']; } ?>" id="SH_CUST_ADD2" placeholder="Enter Address" />
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-6 form-group fetch_results">       
					<label class="col-md-4">City</label>
					<select name="SH_CT_CODE" id="SH_CT_CODE" class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body" onchange="GetCityCode($(this),'add','');">
					    <option disabled="">Select</option>
					    <?php
					    foreach ($City as $row)
					    {?>
					    <option value="<?php if($mode=="add"){ echo $row['CITY_CODE']; ?><?php }else{ echo $row['CITY_CODE']; }?>" <?php if($mode=="add"){}else { if($row['CITY_CODE'] == $ServiceEdit[0]['SH_CT_CODE']) echo "selected"; }?> ><?php echo $row['CITY_DESC']; ?></option>
					    <?php } ?>
					</select>
				    </section>
				    <section class="col-sm-6 form-group fetch_results">       
					<label class="control-label">AR Code</label>
					<select name="SH_AR_CODE" id="SH_AR_CODE" class="form-control input-sm ss selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
						<option selected="" disabled="">Select</option>
						<?php if($mode=="add"){
						    
						}else{
						foreach ($Area as $row)
						{?>
						<option value="<?php echo $row['AR_CODE']; ?>" <?php if($row['AR_CODE'] == $ServiceEdit[0]['SH_AR_CODE']) echo "selected"; ?>><?php echo $row['AR_DESC']; ?></option>
						<?php } }?>
					</select>
				    </section>
				</div>
			    </div>
			</div>
			<div class="col-md-6 ui-sortable">
			    <div class="well">
				<div class="row">
				    <section class="col-sm-6 form-group">
					<label class="control-label">Transaction Date</label>					     
					<span class='input-group'>
					<input type="text"  placeholder="Select Date" name="SH_TXN_DT" id="datepicker" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_TXN_DT'];}?>" data-date-format="dd-mm-yyyy" class="form-control input-sm" value="">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>                                         
				    </section>
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Engineer Name</label>
					<select name="SH_EMP_ID" id="SH_EMP_ID" class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
					    <option selected="" disabled="">Select</option>
					    <?php
					    foreach ($Employee as $row)
					    {?>
					    <option value="<?php if($mode=="add"){ echo $row['EMP_NAME']; ?><?php }else{ echo $row['EMP_NAME']; }?>" <?php if($mode=="add"){}else { if($row['EMP_NAME'] == $ServiceEdit[0]['SH_EMP_ID']) echo "selected"; }?> ><?php echo $row['EMP_NAME']; ?></option>
					    <?php } ?>
					</select>
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Estimated Amount</label>
					<input type="text" name="SH_ESTIMATED_AMT" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_ESTIMATED_AMT'];}?>" id="SH_ESTIMATED_AMT" placeholder="" />
				    </section>
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Amount Received</label>
					<input type="text" name="SH_AMT_RECVD" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_AMT_RECVD'];}?>"  id="SH_AMT_RECVD" placeholder="" />
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Time In</label>
					<input type="text" name="SH_TIME_IN" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_TIME_IN'];}?>" id="datetimepicker" placeholder="" />
				    </section>
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Time out</label>
					<input type="text" name="SH_TIME_OUT" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_TIME_OUT'];}?>" id="SH_TIME_OUT" placeholder="" />
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Spend Time</label>
					<input type="text" name="SH_EMP_SPEND_TIME" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_EMP_SPEND_TIME'];}?>" id="SH_EMP_SPEND_TIME" placeholder="" />
				    </section>
				    <section class="col-sm-6 form-group">       
					<label class="control-label">Feedback</label>
					<textarea type="text" name="SH_FEEDBACK" class="form-control input-sm" id="SH_FEEDBACK" placeholder="" /> <?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_FEEDBACK'];}?> </textarea>
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-4 form-group">
					<label class="control-label">Customer Approval</label>
					<?php if($ServiceEdit[0]['SH_CUST_APPR_YN']=="Y") { ?>
					<div class="form-group col-md-3 switch switchOn"> 
					    <input type="checkbox" class="checkbox" <?php if($ServiceEdit[0]['SH_CUST_APPR_YN']=="Y") echo 'checked="checked"';?> >
					    <input type="hidden" id="SH_CUST_APPR_YN" name="SH_CUST_APPR_YN" value="<?php echo $ServiceEdit[0]['SH_CUST_APPR_YN']?>">
					</div><?php } else { ?>
					<div class="form-group col-md-3 switch">
					    <input type="checkbox" class="checkbox" <?php if($ServiceEdit[0]['SH_CUST_APPR_YN']=="Y") echo 'checked="checked"';?>>
					    <input type="hidden" id="SH_CUST_APPR_YN" name="SH_CUST_APPR_YN" value="<?php echo $ServiceEdit[0]['SH_CUST_APPR_YN']?>">
					</div><?php } ?>
				    </section>
				     <section class="col-sm-6 form-group">       
					<input type="hidden" name="SH_CALL_TYPE" class="form-control input-sm" value="Onsite" id="SH_CALL_TYPE" placeholder="" />
					<!--<input type="hidden" name="SH_PRODUCT_TYPE" class="form-control input-sm" value="Onsite" id="SH_PRODUCT_TYPE" placeholder="" />-->
					<input type="hidden" name="SH_PRODUCT_TYPE" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_PRODUCT_TYPE']; } ?>" id="SH_PRODUCT_TYPE" />
					<input type="hidden" name="SH_ITEM_STATUS" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_ITEM_STATUS']; } ?>" id="SH_ITEM_STATUS" />
				    </section>
				</div>
			    </div>
			</div>
		    </div>
		
		
		    <div class="table-responsive forResponsiveLine addDynamic">
			<table class="table table-bordered">
			    <thead>
				<tr class="table-responsive info">
				    <th>
					<center>Sl.No</center>
				    </th>
				    <th>
					<center>Product</center>
				    </th>
				    <th>
					<center>Issues</center>
				    </th>
				    <th>
					<center>Problem Found</center>
				    </th>
				    <th>
					<center>FeedBack</center>
				    </th>
				    <th>
					<center><button type="button" class="btn btn-add btn-sm btn-primary btn-sm add"><i class="fa fa-plus fa-1x"></i></button></center>
				    </th>
				</tr>
			    </thead>
			    <tbody id="result">
				<?php if($mode=="add"){?>
				    <tr class="odd defaultRow">
				    <td><input type="hidden" name="LINE_TYPE[]" value="new"><input type="hidden" name="SL_SYS_ID[]" value="" class="form-control table_input"><input type="text" name="SL_LINE_NO[]" value="" class="form-control table_input"></td>
				    <td><!--<select class="form-control table_input" name="SL_PROD_TYPE[]" id="SL_PROD_TYPE">
					    <option>Select</option>
					    <option>TV</option>
					    <option>CCTV</option>
					    <option>Mobile</option>
					    <option>Laptop</option>
					    <option>Desktop</option>
					    <option>Water Heater</option>
					    <option>Deep Freezer</option>
					    <option>Refridgerator</option>
					    <option>Air Conditioner</option>
					    <option>Microwave Oven</option>
					    <option>Washing Machine</option>
					</select>-->
					<select name="SL_PROD_TYPE[]" id="SL_PROD_TYPE" class="form-control table_input selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
					    <option selected="" disabled="">Select</option>
					    <?php
					    foreach ($Product as $row)
					    { ?>
					    <option value="<?php if($mode=="add"){ echo $row['PR_NAME']; ?><?php }else{ echo $row['PR_NAME']; }?>" <?php if($mode=="add"){}else { if($row['PR_NAME'] == $ServiceEdit[0]['SH_PRODUCT_TYPE']) echo "selected"; }?> ><?php echo $row['PR_NAME']; ?></option>
					    <?php } ?>
					</select>
				    </td>
				    <td><input type="text" name="SL_ISSUE_FROM_CUST[]" value="" class="form-control table_input"></td>
				    <td><input type="text" name="SL_FOUND_BY_EMP[]" value="" class="form-control table_input"></td>
				    <td><input type="text" name="SL_FEEDBACK[]" value="" class="form-control table_input"></td>
				    <td><center><button type="button" onclick="removerow($(this));"class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
				    </tr><?php }
				else{
				foreach ($LineEdit as $rows){ ?>
				    <tr class="odd editRow">
				    <td><input type="hidden" name="LINE_TYPE[]" value="edit"><input type="hidden" name="SL_SYS_ID[]" value="<?php echo $rows['SL_SYS_ID'];?>" class="form-control table_input"><input type="text" name="SL_LINE_NO[]" class="form-control input-sm" value="<?php echo $rows['SL_LINE_NO'];?>"></td>
				    <td><select class="form-control table_input selectpicker" name="SL_PROD_TYPE[]" id="SL_PROD_TYPE" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
					    <!-- <option>Select</option>-->
					    <?php
					    foreach ($Product as $row)
					    { ?>
					    <option <?php if($mode=="add"){}else { if($row['PR_NAME'] == $rows['SL_PROD_TYPE']) echo "selected"; }?> value="<?php if($mode=="add"){ echo $row['PR_NAME']; }else{ echo $row['PR_NAME']; }?>"><?php echo $row['PR_NAME'];?></option>
					    <?php } ?>
					</select>
				    </td>
				    <td><input type="text" name="SL_ISSUE_FROM_CUST[]" value="<?php echo $rows['SL_ISSUE_FROM_CUST'];?>" class="form-control table_input"></td>
				    <td><input type="text" name="SL_FOUND_BY_EMP[]" value="<?php echo $rows['SL_FOUND_BY_EMP'];?>" class="form-control table_input"></td>
				    <td><input type="text" name="SL_FEEDBACK[]" value="<?php echo $rows['SL_FEEDBACK'];?>" class="form-control table_input"></td>
				    <td><center><button type="button" onclick="rowRemove($(this));" class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
				    </tr>
				<?php } }?>
				<tr class="odd hidden" id="hiddenRow">
				    <td><input type="hidden" name="LINE_TYPE[]" value="new"><input type="text" name="SL_LINE_NO[]" class="form-control input-sm"></td>
				    <td><!--<select class="form-control table_input" name="SL_PROD_TYPE[]" id="SL_PROD_TYPE">
					    <option>Select</option>
					    <option>TV</option>
					    <option>CCTV</option>
					    <option>Mobile</option>
					    <option>Laptop</option>
					    <option>Desktop</option>
					    <option>Water Heater</option>
					    <option>Deep Freezer</option>
					    <option>Refridgerator</option>
					    <option>Air Conditioner</option>
					    <option>Microwave Oven</option>
					    <option>Washing Machine</option>
					</select>-->
					<select name="SL_PROD_TYPE[]" id="SL_PROD_TYPE" class="form-control table_input" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
					    <option selected="" disabled="">Select</option>
					    <?php
					    foreach ($Product as $row)
					    { ?>
					    <option value="<?php if($mode=="add"){ echo $row['PR_NAME']; ?><?php }else{ echo $row['PR_NAME']; }?>" <?php if($mode=="add"){}else { if($row['PR_NAME'] == $ServiceEdit[0]['SH_PRODUCT_TYPE']) echo "selected"; }?> ><?php echo $row['PR_NAME']; ?></option>
					    <?php } ?>
					</select>
				    </td>
				    <td><input type="text" name="SL_ISSUE_FROM_CUST[]" class="form-control table_input"></td>
				    <td><input type="text" name="SL_FOUND_BY_EMP[]" class="form-control table_input"></td>
				    <td><input type="text" name="SL_FEEDBACK[]" class="form-control table_input"></td>
				    <td><center><button type="button" onclick="removerow($(this));" class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
				</tr>
			    </tbody>
			</table>
			</div>
		    </div>
		    <div class="col-md-12 pager form-group"><!--footer start-->
			<div class="col-md-offset-2 col-md-6 control-label">
			    <input type="hidden" name="proceed" value="<?php if($mode=="add"){ echo 'add'; }else{ echo 'update'; } ?>" />
			    <button class="btn btn-danger btn-sm" onclick="window.history.back();" type="button">Cancel</button>
			    <button class="btn btn-info btn-sm" id="clear_data" type="button">Reset</button>
			    <button type="submit" class="btn btn-success btn-sm">Save</button>
			</div>
		    </div>
		</form>
	    </div>
	</div>
    </div>
<!-- end #content -->
<!-- begin scroll to top btn -->
		
<script>
$(document).ready(function(){
    $('#form_validation').bootstrapValidator({
	message: 'This value is not valid',
	feedbackIcons:
	{
	    valid: 'fa fa-check',
	    invalid: 'fa fa-times',
	    validating: 'fa fa-refresh'
	},
        fields:{
	    SH_CUST_CODE: {
		validators: {
		    notEmpty: {
		    message: 'This field is required and can\'t be empty'
		    }
		}
            },
	    SH_CUST_NAME: {
                validators: {
                    notEmpty: {
                        message: 'This field is required and can\'t be empty'
                    }
                }
            },
	    SH_MOBILE_NO: {
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    },
		    regexp:{
			    regexp: /^[0-9-]+$/,
			    message: 'Mobile number field should contain numbers only'
		    }
                }
            },
	    SH_CUST_EMAIL: {
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
	    SH_CUST_RESI_TYPE: {
		validators: {
		    notEmpty: {
		    message: 'This field is required and can\'t be empty'
		    }
		}
            },
	    SH_CUST_ADD1: {
		validators: {
		    notEmpty: {
		    message: 'This field is required and can\'t be empty'
		    }
		}
            },
	    SH_CUST_ADD2: {
		validators: {
		    notEmpty: {
		    message: 'This field is required and can\'t be empty'
		    }
		}
            },
   	    SH_CT_CODE: {
		validators: {
		    notEmpty: {
		    message: 'This field is required and can\'t be empty'
		    }
		}
            },
	    SH_AR_CODE: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
//	     SH_TXN_DT: {
//		excluded: false,
//                validators: {
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
	     SH_EMP_ID: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	     SH_ESTIMATED_AMT: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
//	     SH_ITEM_STATUS: {
//		excluded: false,
//                validators: {
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
	     SH_AMT_RECVD: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
            SH_FEEDBACK: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	     SH_TIME_IN: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
            SH_TIME_OUT: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	    SH_EMP_SPEND_TIME: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
//	     SH_COMMIT_DT: {
//		excluded: false,
//                validators: {
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
	    SH_CALL_TYPE: {
		excluded: false,
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
//	    SH_NT_COMMIT_DT: {
//		excluded: false,
//                validators: {
//		    notEmpty: {
//                    message: 'This field is required and can\'t be empty'
//                    }
//                }
//            },
	    'SL_LINE_NO[]': {
		group: 'td',
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	     'SL_PROD_TYPE[]': {
		group: 'td',
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	     'SL_ISSUE_FROM_CUST[]': {
		group: 'td',
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	     'SL_FOUND_BY_EMP[]': {
		group: 'td',
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	     'SL_ESTIMATED_AMT[]': {
		group: 'td',
                validators: {
		    notEmpty: {
                    message: 'This field is required and can\'t be empty'
                    }
                }
            },
	     'SL_FEEDBACK[]': {
		group: 'td',
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
$(function () {
    $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
    })
    $("#datepicker1").datepicker({ 
        autoclose: true, 
        todayHighlight: true
    })
    $("#datepicker2").datepicker({ 
        autoclose: true, 
        todayHighlight: true
    })
    $("#datepicker3").datepicker({ 
        autoclose: true, 
        todayHighlight: true
    })
    $("#datepicker4").datepicker({ 
        autoclose: true, 
        todayHighlight: true
    })
});
    $(".add").click(function(){
    var $template = $('#hiddenRow'),
    $clone = $template.clone().removeClass('hidden').removeAttr('id').insertBefore($template);
    });
    function removerow($this){
       var $row= $this.parents('.odd');
       $row.remove();
    }
    $("#clear_data").click(function() {
    $(this).closest('form').find("input[type=text],select, textarea").val("");
       $('#selectbox').prop('selected', function() {
        return this.defaultSelected;
       });
    });
    function rowRemove($this){
       var $row = $this.parents(".editRow");
       deleteRow=$row.find('[name="LINE_TYPE[]"]').val('delete');
       $row.hide();
    };
    


    $(document).ready(function(){
	$("#SH_CUST_NEW").click(function(){
	    $(".New").addClass('hide');
	    $('.fetch_results').find('input:text,select').val('');
	});
	$("#SH_CUST_EXIST").click(function(){
	    $(".New").removeClass('hide');
	    //$('#myForm').removeClass('fetch_results');
	});
    });
    
    $('.switch').click(function()
    {
	$(this).toggleClass("switchOn");
	if($(this).hasClass('switchOn')){
	   $('#SH_CUST_APPR_YN').val('Y');
	}
	else{
	   $('#SH_CUST_APPR_YN').val('N');
	}
    });
    
    function resetAllValues() {
	$('.fetch_results').find('input:text,select').val('');
    }
    
//    $(document).on('change','#SH_CUST_ID',function(){
//	var CustId = $("#SH_CUST_ID").val();
//	var AreaCode;
//	$.ajax({
//	    type: "POST",
//	    url:"<?php echo site_url('IcomCtr/GetCustDetails'); ?>",
//	    dataType:"json",
//	    data:{CustId:CustId},
//	    success: function(json){
//		$("#SH_CUST_NAME").val(json[0].CUST_NAME);
//		$("#SH_MOBILE_NO").val(json[0].CUST_MOBILE_NO);
//		$("#SH_CUST_EMAIL").val(json[0].CUST_EMAIL);
//		$("#SH_CUST_RESI_TYPE").val(json[0].CUST_RESI_TYPE);
//		$("#SH_CUST_ADD1").val(json[0].CUST_ADD1);
//		$("#SH_CUST_ADD2").val(json[0].CUST_ADD2);
//		$("#SH_CT_CODE").val(json[0].CUST_CT_CODE);
//		AreaCode = json[0].CUST_AR_CODE;
//		GetCityCode($('#SH_CT_CODE'),'Exist',AreaCode);
//	    }
//	});
//    });

    $(document).on('change','#SH_CUST_CODE',function(){
	var Code = $("#SH_CUST_CODE").val();
	var AreaCode;
	$.ajax({
	    type: "POST",
	    url:"<?php echo site_url('IcomCtr/GetCustDetails');?>",
	    dataType:"json",
	    data:{Code:Code},
	    success: function(json){
		if (json == "") {
		    $('.fetch_results').find('input,select').val('');
		}else{
		    $("#SH_CUST_ID").val(json[0].CUST_ID);
		    $("#SH_CUST_NAME").val(json[0].CUST_NAME);
		    $("#SH_MOBILE_NO").val(json[0].CUST_MOBILE_NO);
		    $("#SH_CUST_EMAIL").val(json[0].CUST_EMAIL);
		    $("#SH_CUST_RESI_TYPE").val(json[0].CUST_RESI_TYPE).selectpicker('refresh');
		    $("#SH_CUST_ADD1").val(json[0].CUST_ADD1);
		    $("#SH_CUST_ADD2").val(json[0].CUST_ADD2);
		    $("#SH_CT_CODE").val(json[0].CUST_CT_CODE).selectpicker('refresh');
		    AreaCode = json[0].CUST_AR_CODE;
		    GetCityCode($('#SH_CT_CODE'),'Exist',AreaCode);
		}
	    }
	});
    });
    
    $(document).on('change','#SH_MOBILE_NO',function(){
	var CustId = $("#SH_MOBILE_NO").val();
	var AreaCode;
	$.ajax({
	    type: "POST",
	    url:"<?php echo site_url('IcomCtr/GetCustNum'); ?>",
	    dataType:"json",
	    data:{CustId:CustId},
	    success: function(json){
		$("#SH_CUST_NAME").val(json[0].CUST_NAME);
		$("#SH_CUST_ID").val(json[0].CUST_ID);
		$("#SH_CUST_EMAIL").val(json[0].CUST_EMAIL);
		$("#SH_CUST_RESI_TYPE").val(json[0].CUST_RESI_TYPE);
		$("#SH_CUST_ADD1").val(json[0].CUST_ADD1);
		$("#SH_CUST_ADD2").val(json[0].CUST_ADD2);
		$("#SH_CT_CODE").val(json[0].CUST_CT_CODE);
		AreaCode = json[0].CUST_AR_CODE;
		GetCityCode($('#SH_CT_CODE'),'Exist',AreaCode);
	    }
	});
    });
    
    
    function GetCityCode($this,$type,$Area){
	var Citycode = $this.find("option:selected").val();
	$.ajax({
	    type:'POST',
	    url:"<?= site_url('IcomCtr/AjaxGetArea'); ?>",
	    data: {Citycode:Citycode,type:$type,area:$Area},
	    //dataType:'json',
	    success:function(data){
		$('#SH_AR_CODE').html(data).selectpicker('refresh');
	    }
	});
    }
    
 </script>