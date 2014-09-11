	<div class="row">
		<div class="col-md-12">
			<h1><?php echo __('Admin Edit Resume'); ?></h1>
		</div>
	</div>

			<?php echo $this->Form->create('Resume', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('candidate_id', array('class' => 'form-control', 'placeholder' => 'Candidate Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('filename', array('class' => 'form-control', 'placeholder' => 'Filename'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('mime_type', array('class' => 'form-control', 'placeholder' => 'Mime Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

