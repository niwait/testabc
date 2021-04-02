
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fellow_CMS｜注目ランキング</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>




<div class="content-wrapper">
    
        <section class="content-header">
          <h1>注目ランキング</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-trophy"></i>注目ランキング</li>
          </ol>
        </section>

        <section class="content userbox">


          <div class="">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">ユーザ一覧</h3>
                </div>
        
                <div class="box-body">
                  <div class="box-footer">
                   
                  <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'rankingin']); ?>"class="something">
                         <button type="search" class="btn btn-info pull-right">
                          <i class="fas fa-edit"></i> 登録する
                          </button>
                          </a>
                  </div>
                  <div class="scroll">
                  <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
                    <thead>
                      <tr>
                        <th>質問番号</th>
                        <th>順位</th>

                        <th>削除</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ranksinfo as $rowCount => $rowData) : ?>
                      <tr>
                      <?php  echo $this->Form->hidden('ranks.id',[
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $rowData["id"]
                      ]); ?>
                     
                  
                    <td>
                      <?php
                      echo  $rowData["questionId"]; 
                     ?>
                    </td>
                    <td>
                    <?php 
                    echo  $rowData["ranksNo"];
                       ?></td>
                    
                        <td>
                            <?php echo $this->form->postLink(
                                '削除',
                                array('action'=>'ranking'),
                                array('class'=>'btn btn-block',
                                'confirm'=>__("本当に削除しますか？？"),
                                'data'=> ["ranks.id"=>$rowData["id"],
                                "ranks.action"=>"delete"])
                                
                            )?>
                            </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                  <!-- /.table -->
                </div>
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
     