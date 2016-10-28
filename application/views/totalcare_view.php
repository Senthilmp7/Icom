
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Total Care</a></li>
				<li class="active">Totalcare</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Total Care<small>header small text goes here...</small></h1>
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
                            <h4 class="panel-title">Total Care</h4>
                        </div>
                        <div class="panel-body" id="form_validation">
			    <p><a class="btn btn-primary btn-sm" href="<?php echo site_url('IcomCtr/totalcare');?>"><i class="fa fa-plus fa-1x"></i>
		        <span class="f-s-14 f-w-500">Add</span></a></p>
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Customer Id</th>
                                            <th>Customer Name</th>
                                            <th>Customer Email</th>
                                            <th>Mobile No.</th>
					    <th>Address</th>
					    <th>City</th>
					    <th>Area</th>
					    <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
					<?php foreach($this->IcomModel->gettotalcare()as $row) { ?>
                                        <tr>
                                            <td><?php echo $row->TCH_CUST_ID; ?></td>
                                            <td><?php echo $row->TCH_CUST_NAME; ?></td>
                                            <td><?php echo $row->TCH_CUST_EMAIL; ?></td>
                                            <td><?php echo $row->TCH_CUST_MOBILE; ?></td>
					    <td><?php echo $row->TCH_CUST_ADD1; echo $row->TCH_CUST_ADD2; ?></td>
					    <td><?php echo $row->TCH_CUST_CT_CODE; ?></td>
					    <td><?php echo $row->TCH_CUST_AR_CODE; ?></td>
					    <td><a href="<?php echo site_url('IcomCtr/total_Edit/'.$row->TCH_SYS_ID);?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
                                            <a href="<?php echo site_url('IcomCtr/totalcare_Delete/'.$row->TCH_SYS_ID);?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa  fa-trash-o"></i> </a></td>
                                        </tr>
					<?php }?>
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
		
	<script>
		$(document).ready(function()
		{
		    $("#data-table").DataTable();
		});
	</script>
	
	<script>
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