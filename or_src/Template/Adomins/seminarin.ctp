<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS｜セミナー・レッスン</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>セミナー・レッスン</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>セミナー・レッスン</li>
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
                    $seminarTable,
                    [

                      'url' => '#'
                    ]
                  );
                  ?>
      <div class="hasebe-box">
          <div class="form-group2">
            <label>登録日</label>
            <?php
                  echo $this->Form->text('seminar.today', [
                    'input'=>'text',
                    'type'=>'date',
                    'class'=>'form-control form-wide',
                    'label' => false,
                    'value' =>'',
                          ]);
                         ?>
          </div>

          <div class="form-group2">
            <label>タイトル</label>
            <?php
               echo $this->Form->control('seminar.title', [
               'input'=>'text',
               'class'=>'form-control form-wide',
               'label' => false,
               'placeholder'=>"",
               'value'=>""

                          ]);
                         ?>
          </div>


        <div class="form-group2">
          <label>会社名</label>
          <?php

          echo $this->Form->control('seminar.company', [
            'input'=>'text',
            'id'=>'UserId',
            'class'=>'form-control form-wide',
            'label' => false,
            'placeholder'=>"",
            'value'=>""
          ]);
          ?>
        </div>

        <div class="form-group2">
          <label>テキスト</label>
          <?php
            echo $this->Form->control('seminar.text', [
             'input'=>'text',
             'id'=>'UserId',
              'class'=>'form-control form-wide',
              'label' => false,
              'placeholder'=>"",
              'value'=>""
              ]);
              ?>
        </div>

        <div class="form-group2">
          <label>都道府県</label>
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

        <div class="form-group2">
          <label>場所</label>
          <?php
            echo $this->Form->control('seminar.eria', [
              'input'=>'text',
              'id'=>'UserId',
              'class'=>'form-control form-wide',
              'label' => false,
              'placeholder'=>"",
              'value'=>""
            ]);
            ?>
        </div>

        <div class="form-group2">
          <label>日時</label>
          <?php
          echo $this->Form->control('seminar.date', [
            'input'=>'text',
            'id'=>'UserId',
            'class'=>'form-control form-wide',
            'label' => false,
            'placeholder'=>"2020/08/25 18時～",
            'value'=>""
            ]);
          ?>
        </div>

        <div class="form-group2">
          <label>内容</label>
          <?php
          echo $this->Form->control('seminar.contents', [
            'input'=>'text',
            'id'=>'UserId',
            'class'=>'form-control form-wide',
            'label' => false,
            'placeholder'=>"",
            'value'=>""

          ]);
          ?>
        </div>

        <div class="form-group2">
          <label>費用</label>
          <?php
          echo $this->Form->control('seminar.cost', [
            'input'=>'text',
            'id'=>'UserId',
            'class'=>'form-control form-wide',
            'label' => false,
            'placeholder'=>"",
            'value'=>""
          ]);
        ?>
        </div>

        <div class="form-group2">
          <label>URL</label>
          <?php
          echo $this->Form->control('seminar.url', [
            'input'=>'text',
            'id'=>'UserId',
            'class'=>'form-control form-wide',
            'label' => false,
            'placeholder'=>"",
            'value'=>""
          ]);
          ?>
        </div>

        <div class="form-group2">
        <label>大項目</label>
            <select class="parent form-control form-wide" id="" name="seminar[major]" disabled　required>
              <option value="" class="cate-select11" disabled selected>大カテゴリー</option>
              <option value="起業・副業">起業・副業</option>
              <option value="自己啓発">自己啓発</option>
              <option value="お金">お金</option>
            </select>
        </div>

        <div class="form-group2">
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
      <!-- /.box-body -->
      <div class="box-footer">
      <button type="submit" formmethod="post"name="seminar[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>登録する</button>
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
