
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
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>製品・サービス編集</h1>
          <ol class="breadcrumb">
            <li><a href="../user/product.html"><i class="fa fa-gears "></i><span>製品・サービス</span></a></li>
            <li>製品・サービス編集</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content userbox">
        <?php
                    echo $this->Form->create(
                      $productTable,
                      [
                        'type' => 'post',
                        'url' => '#'
                      ]
                    );
                    ?>
          <div class="">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">編　集</h3>
                </div>
                <div class="box-body">
               
                <div class="hasebe-box">
             
                    <div class="form-group2">
                    <label>登録日</label>
                    <?php echo $this->Form->text('product.today', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "type"=>"date",
                        "value" => date( "Y-m-d" ,  strtotime($productTable["today"]))
                        //ｓｔ文字列を時間の形式にに変えてDATEで時間を文字列にして
                      ]); ?>
                    </div>

                    <div class="form-group2">
                    <label>製品サービス</label>
                    <?php echo $this->Form->control('product.title', [
                        "label" => false,
                        "class" => "form-control form-wide",
                      
                      ]); ?>
                    </div>


                  <div class="form-group2">
                  <label>会社名</label>
                    <?php echo $this->Form->control('product.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
            
                ]); ?>
                  </div>

                  <div class="form-group2">
                  <label>テキスト</label>
                    <?php echo $this->Form->control('product.text', [
                       "label" => false,
                       "class" => "form-control form-wide",
                
                ]); ?>
                  </div>

                  <div class="form-group2">
                  <label>利用料金</label>
                    <?php echo $this->Form->control('product.mony', [
                       "label" => false,
                  "class" => "form-control form-wide",
               
              
                ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>初期費用</label>
                    <?php echo $this->Form->control('product.initial', [
                        "label" => false,
                        "class" => "form-control form-wide",
                      
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>無料プラン</label>
                    <?php echo $this->Form->control('product.flee', [
                        "label" => false,
                        "class" => "form-control form-wide",
                      
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>無料トライアル</label>
                    <?php echo $this->Form->control('product.trial', [
                        "label" => false,
                        "class" => "form-control form-wide",
                       
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>URL</label>
                    <?php echo $this->Form->control('product.url', [
                       "label" => false,
                        "class" => "form-control form-wide",
                        
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>大項目</label>
                    <?php echo $this->Form->control('product.major', [
                        "label" => false,
                        "class" => "form-control form-wide",
                       
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>中項目</label>
                    <?php echo $this->Form->control('product.middle', [
                        "label" => false,
                        "class" => "form-control form-wide",
                      
                      ]); ?>
                  </div>
                  </div>




                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <td><button type="submit" name="product[action]" value="edit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>更新する</button></td>
                </div>
                <?php echo $this->Form->end(); ?>   
              </dib>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
                <!-- /.box-body -->

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

      </footer>

      
      
     
      <div class="control-sidebar-bg"></div>
    </div>
  