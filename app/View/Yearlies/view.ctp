<div class="yearlies view">
<h2><?php echo __('Yearly'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($yearly['Yearly']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($yearly['Yearly']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Receipt'); ?></dt>
		<dd>
			<?php echo h($yearly['Yearly']['receipt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perpetuity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($yearly['Perpetuity']['folio'], array('controller' => 'perpetuities', 'action' => 'view', $yearly['Perpetuity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($yearly['Yearly']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($yearly['Yearly']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Yearly'), array('action' => 'edit', $yearly['Yearly']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Yearly'), array('action' => 'delete', $yearly['Yearly']['id']), array(), __('Are you sure you want to delete # %s?', $yearly['Yearly']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Yearlies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Yearly'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Perpetuities'), array('controller' => 'perpetuities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perpetuity'), array('controller' => 'perpetuities', 'action' => 'add')); ?> </li>
	</ul>
</div>
