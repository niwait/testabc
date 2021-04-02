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
    <h1>バナー</h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-user"></i>バナー</li>
    </ol>
  </section>

  <section class="content userbox">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">登録</h3>
          </div>



          <div class="box-footer">
          <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'bannerin']); ?>"class="something">
                <button type="search" class="btn btn-info pull-right">
                  <i class="fas fa-edit"></i> 登録する
                </button>
              </a>
          </div>
      
         
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">バナー一覧</h3>
          </div>


            <div class="scroll">
            <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">

              <thead>
                <tr>
                  <th>イメージ</th>
                  <th>URL</th>
                  <th>公開日</th>
                  <th>終了日</th>
                  <th>公開・非公開</th>
                  <th >編集</th>
                  <th >削除</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($bannersinfo as $row) : ?>

                  <tr>
                    <td>
                      <?php echo $this->Form->hidden('banners.id', [
                        "value" => $row["id"]
                      ]); ?>
                      <?php echo $this->Form->control('banners.img', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["img"]
                      ]); ?>
                    </td>

                    <td>
                      <?php echo $this->Form->control('banners.url', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["url"]
                      ]); ?>
                    </td>

                    <td>
                      <?php echo $this->Form->control('banners.startday', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => date( "Y-m-d" ,  strtotime($row["startday"]))
                      ]); ?>
                    </td>

                    <td>
                      <?php echo $this->Form->control('banners.endday', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => date( "Y-m-d" ,  strtotime($row["endday"]))

                      ]); ?>
                    </td>

                    <td>
                      <?php
                      echo $this->Form->control('banners.showhide', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["showhide"]
                      ]);
                      ?>
                    </td>


                    <td>
                      <a href="<?php echo sprintf("bannerup?banners[id]=%s",$row["id"]);?>"><button type="submit" name="banners[action]" value="edit" class="btn btn-block">
                        <i class="fa fa-edit"></i>編集
                      </a>
                    </td>

                    <td>
                    <?php echo $this->form->postLink(
                            '削除',
                            array('action'=>'banner'),
                            array('class'=>'btn btn-block',
                            'confirm'=>__("本当に削除しますか？？"),
                            'data'=> ["banners.id"=>$row["id"],
                            "banners.action"=>"delete"])
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

   