<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>داروخانه دکتر آل احمد - ثبت نام</title>

    <!-- Bootstrap Core CSS -->
    <link href="../fonts/farsi.css" rel="stylesheet" type="text/css"  />
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/page/pageFeature.css" rel="stylesheet">
    <link href="../css/page/animate.css" rel="stylesheet">
	<link href="../css/memberHandler/lg.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" >
    <link href="../css/shop/shopHomepage.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/memberHandler/reg.css" rel="stylesheet" type="text/css"  />
    <!-- Custom CSS -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/page/dropDownMenu.js" type="text/javascript"></script>
    <script src="../js/memberHandler/register.js" type="text/javascript"></script>
    <script src="../js/memberHandler/loginACC.js" type="text/javascript"></script>
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
	if(isset($_SESSION['name']) && !empty($_SESSION['name']) && isset($_SESSION['family']) && !empty($_SESSION['family']))
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
                <img src="../images/logo.png" alt="Nevia Premium Template" width="70" height="78" />
                        <font size="5"><b style="font-family:IranNastaliq">داروخانه دکتر سادات آل احمد</b></font>
                <!--<button type="button" style="float:left" class="btn btn-default btncolor">سبد خرید<i class="fa fa-shopping-cart"></i></button>
                <a href="../memberHandler/profile.php" style="float: left; background-color: #228B22" class="btn btn-info aliprofile" role="button" id="lgname"><?php echo $user; ?><i class="fa fa-user"></i></a>
                <button type="button" value="in" style="float:left" class="btn btn-default btncolor" id="myBtn"><?php echo $status; ?><i class="fa fa-lock"></i></button>-->

                    <!--<form class="navbar-form" role="search" style="padding-right: 78%; padding-top:0.0001%;" >
                        <div class="input-group">
                            <input type="text" class="form-control input-search" placeholder="جست و جو" name="q" id="in_search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="btn_search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>-->

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
							  <p>عضو نیستید؟  <a href="#">ثبت نام</a></p>
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
                    <li>
                        <a href="../index.php">صفحه اصلی <i class="fa fa-home"></i></a>
                    </li>
                    <li class="dropdown ">
                        <a class="dropdown-toggle " data-toggle="dropdown" href="#"> محصولات <i class="fa fa-medkit"></i></a>
                        <ul class="dropdown-menu ">
                            <li style="direction:rtl"><a href="../shop/product/productsOrtopedy.php" style="direction:rtl">ارتوپدی</a></li>
                            <li><a href="../shop/product/productsArayeshi.php" style="direction:rtl">آرایشی</a></li>
                            <li><a href="../shop/product/productsBehdashti.php" style="direction:rtl">بهداشتی</a></li>
                            <li><a href="../shop/product/productsTajhizat.php" style="direction:rtl">تجهیزات پزشکی</a></li>
                            <li><a href="../shop/product/productsMokamel.php" style="direction:rtl">مکمل های دارویی</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">سوالات دارویی <i class="fa fa-question-circle"></i></a>
                    </li>
                    <li>
                        <a href="./aboutUs/aboutUs.php">درباره ما <i class="fa fa-info-circle"></i></a>
                    </li>
                    <li>
                        <a href="../contact/contact.php">تماس با ما <i class="fa fa-phone"></i></a>
                    </li>
                    <li>
                        <a href="../comment/comment.php">نظرات <i class="fa fa-commenting"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
        <!-- /.container -->
    </nav>
    
   
    <!-- Page Content -->
    <div class="container">
        <!--<div class="row">
            <div class="col-md-7">          

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="form-group col-lg-10">
                            نام
                            <input class="form-control" type="text" name="" value="" />
                        </div> 
                        <div class="form-group col-lg-10"> نام خانوادگی
                        <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-lg-10"> نام کاربری
                        <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-lg-10"> کلمه عبور
                        <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-lg-10">
                            تکرار کلمه عبور
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-lg-10">
                            ایمیل
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                        <div class="form-group col-lg-10">
                            شماره تماس
                            <input class="form-control" type="text" name="" value="" />
                        </div>
                    </div>
                   
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4">
                <p style="direction:rtl;">
                    شرايط و مقررات عضويت در سايت
                    شما با عضويت در اين سايت، قوانين و مقررات آن را مي‌پذيريد.
                    تمامي محتويات اين سايت مطابق با قوانين و مقررات جمهوري اسلامي ايران
                    مي‌باشد. لذا در صورتي كه مطلبي بر خلاف اين قوانين از سوي شما در هر صفحه‌اي از اين سايت درج
                    شود، آن مطلب از سايت حذف شده و حساب كاربري شما نيز بسته خواهد شد.
                    تمامي مطالب اين سايت با ذكر منبع "پورتال جامع پارسي زبانان" قابل استفاده مجدد هستند.
                </p>
                <a href="#" class="btn btn-info" role="button" style="width:100px">ثبت نام</a>
            </div>
        </div>-->
        <div class="container-fluid">
            <section class="container">
                <div class="container-page">
                    <div class="col-md-6">
                        <form  method="POST" action="registeration.php" id="regForm">
                            <h3 class="dark-grey">ثبت نام</h3>
                            <div class="form-group col-lg-6">
                                <label>نام</label>
                                <input type="text" name="rname" class="form-control" id="rname" value="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>نام خانوادگی</label>
                                <input type="text" name="rfname" class="form-control" id="rfname" value="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>نام کاربری</label>
                                <input type="text" name="runame" class="form-control" id="runame" value="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>رمز عبور</label>
                                <input type="password" name="rpass" class="form-control" id="rpass" value="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>تکرار رمز عبور</label>
                                <input type="password" name="rrpass" class="form-control" id="rrpass" value="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>شماره تماس </label>
                                <input type="text" name="rnumber" class="form-control" id="rnumber" value="">
								
                            </div>                       
							 <div class="form-group col-lg-12">
                                <label>آدرس ایمیل</label>
                                <input type="text" name="remail" class="form-control" id="remail" value="">
                            </div>
							<br/>
								<br/>
								<input type="submit" class="btn btn-primary" id="registeration" value="ثبت نام" name="registeration">
								<img id="loading" src="../images/ajax-loader.gif" alt="working.." />
                        </form>
						<br />
						<div class="alert alert-danger" id="error">
						&nbsp;
						</div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="dark-grey">شرایط و مقررات</h3>
                        <p>
                            شما با عضويت در اين سايت، قوانين و مقررات آن را مي‌پذيريد.
                            
                        </p>
                        <p>
                            تمامي محتويات اين سايت مطابق با قوانين و مقررات جمهوري اسلامي ايران
                            مي‌باشد.لذا در صورتي كه مطلبي بر خلاف اين قوانين از سوي شما در هر صفحه‌اي از اين سايت درج
                            شود، آن مطلب از سايت حذف شده و حساب كاربري شما نيز بسته خواهد شد.
                        </p>
                

                       
						<div class="alert alert-success" id="successful">
						&nbsp;
						</div>
						
						
                    </div>
                </div>
            </section>
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
