<div class="perpetuities view col-md-10 well">
	<dl class='col-md-5'>
	<h2><?php echo __('Perpetuidad'); ?></h2>
		<dt><?php echo __('Folio'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['folio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titular'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perpetuity['Titular']['fullname'], array('controller' => 'titulars', 'action' => 'view', $perpetuity['Titular']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('traspaso'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['transfer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Panteón'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perpetuity['Cementery']['name'], array('controller' => 'cementeries', 'action' => 'view', $perpetuity['Cementery']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medidas'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['measurement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perpetuity['Condition']['name'], array('controller' => 'conditions', 'action' => 'view', $perpetuity['Condition']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficiario Uno'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['beneficiaryOne']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficiario Dos'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['beneficiaryTwo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Beneficiario Tres'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['beneficiaryThree']); ?>
			&nbsp;
		</dd>
	</dl>
	<dl class="col-md-5">
	<h2>Colindancias</h2>
		<dt><?php echo __('Nombre Norte'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['nameNorth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distancia Norte'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['distanceNorth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Este'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['nameEsast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distancia Este'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['distanceEast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Poniente'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['nameWest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distancia Poniente'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['distanceWest']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Sur'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['nameSouth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distancia Sur'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['distanceSouth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($perpetuity['Perpetuity']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
	<div class="dropdown pull-right col-md-2" id="acciones">
	  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Acciones
	    <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li><?php echo $this->Html->link(__('Editar Perpetuidad'), array('action' => 'edit', $perpetuity['Perpetuity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Perpetuidad'), array('action' => 'delete', $perpetuity['Perpetuity']['id']), array(), __('Are you sure you want to delete # %s?', $perpetuity['Perpetuity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Perpetuidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Perpetuidad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Titulares'), array('controller' => 'titulars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Titular'), array('controller' => 'titulars', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Panteones'), array('controller' => 'cementeries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('controller' => 'cementeries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Estatus'), array('controller' => 'conditions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estatus'), array('controller' => 'conditions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Defunciones'), array('controller' => 'deceaseds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Defunción'), array('controller' => 'deceaseds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Pagos'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Pago'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Pagos Anuales Mantenimiento'), array('controller' => 'yearlies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo pago anual'), array('controller' => 'yearlies', 'action' => 'add')); ?> </li>
	  </ul>
	</div>

<div class="related col-md-12">
	<h3><?php echo __('Defunciones Relacionadas'); ?></h3>
	<?php if (!empty($perpetuity['Deceased'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fullname'); ?></th>
		<th><?php echo __('Entombment'); ?></th>
		<th><?php echo __('Perpetuity Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perpetuity['Deceased'] as $deceased): ?>
		<tr>
			<td><?php echo $deceased['id']; ?></td>
			<td><?php echo $deceased['fullname']; ?></td>
			<td><?php echo $deceased['entombment']; ?></td>
			<td><?php echo $deceased['perpetuity_id']; ?></td>
			<td><?php echo $deceased['created']; ?></td>
			<td><?php echo $deceased['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deceaseds', 'action' => 'view', $deceased['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deceaseds', 'action' => 'edit', $deceased['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deceaseds', 'action' => 'delete', $deceased['id']), array(), __('Are you sure you want to delete # %s?', $deceased['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related col-md-12">
	<h3><?php echo __('Pagos Relacionados'); ?></h3>
	<?php if (!empty($perpetuity['Record'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titular Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Perpetuity Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perpetuity['Record'] as $record): ?>
		<tr>
			<td><?php echo $record['id']; ?></td>
			<td><?php echo $record['titular_id']; ?></td>
			<td><?php echo $record['amount']; ?></td>
			<td><?php echo $record['tax_id']; ?></td>
			<td><?php echo $record['perpetuity_id']; ?></td>
			<td><?php echo $record['comment']; ?></td>
			<td><?php echo $record['date']; ?></td>
			<td><?php echo $record['created']; ?></td>
			<td><?php echo $record['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'records', 'action' => 'view', $record['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'records', 'action' => 'edit', $record['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'records', 'action' => 'delete', $record['id']), array(), __('Are you sure you want to delete # %s?', $record['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related col-md-12 ">
	<h3><?php echo __('Pagos Anuales'); ?></h3>
	<?php if (!empty($perpetuity['Yearly'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Receipt'); ?></th>
		<th><?php echo __('Perpetuity Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perpetuity['Yearly'] as $yearly): ?>
		<tr>
			<td><?php echo $yearly['id']; ?></td>
			<td><?php echo $yearly['year']; ?></td>
			<td><?php echo $yearly['receipt']; ?></td>
			<td><?php echo $yearly['perpetuity_id']; ?></td>
			<td><?php echo $yearly['created']; ?></td>
			<td><?php echo $yearly['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'yearlies', 'action' => 'view', $yearly['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'yearlies', 'action' => 'edit', $yearly['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'yearlies', 'action' => 'delete', $yearly['id']), array(), __('Are you sure you want to delete # %s?', $yearly['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
