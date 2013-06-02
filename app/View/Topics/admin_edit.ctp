<?php echo $this->Session->flash(); ?>
<br />
<?php echo $this->Form->create('Topic'); ?>
<div class="login_form">
	<fieldset>
		<legend>Edit Topic</legend>
		<div>
			<label for="TopicTopicName"><span><strong>Name</strong></span></label>
			<?php 
				echo $this->Form->input('id');
				echo $this->Form->text('name',array('class'=>'input-xlarge'));
				if($this->Form->isFieldError('Topic.name'))
					echo $this->Form->error('Topic.name', null );
			?>
		</div>
		<div>
			<label for="TopicDescription"><span><strong>Description</strong></span></label>
			<?php 
				echo $this->Form->textarea('Topic.description', array('class'=>'input-xlarge'));
			?>
		</div>
		<div>
			 <?php echo $this->Form->end(array('label' => 'Update', 'class' => 'btn btn-primary')); ?><br />
			 <?php echo $this->Html->link('Back', array('action' => 'admin_index')); ?>
		</div>
	</fieldset>
</div>
<?php //e($form->end()); ?>


