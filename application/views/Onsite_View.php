<link href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
<style>.Colorchange{
	color: red;
	font-size: 15px;
	padding-left: 197px;
    }
    .product{
	width:83px;
	/*height:92px;*/
    }
    .buttonRow{
	margin-left:10px;
    }
</style>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo site_url('IcomCtr/Dashboard');?>">Home</a></li>
				<li><a href="<?php echo site_url('IcomCtr/serviceCall');?>">Service call</a></li>
				<li class="active">service</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Service Call<small> You amy view service details here</small></h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Service Call</h4>
                        </div>
                        <div class="panel-body" id="form_validation">
			    <p><a class="btn btn-primary btn-sm" href="<?php echo site_url('IcomCtr/Onsite_Edit/add');?>"><i class="fa fa-plus fa-1x"></i>
		        <span class="f-s-14 f-w-500">Add</span></a></p>
                            <div class="table-responsive">
				<!--<div class="buttonRow">
				<img  onclick="product('TV');" src="<?php echo site_url('/application/uploads/tv.png');?>"class="product img-thumbnail">
				<img onclick="product('Air Conditioner');" class="product img-thumbnail" src="<?php echo site_url('/application/uploads/ac.png');?>">
				<img src="<?php echo site_url('/application/uploads/cctv.png');?>" onclick="product('CCTV');" class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/fridge.png');?>" onclick="product('Fridge');" class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/laptop.png');?>" onclick="product('Laptop');"class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/mobile.png');?>" onclick="product('Mobile');"  class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/desktop.png');?>" onclick="product('Desktop');" class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/deepfreezer.png');?>" onclick="product('Deep Freezer');"   class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/waterheater.png');?>"  onclick="product('Water Heater');" class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/microwaveoven.png');?>"onclick="product('Microwave Oven');" class="product img-thumbnail">
				<img src="<?php echo site_url('/application/uploads/washingmachi.png');?>" onclick="product('Washing Machine');" class="product img-thumbnail">
				</div>
				<br><br>-->
				<div class="buttonRow">
				<?php foreach ($Image as $row) { ?>
				    <img title="<?php echo $row['PR_NAME'];?>" src="<?php echo $row['PR_IMAGE'];?>" onclick="product($(this));" class="product img-thumbnail">
				<?php } ?>
				</div><br><br>
                                <table id="dataRespTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
					    <th>Transaction Date</th>
                                            <th>Customer Name</th>
                                            <th>Mobile No</th>
					    <th>Product</th>
					    <!--<th>Engineer Name</th>
					    <th>Estimated Amount</th>-->
					    <th>Time In</th>
					    <th>Time out</th>
					    <th>Spend Time</th>
					    <th>More Details</th>
					    <th>Call Convertion</th>
					    <!--<th>Item Status</th>-->
					    <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
					
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
	<div class="modal fade" id="DetailedView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
		    <div class="modal-content">  
			<form  id="category-form" class="smart-form" >
			    <div class="modal-header" style="border-bottom: 1px solid #e5e5e5; min-height: 16.4286px; padding: 15px;">   
				<div id="alertInDetailedView">
				</div>
				<b><img alt="logo" data-id="login-cover-image" src="<?php echo site_url('application/assets/img/ITC_logo.png');?>"></b>
				
				<b class="Colorchange">Onsite Service Call Details</b>
				
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button onClick="onClickHandler(this)">
				   <i class="fa  fa-times-circle "></i>
				</button>
			    </div>      
			    <div class="modal-body forApproveView">
				<div class="table-responsive forResponsiveLine addDynamic">
				    <fieldset>
					<div id="DisplayView"></div>
				    </fieldset>
				</div>
			    </div>     
			    <div class="modal-footer">
			      <input class="btn btn-danger"  data-dismiss="modal" type="button" id="pending_status"  value="Close">               
			    </div>     
			</form>
		    </div>
		</div>
	</div>
	
	<div class="modal fade" id="View" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-md">
		<div class="modal-content">  
		    <form  id="category-form" class="smart-form" >
			<div class="modal-header" >   
			    <b><img alt="logo" data-id="login-cover-image" src="<?php echo site_url('application/assets/img/ITC_logo.png');?>"></b>
			    <b class="Colors">Convert Into Inbound Call</b>
			    <button aria-hidden="true" data-dismiss="modal" class="close" type="button onClick="onClickHandler(this)">
			       <i class="fa  fa-times-circle "></i>
			    </button>
			     
			</div>
			<div class="modal-body">
			    <div class="table-responsive forResponsiveLine addDynamic">
				<fieldset>
				   <center><h5>Do you want to convert Inbound Call?</h5></center>
				</fieldset>
			    </div>
			<input type="hidden" name="rowId" id="rowId" value="">
			</div>
			<div class="modal-footer">
			    <input class="btn btn-primary" type="button"  data-dismiss="modal" onclick="StatusChange();" id="proceedBtn" value="Ok">
			    <input class="btn btn-danger" data-dismiss="modal" type="button" value="Cancel">
			</div>     
		    </form>
		</div>
	    </div>
	</div>
	
	<div class="modal fade " id="large_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">  
		<form  id="category-form" class="smart-form" >
		    <div class="modal-header" style="border-bottom: 1px solid #e5e5e5; min-height: 16.4286px; padding: 15px;">   
			<b><img alt="logo" data-id="login-cover-image" src="<?php echo base_url('application/assets/img/ITC_logo1.png');?>"></b>    
			<button aria-hidden="true" data-dismiss="modal" class="close" type="button onClick="onClickHandler(this)">
			   <i class="fa  fa-times-circle "></i>
			</button>
		    </div>      
		    <div class="modal-body">
			<fieldset>
			    <div class="col-md-11">
				<div class="form-group">    
				<label id="show_label"class="col-md-13 control-label"><b><h4></h4></b></label>           
				</div>
			    </div>  
			    <input type="hidden" name="pet_status" id="pet_status" value="">
			    <input type="hidden" name="pet_sys_id" id="pet_sys_id" value="">
			</fieldset>
		    </div>     
		    <div class="modal-footer">
			<input class="btn btn-primary" onclick='nextStep(null)' type="button" id="process"  value="Process">
			<input class="btn btn-success" onclick='nextStep(null)' id="completed" type="button" value="Completed">
			<input class="btn btn-success" onclick='nextStep(null)' type="button" id="delivered"  value="Delivered">
			<input class="btn btn-warning" onclick='nextStep("cancel")' type="button" id="cancel" value="Cancel">
			<input class="btn btn-danger"  data-dismiss="modal" type="button" id="close" value="Close">
		    </div>     
		</form>
	    </div>
	</div>
    </div>
