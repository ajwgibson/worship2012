<div class="musicians view">
<h2><?php  __('Musician');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $musician['Musician']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($musician['Musician']['email'], sprintf('mailto:%s', $musician['Musician']['email'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Instrument'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $musician['Musician']['instrument']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Church'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $musician['Musician']['church']; ?>
			&nbsp;
		</dd>
	</dl>
	
	<div class="related">
		<h3><?php __('Related Events');?></h3>
		<?php if (!empty($musician['Event'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Name'); ?></th>
			<th><?php __('Venue'); ?></th>
			<th><?php __('Date & Time'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($musician['Event'] as $event):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $event['name'];?></td>
				<td><?php echo $event['venue'];?></td>
				<td><?php echo $event['starts'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Musician', true), array('action' => 'edit', $musician['Musician']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Musician', true), array('action' => 'delete', $musician['Musician']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $musician['Musician']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Musician', true), array('action' => 'add')); ?> </li>
	</ul>
</div>

