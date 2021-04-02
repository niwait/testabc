<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>質問・解答の削除</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>



    
      <div class="content-wrapper">
   
        <section class="content-header">
          <h1>質問解答の削除</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>質問・解答の削除</li>
          </ol>
        </section>

        <section class="content userbox">


          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">ユーザ一覧</h3>
                </div>
               
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover dataTable TableList userTableList">
                    <thead>
                      <tr>
                        <th>問題・質問</th>

                        <th>削除</th>
                      </tr>
                    </thead>
                    <?php
                  echo $this->Form->create(
                            $questionTable,
                        [
                            'type' => 'post',
                            'url' => '#'
                      ]
                        );
                      ?>
                    <tbody>


                      <tr>
                      <td>
                         <?php
                          echo $this->Form->control('question.id', [
                                            'type'=>'text',
                                            'label' => false,
                                            'placeholder'=>"問題番号"

                                            ]);
                          ?>
                      </td>
                     

                        <td><button class="btn btn-block" type="submit" name="question[action]" value="question"><i class="fa fa-edit"></i>削除</button></td>
                      </tr>
                      <?php echo $this->Form->end(); ?>



        
                    <?php
                  echo $this->Form->create(
                            $answerTable,
                        [
                            'type' => 'post',
                            'url' => '#'
                      ]
                        );
                      ?>
                    <tbody>


                      <tr>
                      <td>
                         <?php
                          echo $this->Form->control('answer.id', [
                                            'type'=>'text',
                                            'label' => false,
                                            'placeholder'=>"解答番号"

                                            ]);
                          ?>
                      </td>
                     

                        <td><button class="btn btn-block" type="submit" name="answer[action]" value="answer"><i class="fa fa-edit"></i>削除</button></td>
                      </tr>

                      <?php echo $this->Form->end(); ?>





                </tbody>
               
                  </table>
                  <!-- /.table -->
                </div>
                <!-- /.box-body -->







              </div>
              <!-- /.box -->
            </div>
           
          </div>
          <!-- /.row -->


        </section>
        <!-- /.content -->
      </div>
    

    