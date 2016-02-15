<div class="yearlies form">
<?php echo $this->Form->create('Yearly'); ?>
	<fieldset>
		<legend><?php echo __('Add Yearly'); ?></legend>
	<?php
		echo $this->Form->input('year');
		echo $this->Form->input('receipt');
		echo $this->Form->input('perpetuity_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Yearlies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Perpetuities'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perpetuity'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
	</ul>
</div>
