
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/subscribe-better.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link id="preset" rel="stylesheet" type="text/css" href="../css/preset1.css">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/cos.css" rel="stylesheet">

    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"               href="../images/ico/apple-touch-icon-57-precomposed.png">
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



                        <li class="sports"><a href="../show/1">علوم الحاسبات</a></li>
                        <li class="sports"><a href="../show/2">علوم الرياضيات</a></li>
                        <li class="health"><a href="../show/3">علوم الجو</a></li>
                        <li class="health"><a href="../show/4">علوم الفيزياء</a></li>
                        <li class="health"><a href="../show/5">علوم كيمياء</a></li>
                        <li class="health"><a href="../show/6">علوم الحياه</a></li>



                    </ul>
                </nav>
                <div class="searchNlogin navbar-left">
                    <ul>
                        <li class="search-icon"><i class="fa fa-search"></i></li>
                        <li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                            <div class="dropdown-menu top-user-section">
                                <div class="top-user-form">
                                    <form id="top-login" role="form" method="post" action="{{ url('../login') }}">
                                        {{ csrf_field() }}
                                        <div class="input-group" id="top-login-username">
                                            <span class="input-group-addon"><img src="../images/others/user-icon.png" alt="" /></span>
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
                                            <img class="img-responsive" src="../images/post/slider/1.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/7.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/13.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/12.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/14.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/10.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/11.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/8.jpg" alt="" />
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
                                            <img class="img-responsive" src="../images/post/slider/9.jpg" alt="" />
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
                                        <img class="img-responsive" src="../images/post/slider/2.jpg" alt="" />
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
                                        <img class="img-responsive" src="../images/post/slider/3.jpg" alt="" />
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
                <a href="#"><img class="img-responsive" src="../images/post/add/add2.jpg" alt="" /></a>
            </div><!--/.section-->

            <div class="section">
                <div class="latest-news-wrapper">
                    <h1 class="section-title">بحوث القسم</h1>
                    <div id="latest-news">
                        @foreach($datas as $search)
                            <div class="post medium-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <img class="img-responsive" src="../uploads/images/{{$search->search_image}}" alt="" />
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


    <!--/End:Preset Style Chooser-->

    <!--/#scripts-->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/moment.min.js"></script>
    <script type="text/javascript" src="../js/jquery.simpleWeather.min.js"></script>
    <script type="text/javascript" src="../js/jquery.sticky-kit.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easy-ticker.min.js"></script>
    <script type="text/javascript" src="../js/jquery.subscribe-better.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/switcher.js"></script>

</body>
</html>