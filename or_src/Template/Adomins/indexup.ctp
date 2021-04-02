
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.18/datatables.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>

 
    

  <div class="content-wrapper">
       
        <section class="content-header">
          <h1>ユーザ管理</h1>
          <ol class="breadcrumb">
            <li><a href="../../user/"><i class="fa fa-user"></i>ユーザ管理</a></li>
            <li>ユーザー情報詳細 / 登録</li>
          </ol>
        </section>

       
        <section class="content userdetailbox user-info">
        <?php
          echo $this->Form->create(
            $userTable,
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
                  <h3 class="box-title">基本情報</h3>
                </div>
                <div class="hasebe-box">
                 
                    <div class="form-group2">
                     
                      <?php echo $this->Form->control('user.name', [
                          "label" => "ユーザー名",
                          "class" => "form-control form-wide",
                         
                      ]); 
                      ?>
                    </div>
                    

                    <div class="form-group2">
                     
                      <?php echo $this->Form->control('user.kana', [
                          "label" => "カナ",
                          "class" => "form-control form-wide",
                        
                      ]); 
                      ?>
                    </div>
                   

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.nickname', [
                          "label" => "ニックネーム",
                          "class" => "form-control form-wide",
                      ]); 
                      ?>
                    </div>

                    <div class="form-group2">
                      <?php echo $this->Form->control('user.company', [
                          "label" => "会社名",
                          "class" => "form-control form-wide",
                         
                      ]); 
                      ?>
                    </div>


                    <div class="form-group2">
                    <?php echo $this->Form->control('user.position', [
                          "label" => "専門家",
                          "class" => "form-control form-wide",
                 
                      ]); 
                      ?>
                    </div>
            

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.position_detail', [
                          "label" => "種類",
                          "class" => "form-control form-wide",
                   
                      ]); 
                      ?>
                    </div>

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.email', [
                          "label" => "メールアドレス",
                          "class" => "form-control form-wide",
              
                      ]); 
                      ?>
                    </div>

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.phone_number', [
                          "label" => "電話番号",
                          "class" => "form-control form-wide",
                   
                      ]); 
                      ?>
                    </div>

  
                    <div class="form-group2">
                    <?php echo $this->Form->control('user.password', [
                          "label" => "パスワード",
                          "class" => "form-control form-wide",
                      
                      ]); 
                      ?>
                    </div>
                    

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.address_region', [
                          "label" => "住所",
                          "class" => "form-control form-wide",
                     
                      ]); 
                      ?>
                    </div>
                   

                    <div class="form-group2">
                    <?php echo $this->Form->control('user.birth', [
                          "label" => "生年",
                          "class" => "form-control form-wide",
                      
                      ]); 
                      ?>
                    </div>

             
                </div>
                
                <div class="UserDetailChange">
                <td><button type="submit" name="user[action]" value="edit" class="btn btn-info pull-right"><i class="fa fa-edit"></i>更新する</button></td>
                </div>
                <?php echo $this->Form->end(); ?>   
              </div>
        
            </div>
           
          </div>
         


        </section>
 
      </div>

      <footer class="main-footer">
       
        <div class="pull-right hidden-xs">

        </div>
     
        <strong>&copy;<a href="../../#">Kick-it</a>.</strong>
      </footer>

     
  
      
      <div class="control-sidebar-bg"></div>
    </div>
    