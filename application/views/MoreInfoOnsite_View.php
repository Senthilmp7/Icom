<html>
    <style>
       .custom-table,.custom-table td,.custom-table th {
            border: medium none !important;
        }
        
    </style>
    <body>
        <div class="well">
		    <div class="row"><!--OUTER row defined BEGIN-->
			<div class="col-md-6 ui-sortable">
                            <div class="well fetch_results" id="myForm">
                                <table class="table custom-table">
                                    <tbody>
                                    <tr>
                                    <th>Customer Name</th>
                                    <td><?php echo $HeadDetails[0]['SH_CUST_NAME']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Mobile No</th>
                                    <td><?php echo $HeadDetails[0]['SH_MOBILE_NO']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Email</th>
                                    <td><?php echo $Customer[0]['CUST_EMAIL']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Residential Type</th>
                                    <td><?php echo $Customer[0]['CUST_RESI_TYPE']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Address</th>
                                    <td><?php echo $Customer[0]['CUST_ADD1']; ?>,<?php echo $Customer[0]['CUST_ADD2']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>City</th>
                                    <td><?php echo $Customer[0]['CUST_CT_CODE']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Area</th>
                                    <td><?php echo $Customer[0]['CUST_AR_CODE']; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 ui-sortable">
                            <div class="well fetch_results" id="myForm">
                                <table class="table custom-table">
                                    <tbody>
                                    <tr>
                                    <th>Service Id</th>
                                    <td><?php echo $HeadDetails[0]['SH_SYS_ID']; ?></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                    <th>Transaction Date</th>
                                    <td><?php echo $HeadDetails[0]['SH_TXN_DT']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Engineer Name</th>
                                    <td><?php echo $HeadDetails[0]['SH_EMP_ID']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Estimated Amount</th>
                                    <td><?php echo $HeadDetails[0]['SH_ESTIMATED_AMT']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Amount Received</th>
                                    <td><?php echo $HeadDetails[0]['SH_AMT_RECVD']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Time In</th>
                                    <td><?php echo $HeadDetails[0]['SH_TIME_IN']; ?></td>
                                    </tr>
                                    <tr>
                                    <th>Time Out</th>
                                    <td><?php echo $HeadDetails[0]['SH_TIME_OUT']; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
        
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
                    <!--<th>
                        <center>Estimated Amount</center>
                    </th>-->
                    <th>
                        <center>FeedBack</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Details as $row){?>
                <tr>
                    <td><input type="text" name="SL_LINE_NO[]" id="SL_LINE_NO" value="<?php echo $row['SL_LINE_NO'];?>" class="form-control input-sm"></td>
                    <td><input type="text" name="SL_PROD_TYPE[]" id="SL_PROD_TYPE" value="<?php echo $row['SL_PROD_TYPE'];?>" class="form-control table_input"></td>
                    <td><input type="text" name="SL_ISSUE_FROM_CUST[]" id="SL_ISSUE_FROM_CUST" value="<?php echo $row['SL_ISSUE_FROM_CUST'];?>" class="form-control table_input"></td>
                    <td><input type="text" name="SL_FOUND_BY_EMP[]" id="SL_FOUND_BY_EMP" value="<?php echo $row['SL_FOUND_BY_EMP'];?>" class="form-control table_input"></td>
                    <!--<td><input type="text" name="SL_ESTIMATED_AMT[]" class="form-control table_input"></td>-->
                    <td><input type="text" name="SL_FEEDBACK[]" id="SL_FEEDBACK" value="<?php echo $row['SL_FEEDBACK'];?>" class="form-control table_input"></td>
                </tr>
                 <?php } ?>
            </tbody>
        </table>
        </div>
    </body>
</html>