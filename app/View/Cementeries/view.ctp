
<div class="cementeries view well col-md-4">
<h2><?php echo __('Panteón'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cementery['Cementery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cementery['Cementery']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="col-md-1"></div>
<div class="dropdown col-md-6">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Html->link(__('Editar Panteón'), array('action' => 'edit', $cementery['Cementery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Panteón'), array('action' => 'delete', $cementery['Cementery']['id']), array(), __('Esta seguro de eliminar el panteón '.$cementery['Cementery']['name'].' ?', $cementery['Cementery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Panteones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>


	<?php if (!empty($cementery['Perpetuity'])): ?>
	<div class="related col-md-12">
	<h3><?php echo __('Perpetuidades Realcionadas'); ?></h3>
	<table class='table-striped col-md-12'>
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
	<?php foreach ($titular as $perpetuity): ?>
		<tr>
			<td><?php echo $perpetuity['Perpetuity']['folio']; ?></td>
			<td><?php echo $perpetuity['Titular']['fullname']; ?></td>
			<td><?php echo $perpetuity['Perpetuity']['transfer']; ?></td>
			<td><?php echo $perpetuity['Cementery']['name']; ?></td>
			<td><?php echo $perpetuity['Perpetuity']['date']; ?></td>
			<td><?php echo $perpetuity['Perpetuity']['measurement']; ?></td>
			<td><?php echo $perpetuity['Condition']['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'perpetuities', 'action' => 'view', $perpetuity['Perpetuity']['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'perpetuities', 'action' => 'edit', $perpetuity['Perpetuity']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'perpetuities', 'action' => 'delete', $perpetuity['Perpetuity']['id']), array(), __('Esta seguro de eliminar la perpetuidad.'.$perpetuity['Perpetuity']['folio'].'?', $perpetuity['Perpetuity']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

