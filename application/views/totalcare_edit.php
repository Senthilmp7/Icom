
<!-- begin #content -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<style>
    .form-control.table_input.Linewidth {
	width: 110px;
    }
</style>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Totalcare</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Totalcare<small> You may add products details here...</small></h1>
    <!-- end page-header -->
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
		    <h4 class="panel-title">Total Care Details</h4>
		</div>
		<div class="panel-body">
		   <form action="<?php echo site_url('IcomCtr/totalcare_Edit/'.$totalHeadEdit[0]['TCH_SYS_ID']); ?>" method="post" enctype="multipart/form-data" id="form_validation" name="form_validation">
			<div class="row">
			<div class="col-md-12 ui-sortable">
			    <div class="well fetch_results" id="myForm">
				<div class="row">
				    <section class="col-sm-3 form-group">       
					<label class="control-label">Customer Code</label>
					<input type="text" name="TCH_CUST_CODE" class="form-control input-sm" value="<?php echo $totalHeadEdit[0]['TCH_CUST_CODE'];?>" id="TCH_CUST_CODE" placeholder="Enter Code" />
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-3 form-group">       
					<label class="control-label">Customer Name</label>
					<input type="text" name="TCH_CUST_NAME" class="form-control input-sm" value="<?php echo $totalHeadEdit[0]['TCH_CUST_NAME'];?>" id="TCH_CUST_NAME" placeholder="Enter Name" />
				    </section>
				    <section class="col-sm-3 form-group">       
					<label class="control-label">Customer Mobile</label>
					<input type="text" name="TCH_CUST_MOBILE" class="form-control input-sm" value="<?php echo $totalHeadEdit[0]['TCH_CUST_MOBILE'];?>"  id="TCH_CUST_MOBILE" placeholder="Enter Mobile No" />
				    </section>
				    <section class="col-sm-3 form-group">       
					<label class="control-label">Customer Email</label>
					<input type="text" name="TCH_CUST_EMAIL" class="form-control input-sm" value="<?php echo $totalHeadEdit[0]['TCH_CUST_EMAIL'];?>" id="TCH_CUST_EMAIL" placeholder="Enter Email" />
				    </section>
				    <section class="col-sm-3 form-group">
					<!--<label class="control-label">Residential Type</label>
					<select class="form-control input-sm" name="TCH_CUST_RESI_TYPE" id="TCH_CUST_RESI_TYPE">
					    <option disabled="">Select</option>
					    <option>House</option>
					    <option>Flat</option>
					    <option>Apartment</option>
					    <option>Office</option>
					</select>-->
					<label class="control-label">Residential Type</label>
					<select class="form-control input-sm selectpicker" name="TCH_CUST_RESI_TYPE" data-live-search="true" data-style="btn-white btn-sm" data-container="body" id="TCH_CUST_RESI_TYPE">
					    <option disabled="">Select</option>
					    <option value="House" <?php if($totalHeadEdit[0]['TCH_CUST_RESI_TYPE'] == 'House') echo "selected"; ?>>House</option>
					    <option value="Flat" <?php if($totalHeadEdit[0]['TCH_CUST_RESI_TYPE'] == 'Flat') echo "selected"; ?>>Flat</option>
					    <option value="Apartment" <?php if($totalHeadEdit[0]['TCH_CUST_RESI_TYPE'] == 'Apartment') echo "selected"; ?>>Apartment</option>
					    <option value="Office" <?php if($totalHeadEdit[0]['TCH_CUST_RESI_TYPE'] == 'Office') echo "selected"; ?>>Office</option>
					</select>
				    </section>
				</div>
				<div class="row">
				    <section class="col-sm-3 form-group">       
					<label class="control-label">Customer Address1</label>
					<input type="text" name="TCH_CUST_ADD1" class="form-control input-sm" value="<?php echo $totalHeadEdit[0]['TCH_CUST_ADD1'];?>" id="TCH_CUST_ADD1" placeholder="Enter Address" />
				    </section>
				    <section class="col-sm-3 form-group">       
					<label class="control-label">Customer Address2</label>
					<input type="text" name="TCH_CUST_ADD2" class="form-control input-sm" value="<?php echo $totalHeadEdit[0]['TCH_CUST_ADD2'];?>" id="TCH_CUST_ADD2" placeholder="Enter Address" />
				    </section>
				    <section class="col-sm-3 form-group">       
					<label class="col-md-4">City</label>
					<select name="TCH_CUST_CT_CODE" id="TCH_CUST_CT_CODE" class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body" onchange="GetCityCode($(this),'add','');">
					    <option disabled="">Select</option>
					    <?php
					    foreach ($City as $row)
					    {?>
					    <option value="<?php echo $row['CITY_CODE']; ?>" <?php if($row['CITY_CODE'] == $totalHeadEdit[0]['TCH_CUST_CT_CODE']) echo "selected"; ?>><?php echo $row['CITY_DESC']; ?></option>
					    <?php } ?>
					</select>
				    </section>
				    <section class="col-sm-3 form-group">       
					<label class="control-label">AR Code</label>
					<select name="TCH_CUST_AR_CODE" id="TCH_CUST_AR_CODE" class="form-control input-sm ss selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
						<option selected="" disabled="">Select</option>
						<?php
						foreach ($Area as $row)
						{?>
						<option value="<?php echo $row['AR_CODE']; ?>" <?php if($row['AR_CODE'] == $totalHeadEdit[0]['TCH_CUST_AR_CODE']) echo "selected"; ?>><?php echo $row['AR_DESC']; ?></option>
						<?php } ?>
					</select>
				    </section>
				    <!--<section class="col-sm-3 form-group">       
					<label class="control-label">Customer Postal</label>
					<input type="text" name="TCH_CUST_POSTAL" class="form-control input-sm" value="" id="TCH_CUST_POSTAL" placeholder="Enter Address" />
				    </section>
				    <section class="col-sm-3 form-group">       
					<label class="control-label">Customer Fax</label>
					<input type="text" name="TCH_CUST_FAX" class="form-control input-sm" value="" id="TCH_CUST_FAX" placeholder="Enter Address" />
				    </section>-->
				</div>
			    </div>
			</div>
			</div>

			
			<div data-sortable-id="ui-unlimited-tabs-2" class="panel panel-default panel-with-tabs">
			    <div class="panel-heading p-0">
				<div class="panel-heading-btn m-r-10 m-t-10">
				    <a data-click="panel-expand" class="btn btn-xs btn-icon btn-circle btn-inverse" href="javascript:;" data-original-title="" title=""><i class="fa fa-expand"></i></a>
				</div>
				<!-- begin nav-tabs -->
				<div class="tab-overflow overflow-right">
				    <ul class="nav nav-tabs" style="margin-left: 0px;">
					<li class="prev-button" style=""><a class="text-inverse" data-click="prev-tab" href="javascript:;"><i class="fa fa-arrow-left"></i></a></li>
					<li class="active"><a data-toggle="tab" href="#nav-tab2-1">Call Details</a></li>
					<li class=""><a data-toggle="tab" href="#nav-tab2-2">Product Specification</a></li>
					<li class="next-button" style=""><a class="text-inverse" data-click="next-tab" href="javascript:;"><i class="fa fa-arrow-right"></i></a></li>
				    </ul>
				</div>
			    </div>
			    <div class="tab-content well">
				<div id="nav-tab2-1" class="tab-pane fade active in">
				    <div class="table-responsive forResponsiveLine addDynamic">
					<table class="table table-bordered">
					    <thead>
						<tr class="table-responsive info">
						    <th>
							<center>Sl.No</center>
						    </th>
						    <th>
							<center>Date</center>
						    </th>
						    <th>
							<center>CallType</center>
						    </th>
						    <th>
							<center>Engineer Name</center>
						    </th>
						    <th>
							<center>Time In</center>
						    </th>
						    <th>
							<center>Time Out</center>
						    </th>
						    <th>
							<center>Work Done</center>
						    </th>
						    <th>
							<center>Problem</center>
						    </th>
						    <th>
							<center>Amount</center>
						    </th>
						    <th>
							<center>FeedBack</center>
						    </th>
						    <th>
							<center>PartReplaced</center>
						    </th>
						    <th>
							<center>PartReplaced Amount</center>
						    </th>
						    <th>
							<center>Status</center>
						    </th>
						    <th>
							<center><button type="button" class="btn btn-add btn-sm btn-primary btn-sm add"><i class="fa fa-plus fa-1x"></i></button></center>
						    </th>
						</tr>
					    </thead>
					    <tbody id="result">
						<?php foreach($totalLineEdit as $row){?>
						<tr class="odd defaultRow">
						<!--<input type="hidden" name="LineSysId[]" value="" id="LineSysId">-->
						<td><input type="hidden" name="LINE_TYPE[]" value="edit"><input type="hidden" name="TCL_SYS_ID[]" value="<?php echo $row['TCL_SYS_ID'];?>" class="form-control table_input" id="TCL_SYS_ID"><input type="text" name="TCL_LINE_NO[]" class="form-control table_input Linewidth" value="<?php echo $row['TCL_LINE_NO'];?>"></td>
						<!--<td><input type="text" name="TCL_DATE[]" value="<?php echo $row['TCL_DATE'];?>" class="form-control table_input"></td>-->
						<td><input type="text" id="datepicker" class=" datepicker form-control table_input Linewidth" data-date-format="dd-mm-yyyy" value="<?php echo $row['TCL_DATE'];?>" name="TCL_DATE[]"></td>
						<!--<td><input type="text" name="TCL_CALL_TYPE[]" value="<?php echo $row['TCL_CALL_TYPE'];?>" class="form-control table_input"></td>-->
						<td>
						    <select class="form-control table_input Linewidth selectpicker" name="TCL_CALL_TYPE[]" id="TCL_CALL_TYPE" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option disabled="">Select</option>
							<option value="Inbound" <?php if($row['TCL_CALL_TYPE'] == 'Inbound') echo "selected"; ?>>Inbound</option>
							<option value="Onsite" <?php if($row['TCL_CALL_TYPE'] == 'Onsite') echo "selected"; ?>>Onsite</option>
						    </select>
						</td>
						<!--<td><input type="text" name="TCL_EMP_ID[]" value="<?php echo $row['TCL_EMP_ID'];?>" class="form-control table_input"></td>-->
						<td>
						    <select name="TCL_EMP_ID[]" id="TCL_EMP_ID" class="form-control table_input Linewidth selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option disabled="">Select</option>
							<?php
							foreach ($Employee as $Val)
							{ ?>
							<option value="<?php echo $Val['EMP_NAME']; ?>" <?php if($Val['EMP_NAME'] == $row['TCL_EMP_ID']) echo "selected"; ?>><?php echo $Val['EMP_NAME']; ?></option>
							<?php } ?>
						    </select>
						</td>
						<td><input type="text" name="TCL_TIME_IN[]" value="<?php echo $row['TCL_TIME_IN'];?>" class="form-control table_input Linewidth"></td>
						<td><input type="text" name="TCL_TIME_OUT[]" value="<?php echo $row['TCL_TIME_OUT'];?>" class="form-control table_input Linewidth"></td>
						<!--<td><input type="text" name="TCL_WORK_YN[]" value="<?php echo $row['TCL_WORK_YN'];?>" class="form-control table_input"></td>-->
						<td>
						    <select class="form-control table_input Linewidth selectpicker" name="TCL_WORK_YN[]" id="TCL_WORK_YN" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option selected="" disabled="">Select</option>
							<option value="Yes" <?php if($row['TCL_WORK_YN'] == 'Yes') echo "selected"; ?>>Yes</option>
							<option value="No" <?php if($row['TCL_WORK_YN'] == 'No') echo "selected"; ?>>No</option>
						    </select>
						</td>
						<td><input type="text" name="TCL_PROBLEM[]" value="<?php echo $row['TCL_PROBLEM'];?>" class="form-control table_input Linewidth"></td>
						<td><input type="text" name="TCL_SERVICE_AMOUNT[]" value="<?php echo $row['TCL_SERVICE_AMOUNT'];?>" class="form-control table_input Linewidth"></td>
						<td><input type="text" name="TCL_CUST_FEEDBACK[]" value="<?php echo $row['TCL_CUST_FEEDBACK'];?>" class="form-control table_input Linewidth"></td>
						<td><!--<input type="text" name="TCL_PART_RPC_YN[]" value="<?php echo $row['TCL_PART_RPC_YN'];?>" class="form-control table_input Linewidth">-->
						    <input type="checkbox" class="checkbox" onclick="ActiveCheck($(this));" <?php if($row['TCL_PART_RPC_YN'] == "Y") echo 'checked="checked"'; ?>>
						    <input type="hidden" id="TCL_PART_RPC_YN" name="TCL_PART_RPC_YN[]" value="<?php echo $row['TCL_PART_RPC_YN']?>" >
						</td>
						<td><input type="text" name="TCL_PART_RPC_AMOUNT[]" value="<?php echo $row['TCL_PART_RPC_AMOUNT'];?>" class="form-control table_input Linewidth"></td>
						<td><input type="text" name="TCL_STATUS[]" value="<?php echo $row['TCL_STATUS'];?>" class="form-control table_input Linewidth"></td>
						<td><center><button type="button" onclick="removerow($(this));"class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
						</tr>
						<?php } ?>
						<tr class="odd hidden" id="hiddenRow">
						<td><input type="hidden" name="LINE_TYPE[]" value=""><input type="text" name="TCL_LINE_NO[]" class="form-control input-sm"></td>
						<!--<td><input type="text" name="TCL_DATE[]" value="" class="form-control table_input"></td>-->
						<td><input type="text" id="datepicker" class=" datepicker form-control table_input" data-date-format="dd-mm-yyyy" value="" name="TCL_DATE[]"></td>
						<!--<td><input type="text" name="TCL_CALL_TYPE[]" value="" class="form-control table_input"></td>-->
						<td>
						    <select class="form-control table_input " name="TCL_CALL_TYPE[]" id="TCL_CALL_TYPE" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option disabled="">Select</option>
							<option>Inbound</option>
							<option>Onsite</option>
						    </select>
						</td>
						<!--<td><input type="text" name="TCL_EMP_ID[]" value="" class="form-control table_input"></td>-->
						<td>
						    <select name="TCL_EMP_ID[]" id="TCL_EMP_ID" class="form-control table_input " data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option selected="" disabled="">Select</option>
							<?php
							foreach ($Employee as $row)
							{ ?>
							<option value="<?php echo $row['EMP_NAME']; ?>" ><?php echo $row['EMP_NAME']; ?></option>
							<?php } ?>
						    </select>
						</td>
						<td><input type="text" name="TCL_TIME_IN[]" value="" class="form-control table_input"></td>
						<td><input type="text" name="TCL_TIME_OUT[]" value="" class="form-control table_input"></td>
						<!--<td><input type="text" name="TCL_WORK_YN[]" value="" class="form-control table_input"></td>-->
						<td>
						    <select class="form-control table_input Linewidth " name="TCL_WORK_YN[]" id="TCL_WORK_YN" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option selected="" disabled="">Select</option>
							<option>Yes</option>
							<option>No</option>
						    </select>
						</td>
						<td><input type="text" name="TCL_PROBLEM[]" value="" class="form-control table_input"></td>
						<td><input type="text" name="TCL_SERVICE_AMOUNT[]" value="" class="form-control table_input"></td>
						<td><input type="text" name="TCL_CUST_FEEDBACK[]" value="" class="form-control table_input"></td>
						<td><!--<input type="text" name="TCL_PART_RPC_YN[]" value="" class="form-control table_input">-->
						    <input type="checkbox" class="checkbox" onclick="ActiveCheck($(this));">
						    <input type="hidden" id="TCL_PART_RPC_YN" name="TCL_PART_RPC_YN[]" value="N" >
						</td>
						<td><input type="text" name="TCL_PART_RPC_AMOUNT[]" value="" class="form-control table_input"></td>
						<td><input type="text" name="TCL_STATUS[]" value="" class="form-control table_input"></td>
						<td><center><button type="button" onclick="removerow($(this));" class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
						</tr>
					    </tbody>
					</table>
				    </div>
				</div>
				<div id="nav-tab2-2" class="tab-pane fade">
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
							<center>Product Condition</center>
						    </th>
						    <th>
							<center>Product Specification</center>
						    </th>
						    <th>
							<center><button type="button" class="btn btn-add btn-sm btn-primary btn-sm add1"><i class="fa fa-plus fa-1x"></i></button></center>
						    </th>
						</tr>
					    </thead>
					    <tbody id="result">
						<?php foreach($totalProductEdit as $row){?>
						<tr class="odd1 defaultRow">
						<td><input type="hidden" name="LINE_TYPE1[]" value="edit"><input type="hidden" name="TCP_SYS_ID[]" id="TCP_SYS_ID" value="<?php echo $row['TCP_SYS_ID'];?>" class="form-control table_input"><input type="text" name="TCP_LINE_NO[]" value="<?php echo $row['TCP_LINE_NO'];?>" class="form-control table_input"></td>
						<!--<td><input type="text" name="TCP_PRODUCT[]" value="<?php echo $row['TCP_PRODUCT'];?>" class="form-control table_input"></td>-->
						<td>
						    <select name="TCP_PRODUCT[]" id="TCP_PRODUCT" class="form-control table_input selectpicker" data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option disabled="">Select</option>
							<?php
							foreach ($Product as $Val)
							{ ?>
							<option value="<?php echo $Val['PR_NAME']; ?>" <?php if($Val['PR_NAME'] == $row['TCP_PRODUCT']) echo "selected"; ?>><?php echo $Val['PR_NAME']; ?></option>
							<?php } ?>
						    </select>
						</td>
						<td><input type="text" name="TCP_PROD_CONDITION[]" value="<?php echo $row['TCP_PROD_CONDITION'];?>" class="form-control table_input"></td>
						<td><input type="text" name="TCP_PROD_SPECIFIC[]" value="<?php echo $row['TCP_PROD_SPECIFIC'];?>" class="form-control table_input"></td>
						<td><center><button type="button" onclick="removerow1($(this));"class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
						</tr>
						<?php } ?>
						<tr class="odd1 hidden" id="hiddenRow1">
						<td><input type="hidden" name="LINE_TYPE1[]" value=""><input type="text" name="TCP_LINE_NO[]" value="" class="form-control table_input"></td>
						<!--<td><input type="text" name="TCP_PRODUCT[]" value="" class="form-control table_input"></td>-->
						<td>
						    <select name="TCP_PRODUCT[]" id="TCP_PRODUCT" class="form-control table_input " data-live-search="true" data-style="btn-white btn-sm" data-container="body">
							<option selected="" disabled="">Select</option>
							<?php
							foreach ($Product as $row)
							{ ?>
							<option value="<?php echo $row['PR_NAME']; ?>" ><?php echo $row['PR_NAME']; ?></option>
							<?php } ?>
						    </select>
						</td>
						<td><input type="text" name="TCP_PROD_CONDITION[]" value="" class="form-control table_input"></td>
						<td><input type="text" name="TCP_PROD_SPECIFIC[]" value="" class="form-control table_input"></td>
						<td><center><button type="button" onclick="removerow1($(this));"class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
						<input type="hidden" name="LineSysId" value="" id="LineSysId" class="LineSysId">
						<input type="hidden" name="ProLineSysId" value="" id="ProLineSysId" class="ProLineSysId">
						</tr>
					    </tbody>
					</table>
				    </div>
				</div>
			    </div>
			</div>
		    <div class="col-md-12 pager form-group">
                        <div class="col-md-offset-2 col-md-6 control-label">
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
</div>

