<div class="musicians form">
<?php echo $this->Form->create('Musician');?>
	<fieldset>
		<legend><?php __('Add Musician'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('instrument');
		echo $this->Form->input('church');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
</div>