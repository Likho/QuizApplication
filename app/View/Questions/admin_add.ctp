<div > 
	<?php echo $this->Session->flash(); ?>
</div>

<div class="login_form">
<?php echo $this->Form->create('Question', array('action' => 'admin_add')); ?>
	<fieldset>
		<legend>Add a Question</legend>
		<div>
			<?php echo $this->Form->input('topic_id', array('class' => 'input-xlarge')); ?>
		</div>
		<div>
			<?php echo $this->Form->input('Question.level', array('type' => 'select', 'options' => $levels, 'class' => 'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionText"><span><strong>Question Text*</strong></span></label>
			<?php echo $this->Form->textarea('Question.text', array('class'=>'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionAnswer1"><span><strong>Answer 1</strong></span></label>
			<?php echo $this->Form->text('answer1', array('class' => 'input-xlarge')); ?> &nbsp; Correct Answer?
			<? $options=array(1=>'Yes');  
				$attributes=array('legend'=>false, 'label'=>false);  
				echo $this->Form->radio('',$options,$attributes);  
			?>
		</div>
		<div>
			<label for="QuestionAnswer2"><span><strong>Answer 2</strong></span></label>
			<?php echo $this->Form->text('answer2', array('class' => 'input-xlarge')); ?>&nbsp; Correct Answer?
			<? $options=array(1=>'Yes');  
				$attributes=array('legend'=>false, 'label'=>false);  
				echo $this->Form->radio('',$options,$attributes);  
			?>
		</div>
		<div>
			<label for="QuestionAnswer3"><span><strong>Answer 3</strong></span></label>
			<?php echo $this->Form->text('answer3', array('class' => 'input-xlarge')); ?>&nbsp; Correct Answer?
			<? $options=array(1=>'Yes');  
				$attributes=array('legend'=>false, 'label'=>false);  
				echo $this->Form->radio('',$options,$attributes);  
			?>
		</div>
		<div>
			<label for="QuestionAnswer4"><span><strong>Answer 4</strong></span></label>
			<?php echo $this->Form->text('answer4', array('class' => 'input-xlarge')); ?>&nbsp; Correct Answer?
			<? $options=array(1=>'Yes');  
				$attributes=array('legend'=>false, 'label'=>false);  
				echo $this->Form->radio('',$options,$attributes);  
			?>
		</div>
		<div>
			<label for="QuestionAnswer5"><span><strong>Answer 5</strong></span></label>
			<?php echo $this->Form->text('answer5', array('class' => 'input-xlarge')); ?>&nbsp; Correct Answer?
			<? $options=array(1=>'Yes');  
				$attributes=array('legend'=>false, 'label'=>false);  
				echo $this->Form->radio('',$options,$attributes);  
			?>
		</div>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-primary')); ?>
<?php echo $this->Html->link('Back', array('action' => 'admin_index')); ?>
</div>
