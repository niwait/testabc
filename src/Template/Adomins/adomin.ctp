
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
    <h1>権限</h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-unlock "></i>権限</li>
    </ol>
  </section>


  <section class="content userbox">

    <div class="">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">検　索</h3>
          </div>
          <?php
          echo $this->Form->create(
            $adominTable,
            [
              'url' => '#'
            ]
          );
          ?>
          <div class="box-body">
            <div class="col-md-6">

              <div class="form-group">
                <?php echo $this->Form->control('adomins.name', [
                  "label" => "名前",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>


              <div class="form-group">
                <?php echo $this->Form->control('adomins.kana', [
                  "label" => "カナ",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>


              <div class="form-group">
                <?php echo $this->Form->control('adomins.tel', [
                  "label" => "電話番号",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>



            </div>

            <div class="col-md-6">


              <div class="form-group">
                <?php echo $this->Form->control('adomins.company', [
                  "label" => "会社名",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>

              <div class="form-group">
                <?php echo $this->Form->control('adomins.mail', [
                  "label" => "メールアドレス",
                  "class" => "form-control form-wide",
                  "type" => "text",
                  "value" => "",
                ]); ?>
              </div>


              <div class="form-group">
                <?php echo $this->Form->control('adomins.adomin_no', [
                  "label" => "権限",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]); ?>
              </div>



            </div>



            <div class="box-footer">
              <button type="submit" formmethod="get" name="adomins[action]" value="get"class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
            </div>

          </div>
          <?php echo $this->Form->end(); ?>
        </div>

      </div>
    </div>


    <div class="">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">ユーザ一覧</h3>
          </div>


          <div class="box-body">
            <div class="box-footer">
              <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'adominin']); ?>"class="something">
                <button type="search" class="btn btn-info pull-right">
                  <i class="fas fa-edit"></i> 登録する
                </button>
              </a>
            </div>

            <div class="scroll">
              <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList dataTables_wrapper">
                <thead>
                  <tr>
                    <th>名前</th>
                    <th>カナ</th>
                    <th>電話番号</th>
                    <th>ID</th>
                    <th>メールアドレス</th>

                    <th>権限</th>
                    <th>編集</th>
                    <th>削除</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($resultadomins as $rowCount => $rowData) : ?>
                    <tr>
                      <td>
                        <?php echo $this->Form->hidden('adomins.id', [
                          "value" => $rowData["id"]
                        ]); ?>

                        <?php echo $this->Form->control('adomins.name', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["name"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.kana', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["kana"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.tel', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["tel"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.id', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["id"]
                        ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('adomins.mail', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["mail"]
                        ]); ?>
                      </td>

                      <td>
                        <?php echo $this->Form->control('adomins.adomin_no', [
                          "label" => false,
                          "class" => "form-control form-wide",
                          "value" => $rowData["adomin_no"]
                        ]); ?>
                      </td>
                      
                      <td>
                      <a href="<?php echo sprintf("/adomins/adominup?adomins[id]=%s",$rowData["id"]);?>">
                      <button type="submit" name="adomins[action]" value="edit" class="btn btn-block">
                      <i class="fa fa-edit"></i>編集
                      </button>
                      </a>
                      </td>
                        

                        <td>
                          <?php echo $this->form->postLink(
                            '削除',
                            array('action'=>'adomin'),
                            array('class'=>'btn btn-block',
                            'confirm'=>__("本当に削除しますか？？"),
                            'data'=> [
                              "adomins.id"=>$rowData["id"],
                              "adomins.action"=>"delete"])

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
        </section>
      </div>
