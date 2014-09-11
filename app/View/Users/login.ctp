<div class="container">
  <?php echo $this->Form->create('User', array('class' => 'form-signin', 'role' => 'form')); ?>
    <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email address', 'required' => true, 'autofocus' => true)); ?>
    <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => true)); ?>
    <?php echo $this->Form->submit(__('Sign In'), array('class' => 'btn btn-lg btn-success btn-block')); ?>
    <br />
    <?php echo $this->Html->link(__('New User? Click to Register'), array('controller' => 'users', 'action' => 'register'), array('class' => 'btn btn-lg btn-primary btn-block')); ?>
  <?php echo $this->Form->end(); ?>

</div> <!-- /container -->