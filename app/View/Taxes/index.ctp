<div class="taxes index col-md-10">
<div class="page-header">
		<h1>Impuestos</h1>
</div>
<div class="table-responsive">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('SMG'); ?></th>
			<th><?php echo $this->Paginator->sort('Importe'); ?></th>
			<th><?php echo $this->Paginator->sort('Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($taxes as $tax): ?>
	<tr>
		<td><?php echo h($tax['Tax']['id']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['name']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['smg']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['smg']*$taxes[0]['Tax']['amount']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['created']); ?>&nbsp;</td>
		<td><?php echo h($tax['Tax']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php if($tax['Tax']['id']!=1): ?>
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tax['Tax']['id'])); ?>
		<?php endif; ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tax['Tax']['id'])); ?>
			<?php if($tax['Tax']['id']!=1): ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tax['Tax']['id']), array(), __('Seguro desea eliminar el impuesto '.$tax['Tax']['name'].'?', $tax['Tax']['id'])); ?>
		<?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>	
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, Mostrando {:current} registros de {:count} totales, comenzando en el registro {:start}, terminando en el registro {:end}')
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
<div class="actions col-md-1">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
	<li><?php echo $this->Html->link(__('Nuevo Impuesto'), array('action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(__('Lista Ingresos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Nuevo Ingreso'), array('controller' => 'records', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>
