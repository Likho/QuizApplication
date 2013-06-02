<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
         echo $this->Html->css('bootstrap');
         echo $this->Html->css('bootstrap-responsive');
         echo $this->Html->css('chosen');
         echo $this->Html->css('select2');
         echo $this->Html->css('style');
         echo $scripts_for_layout;
    ?>
</head>
<body scroll="no">
	<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse">
                    <a class="brand" href="#">&nbsp;</a>
                    <a class="brand" href="#">Quiz App</a>
                    <ul class="nav">
                        <li class="active"><?php echo $this->Html->link('Home', array('controller' => 'topics', 'action' => 'index')); ?></li>
                    </ul>
                    <ul class="nav pull-right">
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i>Profile</a></li>
                                <li class="divider"></li>
                                <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br /><br />
    	<?php echo $content_for_layout; ?>
    </div>
    <?php 
        echo $this->Html->script('jquery-1.9.1');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('common');
        echo $this->Html->script('chosen.jquery.min');
        echo $this->Html->script('jquery.validate.min');
        echo $this->Html->script('bootstrap-alert');
        echo $this->Html->script('select2');
   ?>
</body>
</html>
