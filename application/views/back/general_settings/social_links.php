<p class="text-main text-semibold"><?php echo translate('social_links')?></p>
<form class="form-horizontal" id="social_links_form" enctype="multipart/form-data" action="<?=base_url()?>admin/general_settings/update_social_links" method="POST">
	<!--FACEBOOK-->
	<!-- <div class="form-group row">
	    <label class="col-sm-2 control-label"></label>
	    <div class="col-sm-8">
	        <div class="input-group mar-btm">
	            <span class="input-group-addon fb_font">
	                <i class="fa fa-facebook-square fa-lg"></i>
	            </span>
	            <input type="text" name="facebook" value="<?=$this->Crud_model->get_type_name_by_id('social_links', '1', 'value')?>" class="form-control">
	        </div>
	    </div>
	</div> -->
	<!--YOUTUBE-->
	<?php
            $social_links = $this->db->get('social_links')->result();
            foreach($social_links as $sl){
        ?>   
	<div class="form-group row">
	    <label class="col-sm-2 control-label"></label>
	    <div class="col-sm-8">
	        <div class="input-group mar-btm">
			<?php if ($sl->icon){?>
	            <span class="input-group-addon <?= $sl->type;?>_font">
	                <i class="fa fa-<?= $sl->type;?> fa-lg"></i>
	            </span>
			<?php } else {?>
				<span class="input-group-addon <?= $sl->type;?>_font">
	                <img src="<?= base_url().'uploads/social_image/'.$sl->social_image?>" style='height:18px; weidth: 18px;'>
	            </span>
			<?php }?>
	            <input type="text" name="<?= $sl->type?>" value="<?= $sl->value;?>" class="form-control">
	        </div>
	    </div>
	</div>
	<?php } ?>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8 text-right">
			<button type="button" class="btn btn-primary btn-sm btn-labeled fa fa-plus" data-toggle="modal" data-target="#exampleModal"><?php echo translate('add')?></button>
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
		</div>
	</div>
</form>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form class="form-horizontal" id="general_settings_form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>admin/general_settings/add_social_links">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="form-group">
			<label class="col-sm-3 control-label" for="social_type"><b><?php echo translate('social_type')?></b></label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="type"  placeholder="Ex: facebook" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="page_link"><b><?php echo translate('page_link')?></b></label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="value"  placeholder="Ex: page link">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="icon_name"><b><?php echo translate('icon_name')?></b></label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="icon"  placeholder="Ex: fa fa-youtube">
			</div>
		</div>
		<div class="form-group">
		
			<label class="col-sm-3 control-label" for="icon_name"><b><?php echo translate('icon_name')?></b></label>
			<div class="col-sm-8">
				<input type="file" class="form-control" name="social_image"  placeholder="Ex: fa fa-youtube" required>
			<br>
			<p style='color:red;'>*** If no fontawesome icon found</p>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
	</form>
  </div>
</div>