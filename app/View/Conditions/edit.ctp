<div class="conditions form col-md-5">
<?php echo $this->Form->create('Condition'); ?>
	<fieldset>
		<legend><?php echo __('Actualizar Estatus'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control', 'label'=>'Nombre Estatus','placeholder'=>'Nombre'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Actualizar','class'=>'btn btn-info')); ?>
</div>
<div class="col-md-4">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Condition.id')), array(), __('Esta seguro de eliminar '.$this->Form->value('Condition.name').' ?', $this->Form->value('Condition.id'))); ?></li>
	<li><?php echo $this->Html->link(__('Lista Estatus'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nueva perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>