<div class="practices index">
	<h2><?php __('Practices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th><?php echo $this->Paginator->sort('category');?></th>
			<th><?php echo $this->Paginator->sort('starts');?></th>
			<th><?php echo $this->Paginator->sort('venue');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($practices as $practice):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($practice['Event']['name'], array('controller' => 'events', 'action' => 'view', $practice['Event']['id'])); ?>
		</td>
		<td><?php echo $practice['Practice']['category']; ?>&nbsp;</td>
		<td><?php echo $practice['Practice']['starts']; ?>&nbsp;</td>
		<td><?php echo $practice['Practice']['venue']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $practice['Practice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $practice['Practice']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $practice['Practice']['id']), null, __('Are you sure you want to delete this practice?', true)); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Practice', true), array('action' => 'add')); ?></li>
	</ul>
</div>