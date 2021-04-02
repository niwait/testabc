<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS｜セミナー・レッスン</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>

  

     
      <div class="content-wrapper">
       
        

        <section class="content-header">
          <h1>セミナー・レッスン編集</h1>
          <ol class="breadcrumb">
            <li><a href="../user/seminar.html"><i class="fas fa-chalkboard-teacher"></i><span>セミナー・レッスン</span></a></li>
            <li>セミナー・レッスン編集</li>
          </ol>
        </section>

    
        <section class="content userbox">
          <?php
        echo $this->Form->create(
                            $seminarTable,
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
                      <?php echo $this->Form->text('seminar.today', [
                        'input'=>'text',
                        'type'=>'date',
                        "label" => false,
                        "class" => "form-control form-wide",
                        'value' => date( "Y-m-d" ,  strtotime($seminarTable["today"]))
                        //ｓｔ文字列を時間の形式にに変えてDATEで時間を文字列にして
                      ]); ?>
                    </div>

                    <div class="form-group2">
                      <label>タイトル</label>
                      <?php echo $this->Form->control('seminar.title', [
                        "label" => false,
                        "class" => "form-control form-wide",
                     
                      ]); ?>
                    </div>


                  <div class="form-group2">
                    <label>会社名</label>
                    <?php echo $this->Form->control('seminar.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
                      
                      ]); ?>
                  </div>

                  <div class="form-group2">
                  <label>テキスト</label>
                  <?php echo $this->Form->control('seminar.text', [
                        "label" => false,
                        "class" => "form-control form-wide",
                      
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>都道府県</label>
                    <?php echo $this->Form->control('seminar.prefecture', [
                        "label" => false,
                        "class" => "form-control form-wide",
                       
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>場所</label>
                    <?php echo $this->Form->control('seminar.eria', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>日時</label>
                    <?php echo $this->Form->control('seminar.date', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>内容</label>
                    <?php echo $this->Form->control('seminar.contents', [
                        "label" => false,
                        "class" => "form-control form-wide",
                       
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>費用</label>
                    <?php echo $this->Form->control('seminar.cost', [
                        "label" => false,
                        "class" => "form-control form-wide",
                       
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>URL</label>
                    <?php echo $this->Form->control('seminar.url', [
                        "label" => false,
                        "class" => "form-control form-wide",
                     
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>大項目</label>
                    <?php echo $this->Form->control('seminar.major', [
                        "label" => false,
                        "class" => "form-control form-wide",
                       
                      ]); ?>
                  </div>

                  <div class="form-group2">
                    <label>中項目</label>
                    <?php echo $this->Form->control('seminar.middle', [
                        "label" => false,
                        "class" => "form-control form-wide",
                      
                      ]); ?>
                  </div>
                  </div>
                </div>
             
                <div class="box-footer">
                <td><button type="submit" name="seminar[action]" value="edit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>更新する</button></td>
                </div>
                <?php echo $this->Form->end(); ?>  
              </dib>
                
              </div>
             
            </div>
        
          </div>
           

        </section>
       
      </div>
   
      <footer class="main-footer">
   
        <div class="pull-right hidden-xs">

        </div>
        
        <strong>&copy;<a href="../#">Kick-it</a>.</strong>
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
    
