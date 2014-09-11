	<div class="row">
		<div class="col-md-12">
				<h1><?php echo __('Feedback'); ?></h1>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($feedback['Feedback']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Candidate'); ?></th>
		<td>
			<?php echo $this->Html->link($feedback['Candidate']['email'], array('controller' => 'candidates', 'action' => 'view', $feedback['Candidate']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($feedback['User']['email'], array('controller' => 'users', 'action' => 'view', $feedback['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Score'); ?></th>
		<td>
			<?php echo h($feedback['Feedback']['score']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Technical Score'); ?></th>
		<td>
			<?php echo h($feedback['Feedback']['technical_score']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Personality Score'); ?></th>
		<td>
			<?php echo h($feedback['Feedback']['personality_score']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($feedback['Feedback']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($feedback['Feedback']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($feedback['Feedback']['modified']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	</table>