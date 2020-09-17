<h4 class="text-main text-semibold"><?php echo translate($ep->page_name)?> Page Update</h4>
<form class="form-horizontal" id="privacy_policy_form" method="POST" enctype="multipart/form-data" action="<?=base_url().'admin/update_extra_settings/'.$ep->extra_page_id.'/update' ?>">
<div style="padding-left:6px;">
	<div class="form-group">
		<div class="col-sm-12">
			<label for="<?php echo translate('page_cover')?>"><?php echo translate('page_cover')?></label>
			<input type="file" name="page_cover" class="form-control">
			<!-- <span style="color: red">* 1920x1280 pixels is best</span><br> -->
			<img src="<?= base_url().'uploads/page_cover/'.$ep->page_cover?>" style="height: 150px; width: 280px;" >
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
		<label for="<?php echo translate('content')?>"><?php echo translate('content')?></label>
			<textarea class="form-control ckeditor" name="content" id="privacy_policy" required>
				<?= $ep->content;?>
			</textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 text-right">
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('update')?></button>
		</div>
	</div>
</form>
</div>