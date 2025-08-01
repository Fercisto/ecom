<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../assets/../assets/images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>
<body class="animsition">
	
	<?php
		include_once 'components/header.php';
	?>

	<!-- Product -->
	<div class="bg0 m-t-80 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
			
				<div class="flex-w flex-c-m m-tb-10 ml-auto">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Filter
					</div>
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						<input id="search-input" class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>
							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">Default</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">Popularity</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">Average rating</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">Newness</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">Price: Low to High</a>
								</li>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">Price: High to Low</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>
							<ul>
								<li class="p-b-6">
									<input type="checkbox" id="price-all" checked>
									<label for="price-all" class="filter-link stext-106 trans-04 filter-link-active">All</label>
								</li>
								<li class="p-b-6">
									<input type="checkbox" id="price-1">
									<label for="price-1" class="filter-link stext-106 trans-04">$0.00 - $100.00</label>
								</li>
								<li class="p-b-6">
									<input type="checkbox" id="price-2">
									<label for="price-2" class="filter-link stext-106 trans-04">$100.00 - $200.00</label>
								</li>
								<li class="p-b-6">
									<input type="checkbox" id="price-3">
									<label for="price-3" class="filter-link stext-106 trans-04">$200.00 - $300.00</label>
								</li>
								<li class="p-b-6">
									<input type="checkbox" id="price-4">
									<label for="price-4" class="filter-link stext-106 trans-04">$300.00 - $400.00</label>
								</li>
								<li class="p-b-6">
									<input type="checkbox" id="price-5">
									<label for="price-5" class="filter-link stext-106 trans-04">$400.00 - $500.00</label>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>
							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>
									<a href="#" class="filter-link stext-106 trans-04">Black</a>
								</li>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">Blue</a>
								</li>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>
									<a href="#" class="filter-link stext-106 trans-04">Grey</a>
								</li>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>
									<a href="#" class="filter-link stext-106 trans-04">Green</a>
								</li>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>
									<a href="#" class="filter-link stext-106 trans-04">Red</a>
								</li>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>
									<a href="#" class="filter-link stext-106 trans-04">White</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>
							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">Fashion</a>
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">Lifestyle</a>
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">Denim</a>
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">Streetstyle</a>
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">Crafts</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Template para productos (oculto) -->
			<template id="template-producto">
				<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img class="product-img" src="" alt="">
							<a href="#" class="btn-detail block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">See Details</a>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l">
								<a href="" class="product-name stext-104 cl4 hov-cl1 trans-04 p-b-6"></a>
								<span class="product-price stext-105 cl3">$0.00</span>
								<span class="product-old-price stext-105 cl3" style="text-decoration: line-through; color: #999;">$0.00</span>
							</div>
							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-add-cart btn-addwish-b2 dis-block pos-relative">
									<img class="icon-heart1 dis-block trans-04" src="../assets/images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="../assets/images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
			</template>

			<!-- Contenedor de productos -->
			<div class="row pb-3">
				<!-- Los productos se generarán dinámicamente aquí -->
			</div>

			<!-- Paginación -->
			<div class="col-12">
				<nav>
					<ul id="pagination" class="pagination justify-content-center">
						<!-- La paginación se generará dinámicamente -->
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<?php 
		include_once 'components/footer.php'; 
	?>

	<script src="js/Productos.js"></script>

</body>
</html>