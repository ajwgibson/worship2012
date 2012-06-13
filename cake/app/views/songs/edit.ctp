<div class="songs form">
<?php echo $this->Form->create('Song');?>
	<fieldset>
		<legend><?php __('Edit Song'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
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
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Song.id')), null, sprintf(__('Are you sure you want to delete %s?', true), $this->Form->value('Song.title'))); ?></li>
	</ul>
</div>