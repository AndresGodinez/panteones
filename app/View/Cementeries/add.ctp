<div class="cementeries form col-md-5">
<?php echo $this->Form->create('Cementery'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Panteón'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control','label'=>'nombre','placeholder'=>'Nombre'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Añadir','class'=>'btn btn-info')); ?>
</div>
<div class="dropdown pull-right col-md-3" id="acciones ">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Html->link(__('Lista de Panteones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>


