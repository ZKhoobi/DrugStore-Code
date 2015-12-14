<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>داروخانه دکتر آل احمد - صفحه اصلی</title>

    <!-- Bootstrap Core CSS -->
    <link href="PL/fonts/farsi.css" rel="stylesheet" type="text/css" />
    <link href="PL/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="PL/css/page/pageFeature.css" rel="stylesheet">
    <link href="PL/css/page/animate.css" rel="stylesheet">
	<link href="PL/css/memberHandler/lg.css" rel="stylesheet">
    <link href="PL/css/bootstrap/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="PL/css/shop/shopHomepage.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<!--JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="PL/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="PL/js/page/dropDownMenu.js" type="text/javascript"></script>
    <script src="PL/js/memberHandler/login.js" type="text/javascript"></script>
	<script src="PL/js/memberHandler/accessProfile.js" type="text/javascript"></script>
    <!--<script src="js/jquery.js" type="text/javascript"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
	session_start();
	if(isset($_SESSION['name']) && !empty($_SESSION['name']))
	{
		$user = $_SESSION['name'] . ' ' . $_SESSION['family'] ;
		$status = "خروج";
		$login = 1;
	}
	else
	{
		$user = "حساب شخصی";
		$status = "ورود";
		$login = 0;
	}
	?>
	<script>
		login = <?php echo $login; ?>
	</script>
    <!-- Navigation -->
    <div class="container">
        <div id="header" dir="rtl">
                <img src="PL/images/logo.png" alt="Nevia Premium Template" width="70" height="78" />
                        <font size="5"><b style="font-family:IranNastaliq">داروخانه دکتر سادات آل احمد</b></font>
                <button type="button" style="float:left" class="btn btn-default btncolor">سبد خرید<i class="fa fa-shopping-cart"></i></button>
                <button type="button" style="float:left" class="btn btn-default btncolor" id="lgname"><?php echo $user; ?><i class="fa fa-user"></i></button>
                <button type="button" value="in" style="float:left" class="btn btn-default btncolor" id="myBtn" name="in"><?php echo $status; ?><i class="fa fa-lock"></i></button>

                    <form class="navbar-form" role="search" style="padding-right: 78%; padding-top:0.0001%;" >
                        <div class="input-group">
                            <input type="text" class="form-control input-search" placeholder="جست و جو" name="q" id="in_search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="btn_search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4><span class="glyphicon glyphicon-lock"></span> ورود</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                          <form method="POST" action="login.php" id="lgForm">
                            <div class="form-group">
                              <label for="usrname"><span class="glyphicon glyphicon-user"></span> نام کاربری</label>
                              <input type="text" class="form-control" name="usrname" id="usrname" placeholder="نام کاربری یا ایمیل خود را وارد کنید">
                            </div>
                            <div class="form-group">
                              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> رمز عبور</label>
                              <input type="password" class="form-control" id="psw" name="psw" placeholder="رمز عبور را وارد کنید">
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="" checked>مرا به خاطر بسپار</label>
                            </div>
                              <input type="submit" class="btn btn-success btn-block" id="lgin" name="lgin" value="ورود"/><!-- <span class="glyphicon glyphicon-off"></span> -->
							  <br />
							  <div class="alert alert-danger" id="error">
							    
							  </div>
							  <!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> لغو</button> -->
							  <p>عضو نیستید؟  <a href="memberHandler/register.php">ثبت نام</a></p>
							  <p>رمز خود را فراموش کرده اید؟ <a href="#">رمز عبور</a></p>
                          </form>
                        </div>
                      </div>
      
                    </div>
                  </div>
                </div>

    </div>
    <nav class="navbar navbar-inverse navbar-right" role="navigation" style="background-color:darkgreen; margin-right:1%; width:98%" >
        <div class="container" dir="rtl">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand navbar-right" href="#">داروخانه دکتر سادات آل احمد</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="font-size:large; font-family:'B Mitra'">
                    <li class="active">
                        <a href="#">صفحه اصلی <i class="fa fa-home"></i></a>
                    </li>
                    <li class="dropdown ">
                        <a class="dropdown-toggle " data-toggle="dropdown" href="#"> محصولات <i class="fa fa-medkit"></i></a>
                        <ul class="dropdown-menu ">
                            <li><a href="PL/shop/product/productsArayeshi.php?categ=4">ارتوپدی</a></li>
                            <li><a href="PL/shop/product/productsArayeshi.php?categ=1">آرایشی</a></li>
                            <li><a href="PL/shop/product/productsArayeshi.php?categ=3">بهداشتی</a></li>
                            <li><a href="PL/shop/product/productsArayeshi.php?categ=2">تجهیزات پزشکی</a></li>
                            <li><a href="PL/shop/product/productsArayeshi.php?categ=5">مکمل های دارویی</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">سوالات دارویی <i class="fa fa-question-circle"></i></a>
                    </li>
                    <li>
                        <a href="PL/aboutUs/aboutUs.php">درباره ما <i class="fa fa-info-circle"></i></a>
                    </li>
                    <li>
                        <a href="PL/contact/contact.php">تماس با ما <i class="fa fa-phone"></i></a>
                    </li>
                    <li>
                        <a href="PL/comment/comment.php">نظرات <i class="fa fa-commenting"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
        <!-- /.container -->
    </nav>
    
   
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3" style="font-family:'B Mitra'; direction:rtl">
                <!--<div class="list-group">
                    <a href="#" class="list-group-item">ارتوپدی</a>
                    <a href="#" class="list-group-item">آرایشی</a>
                    <a href="#" class="list-group-item">بهداشتی</a>
                </div>-->
                <ul class="nav nav-tabs"  style="font-family:'B Mitra'; direction:rtl">
                    <li class="active right BMitra"><a href="#tab-news" data-toggle="tab">تازه ها</a></li>
                    <li class="right BMitra"><a href="#tab-articles" data-toggle="tab" >مقالات</a></li>
                    <li class="right BMitra"><a href="#tab-books" data-toggle="tab">تغذیه سالم</a></li>
                </ul>
                <div id="mytab">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-news">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                        </div>
                        <div class="tab-pane" id="tab-articles">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته!!!!!! مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                        </div>
                        <div class="tab-pane" id="tab-books">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;توضیح مطالب مفید
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-arrow-circle-left"></i>
                                &nbsp;&nbsp;چند نکته مهم در ارتباط با سالمندانی که دیابت دارند
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">پیوندهای مفید</div>
                        <div class="list-group">
                            <a href="http://www.tamin.ir/" target="_blank" class="list-group-item"><i class="fa fa-link"></i>&nbsp;سازمان بیمه تامین اجتماعی</a>
                        </div>
                        <div class="list-group">
                            <a href="http://www.tamin.ir/" target="_blank" class="list-group-item"><i class="fa fa-link"></i>&nbsp;سازمان بیمه تامین اجتماعی</a>
                        </div>
                        <div class="list-group">
                            <a href="http://www.tamin.ir/" target="_blank" class="list-group-item"><i class="fa fa-link"></i>&nbsp;سازمان بیمه تامین اجتماعی</a>
                        </div>
                        <div class="list-group">
                            <a href="http://www.tamin.ir/" target="_blank" class="list-group-item"><i class="fa fa-link"></i>&nbsp;سازمان بیمه تامین اجتماعی</a>
                        </div>
                    </div>
                </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="PL/images/slide-image.jpg" alt="">
                                    
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="PL/images/slide-image.jpg" alt="">
                                    
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
  
    <!-- /.container -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->


</body>

</html>
