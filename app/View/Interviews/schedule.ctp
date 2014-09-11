<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h3>Schedule Interview</h3>
      <hr>
      <?php echo $this->Form->create('Candidate', array('role' => 'form', 'type' => 'file')); ?>
      <p><strong>Candidate Details</strong></p>
      <div class="form-group">
        <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email', 'label' => false)); ?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'Contact Number', 'label' => false)); ?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->input('first_name', array('class' => 'form-control', 'placeholder' => 'First Name', 'label' => false)); ?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->input('last_name', array('class' => 'form-control', 'placeholder' => 'Last Name', 'label' => false)); ?>
      </div>
      <p><strong>Interview Details</strong></p>
      <div class="form-group">
        <?php echo $this->Form->input('user_id', array('class' => 'form-control', 'label' => false, 'empty' => 'Select Interviewer')); ?>
      </div>
      <p>Time</p>
      <div class="form-group">
        <?php echo $this->Form->input('time', array('type' => 'datetime', 'label' => false)); ?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->input('resume', array('type' => 'file', 'label' => false)); ?>
      </div>
      <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success')); ?>
      <?php echo $this->Form->end(); ?>
    </div>
  </div>
</div>