	<div class="row">
		<div class="col-md-12">
			<h1><?php echo __('Admin Add User'); ?></h1>
		</div>
	</div>

			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('level', array('class' => 'form-control', 'placeholder' => 'Level'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

