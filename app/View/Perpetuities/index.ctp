<div class="col-md-9">
		<h2><?php echo __('Perpetuidades'); ?></h2>
</div>
<div class="col-md-3">
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(__('Lista Titulares'), array('controller' => 'titulars', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Titular'), array('controller' => 'titulars', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Panteones'), array('controller' => 'cementeries', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('controller' => 'cementeries', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Estatus'), array('controller' => 'conditions', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Estatus'), array('controller' => 'conditions', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Defunciones'), array('controller' => 'deceaseds', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nueva Defunción'), array('controller' => 'deceaseds', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Ingresos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Ingreso'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Anual'), array('controller' => 'yearlies', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Pago Mantenimiento'), array('controller' => 'yearlies', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>
<div class="perpetuities index col-md-12 table-responsive">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('folio'); ?></th>
			<th><?php echo $this->Paginator->sort('titular_id'); ?></th>
			<th><?php echo $this->Paginator->sort('transfer'); ?></th>
			<th><?php echo $this->Paginator->sort('cementery_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('condition_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($perpetuities as $perpetuity): ?>
	<tr>
		<td><?php echo h($perpetuity['Perpetuity']['folio']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($perpetuity['Titular']['fullname'], array('controller' => 'titulars', 'action' => 'view', $perpetuity['Titular']['id'])); ?>
		</td>
		<td><?php echo h($perpetuity['Perpetuity']['transfer']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($perpetuity['Cementery']['name'], array('controller' => 'cementeries', 'action' => 'view', $perpetuity['Cementery']['id'])); ?>
		</td>
		<td><?php echo h($perpetuity['Perpetuity']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($perpetuity['Condition']['name'], array('controller' => 'conditions', 'action' => 'view', $perpetuity['Condition']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $perpetuity['Perpetuity']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $perpetuity['Perpetuity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $perpetuity['Perpetuity']['id']), array(), __('Esta seguro de eliminar la perpetuidad con folio '.$perpetuity['Perpetuity']['folio'].'?', $perpetuity['Perpetuity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, Mostrando {:current} registros de {:count} totales, comenzando en {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>



