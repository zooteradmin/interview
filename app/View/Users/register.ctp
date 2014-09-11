<div class="container">
  <?php echo $this->Form->create('User', array('class' => 'form-signin', 'role' => 'form')); ?>
    <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email address', 'required' => true, 'autofocus' => true)); ?>
    <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => true)); ?>
    <?php echo $this->Form->input('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password Confirmation', 'required' => true, 'type' => 'password')); ?>
    <?php echo $this->Form->submit(__('Sign Up'), array('class' => 'btn btn-lg btn-primary btn-block')); ?>
    <br />
    <?php echo $this->Html->link(__('Already Registered? Click to Login'), array('controller' => 'users', 'action' => 'login'), array('class' => 'btn btn-lg btn-success btn-block')); ?>
  <?php echo $this->Form->end(); ?>

</div> <!-- /container -->