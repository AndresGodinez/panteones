<div class="cementeries col-md-5 form">
<?php echo $this->Form->create('Cementery'); ?>
	<fieldset>
		<legend><?php echo __('Actualizar Panteón'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('class'=>'form-control','label'=>'Nombre','placeholder'=>'Nombre'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Actualizar','class'=>'btn btn-info')); ?>
</div>
<div class="col-md-1"></div>
<div class="dropdown pull-right" id="acciones col-md-3">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Cementery.id')), array(), __('Esta Seguro de eliminar el panteón '.$this->Form->value('Cementery.name').'?', $this->Form->value('Cementery.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Panteones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>
