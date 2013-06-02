<div > 
	<?php echo $this->Session->flash(); ?>
</div>
<br />
<div class="login_form">
	<ul class="nav nav-tabs">
	  <li class="active">
	  	<?php echo $this->Html->link('Topics', array('controller' => 'topics', 'action' => 'index')); ?>
	  </li>
	  <li>
	  	<?php echo $this->Html->link('Questions', array('controller' => 'questions', 'action' => 'index')); ?>
	  </li>
	</ul>
	<div>
		<?php
			echo $this->Form->create('Topic', array('action' => 'admin_add'));
			echo $this->Form->end(array('label' => 'Add New', 'class' => 'btn btn-primary'));
		?>
	</div>
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Actions</th>
					<th>ID</th>
					<th>Topic Name</th>
					<th>Creation Date</th>
					<th>Modification Date</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($topics as $topic): ?>
				<tr>
					<td>
						<?php echo $this->Html->link('Edit', 'edit/'.$topic['Topic']['id']); ?>&nbsp;|
						<?php echo $this->Html->link('Delete',array('controller' => 'topics', 'action' => 'delete',$topic['Topic']['id']),array(),"Are you sure you want to delete Topic #".$topic['Topic']['id']."?"); ?>
					</td>
					<td><?= $topic['Topic']['id']; ?></td>
					<td><?= $topic['Topic']['name']; ?></td>
					<td><?= $topic['Topic']['created']; ?></td>
					<td><?= $topic['Topic']['modified']; ?></td>
				</tr>
			    <?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="pagination">
			<?php echo $this->Paginator->prev('<< '.__('Prev', true), array(), null, array('class'=>'disabled'));?>
		 	<?php echo '|' .$this->Paginator->numbers();?>
			<?php echo $this->Paginator->next(__('Next', true).' >>', array(), null, array('class'=>'disabled'));?>
		</div>
</div>
