<div class="records index col-md-11">
	<h2><?php echo __('Ingresos'); ?></h2>
<div class="table-responsive"> 
	<table class="table table-striped" ">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('titular_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Monto'); ?></th>
			<th><?php echo $this->Paginator->sort('Impuesto'); ?></th>
			<th><?php echo $this->Paginator->sort('Perpetuidad'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($records as $record): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($record['Titular']['fullname'], array('controller' => 'titulars', 'action' => 'view', $record['Titular']['id'])); ?>
		</td>
		<td><?php echo h($record['Record']['amount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($record['Tax']['name'], array('controller' => 'taxes', 'action' => 'view', $record['Tax']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($record['Perpetuity']['folio'], array('controller' => 'perpetuities', 'action' => 'view', $record['Perpetuity']['id'])); ?>
		</td>
		<td><?php echo h($record['Record']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $record['Record']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $record['Record']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $record['Record']['id']), array(), __('Esta seguro de eliminar el registro '.$record['Tax']['name'].'?', $record['Record']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('página {:page} de {:pages}, mostrando {:current} registros de {:count} totales, comenzando en {:start}, terminando en {:end}')
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
<div class="col-md-1">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Html->link(__('Lista Titulares'), array('controller' => 'titulars', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Titular'), array('controller' => 'titulars', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Impuestos'), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Impuesto'), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
  </ul>
</div>
</div>

