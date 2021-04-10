
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
    </ol>
  </section>


  <section class="content userbox">

    <div class="">
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
            <h3 class="box-title">検　索</h3>
          </div>
          <div class="box-body">
            <div class="col-md-6">


              <div class="form-group">
                <?php echo $this->Form->control('user.name', [
                  "label" => "ユーザー名",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>

              </div>


              <div class="form-group">
                <?php echo $this->Form->control('user.kana', [
                  "label" => "カナ",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>


              <div class="form-group">
                <?php echo $this->Form->control('user.nickname', [
                  "label" => "ニックネーム",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>

              <div class="form-group">
                <?php echo $this->Form->control('user.company', [
                  "label" => "会社名",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>



              <div class="form-group">
                <?php echo $this->Form->control('user.phone_number', [
                  "label" => "電話番号",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>


              <div class="form-group">
                <?php echo $this->Form->control('user.email', [
                  "label" => "メールアドレス",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>


            </div>

            <div class="box-footer">
              <button type="submit" formmethod="get" name="user[action]" value="get"class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
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
            <h3 class="box-title">ユーザ一覧</h3>
          </div>
          <!-- /.box-header -->


          <div class="box-body">
            <div class="box-footer">

              <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'indexin']); ?>"class="something">
                <button type="search" class="btn btn-info pull-right">
                  <i class="fas fa-edit"></i> 登録する
                </button>
              </a>
              <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'dw']); ?>"class="something">
                <button type="search" class="btn btn-info pull-right">
                  <i class="fas fa-edit"></i> csv
                </button>
              </a>

            </div>

            <div class="scroll">
              <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
                <thead style="overflow-x:auto">
                  <tr>
                    <th>ユーザー名</th>
                    <th>カナ</th>
                    <th>ニックネーム</th>
                    <th>都道府県</th>
                    <th>メールアドレス</th>

                    <th>編集</th>
                    <th>削除</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($resultuser as $rowCount => $rowData) : ?>
                    <?php 
                    
                    if ($rowData["status"]==2){
                      continue;
                    }
                      
                      
                      ?>
                    <tr>
                      <td>
                        <?php echo $this->Form->hidden('user.id', [
                          "value" => $rowData["id"]
                        ]); ?>
                        <?php echo $this->Form->control('user.name', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["name"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('user.kana', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "type"=>"text",
                          "value" => $rowData["kana"]
                        ]); ?>
                      </td>

                      <td>
                        <?php echo $this->Form->control('user.nickname', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["nickname"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('user.address_region', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["address_region"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('user.email', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["email"]
                        ]); ?>
                      </td>



                   





                      <td>
                      <a href="<?php echo sprintf("/adomins/indexup?user[id]=%s",$rowData["id"]);?>">
                      <button type="submit" name="user[action]" value="edit" class="btn btn-block">
                      <i class="fa fa-edit"></i>編集
                      </button>
                      </a>
                     </td>
                     
                        <td>
                          <?php echo $this->form->postLink(
                            '削除',
                            array('action'=>'index'),
                            array('class'=>'btn btn-block',
                            'confirm'=>__("本当に削除しますか？？"),
                            'data'=> ["user.id"=>$rowData["id"],
                            "user.action"=>"delete"])
                            //削除あああ
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
        </div>
      </div>
    </div>
  </div>
</section>
</div>
