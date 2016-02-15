
<?php echo $this->Form->create('Tax'); ?>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Añadir impuesto'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class'=>'form-control','label'=>'Nombre','placeholder'=>'Nombre'));
		echo $this->Form->input('smg',array('class'=>'form-control','label'=>'SMG','placeholder'=>'SMG'));
		echo $this->Form->input('amount',array('class'=>'form-control','label'=>'Importe','placeholder'=>'Importe'));
	?>
	<br>
<?php echo $this->Form->end(array('label'=>'Añadir Impuesto', 'class'=>'btn btn-info')); ?>	
	</fieldset>

</div>
