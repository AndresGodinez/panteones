<div class="col-md-12">
		<h2 class="page-header"><?php echo __('Defunciones'); ?></h2>
</div>
<div class="col-md-12">
	<div class="col-md-10"></div>
	<div class="col-md-2">
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Acciones
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Html->link(__('Neuva Defunción'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
  </ul>
</div>
</div>
</div>
<div class="deceaseds index table-responsive col-md-12">
<br>

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Nombre Completo'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha Entierro'); ?></th>
			<th><?php echo $this->Paginator->sort('Perpetuidad'); ?></th>
			<th><?php echo $this->Paginator->sort('Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($deceaseds as $deceased): ?>
	<tr>
		<td><?php echo h($deceased['Deceased']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($deceased['Deceased']['entombment']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deceased['Perpetuity']['folio'], array('controller' => 'perpetuities', 'action' => 'view', $deceased['Perpetuity']['id'])); ?>
		</td>
		<td><?php echo h($deceased['Deceased']['created']); ?>&nbsp;</td>
		<td><?php echo h($deceased['Deceased']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $deceased['Deceased']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $deceased['Deceased']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $deceased['Deceased']['id']), array(), __('Esta seguro de eliminar la defunción '.$deceased['Deceased']['fullname'].'?', $deceased['Deceased']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} totales, comenzando en el registro {:start}, terminando {:end}')
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

