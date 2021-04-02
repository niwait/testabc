<!DOCTYPE html>

<html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fellow_CMS｜ユーザ管理</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?= $this->Html->css('adomin/style.css') ?>
  <?= $this->Html->css('adomin/AdminLTE.min.css') ?>
  <?= $this->Html->css('adomin/skin-blue.min.css') ?>
  <?= $this->Html->css('adomin/datatable.css') ?>
  <?= $this->Html->css('adomin/select2.min.css') ?>
  <?= $this->Html->css('adomin/bootstrap-timepicker.min.css') ?>
  <?= $this->Html->css('adomin/bootstrap-colorpicker.min.css') ?>
  <?= $this->Html->css('adomin/all') ?>
  <?= $this->Html->css('adomin/bootstrap-datepicker.min.css') ?>
  <?= $this->Html->css('adomin/daterangepicker.css') ?>
  <?= $this->Html->css('adomin/ionicons.min.css') ?>
  <?= $this->Html->css('adomin/font-awesome.min.css') ?>
  <?= $this->Html->css('adomin/bootstrap.min.css') ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <?= $this->Flash->render() ?>
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="../dashboard/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">fellow_CMS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>fellow_CMS</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="../#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="../#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->

                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">会社名が入ります</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">

                  <p>
                    会社名が入ります
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="../#" class="btn btn-default btn-flat">ログアウト</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button
        <li>
          <a href="../#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>-->
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>会社名が入ります</p>
            <!-- Status -->
            <!--<a href="../#"><i class="fa fa-circle text-success"></i> Online</a>-->
          </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <!-- Optionally, you can add icons to the links -->
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'index']); ?>"><i class="fa fa-user"></i><span>ユーザ管理</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'adomin']); ?>"><i class="fa fa-unlock"></i><span>権限</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'pr']); ?>"><i class="fa fa-bullhorn"></i><span>PR</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'banner']); ?>"><i class="fa fa-flag"></i><span>バナー</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'product']); ?>"><i class="fas fa-cogs"></i><span>製品・サービス</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'work']); ?>"><i class="fa fa-briefcase"></i><span>お仕事</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'seminar']); ?>"><i class="fa fa-chalkboard-teacher"></i><span>セミナー・レッスン</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'ranking']); ?>"><i class="fa fa-trophy"></i><span>注目ランキング</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'delete']); ?>"><i class="fa fa-comments"></i><span>質問・解答の削除</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>
    <?= $this->fetch('content') ?>
</body>

</html>