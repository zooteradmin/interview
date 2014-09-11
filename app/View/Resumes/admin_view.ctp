	<div class="row">
		<div class="col-md-12">
				<h1><?php echo __('Resume'); ?></h1>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($resume['Resume']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Candidate'); ?></th>
		<td>
			<?php echo $this->Html->link($resume['Candidate']['email'], array('controller' => 'candidates', 'action' => 'view', $resume['Candidate']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Filename'); ?></th>
		<td>
			<?php echo h($resume['Resume']['filename']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mime Type'); ?></th>
		<td>
			<?php echo h($resume['Resume']['mime_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($resume['Resume']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($resume['Resume']['modified']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	</table>