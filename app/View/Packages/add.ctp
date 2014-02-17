<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Add Package'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('length');
		echo $this->Form->input('width');
		echo $this->Form->input('weight');
		echo $this->Form->input('special_reqs');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?></li>
	</ul>
</div>