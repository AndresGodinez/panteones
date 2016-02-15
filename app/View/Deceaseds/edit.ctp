<div class="deceaseds form col-md-5">
<?php echo $this->Form->create('Deceased'); ?>
	<fieldset>
		<legend><?php echo __('Actualizar Defunción'); ?></legend>
	<?php
		echo $this->Form->input('fullname',array('class'=>'form-control','label'=>'Nombre Completo','placeholder'=>'Nombre Completo'));
		echo $this->Form->input('entombment',array('class'=>'form-control','Type'=>'date','label'=>'Fecha Entierro'));
		echo $this->Form->input('perpetuity_id',array('class'=>'form-control','label'=>'Titular'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('class'=>'btn btn-info','label'=>'Actualizar')); ?>
</div>
<div class="col-md-5">
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Deceased.id')), array(), __('Esta seguro de eliminar la defuncón de '.$this->Form->value('Deceased.fullname').'?', $this->Form->value('Deceased.id'))); ?></li>
	<li><?php echo $this->Html->link(__('Lista Defunciones'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
  </ul>
</div>
</div>
