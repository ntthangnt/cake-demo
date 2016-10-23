<header class="header-row-1">
	<!--header-row-1-->
	<div class="container">
		<div class="row">
			<nav class="navbar">
		    <div class="myfaceshop-logo">
					<a href="index.html" title="myFace Shop">
						<h1 class="logo-text">
							<?php echo $this->Html->image('myface/logo/logo.png') ?>
						</h1>
					</a>
				</div>

		    <div class="search-nav">
          <a class="close-btn search-close" href="javascript:void(0)"></a>
		      <div class="input-group header-search">
						<div class="input-group-btn">
							<select class="selectpicker cate-search">
								<option>Tất cả</option>
								<option>Điện thoại & linh kiện</option>
								<option>Mẹ & bé</option>
								<option>Laptop</option>
								<option>Thời trang</option>
                <option>Hàng tiêu dùng</option>
                <option>Mỹ phẩm</option>
							</select>
						</div>
						<input aria-label="..." class="form-control input-search" placeholder="Tìm sản phẩm bạn quan tâm" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default btn-search"></button>
						</div>
					</div>
		    </div>

		    <div class="account-nav">
		    	<ul class="nav navbar-nav">
            <!--show-search-btn-->
            <li class="show-search-btn">
              <a class="show-search-active" href="javascript:void(0)"></a>
            </li>
		    		<!--account-block-->
		        <li class="dropdown account-block">
		          <a href="#" class="dropdown-toggle account-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          	<div class="account-img">

		          		<?php echo $this->Html->image('myface/upload/user/user-1.jpg', array('class'=>"acc-image img-circle", 'alt'=>"myface")) ?>
		          	</div>
		          	<div class="account-label">
                  <span class="account-label-1" data-original-title="" title="">Natalie Berowska</span>
              	</div>
		          </a>
		          <ul class="dropdown-menu account-dropdown">
		            <li><a href="user-account-general.html">Quản lý tài khoản</a></li>
		            <li><a href="user-account-order-info.html">Đơn hàng của tôi</a></li>
		            <li><a href="#">Thông tin giao hàng</a></li>
		            <li><a href="#">Điểm thưởng - điểm tích lũy</a></li>
		            <li><a href="#">Thoát khỏi tài khoản</a></li>
		          </ul>
		          <a class="invoice-tracking" href="#">
		          	<span class="account-label-2" data-placement="bottom" title="" data-original-title="Cấu hình &amp; quản lý tài khoản">Theo dõi đơn hàng</span>
		          </a>
		        </li>
		        <!--/.account-block-->

		        <!--account-block login-->
		        <li class="dropdown account-block" style="display: none;">
		          <a href="#" class="dropdown-toggle account-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		          	<div class="account-img">
		          		<?php echo $this->Html->image('myface/upload/user/user-1.jpg', array('acc-image img-circle', alt=>'myface')) ?>
		          	</div>
		          	<div class="account-label">
                  <span class="account-label-1" data-original-title="" title="">Tài khoản của bạn</span>
              	</div>
		          </a>
		          <ul class="dropdown-menu login-dropdown">
		    				<label class="form-title">Đăng nhập</label>
		    				<li class="form-group lg-row-1">
		              <button class="btn btn-default btn-lg-by-face"><i class="fa fa-facebook"></i>Đăng nhập siêu gọn bằng Facebook</button>
		            </li>
		            <div class="lg-divider"></div>
		    				<li class="form-group lg-row-2">
		              <input type="tel" class="form-control" placeholder="Đăng nhập bằng số điện thoại">
		            </li>
		            <li class="form-group lg-row-3">
		              <input type="password" class="form-control" placeholder="Nhập mật khẩu">
		            </li>
		            <li class="form-group lg-row-4">
			            <div class="checkbox color-radio">
			            	<label class="remember-text">
		            	 		<input type="checkbox" name="" id="" value="" checked="">
											<span>Nhớ tài khoản</span>
			            	</label>
			            </div>
			            <a class="lg-a-text pull-right" href="forgot-pass.html">Quên mật khẩu?</a>
			           </li>
		            <li class="form-group lg-row-5">
		            	<input type="submit" class="btn btn-primary lg-button" value="Đăng nhập">
		            </li>
		            <li class="form-group lg-row-6">
		            	<div class="pull-right">
		            		<span class="lg-span-text"> Chưa có tài khoản?</span> <a class="lg-a-text" href="#">Đăng ký</a>
		            	</div>
		            </li>
		          </ul>

		          <a class="invoice-tracking" href="#">
		          	<span class="account-label-2" data-placement="bottom" title="" data-original-title="Cấu hình &amp; quản lý tài khoản">Theo dõi đơn hàng</span>
		          </a>
		        </li><!--/.account-block login-->
		        <!--cart-block-->
		        <li class="cart-block">
		        	<a class="cart-link" href="myface-cart.html" data-placement="bottom" title="" data-original-title="Giỏ hàng của bạn">
		        		<span class="cart-number">0</span>
		        	</a>
		        </li>
		      </ul>
		    </div>
			</nav>
		</div>
	</div><!--/.header-row-1-->
</header>