<script>
$(document).ready(function() {	  
    var table = $("#dataRespTable").DataTable({
    //"sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
    "dom": 'lBfrtip',
    "bServerSide": true,
    "bProcessing": false,
    "sAjaxSource": '<?php echo site_url('IcomCtr/generateOnsite'); ?>',
    'responsive': true,
    //'scrollX':true,
    "lengthMenu": [
	[10, 20, 50, -1],
	[10, 20, 50, 100] // change per page values here
    ],
    columns: [
	//{ data: "SH_SYS_ID"},
	{ data: "SH_TXN_DT"},
	{ data: "SH_CUST_NAME"},
	{ data: "SH_MOBILE_NO"},
	{ data: "SH_PRODUCT_TYPE"},
	//{ data: "SH_EMP_ID"},
	//{ data: "SH_ESTIMATED_AMT"},
	{ data: "SH_TIME_IN"},
	{ data: "SH_TIME_OUT"},
	{ data: "SH_EMP_SPEND_TIME"},
	{ data: null, className: "all", 
	    render: function( data, type, row) {
		 return '<button type="button" class="btn btn-sm btn-danger" data-target="#DetailedView"  data-valu="<?php $phpvar="'+ data['SH_SYS_ID']+ '";  echo $phpvar;?>" onclick="MoreInfoView($(this));" data-toggle="modal" id="MoreDetail" data-template="textbox">More Info.</button>';
	    }
	},
	{ data: null, className: "all", 
	    render: function( data, type, row){
		return '<button type="button" class="btn btn-success btn-sm" data-target="#View" data-val="<?php
		$phpvar="'+ data['SH_SYS_ID']+ '"; echo $phpvar;?>" data-toggle="modal" onclick="getRowId($(this));" data-template="textbox">Convert to Inbound</button>';
	    }
	},
	//{ data: "SH_ITEM_STATUS"},
	{
	    data: null, className: "all","orderable": false, 
	    render: function( data, type, row) {
		return '<div class="btn-group m-r-5 m-b-5 pull-right"><a class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false"><i class="fa fa-gear"></i> <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="<?php
		$phpvar="'+ data['SH_SYS_ID']+ '";  echo site_url('IcomCtr/Onsite_Edit/edit/'.$phpvar);?>"  class="btn btn-xs" >  <i class="fa  fa-edit" > </i> Edit</a></li><li><a class="btn btn-xs"  id="delete_box" data-toggle="modal" href="<?php $phpvar="'+ data['SH_SYS_ID']+ '"; echo  site_url('IcomCtr/Onsite_Delete/'.$phpvar);?>" <i class="fa  fa-trash-o" >  </i> Delete </a></li></ul></div></td></td>'
	    }
	},
	
    ],
    buttons: [
	    {
		extend: 'excel',
		exportOptions: {
                columns: ':visible',
		}
	    },
	    {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4',
		exportOptions: {
                columns: ':visible',
		}
            },
	    {
		extend: 'print',
		exportOptions: {
                columns: ':visible',
		}
	    },
	    'colvis',
    ],
    columnDefs: [ {
            targets: -1,
            visible: false
	} ],
     "fnServerParams": function (aoData) {
	aoData.push({name: "product_name", value: product_name})
    },
    'fnServerData': function(sSource, aoData, fnCallback){
	$.ajax({
	  'dataType': 'json',
	  'type'    : 'POST',
	  'url'     : sSource,
	  'data'    : aoData,
	  'success' : fnCallback
	});
    },
});	
});	

	
</script>

