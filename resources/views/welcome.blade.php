
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>مجله كليه العلوم</title>
	
	<!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/subscribe-better.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link id="preset" rel="stylesheet" type="text/css" href="css/preset1.css">
	<link href="css/responsive.css" rel="stylesheet">	
		<link href="css/cos.css" rel="stylesheet">	
	
	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
	<div id="main-wrapper" class="homepage">
		<header id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<a class="secondary-logo" href="index.html">
						<img class="img-responsive" src="images/presets/preset1/logo.png" alt="logo">
					</a>
				</div>
				<div class="topbar">
					<div class="container">
						<div id="topbar" class="navbar-header">							
							<a class="navbar-brand" href="index.html">
								<img class="main-logo img-responsive" src="images/presets/preset1/logo.jpg" alt="logo">
								<p class ="f">كليه العلوم</p>
							</a>
							<div id="topbar-right">
								<div class="dropdown language-dropdown">						
									<a data-toggle="dropdown" href="#"><span class="change-text">En</span> <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu language-change">
									
										<li><a href="#">AR</a></li>
								
									</ul>								
								</div>
								<div id="date-time"></div>
								<div id="weather"></div>
							</div>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> 
					</div> 
				</div> 
				<div id="menubar" class="container">	
					<nav id="mainmenu" class="navbar-right collapse navbar-collapse"> 
						<ul class="nav navbar-nav">                       
						
							
							</li>
					
						
							<li class="health"><a href="listing.html">ترفيه</a></li>
								<li class="sports"><a href="listing-sports.html">علوم الحاسبات</a></li>
							<li class="sports"><a href="listing-sports.html">علوم الرياضيات</a></li>
							<li class="health"><a href="listing.html">علوم الجو</a></li>
							<li class="health"><a href="listing.html">علوم الفيزياء</a></li>
							<li class="health"><a href="listing.html">علوم كيمياء</a></li>
								<li class="health"><a href="listing.html">علوم الحياه</a></li>
							
						
						
						</ul> 					
					</nav>
					<div class="searchNlogin navbar-left">
						<ul>
							<li class="search-icon"><i class="fa fa-search"></i></li>
							<li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
								<div class="dropdown-menu top-user-section">
									<div class="top-user-form">
										<form id="top-login" role="form" method="post" action="{{ url('/login') }}">
										           {{ csrf_field() }}
											<div class="input-group" id="top-login-username">
												<span class="input-group-addon"><img src="images/others/user-icon.png" alt="" /></span>
												<input type="email" class="form-control" name="email" placeholder="البريد"  required>
												 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                     
											</div>
											<div class="input-group" id="top-login-password">
												<span class="input-group-addon"><img src="images/others/password-icon.png" alt="" /></span>
												<input type="password" class="form-control" name="password" placeholder="Password" required="">
											</div>
											<div>
											
												<button class="btn btn-danger" type="submit">دخول</button>
											</div>
										</form>
									</div>
									<div class="create-account">
										<a href="{{url('register')}}">انشاء حساب جديد</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="search">
							<form role="form">
								<input type="text" class="search-form" autocomplete="off" placeholder="Type & Press Enter">
							</form>
						</div> <!--/.search--> 
					</div><!-- searchNlogin -->
				</div>
			</div>
		</header><!--/#navigation--> 

	
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="site-content col-md-9">
						<div class="row">
							<div class="col-sm-8">
								<div id="home-slider">
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/1.jpg" alt="" />
											</div>
											<div class="catagory world"><a href="#">World</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">We Are Seeing The Effects Of The Minimum Wage Rise In San Francisco</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/7.jpg" alt="" />
											</div>
											<div class="catagory sports"><a href="#">Sports</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">The 20 moments in sports that tried to break the Internet in 2015</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/13.jpg" alt="" />
											</div>
											<div class="catagory entertainment"><a href="#">Entertainment</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">The best games in 2015 for your new iPhone, iPad, or Android phone</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/12.jpg" alt="" />
											</div>
											<div class="catagory world"><a href="#">World</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">The Force Awakens doubles previous Christmas Day record with $49.3 million box office</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/14.jpg" alt="" />
											</div>
											<div class="catagory sports"><a href="#">Sports</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">Bran Stark is all grown up in new 'Game of Thrones' Season 6 photo</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/10.jpg" alt="" />
											</div>
											<div class="catagory entertainment"><a href="#">Entertainment</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">Watch directors Quentin Tarantino and Paul Thomas Anderson geek out over 70mm film</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/11.jpg" alt="" />
											</div>
											<div class="catagory world"><a href="#">World</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">'Affluenza' teen arrested in Mexican resort after weeks on the run</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/8.jpg" alt="" />
											</div>
											<div class="catagory sports"><a href="#">Sports</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">Peyton Manning deserved a better ending -- if he's telling the truth</a>
											</h2>
										</div>
									</div><!--/post--> 
									<div class="post feature-post">
										<div class="entry-header">
											<div class="entry-thumbnail">
												<img class="img-responsive" src="images/post/slider/9.jpg" alt="" />
											</div>
											<div class="catagory entertainment"><a href="#">Entertainment</a></div>
										</div>
										<div class="post-content">								
											<div class="entry-meta">
												<ul class="list-inline">
													<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 1, 2015 </a></li>
													<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
													<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
													<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
												</ul>
											</div>
											<h2 class="entry-title">
												<a href="news-details.html">44 books on 44 presidents: Welcome, folks, to the Adams administration</a>
											</h2>
										</div>
									</div><!--/post--> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="post feature-post">
									<div class="entry-header">
										<div class="entry-thumbnail">
											<img class="img-responsive" src="images/post/slider/2.jpg" alt="" />
										</div>
										<div class="catagory health"><span><a href="#">Health</a></span></div>
									</div>
									<div class="post-content">								
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 7, 2015 </a></li>
												<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
												<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
											</ul>
										</div>
										<h2 class="entry-title">
											<a href="news-details.html">Manhunt intensifies for fugitive in Kentucky, Tennessee</a>
										</h2>
									</div>
								</div><!--/post--> 
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="post feature-post">
									<div class="entry-header">
										<div class="entry-thumbnail">
											<img class="img-responsive" src="images/post/slider/3.jpg" alt="" />
										</div>
										<div class="catagory technology"><span><a href="#">Technology</a></span></div>
									</div>
									<div class="post-content">								
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 2, 2015 </a></li>
												<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
												<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
											</ul>
										</div>
										<h2 class="entry-title">
											<a href="news-details.html">Japan in four gorgeous Pokémon-themed colors</a>
										</h2>
									</div>
								</div><!--/post--> 	
							</div>
							<div class="col-sm-4">
								<div class="post feature-post">
									<div class="entry-header">
										<div class="entry-thumbnail">
											<img class="img-responsive" src="images/post/slider/5.jpg" alt="" />
										</div>
										<div class="catagory entertainment"><a href="#">Entertainment</a></div>
									</div>
									<div class="post-content">								
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 3, 2015 </a></li>
												<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
												<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
											</ul>
										</div>
										<h2 class="entry-title">
											<a href="news-details.html">We finally found out how BB-8 really works</a>
										</h2>
									</div>
								</div><!--/post--> 
							</div>
							<div class="col-sm-4">
								<div class="post feature-post">
									<div class="entry-header">
										<div class="entry-thumbnail">
											<img class="img-responsive" src="images/post/slider/6.jpg" alt="" />
										</div>
										<div class="catagory politics"><span><a href="#">Politics</a></span></div>
									</div>
									<div class="post-content">								
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> Nov 5, 2015 </a></li>
												<li class="views"><i class="fa fa-eye"></i><a href="#">15k</a></li>
												<li class="loves"><i class="fa fa-heart-o"></i><a href="#">278</a></li>
											</ul>
										</div>
										<h2 class="entry-title">
											<a href="news-details.html">And the most streamed Beatles song on Spotify is..</a>
										</h2>
									</div>
								</div><!--/post--> 
							</div>
						</div>
					</div><!--/#content--> 
					
					<div class="col-md-3 visible-md visible-lg">
						<div class="add featured-add">
						<div id="button">
  <ul>
   <li><a href="#">الرويا والاهداف</a></li>
  <li><a href="#">نطاق مواضيع المجله</a></li>
    <li><a href="#">هيئه التحرير والبحث</a></li>
    <li><a href="#">صيغه قالب البحث</a></li>
    <li><a href="#">رسوم البحث</a></li>
    <li><a href="#">تقيم البحث</a></li>
    <li><a href="#">الاعداد السابقه</a></li>
    <li><a href="#">الاسئله الاكثر شيوعا</a></li>
    <li><a href="#">عن المجله</a></li>
    <li><a href="#">انصل  بنا</a></li>
  </ul>
