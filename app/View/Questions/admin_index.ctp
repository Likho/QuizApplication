<div > 
	<?php echo $this->Session->flash(); ?>
</div>
<br />
<div class="login_form">
	<ul class="nav nav-tabs">
	  <li>
	  	<?php echo $this->Html->link('Topics', array('controller' => 'topics', 'action' => 'index')); ?>
	  </li>
	  <li class="active">
	  	<?php echo $this->Html->link('Questions', array('controller' => 'questions', 'action' => 'index')); ?>
	  </li>
	</ul>
	<!--<h2>Questions</h2>-->
	<div>
		<?php
			echo $this->Form->create('Question', array('action' => 'admin_add'));
			echo $this->Form->end(array('label' => 'Add New', 'class' => 'btn btn-primary'));
		?>
	</div>
	<div>
		<table class="table table-striped">
			<thead>
				<th>Actions</th><th>ID</th><th>Topic Name</th><th>Question Text</th><th>Question Level</th><th>Creation  </th><th>Modification Date</th>
			</thead>
			<?php foreach($questions as $question): ?>
			<tr>
				<td>
					<?php echo $this->Html->link('Edit', 'edit/'.$question['Question']['id']); ?>&nbsp; 
				   |<?php echo $this->Html->link('Delete',array('controller' => 'questions', 'action' => 'delete',$question['Question']['id']),array(),"Are you sure you want to delete question #".$question['Question']['id']."?"); ?>
				</td>
				<td><?= $question['Question']['id']; ?></td>
				<td><?= $question['Topic']['name']; ?></td>
				<td><?= $question['Question']['text']; ?></td>
				<td><?= $question['Question']['level']; ?></td>
				<td><?= $question['Question']['created']; ?></td>
				<td><?= $question['Question']['modified']; ?></td>
			</tr>
		    <?php endforeach; ?>
		</table>
	</div>
	<div class="pagination">
			<?php echo $this->Paginator->prev('<< '.__('Prev', true), array(), null, array('class'=>'disabled'));?>
		 	<?php echo '|' .$this->Paginator->numbers();?>
			<?php echo $this->Paginator->next(__('Next', true).' >>', array(), null, array('class'=>'disabled'));?>
	</div>
</div>
