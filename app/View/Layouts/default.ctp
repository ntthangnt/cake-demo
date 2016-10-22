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
	<title>myFace-onface</title>
	<!-- Styles -->
	

<?php echo $this->Html->css('myface/style.css'); ?>
<?php echo $this->Html->css('myface/bootstrap.css'); ?>
<?php echo $this->Html->css('myface/font-awesome.css'); ?>
	<!-- Favicon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" sizes="16x16" >
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<?php echo $this->Html->css('myface/ie.css'); ?>
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
		
<header class="header-row-1">
	<!--header-row-1-->
	<div class="container">
		<div class="row">
			<nav class="navbar">
		    <div class="myfaceshop-logo">
					<a href="index.html" title="myFace Shop">
						<h1 class="logo-text">
							<img class="" src="assets/images/logo/logo.png" alt="myface">
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
		          		<img src="assets/images/upload/user/user-1.jpg" class="acc-image img-circle" alt="myface">
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
		          		<img src="assets/images/upload/user/user-1.jpg" class="acc-image img-circle" alt="myface">
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


		<!--page-container-->
		
<!--header-row-2-->
<div class="header-row-2 mf-cate-nav is-sticky">
	<nav class="container navbar category-nav">
		<ul class="nav navbar-nav cate-list">
		  <li class="cate-item cate-tt">
		    <a class="" href="myface-category-1.html">
		    	<span class="cate-icon">
		    	</span>
		    	<span class="cate-name">thời trang</span>
		    </a>
		  </li>
		  <li class="cate-item cate-mb">
		    <a class="" href="myface-category-1.html">
		    	<span class="cate-icon">
		    	</span>
		    	<span class="cate-name">mẹ & bé</span>
		    </a>
		  </li>
		  <li class="cate-item cate-dtlk">
		    <a class="" href="myface-category-1.html">
		    	<span class="cate-icon">
		    	</span>
		    	<span class="cate-name">điện thoại & linh kiện</span>
		    </a>
		  </li>
		  <li class="cate-item cate-lt">
		    <a class="" href="myface-category-1.html">
		    	<span class="cate-icon">
		    	</span>
		    	<span class="cate-name">Laptop</span>
		    </a>
		  </li>
		  <li class="cate-item cate-mp">
		    <a class="" href="myface-category-1.html">
		    	<span class="cate-icon">
		    	</span>
		    	<span class="cate-name">mỹ phẩm</span>
		    </a>
		  </li>
		  <li class="cate-item cate-htd">
		    <a class="" href="myface-category-1.html">
		    	<span class="cate-icon">
		    	</span>
		    	<span class="cate-name">hàng tiêu dùng</span>
		    </a>
		  </li>
		</ul>
		<ul class="nav navbar-nav promotion-list">
      <li class="promotion-item promotion-1">
      	<a href="#">
      		<img src="assets/images/upload/pro/pro-1.png" class="" alt="myface">
      	</a>
      </li>
      <li class="promotion-item promotion-2">
      	<a href="#">
      		<img src="assets/images/upload/pro/pro-2.png" class="" alt="myface">
      	</a>
      </li>
      <li class="promotion-item promotion-3">
      	<a href="#">
      		<img src="assets/images/upload/pro/pro-3.png" class="" alt="myface">
      	</a>
      </li>
    </ul>
	</nav>
</div>

<!--/.header-row-2-->
<!--main-content-->
<main class="container">
	<!--wrap-banner-->
	<div class="wrap-banner">
	<div class="row">
		<!--banner-left-->
		<div class="col-xs-12 col-ms-9 banner-left">
			<div class="banner-item banner-1">
				<div class="banner-1-inner">
					<a href="https://myface.vn/tham-gia-la-co-qua.html"><img src="assets/images/upload/banner/banner-2.jpg" alt="myface"></a>
				</div>
        <div class="banner-1-inner">
          <a href="https://shop.myface.vn/shop/dealgiasi"><img src="assets/images/upload/banner/banner-5.jpg" alt="myface"></a>
        </div>
			</div>
		</div><!--/.banner-left-->

		<!--banner-right-->
		<div class="col-xs-12 col-xs-3 banner-right">
			<div class="banner-item banner-2">
				<a href="https://shop.myface.vn/shop/dealgiasi"><img src="assets/images/upload/banner/banner-3.jpg" alt="myface"></a>
			</div><!--/.banner-2-->
			<div class="banner-item banner-3">
				<a href="https://shop.myface.vn/shop/dealgiasi"><img src="assets/images/upload/banner/banner-4.jpg" alt="myface"></a>
			</div><!--/.banner-3-->
		</div><!--/.banner-right-->
	</div>
