<div id="sample_form_box">

	<!-- We'll use $this->method to switch between sample.create & sample.edit -->
	<h3><?php echo lang('sample.'.$this->method); ?></h3>

	<?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>
		<ol>
			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="name"><?php echo lang('sample.name'); ?></label>
				<?php echo form_input('name', set_value('name', $name), 'class="width-15"'); ?>
				<span class="required-icon tooltip">Required</span>
			</li>

			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="slug"><?php echo lang('sample.slug'); ?></label>
				<?php echo form_input('slug', set_value('slug', $slug), 'class="width-15"'); ?>
				<span class="required-icon tooltip">Required</span>
			</li>
		</ol>
		
		<div class="buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
		</div>
		
	<?php echo form_close(); ?>

</div>
