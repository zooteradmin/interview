
<ul class="nav nav-sidebar">

<?php
if (AuthComponent::user('level') == UserLevel::ADMINISTRATOR) {
?>

  <li class="dropdown">
    <?php echo $this->Html->link(__('Users') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Users'), array('controller' => 'users', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New User'), array('controller' => 'users', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>



<li class="dropdown">
    <?php echo $this->Html->link(__('States') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage States'), array('controller' => 'states', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New State'), array('controller' => 'states', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('District') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage District'), array('controller' => 'districts', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New District'), array('controller' => 'districts', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Constituency') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Constituencies'), array('controller' => 'constituencies', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Constituency'), array('controller' => 'constituencies', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>


<li class="dropdown">
    <?php echo $this->Html->link(__('Talukas') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Talukas'), array('controller' => 'subdistricts', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Taluka'), array('controller' => 'subdistricts', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>


  <li class="dropdown">
    <?php echo $this->Html->link(__('Villages') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Villages'), array('controller' => 'villages', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Villages'), array('controller' => 'villages', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>



<li class="dropdown">
    <?php echo $this->Html->link(__('Families') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Families'), array('controller' => 'families', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Family'), array('controller' => 'families', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Citizens') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Citizens'), array('controller' => 'citizens', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Citizen'), array('controller' => 'citizens', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Citizen Schemes') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Citizen Schemes'), array('controller' => 'citizenschemes', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Citizen Scheme'), array('controller' => 'citizenschemes', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>


<li class="dropdown">
    <?php echo $this->Html->link(__('Educational Committee') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Committee'), array('controller' => 'educationalemployees', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Committee Member'), array('controller' => 'educationalemployees', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>



<li class="dropdown">
    <?php echo $this->Html->link(__('Religious Committee') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Committee'), array('controller' => 'religiousmonumentcommittees', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Committee Member'), array('controller' => 'religiousmonumentcommittees', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>



<li class="dropdown">
    <?php echo $this->Html->link(__('Volunteers') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Volunteer'), array('controller' => 'volunteers', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New volunteer'), array('controller' => 'volunteers', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>




<li class="dropdown">
    <?php echo $this->Html->link(__('Programmes') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Programmes'), array('controller' => 'programmes', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Programme'), array('controller' => 'programmes', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>
<li class="dropdown">
    <?php echo $this->Html->link(__('Festivals') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Festivals'), array('controller' => 'festivals', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Festival'), array('controller' => 'festivals', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>
<li class="dropdown">
    <?php echo $this->Html->link(__('Polling Booths') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Polling Booths'), array('controller' => 'pollingbooths', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Polling Booth'), array('controller' => 'pollingbooths', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

  <li class="dropdown">
    <?php echo $this->Html->link(__('Panchayat') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Panchayat'), array('controller' => 'panchayats', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New PPanchayat'), array('controller' => 'panchayats', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>
  <li class="dropdown">
    <?php echo $this->Html->link(__('Panchayat Bodies') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Panchayat Bodies'), array('controller' => 'panchayatbodies', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Panchayat Body'), array('controller' => 'panchayatbodies', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Departments') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Departments'), array('controller' => 'departments', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Department'), array('controller' => 'departments', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Development Work') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Development Work'), array('controller' => 'developmentworks', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Development Work'), array('controller' => 'developmentworks', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Government Schemes') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Schemes'), array('controller' => 'schemes', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Scheme'), array('controller' => 'schemes', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>


<li class="dropdown">
    <?php echo $this->Html->link(__('Election Results') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Results'), array('controller' => 'votestats', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Result'), array('controller' => 'votestats', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
</li>


  <li class="dropdown">
    <?php echo $this->Html->link(__('Add Photos'), array('controller' => 'photos', 'action' => 'add', 'admin' => true)) ?>
  </li>


<?php
}elseif (AuthComponent::user('level') == UserLevel::POWER) {
?>  


<li class="dropdown">
    <?php echo $this->Html->link(__('Citizens') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Citizens'), array('controller' => 'citizens', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Citizen'), array('controller' => 'citizens', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>


<li class="dropdown">
    <?php echo $this->Html->link(__('Programmes') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Programmes'), array('controller' => 'programmes', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Programme'), array('controller' => 'programmes', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Festivals') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Festivals'), array('controller' => 'festivals', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Festival'), array('controller' => 'festivals', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<li class="dropdown">
    <?php echo $this->Html->link(__('Developmental Works') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Developmental Works'), array('controller' => 'developmentworks', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Developmental Work'), array('controller' => 'developmentworks', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>
<li class="dropdown">
    <?php echo $this->Html->link(__('Election Results') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Election Ressults'), array('controller' => 'votestats', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Election Result'), array('controller' => 'votestats', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>


  <li class="dropdown">
    <?php echo $this->Html->link(__('Add Photos') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Photos'), array('controller' => 'photos', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New photo'), array('controller' => 'photos', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<?php
}elseif (AuthComponent::user('level') == UserLevel::CLERICAL) {
?>  

<li class="dropdown">
    <?php echo $this->Html->link(__('Citizens') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Citizens'), array('controller' => 'citizens', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Citizen'), array('controller' => 'citizens', 'action' => 'add', 'admin' => true)) ?></li>
            <li><?php echo $this->Html->link(__('List Of Head Of Family'), array('controller' => 'citizens', 'action' => 'list_of_head', 'admin' => true)) ?></li>
            <li><?php echo $this->Html->link(__('Voter Credits Percentage'), array('controller' => 'citizens', 'action' => 'voter_credit_percentage', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('List of voters below 35'), array('controller' => 'citizens', 'action' => 'list_of_age', 'admin' => true)) ?></li>
      <li><?php //echo $this->Html->link(__('Family wise voter list'), array('controller' => 'citizens', 'action' => 'index', 'admin' => true)) ?></li>

    </ul>
  </li>


<li class="dropdown">
    <?php echo $this->Html->link(__('Institution Committee') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Committee'), array('controller' => 'institutecommittees', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Committee Member'), array('controller' => 'institutecommittees', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>



<li class="dropdown">
    <?php echo $this->Html->link(__('Institution Aid') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Committee'), array('controller' => 'instituteaids', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Committee Member'), array('controller' => 'instituteaids', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>



<li class="dropdown">
    <?php echo $this->Html->link(__('Panchayat Bodies') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Panchayat Bodies'), array('controller' => 'panchayatbodies', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Panchayat Member'), array('controller' => 'panchayatbodies', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>




<li class="dropdown">
    <?php echo $this->Html->link(__('Programmes') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Programmes'), array('controller' => 'programmes', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Programme'), array('controller' => 'programmes', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>
<li class="dropdown">
    <?php echo $this->Html->link(__('Religious Monuments') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Monuments'), array('controller' => 'religiousmonuments', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Festival'), array('controller' => 'religiousmonuments', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>


<li class="dropdown">
    <?php echo $this->Html->link(__('Government Schemes') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Schemes'), array('controller' => 'schemes', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Scheme'), array('controller' => 'schemes', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>
  

<li class="dropdown">
    <?php echo $this->Html->link(__('Election Results') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Results'), array('controller' => 'votestats', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New Result'), array('controller' => 'votestats', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
</li>


  <li class="dropdown">
    <?php echo $this->Html->link(__('Add Photos') . ' <b class="caret"></b>', 'javascript:void(0);', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)); ?>
    <ul class="dropdown-menu">
      <li><?php echo $this->Html->link(__('Manage Photos'), array('controller' => 'photos', 'action' => 'index', 'admin' => true)) ?></li>
      <li><?php echo $this->Html->link(__('Add New photo'), array('controller' => 'photos', 'action' => 'add', 'admin' => true)) ?></li>
    </ul>
  </li>

<?php
}
?>


</ul>