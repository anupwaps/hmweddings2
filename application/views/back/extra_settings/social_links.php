<p class="text-main text-semibold"><?php echo translate('social_links')?></p>
<form class="form-horizontal" id="social_links_form" action="<?=base_url()?>admin/general_settings/update_social_links" method="POST">
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
	            <span class="input-group-addon <?= $sl->type;?>_font">
	                <i class="fa fa-<?= $sl->type;?> fa-lg"></i>
	            </span>
	            <input type="text" name="<?= $sl->type?>" value="<?= $sl->value;?>" class="form-control">
	        </div>
	    </div>
	</div>
	<?php }?>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8 text-right">
        	<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('save')?></button>
		</div>
	</div>
</form>