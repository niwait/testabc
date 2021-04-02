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
        <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'seminarin']); ?>"class="something">
                <button type="search" class="btn btn-info pull-right">
                  <i class="fas fa-edit"></i> 登録する
                </button>
              </a>

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
