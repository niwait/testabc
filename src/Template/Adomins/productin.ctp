
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
          <h1>製品・サービス登録</h1>
          <ol class="breadcrumb">
            <li><a href="../user/product.html"><i class="fa fa-gears "></i><span>製品・サービス</span></a></li>
            <li>製品・サービス登録</li>
          </ol>
        </section>

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
            $productTable,
            [
              'url' => '#'
            ]
          );
          ?>
                <div class="hasebe-box">
                <div class="form-group2">
            <label>登録日</label>
            <?php
                  echo $this->Form->text('product.today', [
                    'type'=>'date',
                    'class'=>'form-control form-wide',
                    'label' => false,
                    'value' =>'',
                          ]);
                         ?>
          </div>

                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.title', [
                      'class'=>'form-control form-wide',
                      'label' => '製品サービス名',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.company', [
                      'class'=>'form-control form-wide',
                      'label' => '会社名',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.text', [
                      'class'=>'form-control form-wide',
                      'label' => '案件内容',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.mony', [
                      'class'=>'form-control form-wide',
                      'label' => '利用料金',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.initial', [
                      'class'=>'form-control form-wide',
                      'label' => '初期費用',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.flee', [
                      'class'=>'form-control form-wide',
                      'label' => '無料プラン',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.trial', [
                      'class'=>'form-control form-wide',
                      'label' => 'トライアル',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                   
                    
                    <div class="form-group2">
                      <?php
                      echo $this->Form->control('product.url', [
                      'class'=>'form-control form-wide',
                      'label' => 'ＵＲＬ',
                      'placeholder'=>"",
                      'value'=>"",
                          ]);
                         ?>
                    </div>
                    <div class="form-group2">
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
                        <div class="form-group2">
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
                
                <button type="submit" formmethod="post" name="product[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>情報を登録する</button>
                </div>
                <?php echo $this->Form->end(); ?>
              </div>
              
              </div>
   
            </div>
          
          </div>
            

        </section>
       
      </div>
  
      