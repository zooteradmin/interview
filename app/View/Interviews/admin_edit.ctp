	<div class="row">
		<div class="col-md-12">
			<h1><?php echo __('Admin Edit Interview'); ?></h1>
		</div>
	</div>

			<?php echo $this->Form->create('Interview', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('candidate_id', array('class' => 'form-control', 'placeholder' => 'Candidate Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('scheduled_time', array('class' => 'form-control', 'placeholder' => 'Scheduled Time'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

