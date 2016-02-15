<div class="page-header">
		<h2>Lista Estatus</h2>
</div>

<div class="table-responsive col-md-9">
	<table class=" table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Estatus'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($conditions as $condition): ?>
	<tr>
		<td><?php echo h($condition['Condition']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $condition['Condition']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $condition['Condition']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $condition['Condition']['id']), array(), __('Esta seguro de eliminar '.$condition['Condition']['name'].'?', $condition['Condition']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, Mostrando {:current} registros de {:count} totales, comenzando en {:start}, finalizando en {:end}')
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
<div class="col-md-1"></div>

<div class="dropdown pull-right" id="acciones col-md-3">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Html->link(__('Nuevo Estatus'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>



