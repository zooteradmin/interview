	<div class="row">
		<div class="col-md-12">
				<h1><?php echo __('Interview'); ?></h1>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($interview['Interview']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Candidate'); ?></th>
		<td>
			<?php echo $this->Html->link($interview['Candidate']['email'], array('controller' => 'candidates', 'action' => 'view', $interview['Candidate']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($interview['User']['email'], array('controller' => 'users', 'action' => 'view', $interview['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Scheduled Time'); ?></th>
		<td>
			<?php echo h($interview['Interview']['scheduled_time']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($interview['Interview']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($interview['Interview']['modified']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	</table>