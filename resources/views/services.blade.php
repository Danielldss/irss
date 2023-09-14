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
    <!-- Inner Banner Section -->
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url(images/background/banner-bg-1.jpg);"></div>
		<div class="auto-container">
            <div class="inner">
    			<div class="title-box">
                    <h1>Serviços prestados</h1>
                    <div class="d-text">Conheça tudo sobre o que trabalhamos</div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

	<!--Services Section-->
    <section class="services-section">
        <div class="gradient-layer"></div>

        <div class="auto-container">
            <div class="row">

                <!--Column-->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="/images/icons/services/1.png" alt="" title=""></div>
                            </div>
                            <h3><a href="data-infrastructure.html">Pesquisa</a></h3>
                            <div class="text">A pesquisa de marca é uma das fases mais importantes e complexas para o início do processo de proteção de uma marca, é o primeiro passo para quem quer registrar sua marca.</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="/images/icons/services/1.png" alt="" title=""></div>
                            </div>
                            <h3><a href="data-infrastructure.html">Registro de Marca</a></h3>
                            <div class="text">Basicamente, as marcas registradas representam o valor e a reputação de uma empresa. O maior patrimônio comercial de uma empresa ou produto é a sua marca.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="/images/icons/services/1.png" alt="" title=""></div>
                            </div>
                            <h3><a href="data-infrastructure.html">Registro de Patente</a></h3>
                            <div class="text">As patentes são o tipo de propriedade intelectual mais complicado, bem como o mais restritivo. Para patentear uma invenção, você tem de cumprir um certo número de requerimentos.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="/images/icons/services/1.png" alt="" title=""></div>
                            </div>
                            <h3><a href="data-infrastructure.html">Direito Autoral</a></h3>
                            <div class="text">O direito autoral protege a expressão de idéias e reserva para seus autores o direito exclusivo de reproduzir seus trabalhos.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="/images/icons/services/1.png" alt="" title=""></div>
                            </div>
                            <h3><a href="data-infrastructure.html">Registro de Software</a></h3>
                            <div class="text">O registro do software é uma forma de assegurar a seu autor seus direitos de exclusividade na produção, uso e comercialização de sua criação.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="service-block wow fadeInUp">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box"><img src="/images/icons/services/1.png" alt="" title=""></div>
                            </div>
                            <h3><a href="data-infrastructure.html">Assessoria Jurídica</a></h3>
                            <div class="text">Assessoria em cessão de marca, transferência, orientação quanto à utilização de mecanismos legais para proteção da marca e sua defesa, bem como exercício e defesa de direitos relativos à propriedade intelectual.</div>
                        </div>
                    </div>
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
