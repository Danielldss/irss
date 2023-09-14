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
                <form method="post" action="">
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
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            
            </div>
            
        </div>
    </div>


    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="banner-curve"></div>
		<div class="auto-container">
            <div class="inner">
                <div class="theme-icon"></div>
    			<div class="title-box">
                    <h1>Sobre nós</h1>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

	<!--About Section-->
    <section class="about-section-three">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="upper-text">IRSS - Marcas e patentes</div>
                <h2><strong>Seja o próximo a ter uma marca registrada!</strong></h2>
            </div>

            <div class="upper-row">
            	<div class="row clearfix">

                    <!--Text Column-->
                    <div class="text-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text">
                                <p>A IRSS MARCAS E PATENTES originalmente fundada em Curitiba no Paraná tem como seu representante o Agente da propriedade industrial, de número 1008, IVO ROBSON DA SILVA SANTOS. Com muito esforço e muita luta nosso agente vem realizando seus serviços pelos diversos estados do Brasil. Tem hoje sua rede de filiais espalhadas por Goiânia onde reside atualmente e faz a assessoria dos mais variados clientes, desde os que estão começando aos que estão no auge de suas carreiras. Conta com uma equipe especializada de advogados, auxiliares, secretariado, designer graficos e conselho jurídico para atendimento e esclarecimento de dúvidas a cerca da Propriedade Industrial.  Para cada projeto são criadas equipes multidisciplinares com uma perspectiva global da proteção adequada. Liderados por um responsável que garante um acompanhamento contínuo dos processos, prestando uma assessoria à medida das necessidades de nossos clientes.</p>
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

    <div class="theme-separator"></div>

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
