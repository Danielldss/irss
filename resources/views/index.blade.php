<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{$title}}</title>
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/images/favicon.png" type="image/x-icon">

<!-- Responsive Settings -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    @include('header')
    <!-- End Main Header -->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="/#">Finance</a></li>
                    <li><a href="/#">Idea</a></li>
                    <li><a href="/#">Service</a></li>
                    <li><a href="/#">Growth</a></li>
                    <li><a href="/#">Plan</a></li>
                </ul>
            
            </div>
            
        </div>
    </div>


    <!-- Banner Section -->
    <section class="banner-section banner-one">
        <div class="banner-curve"></div>

		<div class="banner-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
			
            <!-- Slide Item -->
			<div class="slide-item">
				<div class="auto-container">
					<div class="content-box">
                        <div class="round-layer"></div>
                        
                        <div class="content">
                            <div class="inner">
                                <div class="sub-title">Marcas e patentes</div>
        						<h1><strong>Por que correr risco? Não arrisque!</strong> Registre.</h1>
        						<div class="links-box">
                                    <a href="/contato" class="theme-btn btn-style-one"><div class="btn-title">Entre em contato</div></a>
                                </div>
                            </div>
                        </div>
                        <div class="content-image"><img src="/images/main-slider/content-image-1.png" alt="" title=""></div>
					</div>  
				</div>
			</div>

		</div>
    </section>
    <!--End Banner Section -->

	<!--About Section-->
    <section class="about-section">
        <div class="auto-container">
        	<div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="upper-text">IRSS Marcas e Patentes</div>
                            <h2>Seja o número um no registro da sua marca</h2>
                        </div>

                        <div class="text-content">
                            <p>O registro de marca ou patente é muito importante, com ele alem de assegurar quem é o verdadeiro dono da marca, você garante seus direitos evitando que terceiros e concorrentes desleais ameacem seu maior patrimônio, que é a marca. Pois é através dela que Produtos e serviços são reconhecidos no mercado e perante o consumidor. Marca Registrada Patrimônio garantido e tranqüilidade de quem é dono. A IRSS Marcas e Patentes, empresa atuante em Goiânia prestando bons serviços lhe dá todas as condições e assessoramento para sua tranqüilidade e comodidade.</p>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <!--Images-->
                        <div class="images">
                            <div class="row clearfix">
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="/images/resource/about-image-1.jpg" alt="" title=""></figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="/images/resource/about-image-2.jpg" alt="" title=""></figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="/images/resource/about-image-3.jpg" alt="" title=""></figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="/images/resource/about-image-4.jpg" alt="" title=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!--Default Background Section-->
    <section class="default-bg-section">
        <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div>

        <div class="auto-container">
            <div class="content-box">
                <h2>Consulte hoje mesmo um de nossos consultores e contrate uma empresa seria transparente com vasta experiência no mercado nacional e fique tranquilo!</h2>
                <div class="link-box">
                    <a href="/contato" class="theme-btn btn-style-one"><div class="btn-title">ENTRAR EM CONTATO</div></a>
                </div>
            </div>
        </div>
    </section>
    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="sponsors-outer">
            <!--Sponsors-->
            <div class="auto-container">
                <!--Sponsors Carousel-->
                <div class="sponsors-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "800":{ "items" : "3" }, "1024":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/1.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/2.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/3.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/4.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/5.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/1.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/2.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/3.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/4.jpg" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="/#"><img src="/images/clients/5.jpg" alt=""></a></figure></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    @include('footer')

</div>
<!--End pagewrapper-->

<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/scrollbar.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/custom-script.js"></script>

</body>
</html>
