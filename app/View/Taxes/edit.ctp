<div class="taxes form ">
<?php echo $this->Form->create('Tax'); ?>
<div class="col-md-6">
	<fieldset>
		<legend><?php echo __('Editar Impuesto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('class'=>'form-control','label'=>'Nombre','placeholder'=>'Nombre'));
		if($this->Form->value('Tax.id')!=1){
		echo $this->Form->input('smg',array('class'=>'form-control','label'=>'SMG','placeholder'=>'SMG'));
		}
		else{
		echo $this->Form->input('smg',array('class'=>'form-control','label'=>'SMG','placeholder'=>'SMG','disabled'));

		}


		echo $this->Form->input('amount',array('class'=>'form-control','label'=>'Importe','placeholder'=>'Importe'));
	?>
	<br>
	<?php echo $this->Form->end(array('label'=>'Actualizar Impuesto','class'=>'btn btn-info')); ?>
	</fieldset>

</div>
</div>
<div class="col-md-1"></div>
<div class="actions col-md-4">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
	<?php if($this->Form->value('Tax.id')!=1) : ?>
		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Tax.id')), array(), __('Esta seguro de eliminar el impuesto'.$this->Form->value('Tax.name').'?', $this->Form->value('Tax.id'))); ?></li>
	<?php endif; ?>
		<li><?php echo $this->Html->link(__('Lista Impuestos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Ingresos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ingreso'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
