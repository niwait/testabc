
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>

 
    

  <div class="content-wrapper">
       
        <section class="content-header">
          <h1>ユーザ管理</h1>
          <ol class="breadcrumb">
            <li><a href="../../user/"><i class="fa fa-user"></i>ユーザ管理</a></li>
            <li>ユーザー情報詳細 / 登録</li>
          </ol>
        </section>

       
        <section class="content userdetailbox user-info">
        <?php
          echo $this->Form->create(
            $userTable,
            [
              'url' => '#',
              'method'=>'post'
            ]
          );
          ?>
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">基本情報</h3>
                </div>
                <div class="hasebe-box">
                 
                    <div class="form-group2">
                     
                      <?php echo $this->Form->control('user.name', [
                          "label" => "ユーザー名",
                          "class" => "form-control form-wide",
                         
                      ]); 
                      ?>
                    </div>
                    

                    <div class="form-group2">
                     
                      <?php echo $this->Form->control('user.kana', [
                          "label" => "カナ",
                          "class" => "form-control form-wide",
                        
                      ]); 
                      ?>
                    </div>
                   

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.nickname', [
                          "label" => "ニックネーム",
                          "class" => "form-control form-wide",
                      ]); 
                      ?>
                    </div>

                    <div class="form-group2">
                      <?php echo $this->Form->control('user.company', [
                          "label" => "会社名",
                          "class" => "form-control form-wide",
                         
                      ]); 
                      ?>
                    </div>


                    <div class="form-group2">
                    <?php echo $this->Form->control('user.position', [
                          "label" => "専門家",
                          "class" => "form-control form-wide",
                 
                      ]); 
                      ?>
                    </div>
            

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.position_detail', [
                          "label" => "種類",
                          "class" => "form-control form-wide",
                   
                      ]); 
                      ?>
                    </div>

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.email', [
                          "label" => "メールアドレス",
                          "class" => "form-control form-wide",
              
                      ]); 
                      ?>
                    </div>

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.phone_number', [
                          "label" => "電話番号",
                          "class" => "form-control form-wide",
                   
                      ]); 
                      ?>
                    </div>

  
                    <div class="form-group2">
                    <?php echo $this->Form->control('user.password', [
                          "label" => "パスワード",
                          "class" => "form-control form-wide",
                          "value"=>"",
                      
                      ]); 
                      ?>
                    </div>
                    

                    <div class="form-group2">
                    <label>都道府県</label>
                    <?php                                     
                         echo $this->Form->select('user.address_region',
                                         [
                                          "都道府県"=> "",
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
                                         ]
                                                );?>
                    </div>
                   

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.birth', [
                          "label" => "生年",
                          "class" => "form-control form-wide",
                      
                      ]); 
                      ?>
                    </div>

             
                </div>
                
                <div class="UserDetailChange">
                <td><button type="submit" name="user[action]" value="edit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>更新する</button></td>
                </div>
                <?php echo $this->Form->end(); ?>   
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
