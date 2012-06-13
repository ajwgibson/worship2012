<div class="halfwidth">

<h2>Login</h2>

<p>
	You have to login before you can use the features of this application. There are two logins available:
	<ol>
		<li>guest</li>
		<li>admin</li>
	</ol>
	If you are an admin user you will already know the password ... if you don't know the password then you 
	are probably not an admin user. 
</p>
<p>
	The password for the guest user is simply <i>guest123</i>.
</p>

<?php
    echo $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('username');
    echo $form->input('password');
    echo $form->end('Login');
?>

</div>
