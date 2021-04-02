
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

















    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>















    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>



















<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>権限追加</h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-user"></i>権限追加</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content userbox">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">検　索</h3>

          </div>
          <?php
          echo $this->Form->create(
            $adominTable,
            [
              'url' => '#'
            ]
          );
          ?>
          <div class="box-body row">
            <div class="col-md-6">
              <!-- Name -->
              <div class="form-group">
                <?php echo $this->Form->control('adomins.name', [
                  "label" => "名前",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->

              <!-- Kana -->
              <div class="form-group">
                <?php echo $this->Form->control('adomins.kana', [
                  "label" => "カナ",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->

              <!-- Tel -->
              <div class="form-group">
                <?php echo $this->Form->control('adomins.tel', [
                  "label" => "電話番号",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->

              <!-- Company -->
              <div class="form-group">
                <?php echo $this->Form->control('adomins.company', [
                  "label" => "会社名",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->

              <!-- Mail -->
              <div class="form-group">
                <?php echo $this->Form->control('adomins.mail', [
                  "label" => "メールアドレス",
                  "class" => "form-control form-wide",
                  "type" => "text",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->


              <!-- Password -->
              <div class="form-group">
                <?php echo $this->Form->control('adomins.password', [
                  "label" => "パスワード",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->

              <!-- Adomin -->
              <div class="form-group">
                <?php echo $this->Form->control('adomins.adomin', [
                  "label" => "権限",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" formmethod="post" name="adomins[action]" value="insert" class="btn btn-info pull-right"><i class="fas fa-search"></i>登録する</button>
              <button type="submit" formmethod="get" name="adomins[action]" value="get" class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <?php echo $this->Form->end(); ?>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">ユーザ一覧</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
                <thead>
                  <tr>
                    <th>名前</th>
                    <th>カナ</th>
                    <th>電話番号</th>
                    <th>会社名</th>
                    <th>メールアドレス</th>
                    <th>パスワード</th>
                    <th>権限</th>
                    <th>編集</th>
                    <th>削除</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($resultadomins as $rowCount => $rowData) : ?>
                    <tr>
                      <?php
                      echo $this->Form->create(
                        $adominTable,
                        [
                          'type' => 'post',
                          'url' => '#'
                        ]
                      );
                      ?>
                      <td>
                        <?php echo $this->Form->hidden('adomins.id', [
                          "value" => $rowData["id"]
                        ]); ?>

                        <?php echo $this->Form->control('adomins.name', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["name"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.kana', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["kana"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.tel', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["tel"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.company', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["company"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.mail', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["mail"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.password', [
                          "label" => false,
                          "type" => "text",
                          "class" => "form-control form-wide",
                          "value" => $rowData["password"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.adomin', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["adomin"]
                        ]); ?>
                      </td>
                      <td><button type="submit" name="adomins[action]" value="edit" class="btn btn-block"><i class="fa fa-edit"></i>編集</button></td>
                      <?php echo $this->Form->end(); ?>
                      <td>
                        <?php echo $this->form->postLink(
                          '削除',
                          ['action' => 'adomin'],
                          [
                            'class' => 'btn btn-block',
                            'confirm' => __("本当に削除しますか？？？"),
                            'data' => [
                              "adomins.id" => $rowData["id"],
                              "adomins.action" => "delete"
                            ]
                          ]
                        ) ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.box-body -->







          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right hidden-xs">

  </div>
  <!-- Default to the left -->
  <strong>&copy;<a href="../#">Kick-it</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="../#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="../#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="../javascript:;">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="../javascript:;">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="pull-right-container">
                <span class="label label-danger pull-right">70%</span>
              </span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!----------------------------
      REQUIRED JS SCRIPTS
    ------------------------------>
<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../dist/js/datatable.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date -->
<script src="../dist/js/date.js"></script>
<!-- date-range-picker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.ja.js"></script>
<!-- bootstrap color picker -->
<script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTableJapanese -->
<script>
  jQuery(function($) {
    // デフォルトの設定を変更
    $.extend($.fn.dataTable.defaults, {
      'paging': true,
      'lengthChange': true,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false,
      "language": {
        "emptyTable": "データが登録されていません。",
        "info": "_TOTAL_ 件中 _START_ 件から _END_ 件までを表示",
        "infoEmpty": "",
        "infoFiltered": "(_MAX_ 件からの絞り込み表示)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "表示件数: _MENU_",
        "loadingRecords": "ロード中",
        "processing": "処理中...",
        "search": "検索",
        "zeroRecords": "該当するデータが見つかりませんでした。",
        "paginate": {
          "first": "先頭",
          "previous": "前へ",
          "next": "次へ",
          "last": "末尾"
        }
      },
      // 件数切替の値を10～50の10刻みにする
      lengthMenu: [10, 25, 50, 75, 100],
      // 件数のデフォルトの値を50にする
      displayLength: 50
    });

    $("#example1").DataTable({
      "columnDefs": [{
          "orderable": false,
          "targets": [0, 1, 2, 3, 4, 5, 9, 10, 11, 12, 13, 14]
        },
        {
          "type": 'currency',
          "targets": [6, 7, 8]
        },
        {
          "targets": [6, 7],
          "render": $.fn.dataTable.render.number(',', '.', 0, '', '円')
        },
        {
          "targets": [8],
          "render": $.fn.dataTable.render.number(',', '.', 0, '', 'pt')
        }
      ]
    });


  });
</script>

<script type="text/javascript" src="jquery.dragscroll.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#scroll').dragScroll(); // ドラッグスクロール設定
  });
</script>