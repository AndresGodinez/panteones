<div class="col-md-12">
<div class="col-md-10"></div>
<div class="muestra col-md-2">
<div class="bs-example" data-example-id="static-dropdown"> 
	<div class="dropdown clearfix"> 
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Acciones <span class="caret"></span> </button> 
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1"> 
		<li><?php echo $this->Html->link(__('Nuevo Titular'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista ingresos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Ingreso'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		</ul> 
	</div> 
</div>
</div>	
</div>

<div class="titulars index col-md-12">
	<h2><?php echo __('Lista Titulares'); ?></h2>
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Nombre Completo'); ?></th>
			<th><?php echo $this->Paginator->sort('Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('Celular'); ?></th>
			<th><?php echo $this->Paginator->sort('RFC'); ?></th>
			<th><?php echo $this->Paginator->sort('Teléfono'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($titulars as $titular): ?>
	<tr>
		<td><?php echo h($titular['Titular']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($titular['Titular']['address']); ?>&nbsp;</td>
		<td><?php echo h($titular['Titular']['phone']); ?>&nbsp;</td>
		<td><?php echo h($titular['Titular']['rfc']); ?>&nbsp;</td>
		<td><?php echo h($titular['Titular']['telephone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $titular['Titular']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $titular['Titular']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $titular['Titular']['id']), array(), __('Esta seguro de eliminar '.$titular['Titular']['fullname'].'?', $titular['Titular']['id'])); ?>
			<?php echo $this->Form->postLink('Añadir Perpetuidad',array('controller'=>'perpetuities','action'=>'alta',$titular['Titular']['id'])); ?>
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
