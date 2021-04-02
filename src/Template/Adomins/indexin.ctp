
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>




  <div class="content-wrapper">

        <section class="content-header">
          <h1>ユーザ管理</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>ユーザ管理</li>
            <li>ユーザー情報詳細 / 登録</li>
          </ol>
        </section>


        <section class="content userdetailbox user-info">

          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
              <?php
                echo $this->Form->create(
                  $userTable,
                  [
                    'url' => '#'
                  ]
                );
                ?>
                <div class="box-header with-border">
                  <h3 class="box-title">基本情報</h3>
                </div>
                <div class="hasebe-box">

                    <div class="form-group2">
                      <?php echo $this->Form->control('user.name', [
                          "label" => "ユーザー名",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>
                    <div class="form-group2">
                    <?php echo $this->Form->control('user.kana', [
                          "label" => "カナ",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>


                    <div class="form-group2">
                    <?php echo $this->Form->control('user.nickname', [
                          "label" => "ニックネーム",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>


                    <div class="form-group2">
                    <?php echo $this->Form->control('user.company', [
                          "label" => "会社名",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>

                    <div class="form-group2">
                    <label>ポジション</label>
                    <?php
                        echo $this->Form->select('user.position',
                         [
                        "Expert"=>"専門家",
                        "Questioner"=>"一般ユーザー",
                      ],[
                        'class'=>'form-control form-wide',
                        'value'=>""
                       ]);
                       ?>
                    </div>


                    <div class="form-group2">
                    <?php echo $this->Form->control('user.position_detail', [
                          "label" => "種類",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.email', [
                          "label" => "メールアドレス",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.phone_number', [
                          "label" => "電話番号",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>




                    <div class="form-group2">
                    <?php echo $this->Form->control('user.password', [
                          "label" => "パスワード",
                          "class" => "form-control form-wide",
                          "value" => "",
                      ]);
                      ?>
                    </div>

                    <div class="form-group2">
                      <label>都道府県</label>
                      <?php
                                     echo $this->Form->select('user.address_region',

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
                  <label>生年</label>
                    <?php
                    $yearslist=[];
                                        for($year=2020;$year>= 1950; $year--){
                                           
                                            $yearslist[$year]=$year;
                                        } 

                                    
                                      echo $this->Form->select(
                                        'user.birth', 
                                      [$yearslist
                                    ],[
                                      "class" => "form-control form-wide",
                                      ]
                                      );   
                      ?>

                    </div>


                </div>

                <div class="UserDetailChange">
                <button type="submit" formmethod="post"name="user[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>情報を登録する</button>

                </div>
                <?php echo $this->Form->end(); ?>
              </div>

            </div>

          </div>



        </section>

      </div>

      
