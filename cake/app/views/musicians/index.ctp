<div class="musicians index">
	<h2><?php __('Musicians');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('instrument');?></th>
			<th><?php echo $this->Paginator->sort('church');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($musicians as $musician):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $musician['Musician']['name']; ?>&nbsp;</td>
		<td><?php echo $musician['Musician']['instrument']; ?>&nbsp;</td>
		<td><?php echo $musician['Musician']['church']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($musician['Musician']['email'], sprintf('mailto:%s', $musician['Musician']['email'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $musician['Musician']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $musician['Musician']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $musician['Musician']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $musician['Musician']['name'])); ?>
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
		<li><?php echo $this->Html->link(__('New Musician', true), array('action' => 'add')); ?></li>
	</ul>
</div>