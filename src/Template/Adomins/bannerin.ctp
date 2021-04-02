<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>


      <div class="content-wrapper">
        <section class="content-header">
          <h1>バナー</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>バナー</li>
          </ol>
        </section>

        <section class="content userbox">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">登録</h3>
                </div>
                <div class="box-body row">

                <?php
                  echo $this->Form->create(
                    $bannersTable,
                    [
                      'type'=>'file',
                      'url' => '#'
                    ]
                  );
                  ?>

                  <div class="col-md-6">

                    <div class="form-group">
                      <label>イメージ</label>
                      <?php
                      echo $this->Form->file('banners.img', [
                        "accept"=>"image/*",
                        'input'=>'text',
                        'id'=>'UserId',
                        'class'=>'form-control form-wide',
                        'label' => false,
                        'placeholder'=>"イメージ"
                      ]);
                      ?>
                    </div>

                    <div class="form-group">
                      <label>URL</label>
                      <?php
                      echo $this->Form->control('banners.url', [
                        'input'=>'text',
                        'id'=>'UserId',
                        'class'=>'form-control form-wide',
                        'label' => false,
                        'placeholder'=>"URL"

                      ]);
                      ?>
                    </div>

                  </div>

  　　　　　　　　　<div class="col-md-6">

                    <div class="form-group" id="datepicker-default">
                      <label>公開日</label>
                      <?php
                  echo $this->Form->text('banners.startday', [
                    'input'=>'text',
                    'type'=>'date',
                    'class'=>'form-control form-wide',
                    'label' => false,
                    'value' =>'',
                          ]);
                         ?>
                    </div>

                    <div class="form-group" id="datepicker-default">
                      <label>終了日</label>
                      <?php
                     echo $this->Form->text('banners.endday', [
                       'input'=>'text',
                       'type'=>'date',
                       'class'=>'form-control form-wide',
                       'label' => false,
                       'value' =>'',
                             ]);
                            ?>
                    </div>

                    <div class="form-group" id="datepicker-default">
                    <label for="InputEmail1">公開・非公開</label>
                    <?php
                      echo $this->Form->radio('banners.showhide', [
                      '公開' => '公開',
                      '非公開' => '非公開',
                      ]);
                    ?>
                   </div>
                </div>
              </div>
              　
                <div class="box-footer">
                <button type="submit" formmethod="post" name="banners[action]" value="send" class="btn btn-info pull-right">
                  <i class="fas fa-search"></i>登録</button>
                </div>
                </div>

                <?php echo $this->Form->end(); ?>

              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="box">
              </div>
            </div>
          </div>
        </section>
      </div>

      

      <footer class="main-footer">
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
    
        <!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../dist/js/adminlte.min.js"></script>
        <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../dist/js/datatable.js"></script>
        <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../bower_components/fastclick/lib/fastclick.js"></script>
        <script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="../plugins/input-mask/jquery.inputmask.js"></script>
        <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <script src="../dist/js/date.js"></script>
        <script src="../bower_components/moment/min/moment.min.js"></script>
        <script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="../bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.ja.js"></script>
        <script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../plugins/iCheck/icheck.min.js"></script>
        <script src="../bower_components/fastclick/lib/fastclick.js"></script>

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
<div class="pull-right hidden-xs">

</div>

<strong>&copy;<a href="../#">Kick-it</a>.</strong>

</footer>


<div class="control-sidebar-bg"></div>
</div>
