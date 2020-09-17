<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('extra_settings')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<li class="active"><a href="<?=base_url().'admin/extra_settings/' ?>"><?php echo translate('extra_settings')?></a></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<!-- Basic Data Tables -->
		<!--===================================================-->
		<div class="panel">
			<?php if (!empty($success_alert)): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$success_alert?>
	            </div>
			<?php endif ?>
			<?php $d = $this->uri->segment(2);?>
			<?php if ($d == 'update_extra_settings'){?>
				<?php include_once "extra_page_update.php"?>
			<?php } else {?>
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo translate('manage_settings')?></h3>
			</div>
			<div class="panel-body">

				<div class="tab-base tab-stacked-left">
		            <!--Nav tabs-->
		            <ul class="nav nav-tabs" style="width: 145px;">
		                <li class="active">
		                    <a data-toggle="tab" href="#demo-stk-lft-tab-1"><?php echo translate('add_new_page')?></a>
		                </li>
						<?php $i = 1; foreach($extra_page as $ep){ $i++;?>
		                <li>
		                    <a href="<?=base_url().'admin/update_extra_settings/'.$ep->extra_page_id ?>"><?php echo translate($ep->page_name);?></a>
		                </li>
						<?php }?>
		            </ul>
		
		            <!--Tabs Content-->
		            <div class="tab-content">
		                <div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
		                    <?php include_once "general_settings.php";?>
		                </div>
						<!-- <?php $i = 1; foreach($extra_page as $ep){ $i++;?>
						<div id="demo-stk-lft-tab-<?= $i;?>" class="tab-pane fade">
							<?php include_once "privacy_policy.php"?>
		                </div>
						<?php }?> -->
		            </div>
		        </div>

			</div>
			<?php }?>
		</div>
	</div>
</div>
<script>
	$(function () {
	    //bootstrap WYSIHTML5 - text editor
	    $('.textarea').wysihtml5({
	        toolbar: {
	            "image": false // Button to insert an image.
	        }
	    });
	})
	function passid(id){
		// console.log(id);
		$( ".inner" ).html( "<input type='text'  placeholder='hello' value='"+id+"' required>" );
	}
</script>
<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
</script>