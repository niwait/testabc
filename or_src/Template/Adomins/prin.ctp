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



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>PR</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>PR</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content userbox">

        <div class="">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">登　録</h3>
                </div>
                <div class="box-body">  
                <?php
                  echo $this->Form->create(
                    $prsTable,
                    [
                      'type'=>'file',
                      'url' => '#'
                    ]
                  );
                  ?>

                <div class="hasebe-box">

             <div class="col-md-6">
                <div class="form-group2">
                      <label>会社名</label>
                      <?php

                      echo $this->Form->control('prs.company', [
                       
                        'id'=>'UserId',
                        'class'=>'form-control form-wide',
                        'label' => false,
                        'placeholder'=>"会社名"

                      ]);
                      ?>
                    </div>

                    <div class="form-group2">
                    <label for="InputEmail1">開始</label>
                <?php
                  echo $this->Form->text('prs.startday', [
                    'input'=>'text',
                    'type'=>'date',
                    'class'=>'form-control form-wide',
                    'label' => false,
                    'value' =>'',
                          ]);
                         ?>
                    </div>
                    

                    <div class="form-group2">
                    <label for="Telnum">URL</label>
                      <?php

                      echo $this->Form->control('prs.url', [
                
                        'id'=>'UserId',
                        'class'=>'form-control form-wide',
                        'label' => false,
                        'placeholder'=>"URL"

                      ]);
                      ?>
                    </div>

            </div>
            <div class="col-md-6">
            <div class="form-group2">
                      <label>イメージ</label>
                      <?php
                      echo $this->Form->file('prs.img', [
                        "accept"=>"image/*",
                        
                        'id'=>'UserId',
                        'class'=>'form-control form-wide',
                        'label' => false,
                        'placeholder'=>"イメージ"

                      ]);
                      ?>
                    </div>
                  
                  
                  <div class="form-group2">
                  <label for="InputEmail1">終了</label>
                <?php
                  echo $this->Form->text('prs.endday', [
                    'input'=>'text',
                    'type'=>'date',
                    'class'=>'form-control form-wide',
                    'label' => false,
                    'value' =>'',
                          ]);
                         ?>
                    </div>
                  
                  <div class="form-group2">
                  <label for="InputEmail1">公開・非公開</label>
                  <?php
                    echo $this->Form->radio('prs.showhide', [
                      '公開' => '公開',
                      '非公開' => '非公開',
                    ]);
                    ?>
                  </div>
                </div>
            




                </div>
                
                <div class="box-footer">
                <button type="submit" formmethod="post" name="prs[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>登録する</button>
                </div>
              </div>
              <?php echo $this->Form->end(); ?>
               
              </div>
            
            </div>
         
          </div>
                

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
              "targets"  : [0,1,2,3,4,5,9,10,11,12,13,14]
            },
            {
              "type"    : 'currency',
              "targets" : [6,7,8]
            },
            {
              "targets" : [6,7],
              "render"  : $.fn.dataTable.render.number( ',' , '.' , 0 , '' , '円')
            },
            {
              "targets" : [8],
              "render"  : $.fn.dataTable.render.number( ',' , '.' , 0 , '' , 'pt')
            }
          ]
        });


      });
    </script>

<script type="text/javascript" src="jquery.dragscroll.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#scroll').dragScroll(); // ドラッグスクロール設定
  });
</script>

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
   