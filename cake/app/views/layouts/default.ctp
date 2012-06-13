<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	
	<head>
		<?php echo $this->Html->charset(); ?>
		
		<title>Worship Planning Tool</title>
		
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css(array(
					'worship', 
					'cake.generic', 
					'datepicker',
					'jquery-ui-1.8.17.custom'));
			echo $this->Html->script(array(
					'jquery-1.7.1.min',
					'jquery-ui-1.8.17.custom.min',
					'jquery-ui-timepicker-addon',
					'worship'));
			echo $scripts_for_layout;
		?>
		
	</head>
	
	<body>
	
		<div id="pagewidth" >
		
			<div id="header">
				<h1>Worship Planning Tool</h1>
			</div>
			
			<div id="menu">
				<ul>
					<li><?php echo $html->link('home', array('controller' => 'home', 'action' => 'index')) ?></li>
					<li><?php echo $html->link('songs', array('controller' => 'songs', 'action' => 'index')) ?></li>
					<li><?php echo $html->link('events', array('controller' => 'events', 'action' => 'index')) ?></li>
					<li><?php echo $html->link('practices', array('controller' => 'practices', 'action' => 'index')) ?></li>
					<li><?php echo $html->link('musicians', array('controller' => 'musicians', 'action' => 'index')) ?></li>
				</ul>
				<div id="mast">
					<?php if ($session->check('Auth.User.id')) { ?>
					<i>Logged in as: <?php echo $session->read('Auth.User.username'); ?></i>
					<?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
					<?php } ?>
				</div>
			</div>
			
			<div id="wrapper" class="clearfix">
				<div id="maincol">
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
					<div style="clear:both;margin:0;"></div>
				</div>
			</div>
			
			<div id="footer">
				<p>Developed by Alan Gibson, February 2012</p>
			</div>
			
			<?php echo $this->element('sql_dump'); ?>
			
		</div>
		
	</body>
</html>