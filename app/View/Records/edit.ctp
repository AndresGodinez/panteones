<div class="records form col-md-5">
<?php echo $this->Form->create('Record'); ?>
	<fieldset>
		<legend><?php echo __('Editar Pago'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titular_id',array('class'=>'form-control','label'=>'Titular', 'placeholder'=>'Titular'));
		echo $this->Form->input('amount', array('class'=>'form-control','label'=>'Importe', 'placeholder'=>'Importe'));
		echo $this->Form->input('tax_id',array('class'=>'form-control','label'=>'Impuesto', 'placeholder'=>'Impuesto'));
		echo $this->Form->input('perpetuity_id',array('class'=>'form-control','label'=>'Perpetuidad', 'placeholder'=>'Perpetuidad'));
		echo $this->Form->input('comment',array('class'=>'form-control','label'=>'Comentario', 'placeholder'=>'Comentario', 'rows'=>3));
		echo $this->Form->input('date', array('class'=>'form-control', 'type'=>'date', 'label'=>'Fecha'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('class'=>'btn btn-info','label'=>'Actualizar')); ?>
</div>
<div class="actions col-md-3">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Record.id')), array(), __('Esta seguro de eliminar pago de '.$this->Form->value('Tax.name').'?', $this->Form->value('Record.id'))); ?></li>
	<li><?php echo $this->Html->link(__('Lista Ingresos'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Lista Titulares'), array('controller' => 'titulars', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Titular'), array('controller' => 'titulars', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Impuestos'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Impuesto'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>
