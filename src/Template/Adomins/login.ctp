<div class="wrapper">

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content container-fluid">

			<!-- Login Form -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">ログイン</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<?php
				echo $this->Form->create(
					$adominTable,
					[
						"class" => "form-horizontal",
						"url" => "#",
						"method" => "post"
					]
				);
				?>
				<div class="box-body">
					<div class="form-group">
						<label for="inputID" class="col-sm-3 control-label">ユーザID</label>
						<div class="col-sm-8">
							<?php echo $this->Form->control('adomins.id', [
								"label" => false,
								"class" => "form-control",
								"value" => $this->request->getQuery("adomins.id"),
							]); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">パスワード</label>
						<div class="col-sm-8">
							<?php echo $this->Form->control('adomins.password', [
								"label" => false,
								"class" => "form-control",
								"type" => "password",
								"value" => $this->request->getQuery("adomins.password"),
							]); ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-info">ログイン</button>
				</div>
				<!-- /.box-footer -->
				<?php echo $this->Form->end(); ?>
			</div>
			<!-- /.box -->

		</section>
		<!-- /.content -->
	</div>
	
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!----------------------------
			REQUIRED JS SCRIPTS
		------------------------------>
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
