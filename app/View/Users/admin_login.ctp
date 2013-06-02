<?php echo $this->Session->flash(); ?>
<br />
<?php echo $this->Form->create('User', array('class' => 'login_form')); ?>
<fieldset>
	<legend>Login</legend>
        <?php 
            echo $this->Form->input('username', array('class'=>'input-xlarge')); 
            echo $this->Form->input('password', array('type' => 'password','class'=>'input-xlarge'));
        ?>
</fieldset>
<?php echo $this->Form->submit('Login', array('class' => 'btn btn-primary','id' => 'btn_login')); ?>
