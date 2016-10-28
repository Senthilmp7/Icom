<div id="content" class="content">
    <ol class="breadcrumb pull-right">
	<li><a href="javascript:;">User</a></li>
    </ol>
    <h1 class="page-header">User View<small> You may view user details here...</small></h1>
    <div class="row">
	<div class="col-md-12">
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">User View</h4>
		</div>
		<div class="panel-body" id="form_validation">
		    <p>
			<a class="btn btn-primary btn-sm " href="<?php echo site_url('IcomCtr/User_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
		    </p>
		    <div class="table-responsive">
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
			<thead>                                               
			    <tr>
				<th data-class="expand">Name</th>
				<th data-hide="phone,tablet">Email</th>                                                         		
				<th>Action</th>
			    </tr>
			</thead>
			<tbody>
			    <?php foreach ($User as $row) { ?> 
				<tr class="even gradeC">
				    <td><?php echo $row['USER_NAME'];?></td>					    
				    <td><?php echo $row['USER_EMAIL'];?></td>                                  
				    <td>
					<a href="<?php echo site_url('IcomCtr/User_Edit/'.$row['USER_ID'])?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
					<a href="<?php echo site_url('IcomCtr/User_Delete/'.$row['USER_ID'])?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa  fa-trash-o"></i> </a>
				    </td>
				</tr>
			    <?php }?>
			</tbody>
		    </table>
		</div>
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
