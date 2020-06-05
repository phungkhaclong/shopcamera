<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Camera</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/brands.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/solid.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/regular.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
	</head>
	<body>
		<div class="container">
			<div class="top row bg-light" >
				<div class="col-md-3">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand" href="#">
					  	<img src="{{ asset('images/home/mixi.png') }}" style="width: 40%;height: 40%;">
					  </a>
						 </div> 
							<div class="col-md-5">
							    <form class="form-inline my-2 my-lg-0 search d-flex">
							      <input class="form-control mr-sm-2 border border-danger p-2 flex-fill" type="search" placeholder="Search" aria-label="Search">
							      <button class="btn btn-outline-danger my-2 my-sm-0 flex-fill" type="submit">Search</button>
							    </form>
						    </div>
						<div class="col-md-4">
							<div class="d-flex bd-highlight">
							  <div class="p-2 flex-fill bd-highlight">
							  	<p>Giờ mở cửa(8:00-19:00)<br>
							  	 <span ><a href="#" class="border-danger">0342130522</a></span></p>
							  </div>
							  <div class="p-2 flex-fill bd-highlight">
							  	<div class="d-flex bd-highlight">
								  <div class="p-2 flex-fill bd-highlight">
								  	<i class="fas fa-user"></i>
								  </div>
								  <div class="p-2 flex-fill bd-highlight">
								  	<i class="far fa-truck-monster"></i>
								  </div>
								</div>
							  </div>
							</div>
						</div>   
					</div>
				</nav>
			</div>
		</div>
		<div class="container-fluid bg-danger">
			<div class="container ">
				<div class="menu bg-danger"><!-- menu -->
					 <ul class="nav">
						<li class="nav-item">
					    	<a class="nav-link" href="#">Trang chủ</a>
					  	</li>
					  	<li class="nav-item">
					   	 	<a class="nav-link" href="#">Giới thiệu</a>
					  	</li>
					 	 <li class="nav-item">
					    	<a class="nav-link" href="#">Sản phẩm</a>
					 	 </li>
					  	<li class="nav-item">
					    	<a class="nav-link" href="#">Tin tức</a>
					 	 </li>
					 	 <li class="nav-item">
					    	<a class="nav-link" href="#">Bán chạy</a>
					 	 </li>
					 	 <li class="nav-item">
					    	<a class="nav-link" href="#">Kỹ thuật</a>
					 	 </li>
					 	 <li class="nav-item">
					    	<a class="nav-link" href="#">Liên hệ</a>
					 	 </li>
					</ul>
				</div>
			</div>
		</div><!-- end menu -->
		<div class="container "> <!-- banner -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{ asset('images/home/banner1.jpg') }}" style="height: 450px;" class="d-block w-100" alt="First">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/banner2.jpg') }}" style="height: 450px;" class="d-block w-100" alt="Second">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/banner3.jpg') }}" style="height: 450px;" class="d-block w-100" alt="Third">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>			   
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  </a>
			</div>		
		</div> <!-- end baner -->
		<div class="container  ">
			<div class="row">
				<div class="col-md-3">
					<div class="dropdown-menu-left border border-danger">
					   <span class="dropdown-item-text bg-danger text-primary">Danh mục sản phẩm</span>
					  <a class="dropdown-item border border-bottom" href="#">CAMERA có dây</a>
					  <a class="dropdown-item border border-bottom" href="#">CAMERA không dây</a>
					  <a class="dropdown-item border border-bottom" href="#">CAMERA HIKvision</a>
					  <a class="dropdown-item border border-bottom" href="#">CAMERA Dahua</a>
					  <a class="dropdown-item border border-bottom" href="#">CAMERA KBvision</a>
					</div>
				</div>
			<div class="col-md-9 border border-danger">
					<h3 class="border-bottom border-danger text-primary text-center "><a href="#" class="text-decoration-none"> CAMERA CÓ DÂY</a></h3>
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
					  <div class="carousel-inner ">
					    <div class="carousel-item active">
					      <div class="row camera1 ">
					      	<div class="col-md-3   ">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/12.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/3.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/5.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>

					    <div class="carousel-item">
					       <div class="row camera1">
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}"  style="height: 200px;" class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>

					    <div class="carousel-item">
					       <div class="row camera1">
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 13rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;" class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">Camera ngoài trời không dây Reolink RLC-410W</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
					<!-- camera không dây -->
					<h3 class="border-bottom border-danger text-primary text-center "><a href="#" class="text-decoration-none"> CAMERA KHÔNG DÂY</a></h3>
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <div class="row camera1 ">
					      	<div class="col-md-3 border-danger border-3 ">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">CAMERA có dây</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>

					    <div class="carousel-item">
					       <div class="row camera1">
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}"  style="height: 200px;" class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>

					    <div class="carousel-item">
					       <div class="row camera1">
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;" class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>				
			</div>
		</div>
		<div class="container">
			<h3 class="border-bottom border-danger text-primary text-center ">
				<a href="#" class="text-decoration-none"> CAMERA HiKvision</a>
				<a href="#" class="text-decoration-none"> CAMERA Dahua</a>
				<a href="#" class="text-decoration-none"> CAMERA KBvision</a>
			</h3>
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <div class="row camera1 ">
					      	<div class="col-md-3 border-danger border-3 ">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>

					    <div class="carousel-item">
					       <div class="row camera1">
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}"  style="height: 200px;" class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>

					    <div class="carousel-item">
					       <div class="row camera1">
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;"  class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      	<div class="col-md-3">
					      		<div class="card" style="width: 15rem;">
								  <img src="{{ asset('images/home/4.jpg') }}" style="height: 200px;" class="card-img-top">
								  <div class="card-body">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">camera số 16</p>
								    <a href="#" class="btn btn-primary">xem</a>
								    <a href="#" class="btn btn-danger">mua</a>
								  </div>
								</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
		</div>
		<div class="container">
			<div class="row">
				
			</div>
		</div>
		<div class="container bg-secondary">
				<div class="row">
					<div class="col-lg-3">
						<div class="logo-footer">
							<a href="#">
								<img src="{{ asset('images/home/mixi.png') }}" style="margin-left: 0px;width: 200px;height: 100px;margin-top: 20px;">
							</a>
						</div>
						<div class="">
							<p class="title-footer"> Công ty TNHH A&amp;M | 5S Việt Nam</p>
							<!-- <p style="text-align: justify; color: #8c8c8c;padding: 0">
								<span style="color: #c5c5c5;">Website </span> được phát triển &amp; vận hành bởi hệ thống: <span style="color: #c5c5c5;">CAMERA CHÍNH HÃNG</span><br> Địa chỉ: Tầng 5, Tòa nhà 169, Bùi Thị Xuân, Quận Hai Bà Trưng, HN<br>
								<span>Mã số doanh nghiệp: 0101389015<br>
								Cấp ngày: 27/12/2014 | Nơi cấp: Hà Nội<br>
								Email: hotro@camerachinhhang.com<br>
								Tel: (024) 3 516 0868</span>
							</p> -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-8">
								<p class="title-footer" style="margin-top: 20px;">Thông tin liên hệ</p>
								<hr style="width: 200px;margin-top:-8px;">
								<p style="text-align: justify; color: #fff;padding: 0">
								<span style="color: #fff;">Website </span> được phát triển &amp; vận hành bởi hệ thống: <span style="color: #c5c5c5;">CAMERA CHÍNH HÃNG</span><br> Địa chỉ: Tầng 5, Tòa nhà 169, Bùi Thị Xuân, Quận Hai Bà Trưng, HN<br>
								<span>Mã số doanh nghiệp: 0101389015<br>
								Cấp ngày: 27/12/2014 | Nơi cấp: Hà Nội<br>
								Email: hotro@camerachinhhang.com<br>
								Tel: (024) 3 516 0868</span>
							</p>
							</div>
							<div class="col-lg-4">
								<p class="title-footer" style="margin-top: 20px;" >THÔNG TIN HỖ TRỢ</p>
								<hr style="width:140px;margin-top:-8px;">				
								<li style="color: #fff">
									<a style="padding: 5px 0;" href="#">Camera chống trộm</a>
								</li>
								<li style="color: #fff">
									<a style="padding: 5px 0;" href="#">Camera wifi </a>
								</li>								
								<li style="color: #fff">
									<a style="padding: 5px 0;" href="#">Camera giá rẻ</a>
								</li>
								<li style="color: #fff">
									<a style="padding: 5px 0;" href="#">Camera Hikvision</a>
								</li>
								<li style="color: #fff">
									<a style="padding: 5px 0;" href="#">Camera Dahua</a>
								</li>							
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div>
							<p class="title-footer" style="margin-top: 20px;" >KẾT NỐI VỚI CHÚNG TÔI</p>
							<hr style="width: 200px;margin-top:-8px;">
							<li style="color: #8c8c8c">Để được hỗ trợ tốt nhất!</li>
						</div>
						<div class="socials-share">
							<ul>
							<li class="facebook">
								<a href="" class="fa fa-facebook"></a>
							</li>
							<li class="twitter">
								<a href="" class="fa fa-twitter"></a>
							</li>
							<li class="google-plus">
								<a href="" class="fa fa-google-plus"></a>
							</li>
							<li class="instagram">
								<a href="" class="fa fa-instagram"></a>
							</li>
							<li class="youtube">
								<a href="" class="fa fa-youtube"></a>
							</li>
							</ul>
						</div>
							
					</div>
				</div>
			</div>
		</div> <!-- end cuối -->
		
	</body>	
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>	
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</html> 