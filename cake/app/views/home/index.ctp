
<div>
<h2>Welcome!</h2>
<p>This Worship Planning Tool can be used to:</p>
<ul>
	<li>Share our current song list; and</li>
	<li>Manage upcoming events.</li>
</ul>
<p>It's not finished yet, so let me know if you find any problems. You can email me at <a href="mailto:ajw.gibson@gmail.com">ajw.gibson@gmail.com</a></p>

<h3>Next Event</h3>
<?php if ($event['Event']) :?>
<dl>
	<dt class="altrow">Name</dt>
	<dd class="altrow"><?php echo $event['Event']['name'];?>&nbsp;</dd>
	<dt>Venue</dt>
	<dd><?php echo $event['Event']['venue'];?>&nbsp;</dd>
	<dt class="altrow">Starts</dt>
	<dd class="altrow"><?php echo $event['Event']['starts'];?>&nbsp;</dd>
</dl>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('View Details', true), array('controller' => 'events', 'action' => 'view', $event['Event']['id'])); ?> </li>
	</ul>
</div>
<div style="clear:both;"></div>
<?php endif; ?>

<h3>Next Music Practice</h3>
<?php if ($practice['Practice']) :?>
<dl>
	<dt class="altrow">Starts</dt>
	<dd class="altrow"><?php echo $practice['Practice']['starts'];?>&nbsp;</dd>
	<dt>Venue</dt>
	<dd><?php echo $practice['Practice']['venue'];?>&nbsp;</dd>
	<dt class="altrow">Category</dt>
	<dd class="altrow"><?php echo $practice['Practice']['category'];?>&nbsp;</dd>
	<dt class="altrow">Event</dt>
	<dd class="altrow"><?php echo $practice['Event']['name'];?>&nbsp;</dd>
</dl>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('View Details', true), array('controller' => 'practices', 'action' => 'view', $practice['Practice']['id'])); ?> </li>
	</ul>
</div>
<div style="clear:both;"></div>
<?php endif; ?>
</div>
