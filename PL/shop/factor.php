﻿<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>داروخانه دکتر آل احمد - صفحه اصلی</title>

    <!-- Bootstrap Core CSS -->
    <link href="../fonts/farsi.css" rel="stylesheet" type="text/css"  />
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/page/pageFeature.css" rel="stylesheet">
    <link href="../css/page/animate.css" rel="stylesheet">
	<link href="../css/memberHandler/lg.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" >
    <link href="../css/shop/shopHomepage.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<!--JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/page/dropDownMenu.js" type="text/javascript"></script>
    <script src="../js/memberHandler/loginACC.js" type="text/javascript"></script>
	<script src="../js/memberHandler/accessProfileACC.js" type="text/javascript"></script>
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
                <button type="button" style="float:left" class="btn btn-default btncolor">سبد خرید<i class="fa fa-shopping-cart"></i></button>
                <button type="button" style="float:left" class="btn btn-default btncolor" id="lgname"><?php echo $user; ?><i class="fa fa-user"></i></button>
                <button type="button" value="in" style="float:left" class="btn btn-default btncolor" id="myBtn"><?php echo $status; ?><i class="fa fa-lock"></i></button>

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
							  <p>عضو نیستید؟  <a href="../memberHandler/register.php">ثبت نام</a></p>
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
                            <li style="direction:rtl"><a href="product/productsOrtopedy.php" style="direction:rtl">ارتوپدی</a></li>
                            <li><a href="product/productsArayeshi.php" style="direction:rtl">آرایشی</a></li>
                            <li><a href="product/productsBehdashti.php" style="direction:rtl">بهداشتی</a></li>
                            <li><a href="product/productsTajhizat.php" style="direction:rtl">تجهیزات پزشکی</a></li>
                            <li><a href="product/productsMokamel.php" style="direction:rtl">مکمل های دارویی</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">سوالات دارویی <i class="fa fa-question-circle"></i></a>
                    </li>
                    <li>
                        <a href="../aboutUs/aboutUs.php">درباره ما <i class="fa fa-info-circle"></i></a>
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
    <!--page content-->
    <div class="container">
        
        <div class="row">
            <div class="col-sm-8 col-md-8 col-md-offset-2">
                <table class="table table-hover" id="cartTable">
                    <thead>
                        <tr>
                            <th>محصول</th>
                            <th>تعداد</th>
                            <th class="text-center">قیمت(ریال)</th>
                            <th class="text-center">جمع(ریال)</th>
                            <!--<th> </th>-->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-6 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">نام محصول</a></h4>
                                        <h5 class="media-heading"> <a href="#">نام شرکت</a></h5>
                                        <!--<span>Status: </span><span class="text-success"><strong>In Stock</strong></span>-->
                                    </div>
                                </div>
                            </td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>2000</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>6000</strong></td>
                            <!--<td class="col-sm-1 col-md-1">
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> حذف کالا
                                </button>
                            </td>-->
                        </tr>
                        <tr>
                            <td class="col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">نام محصول</a></h4>
                                        <h5 class="media-heading"><a href="#">نام شرکت</a></h5>
                                        <!--<span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>-->
                                    </div>
                                </div>
                            </td>
                            <td class="col-md-1" style="text-align: center">
                                <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                            </td>
                            <td class="col-md-1 text-center"><strong>4000</strong></td>
                            <td class="col-md-1 text-center"><strong>8000</strong></td>
                            <!--<td class="col-md-1">
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span> حذف کالا
                                </button>
                            </td>-->
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <!--<td>   </td>-->
                            <td><h5>جمع کل</h5></td>
                            <td class="text-right"><h5><strong>14000</strong></h5></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <!--<td>   </td>-->
                            <td><h5>هزینه حمل</h5></td>
                            <td class="text-right"><h5><strong>2000</strong></h5></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <!--<td>   </td>-->
                            <td><h5 style="font-weight:bold ; font-size:15px">مبلغ پرداختی</h5></td>
                            <td class="text-right"><h5 style="font-weight:bold"><strong>16000</strong></h5></td>
                        </tr>
                        <!--<tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <button type="button" class="btn btn-default">
                                    ادامه خرید<i class="fa fa-shopping-cart"></i>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success" id="checkout">
                                    تایید نهایی خرید  <span class="glyphicon glyphicon-play"></span>
                                </button>
                            </td>
                        </tr>-->
                    </tbody>
                </table>
                
                <button type="submit" class="btn btn-success" style="margin-top:10px ; float:left">ثبت خرید و پرداخت</button>
            </div>
        </div>
    </div>
    <!---->
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
