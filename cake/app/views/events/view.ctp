<div class="events view">

<h2><?php  __('Event');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $event['Event']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Starts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $event['Event']['starts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Finishes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $event['Event']['finishes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Venue'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $event['Event']['venue']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $event['Event']['notes']; ?>
			&nbsp;
		</dd>
	</dl>
	
	<div class="related">
		<h3><?php __('Practices');?></h3>
		<?php if (!empty($event['Practice'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Category'); ?></th>
			<th><?php __('Starts'); ?></th>
			<th><?php __('Finishes'); ?></th>
			<th><?php __('Venue'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($event['Practice'] as $practice):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $practice['category'];?></td>
				<td><?php echo $practice['starts'];?></td>
				<td><?php echo $practice['finishes'];?></td>
				<td><?php echo $practice['venue'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'practices', 'action' => 'view', $practice['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	
	<div class="related">
		<h3><?php __('Musicians');?></h3>
		<?php if (!empty($event['Musician'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Name'); ?></th>
			<th><?php __('Instrument'); ?></th>
			<th><?php __('Church'); ?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($event['Musician'] as $musician):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $musician['name'];?></td>
				<td><?php echo $musician['instrument'];?></td>
				<td><?php echo $musician['church'];?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>

	<div class="related">
		<h3><?php __('Songs');?></h3>
		<?php if (!empty($event['Song'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Title'); ?></th>
			<th><?php __('Composer'); ?></th>
			<th><?php __('Style'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($event['Song'] as $song):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $song['title'];?></td>
				<td><?php echo $song['composer'];?></td>
				<td><?php echo $song['style'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'songs', 'action' => 'view', $song['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Edit Event', true), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Event', true), array('action' => 'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id'])); ?> </li>
	</ul>
</div>

