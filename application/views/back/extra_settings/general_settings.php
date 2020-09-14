<p class="text-main text-semibold"><?php echo translate('add_new_page')?></p>
<?php $right_option = $this->Crud_model->get_type_name_by_id('general_settings', '85', 'value') ?>

<form class="form-horizontal" id="general_settings_form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>admin/extra_settings/add_extra_page">
	<div class="form-group">
		<label class="col-sm-3 control-label" for="page_name"><b><?php echo translate('page_name')?></b></label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="page_name"  placeholder="Ex: about_us" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="cover_image"><b><?php echo translate('cover_image')?></b></label>
		<div class="col-sm-8">
			<input type="file" class="form-control" name="page_cover"  placeholder="Ex: about_us" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="page_content"><b><?php echo translate('page_content')?></b></label>
		<div class="col-sm-8">
			<textarea class="form-control ckeditor" name="content" id="content" required></textarea>	
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8 text-right">
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('add')?></button>
		</div>
	</div>
</form>
