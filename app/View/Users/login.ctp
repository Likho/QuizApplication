<?php echo $this->Session->flash(); ?>
<br />
<div class='login_form'>
<?php echo $this->Form->create('User'); ?>
<fieldset>
	<legend>Login</legend>
        <?php 
            echo $this->Form->input('username', array('class'=>'input-xlarge')); 
            echo $this->Form->input('password', array('type' => 'password','class'=>'input-xlarge'));
        ?>
</fieldset>
<?php echo $this->Form->submit('Login', array('class' => 'btn btn-primary','id' => 'btn_login')); ?><span>Or </span><?php echo $this->Html->link('Sign up', array('controller' => 'users', 'action' => 'signup')); ?>
<br /><br /> 

	<?php
	$ses_user=$this->Session->read('User');
	$logout=$this->Session->read('logout');
	if(!$this->Session->check('User') && empty($ses_user))   {
	echo $this->Html->image('facebook.png',array('id'=>'facebook','style'=>'cursor:pointer;float:left;padding-bottom: 50cm;'));
	 }  else{
	 echo '<img src="https://graph.facebook.com/'. $ses_user['id'] .'/picture" width="30" height="30"/><div>'.$ses_user['name'].'</div>';
	    echo '<a href="'.$logout.'">Logout</a>';
	 
	}
    ?>

</div>
