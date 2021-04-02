
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
    <h1>製品サービス</h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-user"></i>製品サービス</li>
    </ol>
  </section>




  <section class="content userbox">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <?php
          echo $this->Form->create(
            $productTable,
            [
              'url' => '#'
            ]
          );
          ?>
          <div class="box-header with-border">
            <h3 class="box-title">検　索</h3>
          </div>
          <div class="box-body row">
          <div class="col-md-6">

            <div class="form-group">
              <label for="InputEmail1">登録日</label>
                <?php
                  echo $this->Form->text('product.today', [
                    'input'=>'text',
                    'type'=>'date',
                    'class'=>'form-control form-wide',
                    'label' => false,
                    'value' =>'',
                          ]);
                         ?>
                    </div>
          
          
           
              <div class="form-group">
                <?php echo $this->Form->control('product.product', [
                  "label" => "製品・サービス名",
                  "class" => "form-control form-wide",
                  "value" =>"",
                ]); ?>
              </div>
           
              <div class="form-group">
                <?php echo $this->Form->control('product.company', [
                  "label" => "会社名",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              <!-- /.form group -->
            


              <div class="form-group">
                <?php echo $this->Form->control('product.text', [
                  "label" => "テキスト",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
           




              <div class="form-group">
                <?php echo $this->Form->control('product.mony', [
                  "label" => "利用料金",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
          
              <div class="form-group">
                <?php echo $this->Form->control('product.initial', [
                  "label" => "初期費用",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
             


              <div class="form-group">
                <?php echo $this->Form->control('product.flee', [
                  "label" => "無料プラン",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>


          
              <div class="form-group">
                <?php echo $this->Form->control('product.trial', [
                  "label" => "無料トライアル",
                  "class" => "form-control form-wide",
                  "value" =>"",
                ]); ?>
              </div>
           

          
              <div class="form-group">
                <?php echo $this->Form->control('product.url', [
                  "label" => "URL",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>
              


          


              <div class="form-group">
              <label>大項目</label>
              <select class="parent form-control form-wide" id="" name="product[major]" disabled　required>
                                    <option value="" class="cate-select11" disabled selected>大カテゴリー</option>
                                    <option value="開発">開発</option>
                                    <option value="デザイン">デザイン</option>
                                    <option value="情報共有">情報共有</option>
                                    <option value="マーケティング">マーケティング</option>
                                    <option value="セールス">セールス</option>
                                    <option value="会計・財務">会計・財務</option>
                                    <option value="人事・労務">人事・労務</option>
                                    <option value="セキュリティ">セキュリティ</option>
                                    <option value="ITインフラ">ITインフラ</option>
                                    <option value="データ分析">データ分析</option>
                                    <option value="システム運用">システム運用</option>
                                </select>
                            
                        </div>
                        <div class="form-group">
                        <label>中項目</label>
                                <select class="children form-control form-wide" id="" name="product[middle]" disabled required>
                                <option value="" class="cate-select11" disabled selected>中カテゴリー</option>
                                    <option value="ソースコード管理" data-val="開発">ソースコード管理</option>
                                    <option value="IDE(統合開発環境）" data-val="開発">IDE(統合開発環境）</option>
                                    <option value="WEBデータベース" data-val="開発">WEBデータベース</option>
                                    <option value="プロジェクト管理" data-val="開発">プロジェクト管理</option>
                                    <option value="共同開発ツール" data-val="開発">共同開発ツール</option>
                                    <option value="グラフィックデザイン" data-val="デザイン">グラフィックデザイン</option>
                                    <option value="ダイアグラム" data-val="デザイン">ダイアグラム</option>
                                    <option value="ビジネスチャット" data-val="情報共有">ビジネスチャット</option>
                                    <option value="グループウェア" data-val="情報共有">グループウェア</option>
                                    <option value="WEB会議" data-val="情報共有">WEB会議</option>
                                    <option value="チームビルディング" data-val="情報共有">チームビルディング</option>
                                    <option value="オンラインストレージ" data-val="情報共有">オンラインストレージ</option>
                                    <option value="タスク管理" data-val="情報共有">タスク管理</option>
                                    <option value="コンテンツ管理 " data-val="情報共有">コンテンツ管理</option>
                                    <option value="受付システム" data-val="情報共有">受付システム</option>
                                    <option value="文書管理" data-val="情報共有">文書管理</option>
                                    <option value="メール" data-val="マーケティング">メール</option>
                                    <option value="WEBサイト構築" data-val="マーケティング">WEBサイト構築</option>
                                    <option value="WEB接客" data-val="マーケティング">WEB接客</option>
                                    <option value="WEBチャット" data-val="マーケティング">WEBチャット</option>
                                    <option value="MA" data-val="マーケティング">MA</option>
                                    <option value="CMS" data-val="マーケティング">CMS</option>
                                    <option value="SEO" data-val="マーケティング">SEO</option>
                                    <option value="SNS" data-val="マーケティング">SNS</option>
                                    <option value="顧客管理" data-val="セールス">顧客管理</option>
                                    <option value="営業支援" data-val="セールス">営業支援</option>
                                    <option value="カスタマーサポート" data-val="セールス">カスタマーサポート</option>
                                    <option value="会計ソフト" data-val="会計・財務">会計ソフト</option>
                                    <option value="請求書・見積作成" data-val="会計・財務">請求書・見積作成</option>
                                    <option value="経費精算" data-val="会計・財務">経費精算</option>
                                    <option value="勤怠管理" data-val="人事・労務">勤怠管理</option>
                                    <option value="勤務管理" data-val="人事・労務">勤務管理</option>
                                    <option value="採用管理" data-val="人事・労務">採用管理</option>
                                    <option value="人事評価" data-val="人事・労務">人事評価</option>
                                    <option value="タレントマネジメント" data-val="人事・労務">タレントマネジメント</option>
                                    <option value="電子契約・署名" data-val="セキュリティー">電子契約・署名</option>
                                    <option value="バックアップ" data-val="セキュリティー">バックアップ</option>
                                    <option value="アンチウィルス" data-val="セキュリティー">アンチウィルス</option>
                                    <option value="ファイアウォール" data-val="セキュリティー">ファイアウォール</option>
                                    <option value="VPN" data-val="セキュリティー">VPN</option>
                                    <option value="WEBフィルタリング" data-val="セキュリティ">WEBフィルタリング</option>
                                    <option value="リモートアクセス" data-val="ITインフラ">リモートアクセス</option>
                                    <option value="IaaS" data-val="ITインフラ">IaaS</option>
                                    <option value="OS" data-val="ITインフラ">OS</option>
                                    <option value="ホスティング" data-val="ITインフラ">ホスティング</option>
                                    <option value="BI（ビジネスインテリジェンス）" data-val="データ分析">BI（ビジネスインテリジェンス）</option>
                                    <option value="機械学習" data-val="データ分析">機械学習</option>
                                    <option value="IT資産管理" data-val="システム運用">IT資産管理</option>
                                    <option value="RPA" data-val="システム運用">RPA</option>
                                </select>
                              
                              </div>
              </div>
            
            </div>
      
        
          <div class="box-footer">
            <button type="submit" formmethod="post" name="product[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>登録する</button>
            <button type="submit" formmethod="get" name="product[action]" value="get" class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
          </div>
          
          <?php echo $this->Form->end(); ?>
        </div>
       
      </div>
 
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">ユーザ一覧</h3>
          </div>
          

          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
              <thead>
                <tr>
                  <th>登録日</th>
                  <th>製品・サービス名</th>
                  <th>会社名</th>
                  <th>テキスト</th>
                  <th>利用料金</th>
                  <th>初期費用</th>
                  <th>無料プラン</th>
                  <th>無料トライアル</th>
                  <th>大分類</th>
                  <th>中分類</th>
                  <th>編集</th>
                  <th>削除</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($resultproduct as $rowCount => $rowData) : ?>
                  <tr>
                    <?php
                    echo $this->Form->create(
                      $productTable,
                      [
                        'type' => 'post',
                        'url' => '#'
                      ]
                    );
                    ?>
                       <td>
                      <?php echo $this->Form->hidden('product.id', [
                       "value" => $rowData["id"]
                        ]); ?>

                      <?php echo $this->Form->text('product.today', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "type"=>"date",
                        "value" => date( "Y-m-d" ,  strtotime($rowData["today"]))
                        //ｓｔ文字列を時間の形式にに変えてDATEで時間を文字列にして
                      ]); ?>
                      </td>
                      <td>
                      <?php echo $this->Form->control('product.product', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["product"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["company"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.text', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["text"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.mony', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["mony"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.initial', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["initial"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.flee', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["flee"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.trial', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["trial"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.major', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["major"]
                      ]); ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('product.middle', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["middle"]
                      ]); ?>
                    </td>
                    <td><button type="submit" name="product[action]" value="edit" class="btn btn-block"><i class="fa fa-edit"></i>編集</button></td>
                  <?php echo $this->Form->end(); ?>
                  <td>



                  <?php echo $this->form->postLink(
                          '削除',
                          array('action'=>'product'),
                          array('class'=>'btn btn-block',
                          'confirm'=>__("本当に削除しますか？？"),
                          'data'=> ["product.id"=>$rowData["id"],
                          "product.action"=>"delete"])
                          
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
  jQuery(function($) {
    // デフォルトの設定を変更
    $.extend($.fn.dataTable.defaults, {
      'paging': true,
      'lengthChange': true,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false,
      "language": {
        "emptyTable": "データが登録されていません。",
        "info": "_TOTAL_ 件中 _START_ 件から _END_ 件までを表示",
        "infoEmpty": "",
        "infoFiltered": "(_MAX_ 件からの絞り込み表示)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "表示件数: _MENU_",
        "loadingRecords": "ロード中",
        "processing": "処理中...",
        "search": "検索",
        "zeroRecords": "該当するデータが見つかりませんでした。",
        "paginate": {
          "first": "先頭",
          "previous": "前へ",
          "next": "次へ",
          "last": "末尾"
        }
      },
      // 件数切替の値を10～50の10刻みにする
      lengthMenu: [10, 25, 50, 75, 100],
      // 件数のデフォルトの値を50にする
      displayLength: 50
    });

    $("#example1").DataTable({
      "columnDefs": [{
          "orderable": false,
          "targets": [0, 1, 2, 3, 4, 5, 9, 10, 11, 12, 13, 14]
        },
        {
          "type": 'currency',
          "targets": [6, 7, 8]
        },
        {
          "targets": [6, 7],
          "render": $.fn.dataTable.render.number(',', '.', 0, '', '円')
        },
        {
          "targets": [8],
          "render": $.fn.dataTable.render.number(',', '.', 0, '', 'pt')
        }
      ]
    });


  });
</script>

<script type="text/javascript" src="jquery.dragscroll.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
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



