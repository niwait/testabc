<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fellow_CMS</title>
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
          <h1>PR</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>PR</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content userbox">

          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">登録</h3>
                </div>
                <div class="box-body row">
                


                
            
                 <div class="box-footer">
                 <a href="<?php echo $this->Url->build(['controller'=>'Adomins', 'action'=>'prin']); ?>"class="something">
                <button type="search" class="btn btn-info pull-right">
                  <i class="fas fa-edit"></i> 登録する
                </button>
              </a>
              
                </div>
                

           



               
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
                  <h3 class="box-title">PR一覧</h3>
                </div>
             

                <div class="scroll">
                  <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
                    <thead>
                      <tr>
                        <th>会社名</th>
                 
                        <th>URL</th>
                        <th>開始</th>
                        <th>終了</th>
                        <th>表示・非表示</th>
                        <th >編集</th>
                        <th >削除</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($prsinfo as $row) : ?>
                  
          


                        <tr>
                        <?php echo $this->Form->hidden('prs.id', [
                        "value" => $row["id"]
                      ]); ?>
                        <td>
                        <?php echo $this->Form->control('prs.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["company"]
                      ]); ?>
                      </td>
                        <td>
                        <?php echo $this->Form->control('prs.url', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["url"]
                      ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('prs.startday', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => date( "Y-m-d" ,  strtotime($row["startday"])) 
                        
                      ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('prs.endday', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" =>date( "Y-m-d" ,  strtotime($row["endday"])) 
                      ]); ?>
                      </td>
                      <td>
                        <?php echo $this->Form->control('prs.showhide', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        "value" => $row["showhide"]
                      ]); ?>
                      </td>
                      <td>
                      <a href="<?php echo sprintf("/adomins/prup?prs[id]=%s",$row["id"]);?>">
                      <button type="submit" name="prs[action]" value="edit" class="btn btn-block">
                      <i class="fa fa-edit"></i>編集
                      </button>
                      </a>
                      
                      
                      </td>
                        <td>
                      
                        <?php echo $this->form->postLink(
                            '削除',
                            array('action'=>'pr'),
                            array('class'=>'btn btn-block',
                            'confirm'=>__("本当に削除しますか？？"),
                            'data'=> [
                              "prs.id"=>$row["id"],
                              "prs.action"=>"delete"])

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
     