<!DOCTYPE html>
<html lang="en">
  <head>
  <title>
    <?php echo $title_for_layout; ?>
  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

  <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('admin');
    echo $this->fetch('css');
    
    echo $this->Html->script('jquery-1.11.1.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('admin');
    echo $this->fetch('script');
  ?>
  <script type="text/javascript">
    var WEBROOT = '<?php echo $this->request->webroot; ?>';
  </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      body{ padding: 70px 0px; }
    </style>


  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link(__('Govt Stats'), '/', array('class' => 'navbar-brand')) ?>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">


            <li class="active"><?php echo $this->Html->link(__('Home'), array('controller' => 'users', 'action' => 'index', 'admin' => true)) ?></li>
            <li class="dropdown">
              <?php echo $this->Html->link(__('Users') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link(__('Manage Users'), array('controller' => 'users', 'action' => 'index', 'admin' => true)) ?></li>
                <li><?php echo $this->Html->link(__('Add New User'), array('controller' => 'users', 'action' => 'add', 'admin' => true)) ?></li>
              </ul>
            </li>         
            <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout', 'admin' => false)); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?php echo $this->Element('navigation'); ?>
        </div>
        <div class="col-md-9">
          <?php echo $this->Session->flash(); ?>

          <?php echo $this->fetch('content'); ?>
        </div>
      </div>
    </div>
  </body>
</html>
