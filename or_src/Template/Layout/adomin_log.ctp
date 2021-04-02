<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fellow_CMS｜ユーザ管理</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?= $this->Html->css('adomin_log/bootstrap.min.css') ?>
  <?= $this->Html->css('adomin_log/font-awesome.min.css') ?>
  <?= $this->Html->css('adomin_log/skin-blue.min.css') ?>
  <?= $this->Html->css('adomin_log/ionicons.min.css') ?>
  <?= $this->Html->css('adomin_log/AdminLTE.min.css') ?>
  <?= $this->Html->css('adomin_log/login.css') ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <?= $this->Flash->render() ?>
  <div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">fellow_CMS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>fellow_CMS</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->

              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">

                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a class="btn btn-default btn-flat">ログアウト</a>
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

          </div>

        </div>

        <!-- Sidebar Menu -->

        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <?= $this->fetch('content') ?>

</body>

</html>