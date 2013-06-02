<div > 
	<?php echo $this->Session->flash(); ?>
</div>
<br />
<div class="login_form">
<?php echo $this->Form->create('Question', array('action' => 'admin_edit')); ?>
	<fieldset>
		<legend>Edit Question </legend>
		<div>
			<?php echo $this->Form->input('id'); ?>
			<?php echo $this->Form->input('topic_id',array('class' => 'input-xlarge')); ?>
		</div>
		<div>
			<?php echo $this->Form->input('Question.level', array('type' => 'select', 'options' => $levels, 'class' => 'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionQuestionText"><span><strong>Question Text</strong></span></label>
			<?php echo $this->Form->textarea('Question.text', array('class'=>'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionAnswer1"><span><strong>Answer 1</strong></span></label>
			<?php echo $this->Form->text('answer1', array('class' => 'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionAnswer2"><span><strong>Answer 2</strong></span></label>
			<?php echo $this->Form->text('answer2', array('class' => 'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionAnswer3"><span><strong>Answer 3</strong></span></label>
			<?php echo $this->Form->text('answer3', array('class' => 'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionAnswer4"><span><strong>Answer 4</strong></span></label>
			<?php echo $this->Form->text('answer4', array('class' => 'input-xlarge')); ?>
		</div>
		<div>
			<label for="QuestionAnswer5"><span><strong>Answer 5</strong></span></label>
			<?php echo $this->Form->text('answer5', array('class' => 'input-xlarge')); ?>
		</div>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-primary')); ?>
<?php echo $this->html->link('Back', array('action' => 'admin_index')); ?>
</div>

