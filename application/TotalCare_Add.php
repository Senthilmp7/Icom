<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Service</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Icom <small>header small text goes here...</small></h1>
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
                            <form action="<?php echo site_url('IcomCtr/TotalCare_Add');?>"  id="form_validation"  enctype="multipart/form-data" method="POST">
                                <div class="well"><!--well start-->
                                <div class="row"><!--OUTER row defined BEGIN-->
                                <div class="col-md-12 ui-sortable">
                                <div class="row">
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Customer Name</label>
                                   <input type="text" name="SH_CUST_NAME" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_CUST_NAME']; } ?>" id="SH_CUST_NAME" placeholder="Enter Name" />
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Mobile No</label>
                                   <input type="text" name="SH_MOBILE_NO" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_MOBILE_NO'];}?>"  id="SH_MOBILE_NO" placeholder="Enter Mobile No" />
                                </section>
                                 <section class="col-sm-3 form-group">       
                                   <label class="control-label">Area Code</label>
                                   <input type="text" name="SH_AR_CODE" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_AR_CODE'];}?>"  id="SH_AR_CODE" placeholder="Enter Area Code" />
                                </section>
                                  <section class="col-sm-3 form-group">       
                                   <label class="control-label">City Code</label>
                                   <input type="text" name="SH_CT_CODE" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_CT_CODE'];}?>"  id="SH_CT_CODE" placeholder="Enter City Code" />
                                </section>
				</div><div class="row">
				<section class="col-sm-3 form-group">       
                                   <label class="control-label">Amount Received</label>
                                   <input type="text" name="SH_AMT_RECVD" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_AMT_RECVD'];}?>"  id="SH_AMT_RECVD" placeholder="" />
                                </section>
				    <section class="col-sm-3 form-group">       
                                   <label class="control-label">Item Status</label>
                                   <input type="text" name="SH_ITEM_STATUS" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_ITEM_STATUS'];}?>" id="SH_ITEM_STATUS" placeholder="" />
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Employee Id</label>
                                   <input type="text" name="SH_EMP_ID" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_EMP_ID'];}?>" id="SH_EMP_ID" placeholder="" />
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Estimated Amount</label>
                                   <input type="text" name="SH_ESTIMATED_AMT" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_ESTIMATED_AMT'];}?>" id="SH_ESTIMATED_AMT" placeholder="" />
                                </section>
				 </div>
                                <div class="row">
                                <section class="col-sm-3 form-group">
                                    <label class="control-label">Service Call</label>					   
                                        <select class="form-control selectpicker" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_CALL_TYPE'];}?>"id="selectbox" data-live-search="true" data-style="btn-white btn-sm" id="SH_CALL_TYPE" name="SH_CALL_TYPE">
                                            <option value="">Select</option>
					    <?php
					    foreach ($ServiceEdit as $row)
					    {?>
                                            <option value="<?php echo $row['SH_CALL_TYPE']; ?>">Inbound</option>
                                            <option value="<?php echo $row['SH_CALL_TYPE']; ?>">Outbound</option>
					    <?php } ?>
                                        </select>					   
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Time In</label>
                                   <input type="text" name="SH_TIME_IN" class="form-control input-sm" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_TIME_IN'];}?>" id="datetimepicker" placeholder="" />
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Time out</label>
                                   <input type="text" name="SH_TIME_OUT" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_TIME_OUT'];}?>" id="SH_TIME_OUT" placeholder="" />
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Spend Time</label>
                                   <input type="text" name="SH_EMP_SPEND_TIME" class="form-control input-sm" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_EMP_SPEND_TIME'];}?>" id="SH_EMP_SPEND_TIME" placeholder="" />
                                </section></div>
				  <div class="row">
				 <section class="col-sm-3 form-group">
                                    <label class="control-label">Transaction Date</label>					     
                                    <span class='input-group'>
                                    <input type="text"  placeholder="Select Date" name="SH_TXN_DT" id="datepicker" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_TXN_DT'];}?>" data-date-format="dd-mm-yyyy" class="form-control input-sm" value="">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>                                         
                                </section>
                                <section class="col-sm-3 form-group">
                                    <label class="control-label">Commit Date</label>					     
                                    <span class='input-group'>
                                    <input type="text"  placeholder="Select Date" name="SH_COMMIT_DT" id="datepicker1" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_COMMIT_DT'];}?>"data-date-format="dd-mm-yyyy" class="form-control input-sm">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                     </span>                                         
                                </section>
                                <section class="col-sm-3 form-group">
                                    <label class="control-label">Nt Commit Date</label>					     
                                    <span class='input-group'>
                                    <input type="text"  placeholder="Select Date" data-date-format="dd-mm-yyyy" value="<?php if($mode=="add"){}else{echo $ServiceEdit[0]['SH_NT_COMMIT_DT'];}?>" name="SH_NT_COMMIT_DT" id="datepicker2" class="form-control input-sm">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>                                         
                                </section>
				<section class="col-sm-3 form-group">       
                                   <label class="control-label">Feedback</label>
                                   <textarea type="text" name="SH_FEEDBACK" value="<?php if($mode=="add"){}else{ echo $ServiceEdit[0]['SH_FEEDBACK'];}?>" class="form-control input-sm" id="SH_FEEDBACK" placeholder="" /></textarea>
				  </section>
				</div>
                               <!-- <section class="col-sm-3 form-group">       
                                   <label class="control-label">Active YN</label>
                                   <div>
                                    <input type="checkbox" class="lcs_check" name="SH_INFORM_CUST_YN" id="SH_INFORM_CUST_YN"></div>
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Active YN</label><div>
                                    <input type="checkbox" class="lcs_check" name="SH_DELIVERY_YN" id="SH_DELIVERY_YN"></div>
                                </section>
                                <section class="col-sm-3 form-group">       
                                   <label class="control-label">Active YN</label>
                                   <div>
                                   <input type="checkbox" class="lcs_check" name="SH_CUST_APPR_YN" id="SH_CUST_APPR_YN"></div>
                                </section>-->
                                <div class="table-responsive forResponsiveLine addDynamic">
				    <table class="table table-bordered">
					<thead>
					    <tr class="table-responsive info">
                                                <th>
						    <center>SL_LINE_NO</center>
						</th>
                                                <th>
						    <center>SL_PROD_TYPE</center>
						</th>
                                                <th>
						    <center>SL_ISSUE_FROM_CUST</center>
						</th>
                                                 <th>
						    <center>SL_FOUND_BY_EMP</center>
						</th>
                                                <th>
						    <center>SL_ESTIMATED_AMT</center>
						</th>
                                                <th>
						    <center>SL_FEEDBACK</center>
						</th>
						<th>
						    <center><button type="button" class="btn btn-add btn-sm btn-primary btn-sm add"><i class="fa fa-plus fa-1x"></i></button></center>
						</th>
					    </tr>
					</thead>
					<tbody id="result">
					    <?php if($mode=="add"){?>
					    <tr class="odd defaultRow">
                                                <td><input type="hidden" name="LINE_TYPE[]" value="new"><input type="hidden" name="SL_SYS_ID[]" value=""><input type="text" name="SL_LINE_NO[]" value=""></td>
                                                <td><input type="text" name="SL_PROD_TYPE[]" value=""></td>
                                                <td><input type="text" name="SL_ISSUE_FROM_CUST[]" value=""></td>
                                                <td><input type="text" name="SL_FOUND_BY_EMP[]" value=""></td>
                                                <td><input type="text" name="SL_ESTIMATED_AMT[]" value=""></td>
                                                <td><input type="text" name="SL_FEEDBACK[]" value=""></td>
                                                <td><center><button type="button" onclick="removerow($(this));"class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
					    </tr><?php }
					    else{
						foreach ($LineEdit as $row){?>
					    <tr class="odd editRow">
                                                <td><input type="hidden" name="LINE_TYPE[]" value="edit"><input type="hidden" name="SL_SYS_ID[]" value="<?php echo $row['SL_SYS_ID'];?>"><input type="text" name="SL_LINE_NO[]" value="<?php echo $row['SL_LINE_NO'];?>"></td>
                                                <td><input type="text" name="SL_PROD_TYPE[]" value="<?php echo $row['SL_PROD_TYPE'];?>"</td>
                                                <td><input type="text" name="SL_ISSUE_FROM_CUST[]" value="<?php echo $row['SL_ISSUE_FROM_CUST'];?>"></td>
                                                <td><input type="text" name="SL_FOUND_BY_EMP[]" value="<?php echo $row['SL_FOUND_BY_EMP'];?>"></td>
                                                <td><input type="text" name="SL_ESTIMATED_AMT[]" value="<?php echo $row['SL_ESTIMATED_AMT'];?>"></td>
                                                <td><input type="text" name="SL_FEEDBACK[]" value="<?php echo $row['SL_FEEDBACK'];?>"></td>
                                                <td><center><button type="button" onclick="rowRemove($(this));" class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
					    </tr>
					    <?php } }?>
                                            <tr class="odd hidden" id="hiddenRow">
                                                <td><input type="hidden" name="LINE_TYPE[]" value="new"><input type="text" name="SL_LINE_NO[]"></td>
                                                <td><input type="text" name="SL_PROD_TYPE[]"></td>
                                                <td><input type="text" name="SL_ISSUE_FROM_CUST[]"></td>
                                                <td><input type="text" name="SL_FOUND_BY_EMP[]"></td>
                                                <td><input type="text" name="SL_ESTIMATED_AMT[]"></td>
                                                <td><input type="text" name="SL_FEEDBACK[]"></td>
                                                <td><center><button type="button" onclick="removerow($(this));" class="btn btn-remove btn-danger btn-sm"><i class="fa fa-trash fa-1x"></i></button></center></td>
					    </tr>
                                        </tbody>
                                    </table>
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
		<!-- end #content -->
        <!-- begin theme-panel -->
        <!-- end theme-panel -->
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>