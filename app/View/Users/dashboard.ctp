<div class="container">

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php echo $this->Html->image('interview-main.jpg', array('class' => 'img-responsive main-image')); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2 col-md-offset-4">
      <?php echo $this->Html->link(__('Schedule Interviews'), array('controller' => 'interviews', 'action' => 'schedule'), array('class' => 'btn btn-primary')); ?>
    </div>
    <div class="col-md-2 col-md-offset-1">
      <?php echo $this->Html->link(__('Give Feedback'), array('controller' => 'interviews', 'action' => 'index'), array('class' => 'btn btn-primary')); ?>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-md-2 col-md-offset-4">
      <?php echo $this->Html->link(__('View Interviews'), array('controller' => 'interviews', 'action' => 'index'), array('class' => 'btn btn-primary')); ?>
    </div>
    <div class="col-md-2 col-md-offset-1">
      <?php echo $this->Html->link(__('View Feedbacks'), array('controller' => 'feedback', 'action' => 'index'), array('class' => 'btn btn-primary')); ?>
    </div>
  </div>

</div>