<script>
	function MoreInfoView($this)
	{
	    var valu=$this.attr('data-valu');
	    console.log(valu);
	    $.ajax({
		type:"POST",
		url:"<?php echo site_url('IcomCtr/MoreInfoOnsiteView');?>",
		data:{valu:valu},
		//dataType:"json",
		success:function(response){
		    //console.log(json[0].SL_LINE_NO);
		    $("#DisplayView").html(response);
		}
	    });
	}
	function getRowId($this) {
		var rowId=$this.attr('data-val');
		$(".modal-body #rowId").val(rowId);
	}
	function StatusChange($this)
	{
	    var values="Inbound";
	    var val=$("#rowId").val();
	    $.ajax({
		type:"POST",
		url:"<?php echo site_url('IcomCtr/CallChange');?>",
		data:{values:values,val:val},
		success:function(response){
		    $('#dataRespTable').dataTable().fnDraw();
		}
	    });
	}
</script>

<script>
    function enquiry_status(id){        
    var pet_sysid=id;
    //console.log(pet_sysid);
    
	$.ajax({
	    type: "POST",
	    dataType: "json",
	    url: "<?=site_url('IcomCtr/GetDetails_Fancy')?>",
	    data: 'pet_sysid='+ pet_sysid ,
	    success: function (json){
		$('#pet_sys_id').val(json.pet_sys_id);
		$('#pet_status').val(json.pet_status);
		if (json.pet_status=='REQ'){
		    $('#show_label').html('Do you want to send for Process? or Cancel?');
		    $('#delivered').hide();
		    $('#completed').hide();
		    $('#process').show();
		    $('#cancel').show();
		    $('#close').show();
		} else if (json.pet_status=='PROCESS'){
		    $('#show_label').html('Do you want to send for Completed ?');
		    $('#delivered').hide();
		    $('#completed').show();
		    $('#process').hide();
		    $('#cancel').hide();
		    $('#close').show();
		}else if (json.pet_status=='COMPLETED'){
		    $('#show_label').html('Do you want to send for Delivered?');
		    $('#delivered').show();
		    $('#completed').hide();
		    $('#process').hide();
		    $('#cancel').hide();
		    $('#close').show();
		}else if (json.pet_status=='DELIVERED'){
		    $('#delivered').hide();
		    $('#completed').hide();
		    $('#cancel').hide();
		    $('#process').hide();
		    $('#close').show();
		}else if (json.pet_status=='CANCEL'){
		    $('#show_label').html('Do you want to Process?');
		    $('#delivered').hide();
		    $('#completed').hide();
		    $('#cancel').hide();
		    $('#process').show();
		    $('#close').show();
		    $('#pet_status').val("REQ");
	        }               
	    },
	});
    }
    function nextStep($status){
	if ($status=="cancel") {
	    var pet_status="CANCEL";
	}
	else{
	    var pet_status=$('#pet_status').val();
	}
	var pet_sys_id=$('#pet_sys_id').val();
	var getURL="<?php echo site_url('IcomCtr/Fancy_update');?>";
	getURL=getURL+'/'+pet_sys_id;
	$.ajax({
	    type: "POST",
	    dataType: "json",
	    url: getURL,
	    data: {pet_sys_id:pet_sys_id,pet_status:pet_status},
	    success: function(json){
		$('#large_view').modal('hide');
		$('#dataRespTable').dataTable().fnDraw();
	    },
	    error: function (xhr, ajaxOptions, thrownError){
	    alert("Error"+" : "+thrownError);
	    }
	});
    }
</script>
<script type="text/javascript">
//    var product_name;
//    function product($value){
//	product_name = $value;
//	$('#dataRespTable').dataTable().fnDraw();
//    }
	var product_name;
	function product($this){
		product_name = $this.attr('title');
		$('#dataRespTable').dataTable().fnDraw();
	}
	
	
    $('#form_validation').on('click', '#delete_box', function(e){
	e.preventDefault();
	var link = $(this).attr('href');
	
	console.log(link);
	
	bootbox.confirm("Are you sure you want to delete?", function(confirmed) {
	    if(confirmed){
		  window.location.href = link;
	    }
	});
     });
</script>




