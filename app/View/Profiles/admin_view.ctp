	<div class="row">
		<div class="col-md-12">
				<h1><?php echo __('Profile'); ?></h1>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('First Name'); ?></th>
		<td>
			<?php echo h($profile['Profile']['first_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Name'); ?></th>
		<td>
			<?php echo h($profile['Profile']['last_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($profile['User']['email'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Phone'); ?></th>
		<td>
			<?php echo h($profile['Profile']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo $this->Html->link($profile['City']['name'], array('controller' => 'cities', 'action' => 'view', $profile['City']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($profile['Profile']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($profile['Profile']['modified']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	</table>