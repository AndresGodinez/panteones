<div class="well col-md-6">
	<div class="page-header">
	<h2><?php echo __('Impuesto'); ?></h2>
	</div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Smg'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['smg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($tax['Tax']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="actions col-md-3">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Html->link(__('Editar Impuesto'), array('action' => 'edit', $tax['Tax']['id'])); ?> </li>
	<li><?php echo $this->Form->postLink(__('Eliminar Impuesto'), array('action' => 'delete', $tax['Tax']['id']), array(), __('Esta seguro de eliminar el impuesto '.$tax['Tax']['name'].'?', $tax['Tax']['id'])); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Impuestos'), array('action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Impuesto'), array('action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Ingresos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Ingreso'), array('controller' => 'records', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>

<div class="related col-md-12 table-responsive">
	<h3><?php echo __('Ingresos Relacionados'); ?></h3>
	<?php if (!empty($tax['Record'])): ?>

	<table class='table table-striped'>
	<tr>
		<th><?php echo __('Titular'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Impuesto'); ?></th>
		<th><?php echo __('Perpetuidad'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($ingreso as $i): ?>
		<tr>
			<td><?php echo $i['Titular']['fullname']; ?></td>
			<td><?php echo $i['Record']['amount']; ?></td>
			<td><?php echo $i['Tax']['name']; ?></td>
			<td><?php echo $i['Perpetuity']['folio']; ?></td>
			<td><?php echo $i['Record']['comment']; ?></td>
			<td><?php echo $i['Record']['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'records', 'action' => 'view', $i['Record']['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'records', 'action' => 'edit', $i['Record']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'records', 'action' => 'delete', $i['Record']['id']), array(), __('Esta seguro de eliminar el pago '.$i['Tax']['name'].'?', $i['Record']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