</div>

	<!--tabs-bar-->
  <nav class="navbar tabs-bar">
    <ul class="tabs-menu full-tabs-link">
  <li class="tab-item">
    <a href="#">Nổi bật</a>
    <ul class="dropdown-menu tab-sub">
      <li><a href="#">Mới nhất</a></li>
      <li><a href="#">Nhiều lượt xem</a></li>
      <li><a href="#">Được yêu thích</a></li>
    </ul>
  </li>
  <li class="tab-item">
    <a href="#">Sản phẩm</a>
    <ul class="dropdown-menu tab-sub">
      <li><a href="myface-shop-list.html">Shop</a></li>
    </ul>
  </li>
  <li class="tab-item">
    <a href="#">Gần đây</a>
    <ul class="dropdown-menu tab-sub">
      <li><a href="#">Trong tuần</a></li>
      <li><a href="#">Trong tháng</a></li>
      <li><a href="#">Trong năm</a></li>
      <li><a href="#">Tất cả</a></li>
    </ul>
  </li>
</ul>
  </nav><!--/.tabs-bar-->
  <!--product-block-->
  <!--wrap-product-->
  <div class="row wrap-product">
  <ol class="m-product-list">
		  
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
      
    <!--m-product-item-->
    <li class="col-xs-12 col-sm-4 col-md-3 m-product-item">
	<div class="m-product-inner">
		<div class="m-product-info">
			<a class="m-product-link" href="myface-product-detail.html">
				<figure class="m-product-img">
					<img class="" src="assets/images/upload/product/product-8.jpg" alt="myface">		
				</figure>
				<div class="m-product-hover">
					<h2 class="m-product-name">Áo thun Jeanswest bêđê hồng</h2>
					<p class="m-product-description">Áo thun jeanswest màu trắng hồng bêdê. Kiểu dáng đẹp, ôm bó sát người...</p>
					<div class="price-block">
            <span class="price current">235.000<sup>đ</sup></span>
            <span class="price original">325.000<sup>đ</sup></span> 
          </div>
				</div>	
			</a>
			<ul class="icon-links">
				<li class="m-buy"><span class="icon i-buy">123</span></li>
				<li class="m-view"><span class="icon i-view">456</span></li>
				<li class="m-like"><span class="icon i-like">789</span></li>
			</ul>
		</div>
		<h2 class="shop-name">
			<a class="shop-name-inner" href="myface-user-shop.html">
				<span class="shop-img">
					<img src="assets/images/upload/shop-img/user.jpg" alt="myface">
				</span>
				<span class="shop-name-text">Home Venten Korean</span>
			</a>
		</h2>
	</div>
</li>
    <!--/.m-product-item-->
    
  </ol>
</div><!--/.wrap-product-->
<!--loading-->
<div class="loading">
</div>
<!--load-more-->
<div class="full-width load-more">
  <button class="btn btn-loadmore">Xem thêm các sản phẩm khác </button>
</div>
<!--fixed-block-->
<div class="fixed-block">
  <!--cart-block-->
  <div class="cart-block">
    <a class="cart-link" href="myface-cart.html" data-placement="bottom" title="" data-original-title="Giỏ hàng của bạn">
      <span class="cart-number">0</span>
    </a>
  </div>
  <div class="back-to-top">
    <button class="btn back-to-top-btn"></button>
  </div>
</div>
<!--/.fixed-block-->
</main>

		<!--footer-->
		