<script>
     $("#clear_data").click(function() {
    $(this).closest('form').find("input[type=text]").val("");
    $('input:checkbox').removeAttr('checked');
    });
    
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
		TCH_CUST_NAME:{
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
		TCH_STATUS:{
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
		TCH_CUST_ID: {
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
                'TCL_FROM_DT[]': {
                    group: 'td',
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
                'TCL_UPTO_DT[]': {
                    group: 'td',
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
                'TCL_EMP_ID[]': {
                    group: 'td',
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
                'TCL_PRODUCT[]': {
                    group: 'td',
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
                'TCL_STATUS[]': {
                    group: 'td',
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
                'TCL_RPC_AMOUNT[]': {
                    group: 'td',
		    validators: {
			notEmpty: {
			    message: 'This field is required and can\'t be empty'
			}
		    } 
		},
                'TCL_RPC_PART_DETAIL[]': {
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
	datepickerInit();
    });
    function datepickerInit(){
	$(".datepicker").datepicker({ 
	    autoclose: true, 
	    todayHighlight: true
	});
    }
    
    function ActiveCheck($this){
	console.log("tedcf");
	var $row = $this.parents(".odd");
	if ($this.is(":checked")){
	    $row.find('[name="TCL_PART_RPC_YN[]"]').val('Y');
        }else{
	    $row.find('[name="TCL_PART_RPC_YN[]"]').val('N');
	}
    }
    
    //function ActiveCheck($this){
    //    if($this.checked){
    //       $('#TCH_ACTIVE_YN').val('Y')
    //    }
    //}
    // function ActiveCheck1($this){
    //    if($this.checked){
    //       $('#yes1').val('Y')
    //    }
    //}
    // function ActiveCheck2($this){
    //    if($this.checked){
    //       $('#yes2').val('Y')
    //    }
    //}
    // function ActiveCheck3($this){
    //    if($this.checked){
    //       $('#yes3').val('Y')
    //    }
    //}
</script>

<script>
    $(document).ready(function(){
	$("#TCH_CUST_NEW").click(function(){
	    $(".New").addClass('hide');
	    $('.fetch_results').find('input:text,select').val('');
	});
	$("#TCH_CUST_EXIST").click(function(){
	    $(".New").removeClass('hide');
	    //$('#myForm').removeClass('fetch_results');
	});
    });
    
    function resetAllValues() {
	$('.fetch_results').find('input:text,select').val('');
    }
    
    $(document).on('change','#TCH_CUST_ID',function(){
	var CustId = $("#TCH_CUST_ID").val();
	var AreaCode;
	$.ajax({
	    type: "POST",
	    url:"<?php echo site_url('IcomCtr/GetCustDetails'); ?>",
	    dataType:"json",
	    data:{CustId:CustId},
	    success: function(json){
		$("#TCH_CUST_NAME").val(json[0].CUST_NAME);
		$("#TCH_CUST_MOBILE").val(json[0].CUST_MOBILE_NO);
		$("#TCH_CUST_EMAIL").val(json[0].CUST_EMAIL);
		$("#TCH_CUST_RESI_TYPE").val(json[0].CUST_RESI_TYPE).selectpicker('refresh');
		$("#TCH_CUST_ADD1").val(json[0].CUST_ADD1);
		$("#TCH_CUST_ADD2").val(json[0].CUST_ADD2);
		$("#TCH_CUST_CT_CODE").val(json[0].CUST_CT_CODE).selectpicker('refresh');
		$("#TCH_CUST_AR_CODE").val(json[0].CUST_AR_CODE);
		AreaCode = json[0].CUST_AR_CODE;
		GetCityCode($('#TCH_CUST_CT_CODE'),'Exist',AreaCode);
	    }
	});
    });
    
    function GetCityCode($this,$type,$Area){
	var Citycode = $this.find("option:selected").val();
	$.ajax({
	    type:'POST',
	    url:"<?= site_url('IcomCtr/AjaxGetArea'); ?>",
	    data: {Citycode:Citycode},
	    //dataType:'json',
	    success:function(data){
		$('#TCH_CUST_AR_CODE').html(data).selectpicker('refresh');
	    }
	});
    }
    $(".add").click(function(){
	var $template = $("#hiddenRow");
	$clone = $template.clone().removeClass('hidden').removeAttr('id').insertBefore($template);
	datepickerInit();
	console.log($clone);
	
    });
    
    $(".add1").click(function(){
	var $template = $("#hiddenRow1");
	$clone = $template.clone().removeClass('hidden').removeAttr('id').insertBefore($template);
	console.log($clone);
	
    });
    
    //$(".add").click(function(){
    //var $template = $('#hiddenRow'),
    //$clone = $template.clone().removeClass('hidden').removeAttr('id').insertBefore($template);
    //});
    var sysIdFromDB = new Array(); //Push system ID to array for delete lines.
    function removerow($this){
    
       var $row = $this.parents('.odd');
       var newdata=$row.find("#TCL_SYS_ID").val();
       sysIdFromDB.push(newdata);
       $(".LineSysId").val(sysIdFromDB);
       $row.remove();
    }
    var ProSysIdFromDB = new Array();
    function removerow1($this){
       var $row= $this.parents('.odd1');
       var newProData=$row.find("#TCP_SYS_ID").val();
       ProSysIdFromDB.push(newProData);
       $(".ProLineSysId").val(ProSysIdFromDB);
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
</script>