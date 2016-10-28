	<!-- begin #content -->
<?php

	?>
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">State</a></li>

        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">State <small> You may View State Details here...</small></h1>
        <!-- end page-header -->
        
        <!-- begin row -->
        <div class="row">
            <!-- begin col-10 -->
            <div class="col-md-12">
                <!-- begin panel -->
	    <div class="panel panel-inverse">
		<div class="panel-heading">
		    <div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		    </div>
		    <h4 class="panel-title">State View</h4>
		</div>
		<div class="panel-body" id="form_validation">
		    <p>
                        <a class="btn btn-primary btn-sm " href="<?php echo site_url('IcomCtr/State_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
                    </p>
                    <div class="table-responsive" style="border: none">
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
		      <thead>
			    <tr>
				<th data-class="expand">State Code</th>
				<th data-class="expand">State Description</th>
                                <th data-class="expand">Country Code</th>
				<th>Action</th>
			    </tr>
			</thead>
			<tbody>
			    <?php foreach($State as $row) { ?>
			    <tr>
				<td><?php echo $row['ST_CODE']?></td>					    
				<td><?php echo $row['ST_DESC']?></td>
                                <td><?php echo $row['ST_CN_CODE']?></td>
				<td>
				<a href="<?php echo site_url('IcomCtr/State_Edit/'.$row['ST_CODE']);?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> </a>
				
				  <a href="<?php echo site_url('IcomCtr/State_Delete/'.$row['ST_CODE']);?>" id="delete_box" class="btn btn-xs btn-danger"><i class="fa  fa-trash-o"></i> </a>
    
				</td>
			    </tr>
			<?php }?>
			</tbody>
		    </table>
		    
		</div>
	    </div>
	    <!-- end panel -->
	</div>
	<!-- end col-10 -->
    </div>
    <!-- end row -->
	</div>
	<!-- end #content -->
	
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<!-- end page container -->

</body>
<script>
    
    $(document).ready(function()
    {
	$("#data-table").DataTable();
    });
    
</script>
</html>
