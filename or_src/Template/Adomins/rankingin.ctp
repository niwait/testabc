
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fellow_CMS｜注目ランキング</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->


















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
    <h1>注目ランキング</h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-user"></i>注目ランキング</li>
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
          <div class="box-body row">
            <?php
            echo $this->Form->create(
              $ranksTable,
              [
                'type' => 'post',
                'url' => '#'
              ]
            );
            ?>
            <div class="col-md-6">
              <!-- Name -->
              <div class="form-group">
                <label for="UserId">１位</label>
                <?php

                echo $this->Form->control('ranks.no1', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"１位"

                ]);
                ?>
              </div>
             

              <div class="form-group">
                <label for="Telnum">２位</label>
                <?php

                echo $this->Form->control('ranks.no2', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"２位"

                ]);
                ?>
              </div>


              <div class="form-group">
                <label for="UserName">３位</label>
                <?php

                echo $this->Form->control('ranks.no3', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"３位"

                ]);
                ?>
              </div>
     
              <!-- Email -->
              <div class="form-group">
                <label for="InputEmail1">４位</label>
                <?php

                echo $this->Form->control('ranks.no4', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"４位"

                ]);
                ?>
              </div>
             
              
              <div class="form-group">
                <label for="UserNameKana">５位</label>
                <?php

                echo $this->Form->control('ranks.no5', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"５位"

                ]);
                ?>
              </div>


            </div>

          <div class="box-footer">
            <button type="submit" name="ranks[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>登録する</button>
            
          </div>
          <?php echo $this->Form->end(); ?>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>

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
                  <th>１</th>
                  <th>２</th>
                  <th>３</th>
                  <th>４</th>
                  <th>５</th>
                  <th>編集</th>
                  <th>削除</th>
                </tr>
              </thead>
              <tbody>
              <?php
            echo $this->Form->create(
              $ranksTable,
              [
                'type' => 'post',
                'url' => '#'
              ]
            );
            ?>
                <?php foreach ($ranksinfo as $row) : ?>
                  <tr>
                     <?php  echo $this->Form->hidden('ranks.id',[
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["id"]
                      ]); ?>
                     
                    <td>
                     <?php echo $this->Form->control('ranks.no1', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["no1"]
                      ]); ?>
                      </td>
                    <td><?php echo $this->Form->control('ranks.no2', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["no2"]
                      ]); ?></td>
                    <td><?php echo $this->Form->control('ranks.no3', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["no3"]
                      ]); ?></td>
                    <td><?php echo $this->Form->control('ranks.no4', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["no4"]
                      ]); ?></td>
                    <td><?php echo $this->Form->control('ranks.no5', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["no5"]
                      ]); ?></td>
                      <td><button type="submit" name="ranks[action]" value="edit" class="btn btn-block"><i class="fa fa-edit"></i>編集</button></td>
                      <td><button type="submit" name="ranks[action]" value="delete" class="btn btn-block"><i class="fa fa-edit"></i>削除</button></td>
                   
                  </tr>
                  <?php endforeach; ?>
                  <?php echo $this->Form->end(); ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     
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

  <div class="pull-right hidden-xs">

  </div>
  <!-- Default to the left -->
  <strong>&copy;<a href="../#">Kick-it</a>.</strong>
</footer>


<div class="control-sidebar-bg"></div>
</div>
