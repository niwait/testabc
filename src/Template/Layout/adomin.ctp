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

    <header class="main-header">

      <a class="logo">
        <span class="logo-mini">fellow_CMS</span>
        <span class="logo-lg"><b>fellow_CMS</b></span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="../#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
       
              <a href="../#" class="dropdown-toggle" data-toggle="dropdown">
         
                <span class="hidden-xs">会社名が入ります</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">

                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="../#" class="btn btn-default btn-flat">ログアウト</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">

      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
           
            <!--<a href="../#"><i class="fa fa-circle text-success"></i> Online</a>-->
          </div>
        </div>


        <ul class="sidebar-menu" data-widget="tree">
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'index']); ?>"><i class="fa fa-user"></i><span>ユーザ管理</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'adomin']); ?>"><i class="fa fa-unlock"></i><span>権限</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'pr']); ?>"><i class="fa fa-bullhorn"></i><span>PR</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'banner']); ?>"><i class="fa fa-flag"></i><span>バナー</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'ranking']); ?>"><i class="fa fa-trophy"></i><span>注目ランキング</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'product']); ?>"><i class="fas fa-cogs"></i><span>製品・サービス</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'work']); ?>"><i class="fa fa-briefcase"></i><span>お仕事</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'seminar']); ?>"><i class="fa fa-chalkboard-teacher"></i><span>セミナー・レッスン</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'delete']); ?>"><i class="fa fa-comments"></i><span>質問・解答の削除</span></a></li>
          <li><a href="<?php echo $this->Url->build(['controller' => 'Adomins', 'action' => 'logout']); ?>"><i class="fa fa-comments"></i><span>ログアウト</span></a></li>
        </ul>
      </section>
    </aside>
    <?= $this->fetch('content') ?>
</body>
<footer class="main-footer">
      
      <div class="pull-right hidden-xs">

      </div>
 
      <strong>&copy;<a href="../#">Kick-it</a>.</strong>
      
   <?= $this->Html->Script('bootstrap.min.js') ?>
   <?= $this->Html->Script('adminlte.min.js') ?>
   <?= $this->Html->Script('jquery.dataTables.min.js') ?>
   <?= $this->Html->Script('dataTables.bootstrap.min.js') ?>
   <?= $this->Html->Script('datatable.js') ?>
   <?= $this->Html->Script('jquery.slimscroll.min.js') ?>
   <?= $this->Html->Script('fastclick.js"') ?>
   <?= $this->Html->Script('dataTables.select2.full.min.js') ?>
   <?= $this->Html->Script('inputmask.js') ?>
   <?= $this->Html->Script('inputmask.date.extensions.js') ?>
   <?= $this->Html->Script('inputmask.extensions.js') ?>
   <?= $this->Html->Script('date.js') ?>
   <?= $this->Html->Script('moment.min.js') ?>
   <?= $this->Html->Script('daterangepicker.js') ?>
   <?= $this->Html->Script('bootstrap-datepicker.min.js') ?>
   <?= $this->Html->Script('bootstrap-datepicker.ja.js') ?>
   <?= $this->Html->Script('bootstrap-colorpicker.min.js') ?>
   <?= $this->Html->Script('bootstrap-timepicker.min.js') ?>
   <?= $this->Html->Script('icheck.min.js') ?>
  <!-- DataTableJapanese -->
  <!--<script>
    jQuery(function($){
      // デフォルトの設定を変更
      $.extend( $.fn.dataTable.defaults, {
        'paging'      : true,
        'lengthChange': true,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        "language": {
          "emptyTable" : "データが登録されていません。",
          "info" : "_TOTAL_ 件中 _START_ 件から _END_ 件までを表示",
          "infoEmpty" : "",
          "infoFiltered" : "(_MAX_ 件からの絞り込み表示)",
          "infoPostFix" : "",
          "thousands" : ",",
          "lengthMenu" : "表示件数: _MENU_",
          "loadingRecords" : "ロード中",
          "processing" : "処理中...",
          "search" : "検索",
          "zeroRecords" : "該当するデータが見つかりませんでした。",
          "paginate" : {
            "first" : "先頭",
            "previous" : "前へ",
            "next" : "次へ",
            "last" : "末尾"
          }
        },
        // 件数切替の値を10～50の10刻みにする
        lengthMenu: [ 10, 25, 50, 75, 100 ],
        // 件数のデフォルトの値を50にする
        displayLength: 50
      });

      $("#example1").DataTable({
        "columnDefs": [
          {
            "orderable" : false,
            "targets"  : [0,1,2,3,4,5,6,7,8]
          },
          {
            "type"    : 'currency',
            "targets" : []
          },
          {
            "targets" : [],
            "render"  : $.fn.dataTable.render.number( ',' , '.' , 0 , '' , '円')
          },
          {
            "targets" : [],
            "render"  : $.fn.dataTable.render.number( ',' , '.' , 0 , '' , 'pt')
          }
        ]
      });


    });
  </script>-->

<script type="text/javascript" src="jquery.dragscroll.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('#scroll').dragScroll(); // ドラッグスクロール設定
});
</script>
<script type="text/javascript">
//連動
var $children = $('.children');
var original = $children.html();
$('.parent').change(function() {
  var val1 = $(this).val();
  $children.html(original).find('option').each(function() {
    var val2 = $(this).data('val');
    if (val1 != val2) {
      $(this).not('optgroup,.cate-select11').remove();
    }
  });
  if ($(this).val() === '') {
    $children.attr('disabled', 'disabled');
  } else {
    $children.removeAttr('disabled');
  }
});

</script>

    </footer>


    <div class="control-sidebar-bg"></div>
  </div>
  
