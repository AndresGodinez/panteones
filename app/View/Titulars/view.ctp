<div class="titulars view well col-md-6">
<h2><?php echo __('Titular'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfc'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['rfc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($titular['Titular']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions col-md-6">
	<div class="dropdown">
	  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	    Acciones
	    <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Html->link(__('Editar Titular'), array('action' => 'edit', $titular['Titular']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $titular['Titular']['id']), array(), __('Esta seguro que quiere eliminar'.$titular['Titular']['fullname'].'', $titular['Titular']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Titulares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Titular'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Ingresos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Form->postLink('Añadir Pago', array('controller'=>'records','action' => 'alta', $titular['Titular']['id'])); ?> </li>		
		<li><?php echo $this->Html->link(__('Nuevo ingreso'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	  </ul>
	</div>
</div>

<div class="related col-md-12">
	<h3><?php echo __('Perpetuidades Relacionadas'); ?></h3>
	<?php if (!empty($perpetuidades)): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Folio'); ?></th>
		<th><?php echo __('Titular'); ?></th>
		<th><?php echo __('Traspaso'); ?></th>
		<th><?php echo __('Panteón'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Medidas'); ?></th>
		<th><?php echo __('Estatus'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($perpetuidades as $perpetuidad): ?>
		<tr>
			<td><?php echo $perpetuidad['Perpetuity']['folio']; ?></td>
			<td><?php echo $perpetuidad['Titular']['fullname']; ?></td>
			<td><?php echo $perpetuidad['Perpetuity']['transfer']; ?></td>
			<td><?php echo $perpetuidad['Cementery']['name']; ?></td>
			<td><?php echo $perpetuidad['Perpetuity']['date']; ?></td>
			<td><?php echo $perpetuidad['Perpetuity']['measurement']; ?></td>
			<td><?php echo $perpetuidad['Condition']['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'perpetuities', 'action' => 'view', $perpetuidad['Perpetuity']['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'perpetuities', 'action' => 'edit', $perpetuidad['Perpetuity']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'perpetuities', 'action' => 'delete', $perpetuidad['Perpetuity']['id']), array(), __('Esta seguro de eliminar'.$perpetuidad['Perpetuity']['folio'].'?', $perpetuidad['Perpetuity']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<div class="related col-md-12 table-responsive">
	<h3><?php echo __('Pagos Relacionados'); ?></h3>
	<?php if (!empty($pagos)): ?>
	<table class="table-striped table">
	<tr>
		<th><?php echo __('Titular'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Impuesto'); ?></th>
		<th><?php echo __('Perpetuidad'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($pagos as $pago): ?>
		<tr>
			<td><?php echo $pago['Titular']['fullname']; ?></td>
			<td><?php echo $pago['Record']['amount']; ?></td>
			<td><?php echo $pago['Tax']['name']; ?></td>
			<td><?php echo $pago['Perpetuity']['folio']; ?></td>
			<td><?php echo $pago['Record']['comment']; ?></td>
			<td><?php echo $pago['Record']['date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'records', 'action' => 'view', $pago['Record']['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'records', 'action' => 'edit', $pago['Record']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'records', 'action' => 'delete', $pago['Record']['id']), array(), __('Esta reguro de eliminar el pago de '.$pago['Tax']['name'].' ?', $pago['Record']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>