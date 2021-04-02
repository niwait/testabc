
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS｜お仕事</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">





    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>










    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>



  <div class="content-wrapper">

        <section class="content-header">
          <h1>お仕事登録</h1>
          <ol class="breadcrumb">
            <li><a href="../user/work.html"><i class="fa fa-briefcase "></i><span>お仕事</span></a></li>
            <li>お仕事登録</li>
          </ol>
        </section>

        <section class="content userbox">
       
          
          <div class="">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">登　録</h3>
                </div>
                <?php
          echo $this->Form->create(
            $jobTable,
            [
              'url' => '#',
              'method'=>'post'
            ]
          );
          ?>
                <div class="box-body">
                <div class="hasebe-box">
                    <div class="form-group2">
                    <label>登録日</label>
                      <?php
                          echo $this->Form->text('job.today', [
                            'input'=>'text',
                            "type"=>"date",
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'value' => date( "Y-m-d" ,  strtotime($jobTable["today"]))
                          ]);
                         ?>
                    </div>

                    <div class="form-group2">
                    <label>タイトル</label>
                      <?php
                          echo $this->Form->control('job.title', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            

                          ]);
                         ?>
                    </div>


                  <div class="form-group2">
                  <label>会社名</label>
                  <?php
                          echo $this->Form->control('job.company', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                           

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                  <label>テキスト</label>
                    <?php
                          echo $this->Form->control('job.text', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                        

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                  <label>都道府県</label>
          <?php                                     
                         echo $this->Form->select('job.prefecture',

                         
                         
                         
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
                  <label>場所</label>
                  <?php
                          echo $this->Form->control('job.place', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                       

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                    <label>稼働日時</label>
                    <?php
                          echo $this->Form->control('job.operation', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            'placeholder'=>'週4日（10時～20時）',
                           

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                    <label>仕事内容</label>
                    <?php
                          echo $this->Form->control('job.contents', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                      

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                    <label>報酬</label>
                    <?php
                          echo $this->Form->control('job.reword', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                          

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                    <label>URL</label>
                    <?php
                          echo $this->Form->control('job.url', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                            

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                    <label>募集期間</label>
                    <?php
                          echo $this->Form->control('job.recruitment', [
                            'input'=>'text',
                            'placeholder'=>'2020/07/25～2020/09/25',
                            'class'=>'form-control form-wide',
                            'label' => false,
                        

                          ]);
                         ?>
                  </div>

                  <div class="form-group2">
                    <label>大項目</label>
                    <?php
                          echo $this->Form->control('job.major', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                       

                          ]);
                         ?>
                  </div>
                  <div class="form-group2">
                    <label>中項目</label>
                    <?php
                          echo $this->Form->control('job.middle', [
                            'input'=>'text',
                            'class'=>'form-control form-wide',
                            'label' => false,
                           

                          ]);
                         ?>
                  </div>
                  </div>




                </div>
                <div class="box-footer">
                <td><button type="submit" name="job[action]" value="edit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>更新する</button></td>
                </div>
              </dib>
              <?php echo $this->Form->end(); ?>   
              </div>
            
            </div>
       
          </div>
             

        </section>
      
      </div>
   
      <footer class="main-footer">
      
      >
        <div class="pull-right hidden-xs">

        </div>
 
        <strong>&copy;<a href="../#">Kick-it</a>.</strong>
      </footer>

     
      <div class="control-sidebar-bg"></div>
    </div>
    