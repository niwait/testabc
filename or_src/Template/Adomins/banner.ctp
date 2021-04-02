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



          <div class="box-footer">
            <button class="btn btn-info pull-right"><i class="fas fa-search"></i>
              <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'bannerin']); ?>" class="something">登録</a>
            </button>
          </div>

         
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">バナー一覧</h3>
          </div>


            <div class="scroll">
            <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">

              <thead>
                <tr>
                  <th>イメージ</th>
                  <th>URL</th>
                  <th>公開日</th>
                  <th>終了日</th>
                  <th>公開・非公開</th>
                  <th >編集</th>
                  <th >削除</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($bannersinfo as $row) : ?>

                  <tr>
                    <td>
                      <?php echo $this->Form->hidden('banners.id', [
                        "value" => $row["id"]
                      ]); ?>
                      <?php echo $this->Form->control('banners.img', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["img"]
                      ]); ?>
                    </td>

                    <td>
                      <?php echo $this->Form->control('banners.url', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["url"]
                      ]); ?>
                    </td>

                    <td>
                      <?php echo $this->Form->control('banners.startday', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => date( "Y-m-d" ,  strtotime($row["startday"]))
                      ]); ?>
                    </td>

                    <td>
                      <?php echo $this->Form->control('banners.endday', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => date( "Y-m-d" ,  strtotime($row["endday"]))

                      ]); ?>
                    </td>

                    <td>
                      <?php
                      echo $this->Form->control('banners.showhide', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["showhide"]
                      ]);
                      ?>
                    </td>


                    <td>
                      <a href="<?php echo sprintf("bannerup?banners[id]=%s",$row["id"]);?>"><button type="submit" name="banners[action]" value="edit" class="btn btn-block">
                        <i class="fa fa-edit"></i>編集
                      </a>
                    </td>

                    <td>
                    <?php echo $this->form->postLink(
                            '削除',
                            array('action'=>'banner'),
                            array('class'=>'btn btn-block',
                            'confirm'=>__("本当に削除しますか？？"),
                            'data'=> ["banners.id"=>$row["id"],
                            "banners.action"=>"delete"])
                        )?>
                      </td>

                      </tr>

                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>

    <footer class="main-footer">

      <div class="pull-right hidden-xs">
      </div>
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
    -->
<!--ドラッグスクロール設定-->
      <script type="text/javascript" src="jquery.dragscroll.js"></script>
      <script type="text/javascript">
      $(document).ready(function () {
        $('#scroll').dragScroll();
      });
    </script>

  </footer>

  <div class="control-sidebar-bg"></div>
</div>
