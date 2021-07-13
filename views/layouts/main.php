<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="environment-main-wrapper">

        <!--// Header \\-->
		<header id="environment-header" class="environment-header-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"> <a href="index.html" class="environment-logo"><img src="images/logo.png" alt=""></a> </div>
                    <div class="col-md-9">

                        <!--// TopStrip \\-->
                        <div class="environment-top-strip">
                            <ul class="environment-strip-icon">
                                <li><a href="#" class="icon-social23"></a></li>
                                <li><a href="#" class="icon-social43"></a></li>
                                <li><a href="#" class="icon-social33"></a></li>
                                <li><a href="#" class="icon-logo22"></a></li>
                            </ul>
                            <ul class="environment-strip-info">
                                <li><i class="fa fa-map-marker"></i> Salford road, east London, UK</li>
                                <li><i class="fa fa-phone"></i> +123 45 678</li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:name@email.com">info@example.com</a></li>
                            </ul>
                        </div>
                        <!--// TopStrip \\-->

                        <div class="environment-main-section">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="index.html">Home</a>
                                            <ul class="environment-dropdown-menu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-two.html">Home Two</a></li>
                                                <li><a href="demo2/index.html">Demo 2</a></li>
                                                <li><a href="rtl/index.html">Rtl Demo</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">EVENTS</a>
                                            <ul class="environment-dropdown-menu">
                                                <li><a href="event-grid.html">Event Grid</a></li>
                                                <li><a href="event-grid-wls.html">Event Grid W/L/S</a></li>
                                                <li><a href="event-grid-wrs.html">Event Grid W/R/S</a></li>
                                                <li><a href="event-list.html">Event List</a></li>
                                                <li><a href="event-detail.html">Event Detail</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="event-detail-wls.html">Event Detail W/L/S</a></li>
                                                        <li><a href="event-detail.html">Event Detail W/R/S</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="project-grid.html">Projects</a>
                                            <ul class="environment-dropdown-menu">
                                                <li><a href="project-grid.html">Project Grid</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="project-grid.html">Project Grid W/O/S</a></li>
                                                        <li><a href="project-grid-wls.html">Project Grid W/L/S</a></li>
                                                        <li><a href="project-grid-wrs.html">Project Grid W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="project-list.html">Project List</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="project-list.html">Project List W/R/S</a></li>
                                                        <li><a href="project-list-wls.html">Project List W/L/S</a></li>
                                                        <li><a href="project-list-wos.html">Project List W/O/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="project-medium.html">Project Medium</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="project-medium.html">Project Medium W/O/S</a></li>
                                                        <li><a href="project-medium-wls.html">Project Medium W/L/S</a></li>
                                                        <li><a href="project-medium-wrs.html">Project Medium W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="project-detail.html">Project Detail</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="project-detail.html">Project Detail W/R/S</a></li>
                                                        <li><a href="project-detail-wls.html">Project Detail W/L/S</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="team-grid.html">Blogs</a>
                                            <ul class="environment-dropdown-menu">
                                                <li><a href="blog-grid.html">Blog Grid</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="blog-grid.html">Blog Grid W/O/S</a></li>
                                                        <li><a href="blog-grid-wls.html">Blog Grid W/L/S</a></li>
                                                        <li><a href="blog-grid-wrs.html">Blog Grid W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-large.html">Blog Large</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="blog-large.html">Blog Large W/R/S</a></li>
                                                        <li><a href="blog-large-wls.html">Blog Large W/L/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-medium.html">Blog Medium</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="blog-medium.html">Blog Medium W/O/S</a></li>
                                                        <li><a href="blog-medium-wls.html">Blog Medium W/L/S</a></li>
                                                        <li><a href="blog-medium-wrs.html">Blog Medium W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-detail.html">Blog Detail</a>
                                                    <ul class="environment-dropdown-menu">
                                                        <li><a href="blog-detail.html">Blog Detail W/R/S</a></li>
                                                        <li><a href="blog-detail-wls.html">Blog Detail W/L/S</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="environment-megamenu-li"><a href="#">Pages</a>
                                            <ul class="environment-megamenu">
                                                <li class="row">
                                                    <div class="col-md-3">
                                                        <h4>Link 1</h4>
                                                        <ul class="environment-megalist">
                                                            <li><a href="cause-grid.html">Cause Grid</a></li>
                                                            <li><a href="cause-grid-wrls.html">Cause Grid W/L/S</a></li>
                                                            <li><a href="cause-grid-wrs.html">Cause Grid W/R/S</a></li>
                                                            <li><a href="cause-list-wos.html">Cause list</a></li>
                                                            <li><a href="cause-list.html">Cause list W/R/S</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h4>Link 2</h4>
                                                        <ul class="environment-megalist">
                                                            <li><a href="cause-list-wls.html">Cause list W/L/S</a></li>
                                                            <li><a href="404.html">404 Error Page</a></li>
                                                            <li><a href="search-result.html">Search Result</a></li>
                                                            <li><a href="gallery.html">Gallery</a></li>
                                                            <li><a href="gallery-wls.html">Gallery W/L/S</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h4>Link 3</h4>
                                                        <ul class="environment-megalist">
                                                            <li><a href="gallery-wrs.html">Gallery W/R/S</a></li>
                                                            <li><a href="team-grid.html">Team Grid W/O/S</a></li>
                                                            <li><a href="team-grid-wls.html">Team Grid W/L/S</a></li>
                                                            <li><a href="team-grid-wrs.html">Team Grid W/R/S</a></li>
                                                            <li><a href="team-detail.html">Team Detail</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h4>Link 4</h4>
                                                        <ul class="environment-megalist">
                                                            <li><a href="team-detail-wls.html">Team Detail W/L/S</a></li>
                                                            <li><a href="donation-page.html">Donation Page</a></li>
                                                            <li><a href="about-us.html">About Us</a></li>
                                                            <li><a href="shop-list.html">Shop</a></li>
                                                            <li><a href="contact-us.html">Contact Us</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="environment-megamenu-li"><a href="#">shop</a>
                                            <ul class="environment-megamenu">
                                                <li class="row">
                                                    <div class="col-md-3">
                                                        <h4>Links 1</h4>
                                                        <ul class="environment-megalist">
                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                            <li><a href="shop-grid-wls.html">Shop Grid W/L/S</a></li>
                                                            <li><a href="shop-grid-wrs.html">Shop Grid W/R/S</a></li>
                                                            <li><a href="shop-list.html">Shop List</a></li>
                                                            <li><a href="shop-list-wls.html">Shop List W/L/S</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h4>Links 1</h4>
                                                        <ul class="environment-megalist">
                                                            <li><a href="shop-list.html">Shop List W/R/S</a></li>
                                                            <li><a href="shop-grid.html">Shop Grid W/O/S</a></li>
                                                            <li><a href="shop-detail.html">Shop Detail</a></li>
                                                            <li><a href="shop-detail-wls.html">Shop Detail W/L/S</a></li>
                                                            <li><a href="shop-detail.html">Shop Detail W/R/S</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4>Artists text</h4>
                                                        <div class="environment-mega-text">
                                                            <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                            <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.html">contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <ul class="environment-user-option">
                                <li><a href="#" class="environment-cartbtn environment-bgcolor"><i class="fa fa-shopping-cart"></i></a>
                                    <div class="environment-cart-box">
                                        <h2>You have 3 items in the cart</h2>
                                        <ul>
                                            <li>
                                                <figure>
                                                    <a href="#"><img src="extra-images/cartbox-1.jpg" alt=""></a>
                                                </figure>
                                                <div class="environment-cartbox-text">
                                                    <h6><a href="#">Key Management Model The 60+ Models</a></h6>
                                                    <div class="environment-rating"><span class="environment-rating-box" style="width:80%"></span></div>
                                                    <span class="environment-cartbox-price environment-color">$35.99 <small>$43.00</small></span>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="#"><img src="extra-images/cartbox-2.jpg" alt=""></a>
                                                </figure>
                                                <div class="environment-cartbox-text">
                                                    <h6><a href="#">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>
                                                    <div class="environment-rating"><span class="environment-rating-box" style="width:100%"></span></div>
                                                    <span class="environment-cartbox-price environment-color">$21.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <h5>Subtotal <span class="environment-color">$1343</span></h5>
                                        <div class="environment-cart-link"><a href="#" class="environment-cartbox-btn environment-bgcolorhover"><i class="flaticon-tool"></i> Go to Checkout</a></div>
                                    </div>
                                </li>
                                <li><a href="#" class="environment-search-btn environment-bgcolor"><i class="fa fa-search"></i></a>
                                    <form class="environment-search-popup">
                                        <input value="Search Key Word" onblur="if(this.value == '') { this.value ='Search Key Word'; }" onfocus="if(this.value =='Search Key Word') { this.value = ''; }" type="text">
                                        <input value="" type="submit">
                                        <i class="fa fa-search"></i>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </header>
		<!--// Header \\-->

		<!--// Main Banner \\-->
		<div class="environment-banner">

            <!--// Slider \\-->
            <div class="environment-banner-one">
                <div class="environment-banner-one-layer">
                    <img src="extra-images/banner-1.jpg" alt="">
                    <div class="environment-banner-caption">
                        <div class="container">
                            <div class="banner-caption-text">
                                <h1><span>The Earth Is</span> What We HAve <span>In Common</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ven eros et iaculis. Vivamus volutpat hendrerit elementum.Integerl ultrices vestibulum leo eu.</p>
                                <a href="#" class="environment-bgcolor">Get A Quote</a>
                            </div>
                            <div class="banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                        </div>
                    </div>
                </div>
                <div class="environment-banner-one-layer">
                    <img src="extra-images/banner-2.jpg" alt="">
                    <div class="environment-banner-caption">
                        <div class="container">
                            <div class="banner-caption-text">
                                <h1><span>The Earth Is</span> What We HAve <span>In Common</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ven eros et iaculis. Vivamus volutpat hendrerit elementum.Integerl ultrices vestibulum leo eu.</p>
                                <a href="#" class="environment-bgcolor">Get A Quote</a>
                            </div>
                            <div class="banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Slider \\-->

        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="environment-main-content">

			<!--// Main Section \\-->
			<div class="environment-main-section environment-minus-margin">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
                            <div class="enviroment-services-strip">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <h2 class="enviroment-heading"><span>Recycle</span> For All Its Worth</h2>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="icon-three3"></i>
                                        <h2><span>The</span> GOOD</h2>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="icon-three3"></i>
                                        <h2><span>The</span><br> BEST</h2>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="icon-three3"></i>
                                        <h2><span>The</span> BETTER</h2>
                                    </li>
                                </ul>
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section environment-services-space">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="enviroment-services enviroment-simple-services">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <div class="enviroment-services-left">
                                            <span><i class="icon-flash"></i></span>
                                            <section>
                                                <h5><a href="#">Energy</a></h5>
                                                <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                            </section>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="enviroment-services-right">
                                            <span><i class="icon-nature3"></i></span>
                                            <section>
                                                <h5><a href="#">Organic</a></h5>
                                                <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                            </section>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="enviroment-services-left">
                                            <span><i class="icon-technology9"></i></span>
                                            <section>
                                                <h5><a href="#">Solar Lights</a></h5>
                                                <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                            </section>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="enviroment-services-right">
                                            <span><i class="icon-arrows10"></i></span>
                                            <section>
                                                <h5><a href="#">Recycle</a></h5>
                                                <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                            </section>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="enviroment-services-left">
                                            <span><i class="icon-nature-1"></i></span>
                                            <section>
                                                <h5><a href="#">Eco ideas</a></h5>
                                                <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                            </section>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <div class="enviroment-services-right">
                                            <span><i class="icon-nature-2"></i></span>
                                            <section>
                                                <h5><a href="#">Biology</a></h5>
                                                <p>Lorem ipsum dolor sit amet, con sect etur adipiscing elit.</p>
                                            </section>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section environment-counter-space">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="environment-fancy-title"><h2>Every day 8,000 <span> Volunteers</span></h2></div>
                            <div class="environment-counter">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <i class="icon-null"></i>
                                        <span id="word-count1">2,200</span>
                                        <small>Volunteers</small>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-heart-o"></i>
                                        <span id="word-count2">780</span>
                                        <small>Days of help</small>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="icon-signs4"></i>
                                        <span id="word-count3">3,500</span>
                                        <small>people saved</small>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="icon-money3"></i>
                                        <span id="word-count4">10,000</span>
                                        <small>funds collected</small>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis in eros etiaculis. Vivamus volutpat hendrerit elementum.</p>
                                <div class="clearfix"></div>
                                <a href="donation-page.html" class="environment-donate-btn">Donate Now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section">
                <div class="container-fluid">

                    <div class="environment-fancy-title"><h2>our<span> Projects</span></h2></div>
                    <div class="environment-project environment-modren-project">
                        <ul class="row">
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img1.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img2.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img3.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img4.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img5.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img6.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img7.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-3">
                                <figure>
                                    <a href="project-detail.html"><img src="extra-images/project-gallery-img8.jpg" alt=""></a>
                                    <figcaption>
                                        <span class="environment-top-bottom-border"></span>
                                        <div class="environment-gallery-text">
                                            <h3><a href="project-detail.html">So to deliberately render</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consecr aipi elit. Ut tibulum lacus in cursus rutm. Ut vitae</p>
                                            <span><a href="project-detail.html" class="readmore-btn">READ MORE</a></span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section environment-blog-grid-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="environment-fancy-title"><h2>Latest <span> News</span></h2></div>
                            <div class="environment-blog environment-blog-grid">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html"><img src="extra-images/blog-grid-img-1.jpg" alt=""><i class="fa fa-share-square-o"></i></a></figure>
                                        <div class="environment-blog-grid-text">
                                            <h4><a href="blog-detail.html">Phasellus vitae ligula sodales</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.</p>
                                            <ul class="blog-grid-option">
                                                <li>
                                                    <i class="fa fa-calendar-o"></i>
                                                    <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                                </li>
                                                <li>
                                                    <i class="fa fa-comments"></i>
                                                    <a href="404.html">320</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-user"></i>
                                                    <a href="404.html">By John W.Jack</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html"><img src="extra-images/blog-grid-img-2.jpg" alt=""><i class="fa fa-share-square-o"></i></a></figure>
                                        <div class="environment-blog-grid-text">
                                            <h4><a href="blog-detail.html">Eco environment green enviro</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.</p>
                                            <ul class="blog-grid-option">
                                                <li>
                                                    <i class="fa fa-calendar-o"></i>
                                                    <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                                </li>
                                                <li>
                                                    <i class="fa fa-comments"></i>
                                                    <a href="404.html">320</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-user"></i>
                                                    <a href="404.html">By John W.Jack</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="blog-detail.html"><img src="extra-images/blog-grid-img-3.jpg" alt=""><i class="fa fa-share-square-o"></i></a></figure>
                                        <div class="environment-blog-grid-text">
                                            <h4><a href="blog-detail.html">Printing and typesetting</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Ut vestibulum lacus in cursus.</p>
                                            <ul class="blog-grid-option">
                                                <li>
                                                    <i class="fa fa-calendar-o"></i>
                                                    <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                                </li>
                                                <li>
                                                    <i class="fa fa-comments"></i>
                                                    <a href="404.html">320</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-user"></i>
                                                    <a href="404.html">By John W.Jack</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section environment-modren-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="environment-fancy-title"><h2>Upcoming <span>Events</span></h2></div>
                            <div class="environment-event environment-modren-event">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure>
                                            <a href="event-detail.html"><img src="extra-images/modren-event-img1.jpg" alt=""><i class="fa fa-share-square-o"></i></a>
                                            <time datetime="2008-02-14 20:00">09<br>FEB</time>
                                        </figure>
                                        <div class="environment-modren-event-text">
                                            <h3><a href="event-detail.html">Phasellus vitae ligula sodales, auctor orci quis, fermentu retra in ipsum vitae</a></h3>
                                            <ul class="environment-event-option">
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    Time:
                                                    <time datetime="2008-02-14 20:00">09:00 am - 02:00 pm</time>
                                                </li>
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    Location :
                                                    <p>9907 Salford Street , east London, UK</p>
                                                </li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum lacus in cursus rutru tis felis. Nulla convallis neque ac sagittis porttitor. Suspendisse at orci ac diam tinciduntd et ligula. Cras sollicitudin eu enim et ultricies.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <figure>
                                            <a href="event-detail.html"><img src="extra-images/modren-event-img2.jpg" alt=""><i class="fa fa-share-square-o"></i></a>
                                            <time datetime="2008-02-14 20:00">09<br>FEB</time>
                                        </figure>
                                        <div class="environment-modren-event-text">
                                            <h3><a href="event-detail.html">Phasellus vitae ligula sodales, auctor orci quis, fermentu retra in ipsum vitae</a></h3>
                                            <ul class="environment-event-option">
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    Time:
                                                    <time datetime="2008-02-14 20:00">09:00 am - 02:00 pm</time>
                                                </li>
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    Location :
                                                    <p>9907 Salford Street , east London, UK</p>
                                                </li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum lacus in cursus rutru tis felis. Nulla convallis neque ac sagittis porttitor. Suspendisse at orci ac diam tinciduntd et ligula. Cras sollicitudin eu enim et ultricies.</p>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <figure>
                                            <a href="event-detail.html"><img src="extra-images/modren-event-img3.jpg" alt=""><i class="fa fa-share-square-o"></i></a>
                                            <time datetime="2008-02-14 20:00">09<br>FEB</time>
                                        </figure>
                                        <div class="environment-modren-event-text">
                                            <h3><a href="event-detail.html">Phasellus vitae ligula sodales, auctor orci quis, fermentu retra in ipsum vitae</a></h3>
                                            <ul class="environment-event-option">
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    Time:
                                                    <time datetime="2008-02-14 20:00">09:00 am - 02:00 pm</time>
                                                </li>
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    Location :
                                                    <p>9907 Salford Street , east London, UK</p>
                                                </li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum lacus in cursus rutru tis felis. Nulla convallis neque ac sagittis porttitor. Suspendisse at orci ac diam tinciduntd et ligula. Cras sollicitudin eu enim et ultricies.</p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="event-detail.html" class="modren-event-btn">More Events</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section environment-donate-sectionfull">
                <span class="donate-transparent"></span>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="environment-section-text">
                                <h2>Our Company is An End-to-End Mid stream At</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing varius diam ac ipsuelit ut Nulla convallis neque</p>
                                <a href="404.html" class="environment-simple-btn">Get A quote <span></span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="environment-donate-form">
                                <h2>Make A <span>Donation</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vesbulumla us in cursus rutrum. Ut vitae sagittis felis.</p>
                                <form>
                                    <ul>
                                        <li>
                                            <input type="text" value="Name*" onblur="if(this.value == '') { this.value ='Name*'; }" onfocus="if(this.value =='Name*') { this.value = ''; }"></li>
                                        <li>
                                            <input type="text" value="Phone*" onblur="if(this.value == '') { this.value ='Phone*'; }" onfocus="if(this.value =='Phone*') { this.value = ''; }"></li>
                                        <li>
                                            <input type="text" value="Email*" onblur="if(this.value == '') { this.value ='Email*'; }" onfocus="if(this.value =='Email*') { this.value = ''; }"></li>
                                        <li>
                                            <input type="text" value="Website*" onblur="if(this.value == '') { this.value ='Website*'; }" onfocus="if(this.value =='Website*') { this.value = ''; }"></li>
                                        <li class="environment-select-form">
                                            <div class="environment-select-two">
                                                <select>
                                                    <option value="">Select Your Campaign</option>
                                                    <option value="pakistan">Campaign</option>
                                                    <option value="india">Campaign</option>
                                                    <option value="usa">Campaign</option>
                                                    <option value="student">Campaign</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="environment-select-form">
                                            <div class="environment-select-two">
                                                <select>
                                                    <option value="">Select Your Amount</option>
                                                    <option value="pakistan">Select Amount</option>
                                                    <option value="india">Select Amount</option>
                                                    <option value="usa">Select Amount</option>
                                                    <option value="student">Select Amount</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li><label><input type="submit" value="Donate Now"></label></li>
                                    </ul>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section environment-cause-gridfull">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="environment-fancy-title"><h2>Our Recent <span>Causes</span></h2></div>
                            <div class="environment-cause environment-cause-simplegrid">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="cause-detail.html"><img src="extra-images/cause-simple-grid1.jpg" alt=""></a>
                                            <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                        </figure>
                                        <section>
                                            <h5><a href="cause-detail.html">Go Green Movement</a></h5>
                                            <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus </p>
                                            <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                        </section>
                                        <div class="skillst">
                                            <div class="progressbar1" data-width="63" data-target="63"></div>
                                        </div>
                                        <div class="cause-simplegrid-bottom">
                                            <span>Raised $ 2750</span>
                                            <span>Goal $ 5000</span>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="cause-detail.html"><img src="extra-images/cause-simple-grid2.jpg" alt=""></a>
                                            <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                        </figure>
                                        <section>
                                            <h5><a href="cause-detail.html">Give Them Education</a></h5>
                                            <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus </p>
                                            <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                        </section>
                                        <div class="skillst">
                                            <div class="progressbar1" data-width="63" data-target="63"></div>
                                        </div>
                                        <div class="cause-simplegrid-bottom">
                                            <span>Raised $ 2750</span>
                                            <span>Goal $ 5000</span>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="cause-detail.html"><img src="extra-images/cause-simple-grid3.jpg" alt=""></a>
                                            <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                        </figure>
                                        <section>
                                            <h5><a href="cause-detail.html">Help In Planting Trees</a></h5>
                                            <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus </p>
                                            <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                        </section>
                                        <div class="skillst">
                                            <div class="progressbar1" data-width="63" data-target="63"></div>
                                        </div>
                                        <div class="cause-simplegrid-bottom">
                                            <span>Raised $ 2750</span>
                                            <span>Goal $ 5000</span>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure>
                                            <a href="cause-detail.html"><img src="extra-images/cause-simple-grid4.jpg" alt=""></a>
                                            <figcaption> <a href="cause-detail.html">12 Donors</a> </figcaption>
                                        </figure>
                                        <section>
                                            <h5><a href="cause-detail.html">Go Green Movement</a></h5>
                                            <p>Lorem ipsum dolor sit amet hk consectetur adipiscin elita de vestibulum lacus </p>
                                            <a href="cause-detail.html" class="environment-fancy-btn">Read More<span></span></a>
                                        </section>
                                        <div class="skillst">
                                            <div class="progressbar1" data-width="63" data-target="63"></div>
                                        </div>
                                        <div class="cause-simplegrid-bottom">
                                            <span>Raised $ 2750</span>
                                            <span>Goal $ 5000</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="environment-main-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="environment-fancy-title"><h2>Our <span>Shop</span></h2></div>
                            <div class="environment-shop environment-shop-grid shop-grid-slider">
                                <div class="environment-shop-border">
                                    <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img1.jpg" alt=""><i class="fa fa-shopping-cart"></i></a></figure>
                                    <div class="environment-shop-grid-text">
                                        <h4><a href="shop-detail.html">Black Ninja T-Shirt</a></h4>
                                        <div class="star-rating"><span class="star-rating-box" style="width:58%"></span></div>
                                        <span class="environment-shop-cartbox">
                                            <del>$30.00</del>
                                            $ 19.00
                                        </span>
                                    </div>
                                </div>
                                <div class="environment-shop-border">
                                    <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img2.jpg" alt=""><i class="fa fa-shopping-cart"></i></a></figure>
                                    <div class="environment-shop-grid-text">
                                        <h4><a href="shop-detail.html">Ship Idea Card</a></h4>
                                        <div class="star-rating"><span class="star-rating-box" style="width:58%"></span></div>
                                        <span class="environment-shop-cartbox">
                                            <del>$30.00</del>
                                            $ 19.00
                                        </span>
                                    </div>
                                </div>
                                <div class="environment-shop-border">
                                    <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img3.jpg" alt=""><i class="fa fa-shopping-cart"></i></a></figure>
                                    <div class="environment-shop-grid-text">
                                        <h4><a href="shop-detail.html">Ship Idea T-Shirt</a></h4>
                                        <div class="star-rating"><span class="star-rating-box" style="width:58%"></span></div>
                                        <span class="environment-shop-cartbox">
                                            <del>$30.00</del>
                                            $ 19.00
                                        </span>
                                    </div>
                                </div>
                                <div class="environment-shop-border">
                                    <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img4.jpg" alt=""><i class="fa fa-shopping-cart"></i></a></figure>
                                    <div class="environment-shop-grid-text">
                                        <h4><a href="shop-detail.html">Ship Idea Card</a></h4>
                                        <div class="star-rating"><span class="star-rating-box" style="width:58%"></span></div>
                                        <span class="environment-shop-cartbox">
                                            <del>$30.00</del>
                                            $ 19.00
                                        </span>
                                    </div>
                                </div>
                                <div class="environment-shop-border">
                                    <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img2.jpg" alt=""><i class="fa fa-shopping-cart"></i></a></figure>
                                    <div class="environment-shop-grid-text">
                                        <h4><a href="shop-detail.html">Ship Idea Card</a></h4>
                                        <div class="star-rating"><span class="star-rating-box" style="width:58%"></span></div>
                                        <span class="environment-shop-cartbox">
                                            <del>$30.00</del>
                                            $ 19.00
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		<footer id="environment-footer" class="environment-footer-one">

            <div class="environment-footer-widget">
                <div class="container">
                    <div class="row">

                        <!--// Widget Contact Info \\-->
                        <aside class="col-md-3 widget widget_contact_info">
                            <div class="environment-footer-title"><h2>About Eye Eco</h2></div>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit ut vestibulum.</p>
                            <ul>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:name@email.com">info@example.com</a></li>
                                <li><i class="fa fa-map-marker"></i> Salford road, east London, UK</li>
                                <li><i class="fa fa-phone"></i> +123 45 678</li>
                            </ul>
                            <ul class="environment-footer-social">
                                <li><a href="https://www.facebook.com/" class="icon-facebook2"></a></li>
                                <li><a href="https://twitter.com/login" class="icon-social43"></a></li>
                                <li><a href="https://pk.linkedin.com/" class="icon-linkedin"></a></li>
                                <li><a href="https://plus.google.com/" class="icon-google-plus2"></a></li>
                            </ul>
                        </aside>
                        <!--// Widget Contact Info \\-->

                        <!--// Widget Latest News \\-->
                        <aside class="col-md-3 widget widget_latest_news">
                            <div class="environment-footer-title"><h2>Latest News</h2></div>
                            <ul>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/widget-latest-news-1.jpg" alt=""></a></figure>
                                    <section>
                                        <h6><a href="blog-detail.html">Suspendisse quis mol estie libero</a></h6>
                                        <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                    </section>
                                </li>
                                <li>
                                    <figure><a href="blog-detail.html"><img src="extra-images/widget-latest-news-1.jpg" alt=""></a></figure>
                                    <section>
                                        <h6><a href="blog-detail.html">Suspendisse quis mol estie libero</a></h6>
                                        <time datetime="2008-02-14 20:00">12 Feb 2017</time>
                                    </section>
                                </li>
                            </ul>
                        </aside>
                        <!--// Widget Latest News \\-->

                        <!--// Widget Twitter \\-->
                        <aside class="col-md-3 widget widget_twitter">
                            <div class="environment-footer-title"><h2>Twitter Feeds</h2></div>
                            <ul>
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <h6><a href="404.html">@ecoeyeenv</a> <time datetime="2008-02-14 20:00">1 day ago</time></h6>
                                    <p>Our New WordPress Theme "Eco Worl d" for… <a href="404.html">https://t.co/dtjSo07K4A</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <h6><a href="404.html">@ecoeyeenv</a> <time datetime="2008-02-14 20:00">1 day ago</time></h6>
                                    <p>Our New WordPress Theme "Eco Worl d" for… <a href="404.html">https://t.co/dtjSo07K4A</a></p>
                                </li>
                            </ul>
                        </aside>
                        <!--// Widget Twitter \\-->

                        <!--// Widget Gallery \\-->
                        <aside class="col-md-3 widget widget_gallery">
                            <div class="environment-footer-title"><h2>Flicker Photos</h2></div>
                            <ul>
                                <li><a data-fancybox-group="group" href="extra-images/gallery-widget-1.jpg" class="fancybox"><img src="extra-images/gallery-widget-1.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/gallery-widget-2.jpg" class="fancybox"><img src="extra-images/gallery-widget-2.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/gallery-widget-3.jpg" class="fancybox"><img src="extra-images/gallery-widget-3.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/gallery-widget-4.jpg" class="fancybox"><img src="extra-images/gallery-widget-4.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/gallery-widget-5.jpg" class="fancybox"><img src="extra-images/gallery-widget-5.jpg" alt=""></a></li>
                                <li><a data-fancybox-group="group" href="extra-images/gallery-widget-6.jpg" class="fancybox"><img src="extra-images/gallery-widget-6.jpg" alt=""></a></li>
                            </ul>
                        </aside>
                        <!--// Widget Gallery \\-->

                    </div>
                </div>
            </div>

            <!--// CopyRight Section \\-->
            <div class="environment-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="index.html" class="environment-footer-logo"><img src="images/footer-logo.png" alt=""></a>
                            <p>© 2016, All Right Reserved - by <a href="index.html">EyeCix</a></p>
                            <a href="#" class="environment-back-top"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// CopyRight Section \\-->

		</footer>
		<!--// Footer \\-->

	<div class="clearfix"></div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
