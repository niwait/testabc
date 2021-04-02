
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS｜お仕事</title>
  
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>




      <div class="content-wrapper">
  
        <section class="content-header">
          <h1>お仕事</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-briefcase "></i>お仕事</li>
          </ol>
        </section>

    
        <section class="content userbox">

          <div class="">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">検　索</h3>
                </div>
                <div class="box-body">
                <?php
                  echo $this->Form->create(
                    $jobTable,
                    [
                      'url' => '#',
                      'method'=>'get'
                    ]
                  );
                  ?>
                  <div class="col-md-6">
            
                    <div class="form-group">
                      <label for="UserId">登録日</label>
                      <?php
                          echo $this->Form->text('job.today', [
                            'input'=>'text',
                            "type"=>"date",
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value" =>"",
                          ]);
                         ?>
                    </div>
               

                    <div class="form-group">
                      <label for="Telnum">タイトル</label>
                      <?php
                          echo $this->Form->control('job.title', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value"=>""

                          ]);
                         ?>
                    </div>


                    <div class="form-group">
                      <label>会社名</label>
                      <?php
                          echo $this->Form->control('job.company', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value"=>""

                          ]);
                         ?>
                    </div>
           


                  </div>
              
                  <div class="col-md-6">

               
              


                    
                    <div class="form-group">
                      <label for="InputEmail1">都道府県</label>
                      <?php                                     
                         echo $this->Form->select('job.prefecture',                         
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
              <select class="parent form-control form-wide" id="" name="job[major]" disabled　required>
                                    <option value="" class="cate-select11" disabled selected>大カテゴリー</option>
                                    <option value="飲食">飲食</option>
                                    <option value="理美容">理美容</option>
                                    <option value="医療・介護・保育">医療・介護・保育</option>
                                    <option value="運送">運送</option>
                                    <option value="製造">製造</option>
                                </select>
                            
                        </div>
                        <div class="form-group">
                        <label>中項目</label>
                                <select class="children form-control form-wide" id="" name="job[middle]" disabled required>
                                    <option value="" class="cate-select11" disabled selected>中カテゴリー</option>
                                    <option value="占い師" data-val="飲食">占い師</option>
                                    <option value="調理師" data-val="飲食">調理師</option>
                                    <option value="配膳スタッフ" data-val="飲食">配膳スタッフ</option>
                                    <option value="ヘアメイク" data-val="理美容">ヘアメイク</option>
                                    <option value="ヘルパー" data-val="医療・介護・保育">ヘルパー</option>
                                    <option value="ベビーシッター" data-val="医療・介護・保育">ベビーシッター</option>
                                    <option value="歯科衛生士" data-val="医療・介護・保育">歯科衛生士</option>
                                    <option value="軽ドライバー" data-val="運送">軽ドライバー</option>
                                    <option value="テイクアウト配達" data-val="運送">テイクアウト配達</option>
                                    <option value="PCキッティング" data-val="製造">PCキッティング</option>
                                </select>
                              
                              </div>
              
             


                  </div>
                
              


              

      
                
                
                <div class="box-footer">
                <button type="submit" formmethod="get" name="job[action]" value="get"class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
                </div>
                <?php echo $this->Form->end(); ?>
              </div>
            
            </div>
     
          </div>
    
        </div>

          <div class="">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">お仕事一覧</h3>
                </div>
               

                <div class="scroll">
                  <div class="box-footer">
                  <button class="btn btn-info pull-right"><i class="fas fa-search"></i>
                  <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'workin']); ?>" class="something">登録</a>
                  </button>
                  </div>
                  <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
                    <thead>
                      <tr>
                      <th>登録日</th>
                        <th>タイトル</th>
                        <th>会社名</th>
                        <th>都道府県</th>
                        <th>大分類</th>
                        <th>中分類</th>
                        <th>編集</th>
                        <th>削除</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($resultjob  as $rowCount => $rowData) : ?>
                      <tr>
                      
                        <td>
                        <?php echo $this->Form->hidden('job.id', [
                       "value" => $rowData["id"]
                        ]); ?>

                      <?php echo $this->Form->text('job.today', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "type"=>"date",
                        "value" => date( "Y-m-d" ,  strtotime($rowData["today"]))
                        //ｓｔ文字列を時間の形式にに変えてDATEで時間を文字列にして
                      ]); ?>
                        </td>
                        <td>
                        <?php echo $this->Form->control('job.title', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["title"]
                      ]); ?>
                        </td>
                        <td>
                        <?php echo $this->Form->control('job.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["company"]
                      ]); ?>
                        </td>
                  
                        <td>
                        <?php echo $this->Form->control('job.prefecture', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["prefecture"]
                      ]); ?>
                        </td>
                     
                        
                     
                     
                        <td>
                        <?php echo $this->Form->control('job.major', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["major"]
                      ]); ?>
                        </td>
                        <td>
                        <?php echo $this->Form->control('job.middle', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["middle"]
                      ]); ?>
                        </td>
                     
                        <td><a href="<?php echo sprintf("workup?job[id]=%s",$rowData["id"]);?>"><button type="submit" name="job[action]" value="edit" class="btn btn-block"><i class="fa fa-edit"></i>編集</a></td>
                        
                      
                      
                      
                        <td>
                <?php echo $this->form->postLink(
                '削除',
                 array('action'=>'work'),
                 array('class'=>'btn btn-block',
                'confirm'=>__("本当に削除しますか？？"),
                'data'=> ["job.id"=>$rowData["id"],
                "job.action"=>"delete"]) 
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
    <!-- DataTableJapanese -->
    <!--<script>
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
 
 
