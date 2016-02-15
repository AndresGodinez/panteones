<div class="page-header">
		<h2>Lista Panteones</h2>
</div>

<br>
<div class="table-responsive col-md-9">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cementeries as $cementery): ?>
	<tr>
		<td><?php echo h($cementery['Cementery']['id']); ?>&nbsp;</td>
		<td><?php echo h($cementery['Cementery']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Detalles', array('action' => 'view', $cementery['Cementery']['id'])); ?>
			<?php echo $this->Html->link('Editar', array('action' => 'edit', $cementery['Cementery']['id'])); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $cementery['Cementery']['id']), array(), __('Seguro de eliminar Panteón '. $cementery['Cementery']['name']. ' ?', $cementery['Cementery']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('página {:page} de {:pages}, Mostrando {:current} registros de {:count} totales, Empezando en el registro {:start}, y terminando en el registro {:end}')
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
    <li><?php echo $this->Html->link(__('Nuevo Panteón'), array('action' => 'add')); ?></li>
    <li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>