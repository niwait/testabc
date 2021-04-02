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
          <h1>セミナー・レッスン</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>セミナー・レッスン</li>
          </ol>
        </section>

    
        <section class="content userbox">

<div class="">
  <div class="col-xs-12">
    <div class="box box-primary">
    <?php
                  echo $this->Form->create(
                    $seminarTable,
                    [
                     
                      'url' => '#'
                    ]
                  );
                  ?>
      <div class="box-header with-border">
        <h3 class="box-title">検　索</h3>
      </div>
      <div class="box-body">
        <div class="col-md-6">
        
          <div class="form-group">
            <label for="UserNameKana">日時</label>
             <?php
                echo $this->Form->text('seminar.date', [
                  'class'=>'form-control form-wide',
                  'placeholder'=>"2020/08/25 18時～",
                  'value'=>""

                ]);
                ?>
          </div>
          
      

          <div class="form-group">
            <label>会社名</label>
            <?php
          echo $this->Form->control('seminar.company', [
         
            'class'=>'form-control form-wide',
            'label' => false,
           
            'value'=>""

          ]);
        ?>
            </select>
          </div>
          <div class="form-group">
            <label for="Telnum">タイトル</label>
            <?php
               echo $this->Form->control('seminar.title', [
                 
                 'class'=>'form-control form-wide',
                  'label' => false,
                   'value'=>""

                     ]);
             ?>
          </div>
          


        </div>
        
        <div class="col-md-6">

          
    
          <div class="form-group">
            <label for="InputEmail1">都道府県</label>
            <?php                                     
                         echo $this->Form->select('seminar.prefecture',

                         
                         
                         
                                         [
                                          ""=> "都道府県",
                                          "北海道"=>"北海道", 
                                          "青森県"=>"青森県", 
                                          "岩手県"=>"岩手県", 
                                          "宮城県"=>"宮城県",
                                          "秋田県"=>"秋田県",
                                          "山形県"=>"山形県",
                                          "福島県"=>"福島県",
                                          "茨城県"=>"茨城県",
                                          "栃木県"=>"栃木県",
                                          "群馬県"=>"群馬県",
                                          "埼玉県"=>"埼玉県",
                                          "千葉県"=>"千葉県",
                                          "東京都"=>"東京都",
                                          "神奈川"=>"神奈川",
                                          "新潟県"=>"新潟県",
                                          "富山県"=>"富山県",
                                          "石川県"=>"石川県",
                                          "福井県"=>"福井県",
                                          "山梨県"=>"山梨県",
                                          "長野県"=>"長野県",
                                          "岐阜県"=>"岐阜県",
                                          "静岡県"=>"静岡県",
                                          "愛知県"=>"愛知県",
                                          "三重県"=>"三重県",
                                          "滋賀県"=>"滋賀県",
                                          "京都府"=>"京都府",
                                          "大阪府"=>"大阪府",
                                          "兵庫県"=>"兵庫県",
                                          "奈良県"=>"奈良県",
                                          "和歌山県"=>"和歌山県",
                                          "鳥取県"=>"鳥取県",
                                          "島根県"=>"島根県",
                                          "岡山県"=>"岡山県",
                                          "広島県"=>"広島県",
                                          "山口県"=>"山口県",
                                          "徳島県"=>"徳島県",
                                          "香川県"=>"香川県",
                                          "愛媛県"=>"愛媛県",
                                          "高知県"=>"高知県",
                                          "福岡県"=>"福岡県",
                                          "佐賀県"=>"佐賀県",
                                          "長崎県"=>"長崎県",
                                          "熊本県"=>"熊本県",
                                          "大分県"=>"大分県",
                                          "宮崎県"=>"宮崎県",
                                          "鹿児島県"=>"鹿児島県",
                                          "沖縄県"=>"沖縄県"
                                         ],[
                                          'class'=>'form-control form-wide',
                                          'value'=>""
                                         ]
                                         
                        
                                                );?>
          </div>
          <div class="form-group">
              <label>大項目</label>                                     
              <select class="parent form-control form-wide" id="" name="seminar[major]" disabled　required>
                                    <option value="" class="cate-select11" disabled selected>大カテゴリー</option>
                                    <option value="起業・副業">起業・副業</option>
                                    <option value="自己啓発">自己啓発</option>
                                    <option value="お金">お金</option>
                                   
                                </select>
                            
                        </div>
                        <div class="form-group">
                        <label>中項目</label>
                                <select class="children form-control form-wide" id="" name="seminar[middle]" disabled required>
                                <option value="" class="cate-select11" disabled selected>中カテゴリー</option>
                                    <option value="個人事業" data-val="起業・副業">個人事業</option>
                                    <option value="会社設立" data-val="起業・副業">会社設立</option>
                                    <option value="フランチャイズ（FC）" data-val="起業・副業">フランチャイズ（FC）</option>
                                    <option value="会計・税務" data-val="起業・副業">会計・税務</option>
                                    <option value="融資・助成金・補助金" data-val="起業・副業">融資・助成金・補助金</option>
                                    <option value="資格取得" data-val="自己啓発">資格取得</option>
                                    <option value="IT全般" data-val="自己啓発">IT全般</option>
                                    <option value="プログラミング" data-val="自己啓発">プログラミング</option>
                                    <option value="WEBデザイン" data-val="自己啓発">WEBデザイン</option>
                                    <option value="ビジネスマナー" data-val="自己啓発">ビジネスマナー</option>
                                    <option value="語学" data-val="自己啓発">語学</option>
                                    <option value="マネジメント" data-val="自己啓発">マネジメント</option>
                                    <option value="WEBフィルタリング" data-val="自己啓発">WEBフィルタリング</option>
                                    <option value="融資・助成金・補助金" data-val="お金">融資・助成金・補助金</option>
                                    <option value="不動産" data-val="お金">不動産</option>
                                    <option value="保険" data-val="お金">保険</option>
                                    <option value="会計・税務" data-val="お金">会計・税務</option>
                                </select>
                              
                              </div> 

      
          


        </div>
        
        
       
      </div>
  
      <div class="box-footer">
      <button type="submit" formmethod="get" name="seminar[action]" value="get"class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>

      </div>
      <?php echo $this->Form->end(); ?>
    </div>
    
  </div>
 