</div>
					</div><!--/#add--> 
				</div>
			</div><!--/.section--> 
			
			<div class="section add inner-add">
				<a href="#"><img class="img-responsive" src="images/post/add/add2.jpg" alt="" /></a>
			</div><!--/.section-->
			
			<div class="section">				
				<div class="latest-news-wrapper">
					<h1 class="section-title">اخر البحوث</h1>	
					<div id="latest-news">
					@foreach($searchs as $search)
						<div class="post medium-post">
							<div class="entry-header">
								<div class="entry-thumbnail">
									<img class="img-responsive" src="uploads/images/{{$search->search_image}}" alt="" />
								</div>
								<div class="catagory politics"><span><a href="#">{{$search->search_name}}</a></span></div>
							</div>
							<div class="post-content">								
								<div class="entry-meta">
									<ul class="list-inline">
										<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 5, 2015 </a></li>
										<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
										<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
									</ul>
								</div>
								<h2 class="entry-title">
									<a href="uploads/file/{{$search->search_file}}">{{$search->search_dis}}</a>
								</h2>
							</div>
						</div><!--/post--> 
					@endforeach
					</div>
				</div><!--/.latest-news-wrapper-->
			</div><!--/.section-->
			
			<div class="section">
				<div class="row">
					<div class="col-md-9 col-sm-8">
						<div id="site-content">
							<div class="row">
								<div class="col-md-8 col-sm-6">
									<div class="left-content">
										<div class="section world-news">
											<h1 class="section-title title">بحوث كليه علوم الرياضيات</h1>
											@foreach($maths as $math)

											<div class="post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="uploads/images/{{$math->search_image}}" alt="" />
													</div>
												</div>
												<div class="post-content">								
													<div class="entry-meta">
														<ul class="list-inline">
															<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
															<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
															<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
															<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
														</ul>
													</div>
													<h2 class="entry-title">
														<a href="uploads/images/{{$math->search_file}}">{{$math->search_name}}</a>
													</h2>
													<div class="entry-content">
														<p>{{$math->search_dis}}</p>
													</div>
												</div>
												<div class="list-post">
													<ul>
														<li><a href="#">Detroit natives wary as recovery threatens to push them out <i class="fa fa-angle-right"></i></a></li>
														<li><a href="#">NBA impersonator does incredible Curry & Green impressions<i class="fa fa-angle-right"></i></a></li>
														<li><a href="#">Cellular carriers could gain some surprising competitors <i class="fa fa-angle-right"></i></a></li>
													</ul>
												</div><!--/list-post--> 
											</div><!--/post-->
											@endforeach
									</div><!--/.section-->

									<div class="section technology-news">
											<h1 class="section-title">بحوث كليه علوم الحاسوب</h1>
											<div class="cat-menu">         
												<a href="listing.html">See all</a>					
											</div>
											<div class="row">
												<div class="col-md-8 col-sm-12">
													@foreach($computers as $computer)
													<div class="post">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive" src="uploads/images/{{$computer->search_image}}" alt="" />
															</div>
														</div>
														<div class="post-content">								
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
																	<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																	<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
																	<li class="comments"><i class="fa fa-comment-o"></i><a href="#">189</a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="uploads/file/{{$computer->search_file}}">{{$computer->search_name}}</a>
															</h2>
															<div class="entry-content">
																<p>{{$computer->search_name}}</p>
																الباحث
																<p>{{$computer->user_name}}</p>
															</div>
														</div>
													</div><!--/post-->
														@endforeach
												</div>
												<div class="col-md-4 col-sm-12">
													<div class="post small-post">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive" src="images/post/t2.jpg" alt="" />
															</div>
														</div>
														<div class="post-content">
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">Samsung Pay will support online shop</a>
															</h2>
														</div>
													</div><!--/post-->
													<div class="post small-post">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive" src="images/post/t3.jpg" alt="" />
															</div>
														</div>
														<div class="post-content">
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">Why is the media so afraid of Facebook?</a>
															</h2>
														</div>
													</div><!--/post-->
												</div>
											</div>
										</div><!--/technology-news--> 
										
										<div class="section add inner-add">
											<a href="#"><img class="img-responsive" src="images/post/add/add4.jpg" alt="" /></a>
										</div><!--/.section add-->
										
										<div class="section photo-gallery">
											<h1 class="section-title title">استديو الجامعه</h1>	
											<div class="cat-menu">         
												<a href="listing.html">See all</a>					
											</div>
											<div id="photo-gallery" class="carousel slide carousel-fade post" data-ride="carousel">						
												<div class="carousel-inner">
													<div class="item active">
														<a href="#"><img class="img-responsive" src="images/gallery/1.jpg" alt="" /></a>
														<h2><a href="#">No one can agree on how a dog is supposed to wear human pants</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/2.jpg" alt="" /></a>
														<h2><a href="#">500-pound elephant seal causes traffic jam while repeatedly</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/3.jpg" alt="" /></a>
														<h2><a href="#">I rode a Metroboard electric skateboard 30 miles around Manhattan</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/4.jpg" alt="" /></a>
														<h2><a href="#">The super creepy side of the Internet of Things and smart homes</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/5.jpg" alt="" /></a>
														<h2><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/6.jpg" alt="" /></a>
														<h2><a href="#">Someone has calculated the total cost of saving Matt Damon</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/7.jpg" alt="" /></a>
														<h2><a href="#">Wet wedding: Yorkshire couple dons wellies to tie the knot in flooded town</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/8.jpg" alt="" /></a>
														<h2><a href="#">This dog is so stoked for his Christmas present he can hardly stand it</a></h2>
													</div>
													<div class="item">
														<a href="#"><img class="img-responsive" src="images/gallery/9.jpg" alt="" /></a>
														<h2><a href="#">The world's richest people lost $19 billion in 2015, but Jeff Bezos</a></h2>
													</div>
												</div><!--/carousel-inner-->
												
												<ol class="gallery-indicators carousel-indicators">
													<li data-target="#photo-gallery" data-slide-to="0" class="active">
														<img class="img-responsive" src="images/gallery/thumb1.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="1">
														<img class="img-responsive" src="images/gallery/thumb2.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="2">
														<img class="img-responsive" src="images/gallery/thumb3.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="3">
														<img class="img-responsive" src="images/gallery/thumb4.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="4">
														<img class="img-responsive" src="images/gallery/thumb5.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="5">
														<img class="img-responsive" src="images/gallery/thumb6.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="6">
														<img class="img-responsive" src="images/gallery/thumb7.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="7">
														<img class="img-responsive" src="images/gallery/thumb8.png" alt="" />
													</li>
													<li data-target="#photo-gallery" data-slide-to="8">
														<img class="img-responsive" src="images/gallery/thumb9.png" alt="" />
													</li>
												</ol><!--/gallery-indicators-->
												
												<div class="gallery-turner">
													<a class="left-photo" href="#photo-gallery" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
													<a class="right-photo" href="#photo-gallery" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
												</div>
											</div>
										</div><!--/photo-gallery--> 
										
										<div class="section lifestyle-section">
											<h1 class="section-title">بحوث كليه علوم الحياه</h1>
											<div class="cat-menu">         
												<a href="listing-life-style.html">See all</a>					
											</div>
											<div class="row">

												<div class="col-md-6">
													@foreach($lives as $live)
													<div class="post medium-post">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive" src="uploads/images/{{$live->search_image}}" alt="" />
															</div>
														</div>
														<div class="post-content">
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
																	<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
																	<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="uploads/images/{{$live->search_file}}">{{$live->search_name}}</a>
															</h2>
														</div>
													</div><!--/post-->


													@endforeach
													</div>


											</div>
										</div><!--/.lifestyle -->
										
										<div class="section health-section">
											<h1 class="section-title">بحوث كليه علوم الفيزياء</h1>
											<div class="cat-menu">         
												<a href="listing-life-style.html">See all</a>					
											</div>

											<div class="row">
												@foreach($chemcis as $chemci)
												<div class="col-sm-12 col-md-6">

													<div class="post small-post">
														<div class="entry-header">
															<div class="entry-thumbnail">
																<img class="img-responsive" src="uploads/images/{{$chemci->search_image}}" alt="" />
															</div>
														</div>
														<div class="post-content">								
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
																	<p>{{$chemci->search_dis}}</p>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="uploads/file/{{$chemci->search_file}}">{{$chemci->search_name}}</a>
															</h2>
														</div>
													</div><!--/post-->


												</div>
												@endforeach
												<div class="col-sm-12 col-md-6">

												</div>
											</div>
										</div><!--/.health-section -->
										
									</div><!--/.left-content-->
								</div>
								<div class="col-md-4 col-sm-6">
									<div class="middle-content">
										<div class="section sports-section">
											<h1 class="section-title title">بحوث كليه العلوم الكيمياء</h1>
											<div class="cat-menu">         
												<a href="listing-sports.html">See all</a>					
											</div>										
											<div class="football-result post">
												<div class="featured-resul">
											
													<div class="row">
														
													
													</div>
												</div>
										
											</div>
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="images/others/sports1.jpg" alt="" />
													</div>
												</div>
												<div class="post-content">								
													<div class="entry-meta">
														<ul class="list-inline">
															<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
															<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
															<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
														</ul>
													</div>
													<h2 class="entry-title">
														<a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
													</h2>
												</div>
											</div><!--/post--> 
											
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="images/post/sports/2.jpg" alt="" />
													</div>
												</div>
												<div class="post-content">								
													<div class="entry-meta">
														<ul class="list-inline">
															<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
															<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
															<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
														</ul>
													</div>
													<h2 class="entry-title">
														<a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
													</h2>
												</div>
											</div><!--/post--> 
											
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="images/post/sports/1.jpg" alt="" />
													</div>
												</div>
												<div class="post-content">								
													<div class="entry-meta">
														<ul class="list-inline">
															<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
															<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
															<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
														</ul>
													</div>
													<h2 class="entry-title">
														<a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
													</h2>
												</div>
											</div><!--/post--> 
											
										</div><!--/.sports-section -->
										
										<div class="section">
											<div class="add inner-add">
												<a href="#"><img class="img-responsive" src="images/post/add/add5.jpg" alt="" /></a>
											</div>
										</div>
										
										<div class="section video-section">
											<h1 class="section-title title">بحوث كليه علوم الجو</h1>
											<div class="cat-menu">         
												<a href="listing.html">See all</a>					
											</div>
											<div class="post video-post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" allowfullscreen></iframe>
													</div>
												</div>
												<div class="post-content">								
													<div class="video-catagory"><a href="#">World</a></div>
													<h2 class="entry-title">
														<a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
													</h2>
												</div>
											</div><!--/post-->
											
											<div class="video-post-list">
												<ul>
													<li>
														<div class="post video-post small-post">
															<div class="entry-header">
																<div class="entry-thumbnail embed-responsive embed-responsive-16by9">
																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" allowfullscreen></iframe>
																</div>
															</div>
															<div class="post-content">								
																<div class="video-catagory"><a href="#">World</a></div>
																<h2 class="entry-title">
																	<a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
																</h2>
															</div>
														</div><!--/post-->
													</li>
													<li>
														<div class="post video-post small-post">
															<div class="entry-header">
																<div class="entry-thumbnail embed-responsive embed-responsive-16by9">
																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" allowfullscreen></iframe>
																</div>
															</div>
															<div class="post-content">								
																<div class="video-catagory"><a href="#">Business</a></div>
																<h2 class="entry-title">
																	<a href="news-details.html">3 students arrested after body-slamming principal</a>
																</h2>
															</div>
														</div><!--/post-->
													</li>
													<li>
														<div class="post video-post small-post">
															<div class="entry-header">
																<div class="entry-thumbnail embed-responsive embed-responsive-16by9">
																	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WlqrkXImsk" allowfullscreen></iframe>
																</div>
															</div>
															<div class="post-content">								
																<div class="video-catagory"><a href="#">World</a></div>
																<h2 class="entry-title">
																	<a href="news-details.html">Our closest relatives aren't fans of daylight saving time</a>
																</h2>
															</div>
														</div><!--/post-->
													</li>
												</ul>
											</div>											
										</div> <!-- /.video-section -->
										
										<div class="section business-section">
											<h1 class="section-title">Business</h1>
											<div class="cat-menu">         
												<a href="listing.html">See all</a>					
											</div>
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="images/post/business/4.jpg" alt="" />
													</div>
												</div>
												<div class="post-content">								
													<div class="entry-meta">
														<ul class="list-inline">
															<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
															<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
															<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
														</ul>
													</div>
													<h2 class="entry-title">
														<a href="news-details.html">We are seeing the effects of the minimum wage san francisco</a>
													</h2>
												</div>
											</div><!--/post--> 
											
											<div class="stock-exchange text-center">
												<div class="stock-exchange-zone">
													<a href="#"><img class="img-responsive" src="images/gallery/stock.png" alt="" /></a>
												</div>
												<div class="stock-header">
													<div class="row">
														<div class="col-xs-4">Name</div>
														<div class="col-xs-4">Price</div>
														<div class="col-xs-4">%+/-</div>
													</div>
												</div>
												<div class="stock-reports">
													<div class="com-details">
														<div class="row">
															<div class="col-xs-4 com-name">BP</div>
															<div class="col-xs-4 current-price">388.65</div>
															<div class="col-xs-4 current-result">+0.58 <i class="fa fa-caret-up"></i></div>
														</div>
													</div>													
													<div class="com-details">
														<div class="row">
															<div class="col-xs-4 com-name">Royal Ba...</div>
															<div class="col-xs-4 current-price">318.25</div>
															<div class="col-xs-4 current-result">+0.32 <i class="fa fa-caret-up"></i></div>
														</div>
													</div>
													<div class="com-details">
														<div class="row">
															<div class="col-xs-4 com-name">Inmarsat</div>
															<div class="col-xs-4 current-price">214.19</div>
															<div class="col-xs-4 current-result">-0.43 <i class="fa fa-caret-down"></i></div>
														</div>
													</div>
												</div>												
											</div>
										</div><!-- /.business-section -->
										
									</div><!--/.middle-content-->
								</div>
							</div>
						</div><!--/#site-content-->
					</div>
					<div class="col-md-3 col-sm-4">
						<div id="sitebar">
							<div class="widget follow-us">
								<h1 class="section-title title">Follow Us</h1>
								<ul class="list-inline social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div><!--/#widget-->
							
							<div class="widget">
								<div class="add">
									<a href="#"><img class="img-responsive" src="images/post/add/add3.jpg" alt="" /></a>
								</div>
							</div><!--/#widget-->
							
							<div class="widget">
								<h1 class="section-title title">اخر الاخبار العالميه</h1>
								<ul class="post-list">
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/1.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">World</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post--> 
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/2.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Business</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/3.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Sports</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/4.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Technology</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/5.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Politics</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/6.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Health</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/7.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Lifestyle</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/8.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Entertainment</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/7.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Business</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
								</ul>
							</div><!--/#widget-->
							
							<div class="widget">
								<div class="add">
									<a href="#"><img class="img-responsive" src="images/post/add/add6.jpg" alt="" /></a>
								</div>
							</div><!--/#widget-->
							
							<div class="widget weather-widget">
								<div id="weather-widget"></div>
							</div><!--/#widget-->
							
							<div class="widget meta-widget">
								<h1 class="section-title title">Widget</h1>
								<div class="meta-tab">
									<ul class="nav nav-tabs nav-justified" role="tablist">
										<li role="presentation"><a href="#author" data-toggle="tab"><i class="fa fa-user"></i>Authors</a></li>
										<li role="presentation" class="active"><a href="#comment" data-toggle="tab"><i class="fa fa-comment-o"></i>Comments</a></li>
										<li role="presentation"><a href="#tag" data-toggle="tab"><i class="fa fa-inbox"></i>Tag</a></li>
									</ul>
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane" id="author">
											<ul class="authors-post">
												
												<li>
													<div class="post small-post">
														<div class="post-content">	
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">Jhon Due,</a></li>
																	<li class="publish-date"><a href="#">Dec 11, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												<li>
													<div class="post small-post">
														<div class="post-content">	
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">Matt Cloey</a></li>
																	<li class="publish-date"><a href="#">Dec 15, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												<li>
													<div class="post small-post">
														<div class="post-content">	
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">KOlony Wispe</a></li>
																	<li class="publish-date"><a href="#">Nov 25, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												
												<li>
													<div class="post small-post">
														<div class="post-content">
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">Matt Cloey</a>,</li>
																	<li class="publish-date"><a href="#">Nov 5, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												<li>
													<div class="post small-post">
														<div class="post-content">
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">Mike Tinson</a>,</li>
																	<li class="publish-date"><a href="#">Nov 18, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane active" id="comment">
											<ul class="comment-list">
												<li>
													<div class="post small-post">
														<div class="post-content">	
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">Matt Cloey ,</a></li>
																	<li class="publish-date"><a href="#">Dec 15, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												<li>
													<div class="post small-post">
														<div class="post-content">	
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">Jhon Due ,</a></li>
																	<li class="publish-date"><a href="#">Dec 11, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												<li>
													<div class="post small-post">
														<div class="post-content">	
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">KOlony Wispe ,</a></li>
																	<li class="publish-date"><a href="#">Nov 25, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												<li>
													<div class="post small-post">
														<div class="post-content">	
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">KOlony Wispe</a></li>
																	<li class="publish-date"><a href="#">Nov 25, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
												<li>
													<div class="post small-post">
														<div class="post-content">
															<div class="entry-meta">
																<ul class="list-inline">
																	<li class="post-author"><a href="#">Mike Tinson ,</a></li>
																	<li class="publish-date"><a href="#">Nov 18, 2015 </a></li>
																</ul>
															</div>
															<h2 class="entry-title">
																<a href="news-details.html">3 students arrested after body-slamming principal</a>
															</h2>
														</div>
													</div><!--/post-->
												</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane" id="tag">
											<ul class="list-inline tag-cloud">
												<li><a href="#">Business</a>,</li>
												<li><a href="#">Creative</a>,</li>
												<li><a href="#">Marketing</a>,</li>
												<li><a href="#">Bloging</a>,</li>
												<li><a href="#">Science</a>,</li>
												<li><a href="#">Multipurpose</a>,</li>
												<li><a href="#">Graphics</a>,</li>
												<li><a href="#">Art</a>,</li>
												<li><a href="#">Politics</a>,</li>
												<li><a href="#">News</a>,</li>
												<li><a href="#">Sports</a>,</li>
												<li><a href="#">World</a>,</li>
												<li><a href="#">Lifestyle</a>,</li>
												<li><a href="#">Health</a>,</li>
												<li><a href="#">Environment</a>,</li>
												<li><a href="#">Entertainment</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div><!--/#widget-->
							
						</div><!--/#sitebar-->
					</div>
				</div>				
			</div><!--/.section-->
		</div><!--/.container-->
		<div id="twitter-feed">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="twitter-feeds">
							<div class="twitter-feed">
								<img class="img-responsive" src="images/others/twitter.png" alt="" />
								<h2>#Newspress</h2>
								<p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
							</div>
							<div class="twitter-feed">
								<img class="img-responsive" src="images/others/twitter.png" alt="" />
								<h2>#ThemeRegion</h2>
								<p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
							</div>
							<div class="twitter-feed">
								<img class="img-responsive" src="images/others/twitter.png" alt="" />
								<h2>#Doors</h2>
								<p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/#twitter-feed-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">About Us</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<address>
								<p>Address : 123 Gegrit, London, England</p>
								<p>Call : +1234-222-3333</p>
								<p>Email: <a href="#">info@newspress.com</a></p>
							</address>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">Flickr Gallery</h1>
							<ul>
								<li><a href="images/post/flicker/1.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/1.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/2.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/2.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/3.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/3.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/4.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/4.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/5.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/5.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/6.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/6.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/7.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/7.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/8.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/8.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget news-letter">
							<h1 class="section-title title">Weekly NewsLetter</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							
							<form action="#" method="post" id="subscribe-form" name="subscribe-form">
								<input type="text" placeholder="Your E-mail" name="email">
								<button type="submit" name="subscribe" id="subscribe" >Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.footer-widget-->
	</div><!--/#main-wrapper--> 
	
	<footer id="footer">
		<div class="footer-top">
			<div class="container text-center">
				<div class="logo-icon"><img class="img-responsive" src="images/presets/preset1/logo-icon.png" alt="" /></div>
			</div>
		</div>
		<div class="footer-menu">
			<div class="container">
				<ul class="nav navbar-nav">                       
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Career</a></li>
					<li><a href="#">Advertisement</a></li>
					<li><a href="#">Team</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul> 
			</div>
		</div>
		<div class="bottom-widgets">
			<div class="container">
				<div class="col-sm-4">
					<div class="widget">
						<h2>Category</h2> 
						<ul>
							<li><a href="#">Business</a></li>
							<li><a href="#">Politics</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">World</a></li>
							<li><a href="#">Technology</a></li>
						</ul>
						<ul>
							<li><a href="#">Environment</a></li>
							<li><a href="#">Health</a></li>
							<li><a href="#">Entertainment</a></li>
							<li><a href="#">Lifestyle</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h2>Editions</h2> 
						<ul>
							<li><a href="#">United States</a></li>
							<li><a href="#">China</a></li>
							<li><a href="#">India</a></li>
							<li><a href="#">Maxico</a></li>
							<li><a href="#">Middle East</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget">
						<h2>Tag</h2> 
						<ul>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Featured</a></li>
							<li><a href="#">World</a></li>
							<li><a href="#">Fashion</a></li>
						</ul>
						<ul>
							<li><a href="#">Environment</a></li>
							<li><a href="#">Health</a></li>
							<li><a href="#">Entertainment</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Business</a></li>
						</ul>
						<ul>
							<li><a href="#">Tech</a></li>
							<li><a href="#">Movie</a></li>
							<li><a href="#">Music</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h2>Products</h2> 
						<ul>
							<li><a href="#">Ebook</a></li>
							<li><a href="#">Baby Product</a></li>
							<li><a href="#">Magazine</a></li>
							<li><a href="#">Sports Elements</a></li>							
							<li><a href="#">Technology</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container text-center">
				<p><a href="#">NewsPress </a>&copy; 2015 </p>
			</div>
		</div>		
	</footer>
	
	
	<div class="subscribe-me text-center">
		<h1>ارسل لنا بريدك الالكتروني لكي تصل اليك جميع الاشعارت</h1>
		<h2>مجله كليه العلوم</h2>
		<a href="#close" class="sb-close-btn"><img class="<img-responsive></img-responsive>" src="images/others/close-button.png" alt="" /></a>
		<form action="#" method="post" id="popup-subscribe-form" name="subscribe-form">			
			<div class="input-group">
				<span class="input-group-addon"><img src="images/others/icon-message.png" alt="" /></span>
				<input type="text" placeholder="Enter your email" name="email">
				<button type="submit" name="subscribe">ارسل</button>
			</div>
		</form>
	</div>  <!--/.subscribe-me--> 
	
	<!--/Preset Style Chooser--> 
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
			<h4>Presets Color</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>        
				<li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
				<li class="preset5" data-preset="5"><a href="#" data-color="preset5"></a></li>
				<li class="preset6" data-preset="6"><a href="#" data-color="preset6"></a></li>
			</ul>
		</div>
    </div>
	<!--/End:Preset Style Chooser-->
		
	<!--/#scripts--> 
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
	<script type="text/javascript" src="js/moment.min.js"></script> 
	<script type="text/javascript" src="js/jquery.simpleWeather.min.js"></script> 
	<script type="text/javascript" src="js/jquery.sticky-kit.min.js"></script>
	<script type="text/javascript" src="js/jquery.easy-ticker.min.js"></script> 
	<script type="text/javascript" src="js/jquery.subscribe-better.min.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/switcher.js"></script>

</body>
</html>