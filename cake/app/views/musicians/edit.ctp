<div class="musicians form">
<?php echo $this->Form->create('Musician');?>
	<fieldset>
		<legend><?php __('Edit Musician'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
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
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Musician.id')), null, sprintf(__('Are you sure you want to delete %s?', true), $this->Form->value('Musician.name'))); ?></li>
	</ul>
</div>