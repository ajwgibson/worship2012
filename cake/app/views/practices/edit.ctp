<div class="practices form">
<?php echo $this->Form->create('Practice');?>
	<fieldset>
		<legend><?php __('Edit Practice'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('category');
		echo $this->Form->input('starts', array('type' => 'text', 'class' => 'dateTimePicker'));
		echo $this->Form->input('finishes', array('type' => 'text', 'class' => 'dateTimePicker'));
		echo $this->Form->input('venue');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Practice.id')), null, __('Are you sure you want to delete this practice?', true)); ?></li>
	</ul>
</div>