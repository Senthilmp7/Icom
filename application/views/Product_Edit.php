<style>
.checkbox{display:none}
.switch
{
width: 62px;
height: 32px;
background: #FF5B57;
border-radius:16px;
top:20px;
left:20px;
}
.switch:before
{
background: #eee;
}
.switch:after 
{
content: 'No' !important;
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
content: 'Yes' !important;
font-weight:bold;
padding-left:4px;
color:#49C4C5;
left: 30px !important;
}
</style>
<div id="content" class="content">
<!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Products</a></li>
        <li class="active">Edit Products</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Products<small> You may Edit products here...</small></h1>
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
                <h4 class="panel-title">Edit Products</h4>
                </div>
                <div class="panel-body" >               
                    <form id="form_validation" method="POST" enctype="multipart/form-data" action="<?php echo base_url('IcomCtr/Product_Edit/'.$Product[0]['PR_ID']); ?>" class="form-horizontal form12">
                        <div class="well">					
				
				<div class="row">
				    <div class="col-md-4">
					<div class="row">
					    <div class="col-md-12">
						<label class="col-md-12">Product Image</label>
						<div class="col-md-12" id="gallery1">
						    <div class="col-md-12 ImageViews AdjustPadding" style="padding-bottom:20px;"  >
							<div class="form-group">
							    <img src="<?php echo $Product[0]['PR_IMAGE']; ?>" class="col-md-12 previewsimage gott img-responsive" id="dummy2" style="height: 185px; width: 200px;" >
							    <input type="file" id="previews" name="ProductImage" class="col-md-12 " onchange="attachmentss(this);" >
							    <input type="hidden" name="GetProductImage" value="<?php echo $Product[0]['PR_IMAGE']; ?>" >
							</div>
						    </div>
						</div>
					    </div>
					</div>
				    </div>
				    <div class="col-md-8">
					<div class="row">
					    <div class="form-group col-md-12">
						<label class="col-md-4">Product Name</label>
						<div class="col-md-12">
						    <input type="text" name="ProductName" id="ProductName"  class="form-control input-sm" value="<?php echo $Product[0]['PR_NAME'] ?>" placeholder="Product Name" />
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group col-md-12">
						<label class="col-md-4">Description</label>
						<div class="col-md-12">
						    <textarea id="ProductDesc" name="ProductDesc" placeholder="Enter your content here" cols="25" rows="5" class="ckeditor textarea form-control  textarea_middle required"><?php echo $Product[0]['PR_NAME'] ?></textarea>
						</div>
					    </div>
					</div>
					<div class="row">
					    <div class="form-group col-md-3">
						<label class="col-md-4">Active?</label>
						<?php if($Product[0]['PR_ACTIVE_YN']=='Y'){?>
						<div class="form-group col-md-3 switch switchOn">
						    <input type="checkbox" class="checkbox" <?php if($Product[0]['EMP_ACTIVE_YN']=="Y") echo 'checked="checked"';?>>
						    <input type="hidden" id="PR_ACTIVE_YN" name="PR_ACTIVE_YN" value="<?php echo $Product[0]['PR_ACTIVE_YN']?>">
						</div><?php } else { ?>
						<div class="form-group col-md-3 switch">
						    <input type="checkbox" class="checkbox" <?php if($Product[0]['EMP_ACTIVE_YN']=="Y") echo 'checked="checked"';?>>
						    <input type="hidden" id="PR_ACTIVE_YN" name="PR_ACTIVE_YN" value="<?php echo $Product[0]['PR_ACTIVE_YN']?>">
						</div><?php } ?>
					    </div>
					</div>
				    </div>
				</div>
                            <div class="pager form-group">
                                <div class="col-md-7 control-label">
                                    <button type="submit" class="btn btn-sm btn-success" name="submit_form" id="submit_but" value="Update">Save</button>
                                    <button class="btn btn-sm btn-info" id="clear_data"  type="button">Reset</button>
                                    <button class="btn btn-sm btn-danger" onclick="window.history.back();" type="button">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <!-- end panel -->
        </div>
    </div>
</div>
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

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
		ProductName:{
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
		ProductDesc:{
		    validators:{
			notEmpty:{
			    message:'This field is required and can\'t be empty'
			}				 
		    }
		}
	    }
	});
    });
    
</script>

<script>
    
    function attachmentss($this) {
	var oFReader = new FileReader();
	oFReader.readAsDataURL($this.files[0]);
	oFReader.onload = function (oFREvent) {
	$($this).parents('.ImageViews').find('img').attr("src",  oFREvent.target.result);
	};
    };
    
    $('.switch').click(function()
    {
	$(this).toggleClass("switchOn");
	if($(this).hasClass('switchOn')){
	   $('#PR_ACTIVE_YN').val('Y');
	}
	else{
	   $('#PR_ACTIVE_YN').val('N');
	}
    });
</script>