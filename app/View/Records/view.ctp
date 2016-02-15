<div class="records view well col-md-5">
<h2><?php echo __('Pago'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($record['Record']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titular'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Titular']['fullname'], array('controller' => 'titulars', 'action' => 'view', $record['Titular']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($record['Record']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Impuesto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $record['Tax']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perpetuidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($record['Perpetuity']['folio'], array('controller' => 'perpetuities', 'action' => 'view', $record['Perpetuity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($record['Record']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($record['Record']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($record['Record']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($record['Record']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions col-md-5">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Html->link(__('Editar Ingreso'), array('action' => 'edit', $record['Record']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar ingreso'), array('action' => 'delete', $record['Record']['id']), array(), __('Esta seguro de eliminar '.$record['Tax']['name'].'?', $record['Record']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Ingresos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Titulares'), array('controller' => 'titulars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Titular'), array('controller' => 'titulars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Impuestos'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Impuesto'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>
