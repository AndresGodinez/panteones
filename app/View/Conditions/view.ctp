

<div class="page-header">
	<h2><?php echo __('Estatus'); ?></h2>
</div>
<div class="col-md-12">
	<div class="conditions view col-md-5 well">
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($condition['Condition']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Estatus'); ?></dt>
			<dd>
				<?php echo h($condition['Condition']['name']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
<div class="col-md-3">
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Html->link(__('Editar Estatus'), array('action' => 'edit', $condition['Condition']['id'])); ?> </li>
	<li><?php echo $this->Form->postLink(__('Eliminar Estatus'), array('action' => 'delete', $condition['Condition']['id']), array(), __('Esta seguro de eliminar el Estatus '.$condition['Condition']['name'].' ?', $condition['Condition']['id'])); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Estatus'), array('action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Estatus'), array('action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nueva perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>

</div>	

<!-- tabla relaionada -->
<div class="related col-md-12 table-responsive ">
	<h3><?php echo __('Perpetuidades en '.$condition['Condition']['name']); ?></h3>
	<?php if (!empty($condition['Perpetuity'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Folio'); ?></th>
		<th><?php echo __('Titular'); ?></th>
		<th><?php echo __('Traspaso'); ?></th>
		<th><?php echo __('Cementerio'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Medidas'); ?></th>
		<th><?php echo __('Estatus'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($titular as $perpetuity): ?>
		<tr>
			<td><?php echo $perpetuity['Perpetuity']['folio']; ?></td>
			<td><?php echo $perpetuity['Titular']['fullname']; ?></td>
			<td><?php echo $perpetuity['Perpetuity']['transfer']; ?></td>
			<td><?php echo $perpetuity['Cementery']['name']; ?></td>
			<td><?php echo $perpetuity['Perpetuity']['date']; ?></td>
			<td><?php echo $perpetuity['Perpetuity']['measurement']; ?></td>
			<td><?php echo $condition['Condition']['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'perpetuities', 'action' => 'view', $perpetuity['Perpetuity']['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'perpetuities', 'action' => 'edit', $perpetuity['Perpetuity']['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'perpetuities', 'action' => 'delete', $perpetuity['Perpetuity']['id']), array(), __('Esta seguro de eliminar la Perpetuidad con folio'.$perpetuity['Perpetuity']['folio'].'?', $perpetuity['Perpetuity']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

<!-- /tabla relacionada -->