</div>


<div class="">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">セミナー・レッスン一覧</h3>
      </div>
    

      <div class="scroll">
        <div class="box-footer">
        <button class="btn btn-info pull-right"><i class="fas fa-search"></i>
              <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'seminarin']); ?>" class="something">登録</a>
            </button>
        </div>
        <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
          <thead>
            <tr>

            <th>日時</th>
              <th>会社名</th>
              <th>タイトル</th>
              <th>都道府県</th>
              <th>大項目</th>
              <th>中項目</th>
              <th>編集</th>
              <th>削除</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($resultseminar as $rowCount => $rowData) : ?>
            <tr>
            <?php
                          echo $this->Form->create(
                            $seminarTable,
                            [
                              'type' => 'post',
                              'url' => '#'
                            ]
                          );
                         ?>
     
              <td>
              <?php echo $this->Form->hidden('seminar.id', [
                       "value" => $rowData["id"]
                        ]); ?>
              <?php echo $this->Form->control('seminar.date', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["date"]
                      ]); ?>
              </td>
              <td>
              <?php echo $this->Form->control('seminar.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["company"]
                      ]); ?>
              </td>
              <td>
              <?php echo $this->Form->control('seminar.title', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["title"]
                      ]); ?>
              </td>
              
            
              <td>
              <?php echo $this->Form->control('seminar.prefecture', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["prefecture"]
                      ]); ?>
              </td>
             
              <td>
              <?php echo $this->Form->control('seminar.major', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["major"]
                      ]); ?>
              </td>
              <td>
              <?php echo $this->Form->control('seminar.middle', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["middle"]
                      ]); ?>
              </td>
              <td>
              <a href="<?php echo sprintf("seminarup?seminar[id]=%s",$rowData["id"]);?>"><button type="submit" name="seminar[action]" value="edit" class="btn btn-block"><i class="fa fa-edit"></i>編集</a>
              </td>
              <?php echo $this->Form->end(); ?>
              <td>
                <?php echo $this->form->postLink(
                '削除',
                 array('action'=>'seminar'),
                 array('class'=>'btn btn-block',
                'confirm'=>__("本当に削除しますか？？"),
                'data'=> ["seminar.id"=>$rowData["id"],
                "seminar.action"=>"delete"]) 
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
    "targets"  : [0,1,2,3,4,5,6,7,8,9,10,11,12]
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


