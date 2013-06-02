<?php
	 echo $this->Session->flash();
?>
<?php if($this->Form->isFieldError('User.username')) echo $this->Form->error
('User.username', null, array('class' => 'message')); ?>

<div class="login_form">
	<?php echo $this->Form->Create('User', array('action' => 'signup')); ?>
	<fieldset>
		<legend>Sign Up</legend>
		<?php 
			echo $this->Form->input('firstname', array('class' => 'input-xlarge')); 
			echo $this->Form->input('lastname', array('class' => 'input-xlarge'));
			echo $this->Form->input('username', array('class' => 'input-xlarge'));
			echo $this->Form->input('email', array('class' => 'input-xlarge'));
			echo $this->Form->input('User.gender', array('type' => 'select', 'options' => $gender, 'class' => 'input-xlarge'));
			echo $this->Form->input('password', array('class' => 'input-xlarge'));
			echo $this->Form->input('password2', array('type' => 'password','class' => 'input-xlarge'));
		?>

	</fieldset>
	<?php echo $this->Form->submit('Sign up', array('class' => 'btn btn-primary','id' => 'btn_signup')); ?><br />
	<?php echo $this->Html->link('Back', array('action' => 'login')); ?>
</div>
