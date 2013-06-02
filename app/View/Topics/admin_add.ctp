<div > 
	<?php  echo $this->Session->flash(); ?>
</div>
<br />
<?php echo $this->Form->create('Topic', array('action' => 'admin_add')); ?>
<div class="login_form">
	<fieldset>
		<legend>Add New Topic</legend>
	<div>
		<label for="TopicTopicName"><span><strong>Name</strong></span></label>
		<?php 
			echo $this->Form->text('name', array('class'=>'input-xlarge'));
		?>
	</div>
	<div>
		<label for="TopicDescription"><span><strong>Description</strong></span></label>
		<?php 
			echo $this->Form->textarea('Topic.description', array('class'=>'input-xlarge'));
		?>
	</div>
	<div>
		<?php echo $this->Form->end(array('label' => 'Add Topic', 'class' => 'btn btn-primary')); ?><br />
		<?php echo $this->Html->link('Back', array('action' => 'admin_index')); ?>
	</div>
	</fieldset>
</div>
<?php echo $this->Form->end(); ?>