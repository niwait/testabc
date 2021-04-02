
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS｜お仕事</title>
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
          <h1>お仕事</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>お仕事</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content userbox">

          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                
                <div class="box-body row">
                <?php
                  echo $this->Form->create(
                    $jobsTable,
                    [
                      'url' => '#'
                    ]
                  );
                  ?>
                  <div class="col-md-6">
                    <!-- Name -->
                    <div class="form-group">
                      <label for="InputEmail1">登録日</label>
                      <?php
                          echo $this->Form->text('jobs.today', [
                            'input'=>'text',
                            "type"=>"date",
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value" =>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group">
                      <label for="UserId">タイトル</label>
                      <?php
                          echo $this->Form->control('jobs.title', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value"=>""

                          ]);
                         ?>
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label for="Telnum">会社名</label>
                      <?php
                          echo $this->Form->control('jobs.company', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value"=>""

                          ]);
                         ?>
                    </div>

                    <div class="form-group">
                      <label for="InputEmail1">テキスト</label>
                      <?php
                          echo $this->Form->control('jobs.text', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'value'=>""

                          ]);
                         ?>
                    </div>
                 
                    <div class="form-group">
                      <label for="UserName">都道府県</label>
                         <?php                                     
                         echo $this->Form->select('jobs.prefecture',                         
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
                                          'class'=>'form-control form-wide'
                                         ]
                                         
                         
                                                );?>

                    </div>
                 
                    <div class="form-group">
                      <label for="UserName">場所</label>
                      <?php
                          echo $this->Form->control('jobs.place', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'value'=>""

                          ]);
                         ?>
                    </div>
                
                    <div class="form-group">
                      <label for="UserNameKana">稼働日時</label>
                      <?php
                          echo $this->Form->control('jobs.operation', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'placeholder'=>'週4日（10時～20時）',
                            "value" =>""

                          ]);
                         ?>
                    </div>
                  
                    <div class="form-group">
                      <label for="UserNameKana">仕事内容</label>
                      <?php
                          echo $this->Form->control('jobs.contents', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value" =>""

                          ]);
                         ?>
                    </div>
                  


                    
             
                    <div class="form-group">
                      <label for="UserNameKana">報酬</label>
                      <?php
                          echo $this->Form->control('jobs.reword', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            "value" =>""

                          ]);
                         ?>
                    </div>
                   

                   
                    <div class="form-group">
                      <label for="Giftnum">募集期間</label>
                      <?php
                          echo $this->Form->control('jobs.recruitment', [
                            'input'=>'text',
                            'placeholder'=>'2020/07/25～2020/09/25',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'value'=>""

                          ]);
                         ?>
                    </div>
                


              
                    <div class="form-group">
                      <label for="Giftnum">URL</label>
                      <?php
                          echo $this->Form->control('jobs.url', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'value'=>""

                          ]);
                         ?>
                    </div>
                    
                    <div class="form-group">
                      <label for="Giftnum">職種</label>
                      <?php
                          echo $this->Form->control('jobs.occupation', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'value'=>""

                          ]);
                         ?>
                    </div>
              



                  
                    <div class="form-group">
              <label>大項目</label>
              <select class="parent form-control form-wide" id="" name="jobs[major]" disabled　required>
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
                                <select class="children form-control form-wide" id="" name="jobs[middle]" disabled required>
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
                </div>
                <div class="box-footer">
                   
                  <button type="submit" formmethod="post" name="jobs[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>登録する</button>
                  <button type="submit" formmethod="get" name="jobs[action]" value="get" class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
                </div>
                <?php echo $this->Form->end(); ?>
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">お仕事一覧</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
                    <thead>
                      <tr>
                      <th>登録日</th>
                        <th>タイトル</th>
                        <th>会社名</th>
                        <th>仕事内容</th>
                        <th>都道府県</th>
                        <th>場所</th>
                        <th>日時</th>
                        <th>仕事内容</th>
                        <th>報酬</th>
                        <th>募集期間</th>
                        <th>URL</th>
                        <th>大分類</th>
                        <th>中分類</th>
                        <th>職種</th>
                        <th>編集</th>
                        <th>削除</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($resultjobs  as $rowCount => $rowData) : ?>
                      <tr>
                    <?php
                    echo $this->Form->create(
                      $jobsTable,
                      [
                        'type' => 'post',
                        'url' => '#'
                      ]
                    );
                    ?>
                      <td>
                      <?php echo $this->Form->hidden('jobs.id', [
                       "value" => $rowData["id"]
                        ]); ?>

                      <?php echo $this->Form->text('jobs.today', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "type"=>"date",
                        "value" => date( "Y-m-d" ,  strtotime($rowData["today"]))
                        //ｓｔ文字列を時間の形式にに変えてDATEで時間を文字列にして
                      ]); ?>
                      </td>
                     <td>
                      
                     
                      <?php echo $this->Form->control('jobs.title', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["title"]
                      ]); ?>
                      </td>

                      <td>
                      <?php echo $this->Form->control('jobs.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["company"]
                      ]); ?>
                      </td>
                      <td>
                      <?php echo $this->Form->control('jobs.text', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["text"]
                      ]); ?>
                      </td>
                        <td>
                        <?php echo $this->Form->control('jobs.prefecture', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["prefecture"]
                      ]); ?>
                      </td>
                      <td>
                      <?php echo $this->Form->control('jobs.place', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["place"]
                      ]); ?>
                      </td>
                      
                      <td>
                      <?php echo $this->Form->control('jobs.operation', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["operation"]
                      ]); ?>
                      </td>
                      <td>
                      <?php echo $this->Form->control('jobs.contents', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["contents"]
                      ]); ?>
                      </td>
                        <td>
                        <?php echo $this->Form->control('jobs.reword', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["reword"]
                      ]); ?>
                      </td>
                        <td>
                        <?php echo $this->Form->control('jobs.recruitment', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["recruitment"]
                      ]); ?>
                        </td>
                        <td>
                        <?php echo $this->Form->control('jobs.url', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["url"]
                      ]); ?>
                        </td>
                        <td>
                        <?php echo $this->Form->control('jobs.major', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["major"]
                      ]); ?>
                        </td>
                        <td>
                        <?php echo $this->Form->control('jobs.middle', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["middle"]
                      ]); ?>
                        </td>
                        <td>
                        <?php echo $this->Form->control('jobs.occupation', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["occupation"]
                      ]); ?>
                        </td>
                        
                        <td><button type="submit" name="jobs[action]" value="edit" class="btn btn-block"><i class="fa fa-edit"></i>編集</a></td>
                        <?php echo $this->Form->end(); ?>
                        <td>
                        
                        

                        <?php echo $this->form->postLink(
                          '削除',
                          array('action'=>'work'),
                          array('class'=>'btn btn-block',
                          'confirm'=>__("本当に削除しますか？？"),
                          'data'=> ["jobs.id"=>$rowData["id"],
                          "jobs.action"=>"delete"])
                          
                      )?>
                      </td>
                      </tr>


                      
                      <?php endforeach; ?>
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
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong>&copy;<a href="../#">Kick-it</a>.</strong>
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
    <!-- ./wrapper -->


    <!----------------------------
      REQUIRED JS SCRIPTS
    ------------------------------>
    <!-- jQuery 3 -->
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