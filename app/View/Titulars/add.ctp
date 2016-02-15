<div class="col-md-12">
<div class="col-md-10"></div>
<div class="muestra col-md-2">
<div class="bs-example" data-example-id="static-dropdown"> 
	<div class="dropdown clearfix"> 
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Acciones <span class="caret"></span> </button> 
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1"> 
		<li><?php echo $this->Html->link(__('Lista Titulares'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Ingresos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ingreso'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		</ul> 
	</div> 
</div>
</div>	
</div>
<div class="titulars form col-md-5">
<?php echo $this->Form->create('Titular'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Titular'); ?></legend>
	<?php
		echo $this->Form->input('fullname',array('class'=>'form-control', 'label'=>'Nombre Completo','placeholder'=>'Nombre Completo'));
		echo $this->Form->input('address',array('class'=>'form-control','label'=>'Dirección','placeholder'=>'Dirección'));
		echo $this->Form->input('phone',array('class'=>'form-control','label'=>'Celular','placeholder'=>'Celular'));
		echo $this->Form->input('rfc', array('class'=>'form-control','label'=>'RFC','placeholder'=>'RFC'));
		echo $this->Form->input('telephone',array('class'=>'form-control','label'=>'Teléfono','placeholder'=>'Teléfono'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array('label'=>'Alta','class'=>'btn btn-info')); ?>
