<div class="songs form">
<?php echo $this->Form->create('Song');?>
	<fieldset>
		<legend><?php __('Add Song'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('composer');
		echo $this->Form->input('style');
		echo $this->Form->input('example');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
</div>