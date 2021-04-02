
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fellow_CMS｜注目ランキング</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>注目ランキング</h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-user"></i>注目ランキング</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content userbox">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">検　索</h3>
          </div>
          <div class="box-body row">
            <?php
            echo $this->Form->create(
              $ranksTable,
              [
                'type' => 'post',
                'url' => '#'
              ]
            );
            ?>
            <div class="col-md-6">
              <!-- Name -->
              <div class="form-group">
                <label for="UserId">１位</label>
                <?php

                echo $this->Form->control('ranks.questionId01', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"１位"

                ]);
                ?>
              </div>
             

              <div class="form-group">
                <label for="Telnum">２位</label>
                <?php

                echo $this->Form->control('ranks.questionId02', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"２位"

                ]);
                ?>
              </div>


              <div class="form-group">
                <label for="UserName">３位</label>
                <?php
                                              
                echo $this->Form->control('ranks.questionId03', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"３位"

                ]);
                ?>
              </div>
     
 
              <div class="form-group">
                <label for="InputEmail1">４位</label>
                <?php

                echo $this->Form->control('ranks.questionId04', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"４位"

                ]);
                ?>
              </div>
             
              
              <div class="form-group">
                <label for="UserNameKana">５位</label>
                <?php

                echo $this->Form->control('ranks.questionId05', [
                  'input'=>'text',
                  'id'=>'UserId',
                  'class'=>'form-control form-wide',
                  'label' => false,
                  'placeholder'=>"５位"

                ]);
                ?>
              </div>


            </div>

          <div class="box-footer">
            <button type="submit" name="ranks[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>登録する</button>
            
          </div>
          <?php echo $this->Form->end(); ?>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>

    


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
