<div class="col-md-5 deceaseds view well">
<h2><?php echo __('Defunción'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			<?php echo h($deceased['Deceased']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Entierro'); ?></dt>
		<dd>
			<?php echo h($deceased['Deceased']['entombment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perpetuidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deceased['Perpetuity']['folio'], array('controller' => 'perpetuities', 'action' => 'view', $deceased['Perpetuity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($deceased['Deceased']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($deceased['Deceased']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="col-md-5">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Html->link(__('Editar Defunción'), array('action' => 'edit', $deceased['Deceased']['id'])); ?> </li>
	<li><?php echo $this->Form->postLink(__('Eliminar Defunción'), array('action' => 'delete', $deceased['Deceased']['id']), array(), __('Esta seguro de eliminar la defunción '.$deceased['Deceased']['fullname'].' ?', $deceased['Deceased']['id'])); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Defunciones'), array('action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nueva Defunción'), array('action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
  </ul>
</div>
</div>

