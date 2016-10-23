<!DOCTYPE html>
<html class="" lang="en">
<head>
<?php echo $this->Html->charset(); ?>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
	<meta name="viewport" content="width=device-width, initial-scale=1"><!--remove responsive-->
	<meta name="author" content="BlackSnow">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">
	<title>myFace</title>
	<!-- Styles -->
	
<?php echo $this->Html->css('myface/bootstrap.css'); ?>
<?php echo $this->Html->css('myface/font-awesome.css'); ?>
<?php echo $this->Html->css('myface/style.css'); ?>
	<!-- Favicon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" sizes="16x16" >
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!--[if lt IE 8]><html class="ie">
		<script>
			window.location = "notsupport.html";
		</script>
	<![endif]-->
</head>
<body class="">
	<div class="myface-shop">
		<!--header-->
	<?php echo $this->element('default/partials/head') ?>


		<!--page-container-->
		<?php echo $this->fetch('content') ?>

	<?php echo $this->element('default/partials/footer') ?>
		<!--modal-->
		
<div  class="modal" id="alert-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close remove_text" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Thông báo</h4>
      </div>
      <div class="modal-body">
        <p>Bạn đã thực hiện tác vụ thành công</p>
      </div>
      <div class="box-footer clearfix">
        <div class="modal-footer">
          <a href="#" class="btn btn-primary" data-dismiss="modal">Đóng</a>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div  class="modal" id="confirm-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form id="">
        <div class="modal-header">
          <button type="button" class="close remove_text" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Xác nhận tác vụ</h4>
        </div>
        <div class="modal-body">
          <p>Bạn vui có chắc chắn muốn thực hiện tác vụ này không?</p><br>
          <div class="form-group has-feedback">
            <input name="email_forget" id="email_forget" type="text" class="form-control" placeholder="Nhập Email của bạn">
          </div>
        </div>
        <div class="box-footer clearfix">
          <div class="modal-footer">
            <button id="agree" type="submit" class="btn btn-primary">Gửi</button>
            <a href="#" class="btn btn-default" data-dismiss="modal">Đóng</a>
          </div>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div  class="modal forgetpass-modal" id="forgetpass-modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close remove_text" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close" aria-hidden="true"></i></span></button>
        <h4 class="modal-title">Quên mật khẩu</h4>
      </div>
      <div class="modal-body">
        <div class="forgetpass-form">
          <p>Vui lòng nhập Email để cập nhật lại mật khẩu trên hệ thống Myface.</p>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Nhập email của bạn">
            <label for="" class="error">Vui lòng nhập đủ thông tin</label>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Lấy lại mật khẩu">
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div  class="modal n-modal" id="contact-modal">
  <div class="modal-dialog">
    <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"></button>
	    </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-sm-6 img-label">
      			<h4 class="sp-ct-title">Hỗ trợ giải quyết đơn hàng</h4>
      			<p class="sp-ct-text">myFace Shop sẽ trả lời yêu cầu của bạn trong vòng 24 tiếng. <br>Xin vui lòng gọi số Hotline:<b>1900 636 798</b> <br>(08-18h, từ T2-T7) để được hỗ trợ nhanh hơn.</p>
	      	</div>
	      	<div class="col-sm-6 content-label">
	      		<!--form-horizontal-->
						<div class="sp-contact-form">
							<div class="form-group">
	              <label for="" class="control-label">Họ tên</label>
	              <input type="text" class="form-control">
	            </div>
	            <div class="form-group">
	              <label for="" class="control-label">Email</label>
	              <input type="email" class="form-control">

	            </div>
	            <div class="form-group">
	              <label for="" class="control-label">Tiêu đề</label>
	              <input type="text" class="form-control">
	            </div>
	            <div class="form-group">
	              <label for="" class="control-label">Mã đơn hàng</label>
	              <input type="text" class="form-control">

	            </div>
	            <div class="form-group">
	              <label for="" class="control-label">Nội dung</label>
	              <textarea class="form-control" rows="3"></textarea>
	            </div>
	            <div class="form-group p-group-1">
		            <input type="submit" class="btn btn-primary" value="Gửi yêu cầu">
	            </div>
			    	</div><!--/.form-horizontal-->
	      	</div>
      	</div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?php  echo $this->Html->script('myface/lib/jquery'); ?>
<?php  echo $this->Html->script('myface/plugin/moment.min'); ?>
<?php  echo $this->Html->script('myface/plugin/bootstrap'); ?>
<?php  echo $this->Html->script('myface/plugin/bootstrap-select'); ?>
<?php  echo $this->Html->script('myface/plugin/bootstrap-datetimepicker'); ?>
<?php  echo $this->Html->script('myface/plugin/slick.min'); ?>
<?php  echo $this->Html->script('myface/script'); ?>
	</div>
</body>
</html>
