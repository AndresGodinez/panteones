<div class="perpetuities form col-md-5">
<?php echo $this->Form->create('Perpetuity'); ?>
	<fieldset>
		<legend><?php echo __('Editar Perpetuidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('folio',array('class'=>'form-control','label'=>'Folio','placeholder'=>'Folio'));
		echo $this->Form->input('transfer', array('class'=>'form-control','label'=>'Traspaso', 'placeholder'=>'Traspaso'));
		echo $this->Form->input('cementery_id',array('class'=>'form-control', 'label'=> 'Panteón', 'placeholder'=>'Panteón'));
			echo $this->Form->input('date',array(
			'class'=>'form-control',
			// 'type'=>'date',
			'label'=>'Fecha',
			'dateFormat'=>'DMY',
			'minYear'=>1951,
			'maxYear'=>date('Y')-0
			)
		);
		echo $this->Form->input('measurement', array('class'=>'form-control', 'label'=>'Medidas', 'placeholder'=>'medidas'));
		echo $this->Form->input('condition_id', array('class'=>'form-control', 'label'=>'Estatus'));
		echo $this->Form->input('beneficiaryOne', array('class'=>'form-control', 'label'=>'Beneficiario Uno', 'placeholder'=>'Beneficiario uno'));
		echo $this->Form->input('beneficiaryTwo', array('class'=>'form-control', 'label'=>'Beneficiario Dos', 'placeholder'=>'Beneficiario Dos'));
		echo $this->Form->input('beneficiaryThree',array('class'=>'form-control', 'label'=>'Beneficiario Tres', 'placeholder'=>'Beneficiario Tres'));
		echo $this->Form->input('nameNorth',array('class'=>'form-control', 'label'=>'Nombre Norte', 'placeholder'=>'Nombre Norte'));
		echo $this->Form->input('distanceNorth' ,array('class'=>'form-control', 'label'=>'Distancia Norte', 'placeholder'=>'Distancia norte'));
		echo $this->Form->input('nameEsast',array('class'=>'form-control', 'label'=>'Nombre Este', 'placeholder'=>'Nombre Este'));
		echo $this->Form->input('distanceEast',array('class'=>'form-control', 'label'=>'Distancia Este', 'placeholder'=>'Distancia Este'));
		echo $this->Form->input('nameWest',array('class'=>'form-control', 'label'=>'Nombre Poniente', 'placeholder'=>'Nombre Poniente'));
		echo $this->Form->input('distanceWest',array('class'=>'form-control', 'label'=>'Distancia Poniente', 'placeholder'=>'Distancia Poniente'));
		echo $this->Form->input('nameSouth',array('class'=>'form-control', 'label'=>'Nombre Sur', 'placeholder'=>'Nombre Sur'));
		echo $this->Form->input('distanceSouth',array('class'=>'form-control', 'label'=>'Distancia Sur', 'placeholder'=>'Distancia Sur'));
	?>
	</fieldset>
	<br>
<?php echo $this->Form->end(array( 'label'=>'Actualizar' ,'class'=>'btn btn-info')); ?>
</div>
<div class="col-md-3">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Perpetuity.id')), array(), __('Esta seguro de eliminar '.$this->Form->value('Perpetuity.folio').'?', $this->Form->value('Perpetuity.id'))); ?></li>
	<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Lista Titulares'), array('controller' => 'titulars', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Titular'), array('controller' => 'titulars', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Panteones'), array('controller' => 'cementeries', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('controller' => 'cementeries', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Estatus'), array('controller' => 'conditions', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Estatus'), array('controller' => 'conditions', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Defunciones'), array('controller' => 'deceaseds', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nueva Defunción'), array('controller' => 'deceaseds', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Pagos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Pago'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Pagos Anuales'), array('controller' => 'yearlies', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Pago Anual'), array('controller' => 'yearlies', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>