<!--footer-->
<footer class="main-footer">
  <div class="container">
  	<!--footer-row-1-->
    <div class="footer-row-1">
      <div class="row">
      	<div class="col-sm-6 col-md-3 f-block-1">
          <ul class="list-group">
            <li class="li-item f-logo">
              <a href="#"><img class="" src="assets/images/logo/logo.png" alt="myface"></a>
            </li>
            <li class="li-item f-title">myFace Shop là gì?</li>
            <li class="li-item">
              <a class="mf-about" href="support-center.html">
                <p>myFace Shop là trang Thương mại điện tử và là Cộng đồng mua bán sôi động các sản phảm với giá cả phù hợp cho mọi người... <span class="readmore">Xem thêm</span></p>
              </a>
            </li>
            <li class="li-item f-bct">
              <span class="bct"><img class="" src="assets/images/upload/fb/bct.png" alt="myface"></span>
              <span class="nt"><img class="" src="assets/images/upload/fb/nt.png" alt="myface"></span>
            </li>
          </ul>
      	</div>
      	<div class="col-sm-6 col-md-2 f-block-2">
      		<ul class="list-group">
            <li class="li-item f-phone">
              <a href="tel:1900636798">
                Hotline hỗ trợ
                <span class="f-title">1900 636 798</span>
                (08-18h / T2-T7)
              </a>
            </li>
    			  <li class="li-item">
              <a href="support-center.html">Giới thiệu</a>
            </li>
    			   <li class="li-item">
              <a href="support-center.html">Quy chế sàn giao dịch</a>
            </li>
             <li class="li-item">
              <a href="support-center.html">Chính sách bảo mật</a>
            </li>
             <li class="li-item">
              <a href="support-center.html">Tuyên bố miễn trừ</a>
            </li>
             <li class="li-item">
              <a href="#" data-toggle="modal" data-target="#contact-modal">Liên hệ</a>
            </li>
    			</ul>
      	</div>
      	<div class="col-sm-6 col-md-2 f-block-3">
      		<ul class="list-group">
            <li class="li-item f-title">Hỗ trợ người mua</li>
            <li class="li-item">
              <a href="support-center.html">Hướng dẫn người mua</a>
            </li>
             <li class="li-item">
              <a href="support-center.html">Bảo vệ người mua</a>
            </li>
             <li class="li-item">
              <a href="support-center.html">Đổi trả - bảo hành</a>
            </li>
             <li class="li-item">
              <a href="support-center.html">Giải quyết khiếu nại</a>
            </li>
            <li class="li-item">
              <a href="support-center.html">Bảo mật thông tin</a>
            </li>
          </ul>
      	</div>
      	<div class="col-sm-6 col-md-2 f-block-4">
      		<ul class="list-group">
            <li class="li-item f-title">Dành cho người bán</li>
            <li class="li-item">
              <a href="#">Bán hàng trên myFace Shop</a>
            </li>
             <li class="li-item">
              <a href="#">Quy định pháp lý</a>
            </li>
             <li class="li-item">
              <a href="#">Quy định hàng hóa</a>
            </li>
             <li class="li-item">
              <a href="#">Ưu đã & hợp tác</a>
            </li>
            <li class="li-item">
              <a class="create-shop" href="#">Mở myFace Shop</a>
            </li>
          </ul>
      	</div>
      	<div class="col-sm-6 col-md-3 f-block-5">
      		<ul class="list-group">
            <li class="li-item f-title">Kết nối myFace</li>
            <li class="li-item">
              <img src="assets/images/upload/fb/fb-1.jpg" alt="myface">
            </li>
          </ul>
      	</div>
      </div>
    </div><!--footer-row-1-->
    <!--footer-row-2-->
    <div class="footer-row-2">
      <p class="f-address">©2016 - Công ty TNHH Thương mại Điện Tử Modern Life Địa chỉ: P802, C.T Plaza Trường Sơn, P.2, Q. Tân Bình, TP. Hồ Chí Minh. GP số: 0312952658 do Sở kế hoạch & Đầu tư TP. Hồ Chí Minh cấp ngày 02/10/2014</p>
    </div><!--/.footer-row-2-->
  </div>
</footer><!--/.footer-->


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
