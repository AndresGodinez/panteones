<div class="yearlies index">
	<h2><?php echo __('Yearlies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('receipt'); ?></th>
			<th><?php echo $this->Paginator->sort('perpetuity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($yearlies as $yearly): ?>
	<tr>
		<td><?php echo h($yearly['Yearly']['id']); ?>&nbsp;</td>
		<td><?php echo h($yearly['Yearly']['year']); ?>&nbsp;</td>
		<td><?php echo h($yearly['Yearly']['receipt']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($yearly['Perpetuity']['folio'], array('controller' => 'perpetuities', 'action' => 'view', $yearly['Perpetuity']['id'])); ?>
		</td>
		<td><?php echo h($yearly['Yearly']['created']); ?>&nbsp;</td>
		<td><?php echo h($yearly['Yearly']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $yearly['Yearly']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $yearly['Yearly']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $yearly['Yearly']['id']), array(), __('Are you sure you want to delete # %s?', $yearly['Yearly']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Yearly'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Perpetuities'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perpetuity'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
	</ul>
</div>
