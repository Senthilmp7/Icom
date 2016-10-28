	<!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">City</a></li>

        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">City <small> You may View Details here...</small></h1>
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
		    <h4 class="panel-title">City View</h4>
		</div>
		<div class="panel-body" id="form_validation">
		    <p>
                        <a class="btn btn-primary btn-sm " href="<?php echo site_url('IcomCtr/City_Add')?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500">Add </span></a>
                    </p>
                    <div class="table-responsive" style="border: none">
		    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
		      <thead>
			    <tr>
				<th>City Code</th>
				<th>City Description</th>
				<th>Active?</th>
				<th>Action</th>
			    </tr>
			</thead>
			<tbody>
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
$(document).ready(function() {	  
    var table = $("#data-table").DataTable({
    "sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'>>",
    "bServerSide": true,
    "bProcessing": false,
    "sAjaxSource": '<?php echo site_url('IcomCtr/generateCity'); ?>',
    'responsive': true,
    'scrollX':true,
    "lengthMenu": [
	[10, 20, 50, -1],
	[10, 20, 50, "All"] // change per page values here
    ],
    columns: [
	{ data: "CITY_CODE"},
	{ data: "CITY_DESC"},
	{ data: "CITY_ACTIVE_YN"},
	{
	    data: null, className: "all","orderable": false, 
	    render: function( data, type, row) {
		return '<div class="btn-group m-r-5 m-b-5 pull-right"><a class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" href="javascript:;" aria-expanded="false"><i class="fa fa-gear"></i> <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="<?php
		$phpvar="'+ data['CITY_CODE']+ '";  echo site_url('IcomCtr/City_Edit/'.$phpvar);?>"  class="btn btn-xs" >  <i class="fa  fa-edit" > </i> Edit</a></li><li><a class="btn btn-xs"  id="delete_box" data-toggle="modal" href="<?php echo  site_url('IcomCtr/City_Delete');?>" <i class="fa  fa-trash-o" >  </i> Delete </a></li></ul></div></td></td>'
	    }
	},
	
    ],
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

    
    
	//$("#data-table").DataTable();
    
    

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


</html>
