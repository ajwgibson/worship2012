<div class="practices form">
<?php echo $this->Form->create('Practice');?>
	<fieldset>
		<legend><?php __('Add Practice'); ?></legend>
	<?php
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
</div>