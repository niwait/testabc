
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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>権限登録</h1>
    <ol class="breadcrumb">
      <li><a href="../user/authority.html"><i class="fa fa-unlock "></i><span>権限</span></a></li>
      <li>権限登録</li>
    </ol>
  </section>

  <section class="content userbox">

    <div class="">
      <div class="col-xs-12">
        <div class="box box-primary">
          <?php
          echo $this->Form->create(
            $adominsTable,
            [
              'url' => '#'
            ]
          );
          ?>
          <div class="box-header with-border">
            <h3 class="box-title">登　録</h3>
          </div>
          <div class="box-body">
            <div class="hasebe-box">

              <div class="form-group2">
                <?php echo $this->Form->control('adomins.name', [
                  "label" => "ユーザー名",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>

              <div class="form-group2">
                <?php echo $this->Form->control('adomins.kana', [
                  "label" => "カナ",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>

              <div class="form-group2">
                <?php echo $this->Form->control('adomins.tel', [
                  "label" => "電話番号",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>

              <div class="form-group2">
                <?php echo $this->Form->control('adomins.company', [
                  "label" => "会社名",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>

              <div class="form-group2">
                <?php echo $this->Form->control('adomins.mail', [
                  "label" => "メールアドレス",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>

              <div class="form-group2">
                <?php echo $this->Form->control('adomins.password', [
                  "label" => "パスワード",
                  "class" => "form-control form-wide",
                  "value" => "",
                ]);
                ?>
              </div>

              <div class="form-group2">
                <?php echo $this->Form->control('adomins.adomin_no', [
                  "label" => "権限",
                  "class" => "form-control form-wide",
                  "value" => "",
                  'placeholder'=>"1,2,3,4,5"
                ]);
                ?>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" formmethod="post"name="adomins[action]" value="send" class="btn btn-info pull-right"><i class="fas fa-search"></i>情報を登録する</button>
          </div>
          <?php echo $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

