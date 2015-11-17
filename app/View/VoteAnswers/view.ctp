<div class="voteAnswers view">
<h2><?php echo __('Vote Answer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($voteAnswer['VoteAnswer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($voteAnswer['VoteAnswer']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($voteAnswer['User']['name'], array('controller' => 'users', 'action' => 'view', $voteAnswer['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($voteAnswer['Answer']['id'], array('controller' => 'answers', 'action' => 'view', $voteAnswer['Answer']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vote Answer'), array('action' => 'edit', $voteAnswer['VoteAnswer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vote Answer'), array('action' => 'delete', $voteAnswer['VoteAnswer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $voteAnswer['VoteAnswer']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Vote Answers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote Answer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
	</ul>
</div>
