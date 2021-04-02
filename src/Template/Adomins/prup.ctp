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
        <?php
          echo $this->Form->create(
            $prsTable,
            [
              'url' => '#',
              'method'=>'post'
            ]
          );
          ?>
<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">編　集</h3>
      </div>
      <div class="box-body">
      <div class="hasebe">

          <div class="form-group2">
            <label>会社名</label>
            
            <?php echo $this->Form->control('prs.company', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        

                      ]); ?>
          </div>

          <div class="form-group2">
            <label>イメージ</label>
            <?php echo $this->Form->control('prs.img', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        

                      ]); ?>
          </div>


        <div class="form-group2">
          <label>URL</label>
          <?php echo $this->Form->control('prs.url', [
                        "label" => false,
                        "class" => "form-control form-wide",
                        

                      ]); ?>
        </div>
          </div>
          <div class="hasebe">
        <div class="form-group2">
        <label>開始日</label>
        <?php
          echo $this->Form->text('prs.startday', [
               'input'=>'text',
               'type'=>'date',
               'class'=>'form-control form-wide',
              'label' => false,
               'value' => date( "Y-m-d" ,  strtotime($prsTable["startday"]))
              ]);
               ?>
        </div>
        <div class="form-group2">
          <label>終了日</label>
          <?php
          echo $this->Form->text('prs.endday', [
               'input'=>'text',
               'type'=>'date',
               'class'=>'form-control form-wide',
              'label' => false,
               'value' => date( "Y-m-d" ,  strtotime($prsTable["endday"]))
              ]);
               ?>
        </div>
        <div class="form-group2">
          <label>表示・非表示</label>
          <?php
                      
             echo $this->Form->radio('prs.showhide', [
             '公開' => '公開',
              '非公開' => '非公開', 
              ]);
          ?>
        </div>
        </div>




      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      <button type="submit" name="prs[action]" value="edit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>
      <td>更新する</td>
      
      </button>
      </div>
      <?php echo $this->Form->end(); ?>  
    </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
      <!-- /.box-body -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Main Footer -->
