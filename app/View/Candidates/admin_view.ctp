	<div class="row">
		<div class="col-md-12">
				<h1><?php echo __('Candidate'); ?></h1>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($candidate['Candidate']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($candidate['Candidate']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($candidate['Candidate']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($candidate['Candidate']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($candidate['Candidate']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($candidate['Candidate']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($candidate['Candidate']['modified']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	</table>