	<div class="row">
		<div class="col-md-12">
			<h1><?php echo __('Admin Add Feedback'); ?></h1>
		</div>
	</div>

			<?php echo $this->Form->create('Feedback', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('candidate_id', array('class' => 'form-control', 'placeholder' => 'Candidate Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('score', array('class' => 'form-control', 'placeholder' => 'Score'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('technical_score', array('class' => 'form-control', 'placeholder' => 'Technical Score'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('personality_score', array('class' => 'form-control', 'placeholder' => 'Personality Score'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

