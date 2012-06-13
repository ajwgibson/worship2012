<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('starts', array('type' => 'text', 'class' => 'dateTimePicker'));
		echo $this->Form->input('finishes', array('type' => 'text', 'class' => 'dateTimePicker'));
		echo $this->Form->input('venue');
		echo $this->Form->input('notes');
		echo $this->Form->input('Musician', array('size' => '10'));
		echo $this->Form->input('Song', array('size' => '10'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
	</ul>
</div>