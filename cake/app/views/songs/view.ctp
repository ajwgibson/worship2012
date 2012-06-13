<div class="songs view">
<h2><?php  __('Song');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Composer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['composer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Style'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['style']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Example'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Song->displayExample($song['Song']['example']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['notes']; ?>
			&nbsp;
		</dd>
	</dl>
	
	<div class="related">
		<h3><?php __('Related Events');?></h3>
		<?php if (!empty($song['Event'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Name'); ?></th>
			<th><?php __('Venue'); ?></th>
			<th><?php __('Date & Time'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($song['Event'] as $event):
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
		<li><?php echo $this->Html->link(__('Edit Song', true), array('action' => 'edit', $song['Song']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Song', true), array('action' => 'delete', $song['Song']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $song['Song']['title'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Song', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
