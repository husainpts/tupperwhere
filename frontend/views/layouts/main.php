
<?php 
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\web\YiiAsset;

AppAsset::register($this);


$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<base href="http://belajardirumah.xyz/>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="Eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="Eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="Eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="Eshopper/css/price-range.css" rel="stylesheet">
    <link href="Eshopper/css/animate.css" rel="stylesheet">
    <link href="Eshopper/css/main.css" rel="stylesheet">
    <link href="Eshopper/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="Eshopper/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Eshopper/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Eshopper/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Eshopper/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="Eshopper/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <?php $this->beginBody() ?>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +08113550493</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>husain.panatas@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.php"><img src="Eshopper/images/home/logo4.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
 
                            </div>
                            
                            <div class="btn-group">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li class="fa fa-user">
                                <a href="<?=Yii::$app->urlManager->createUrl(['site/about']);?>" title ="">About</a>
                                </li>

                                <li class="fa fa-star">
                                <a href="<?=Yii::$app->urlManager->createUrl(['site/contact']);?>" title ="">Contact</a>
                                </li>


                                <li class="fa fa-shopping-cart">
                                <a href="<?=Yii::$app->urlManager->createUrl(['cart/list']);?>" title =""><?= 'My Cart(' .\Yii::$app->cart->getCount().')'?></a>
                                </li>
                                
                                <?php if (Yii::$app->user->isGuest) { ?>
                                    
                                <li class="fa fa-user">
                                <a href="<?=Yii::$app->urlManager->createUrl(['site/login']);?>" title ="">Login</a>
                                </li>

                                <li class="fa fa-user">
                                <a href="<?=Yii::$app->urlManager->createUrl(['site/signup']);?>" title ="">Sign Up</a>
                                </li>
                                <?php } else { ?>
                                <li class="fa fa-user">
                                <a href="<?=Yii::$app->urlManager->createUrl(['site/logout', 'data-method' => 'post']);?>" title=""><?= 'Logout(' .\Yii::$app->user->identity->username.')'?></a>
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
       <!--  --><div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>T</span>upperware</h2>
                            <p>Situs pembelian tupperware</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                   
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="Eshopper/images/home/map.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       
        
        
    </footer><!--/Footer-->
    

  
    <script src="Eshopper/js/jquery.js"></script>
    <script src="Eshopper/js/bootstrap.min.js"></script>
    <script src="Eshopper/js/jquery.scrollUp.min.js"></script>
    <script src="Eshopper/js/price-range.js"></script>
    <script src="Eshopper/js/jquery.prettyPhoto.js"></script>
    <script src="Eshopper/js/main.js"></script>
        <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>