<div class="voteQuestions view">
<h2><?php echo __('Vote Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($voteQuestion['VoteQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($voteQuestion['VoteQuestion']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($voteQuestion['User']['name'], array('controller' => 'users', 'action' => 'view', $voteQuestion['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($voteQuestion['Question']['title'], array('controller' => 'questions', 'action' => 'view', $voteQuestion['Question']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vote Question'), array('action' => 'edit', $voteQuestion['VoteQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vote Question'), array('action' => 'delete', $voteQuestion['VoteQuestion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $voteQuestion['VoteQuestion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Vote Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
