<div class="container">

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php echo $this->Form->create('Feedback', array('role' => 'form')); ?>

      <p>All scores are to be given out of hundred</p>

        <div class="form-group">
          <?php echo $this->Form->input('score', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('technical_score', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('personality_score', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('status', array('class' => 'form-control'));?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>

      <?php echo $this->Form->end() ?>
    </div>
  </div>



</div>