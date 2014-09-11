  <div class="row">
    <div class="col-md-12">
      <h1><?php echo __('Add Resume'); ?></h1>
    </div>
  </div>

      <?php echo $this->Form->create('Resume', array('type' => 'file'), array('role' => 'form')); ?>

        <div class="form-group">
          <?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Name', 'Label' => 'Interviewer'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('candidate_id', array('class' => 'form-control', 'placeholder' => 'Candidate', 'label' => 'Candidate'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Phone'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('resume', array('class' => 'form-control', 'placeholder' => 'Resume', 'type' => 'file'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>

      <?php echo $this->Form->end() ?>

