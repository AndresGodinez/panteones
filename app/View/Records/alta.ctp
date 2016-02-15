<?php debug($impuestos); ?>
<div class="col-md-12">
<div class="col-md-10"></div>
<div class="muestra col-md-2">
<div class="bs-example" data-example-id="static-dropdown"> 
	<div class="dropdown clearfix"> 
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Acciones <span class="caret"></span> </button> 
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1"> 
		<li><?php echo $this->Html->link(__('Lista Ingresos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Titulares'), array('controller' => 'titulars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Titular'), array('controller' => 'titulars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Impuestos'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Impuesto'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
		</ul> 
	</div> 
</div>
</div>	
</div>

<div class="records form col-md-6">
<?php echo $this->Form->create('Record'); ?>
	<fieldset>
		<legend><?php echo __('Agregar pago'); ?></legend>
	<?php
		echo $this->Form->input('titular_id', array('label'=>'Titular','class'=>'form-control'));
		echo $this->Form->input('amount',array('class'=>'form-control','label'=>'Importe','placeholder'=>'Importe'), 'disabled');
		echo $this->Form->input('tax_id',array('class'=>'form-control','label'=>'Impuesto','placeholder'=>'Impuesto'));
		echo $this->Form->input('perpetuity_id',array('class'=>'form-control','label'=>'Perpetuidad','placeholder'=>'Perpetuidad'));
		echo $this->Form->input('comment',array('class'=>'form-control','label'=>'Comentario','placeholder'=>'Comentario'));
		echo $this->Form->input('date',array('class'=>'form-control','type'=>'date','label'=>'fecha'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Añadir','class'=>'btn btn-info')); ?>
</div>
