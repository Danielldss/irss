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
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url(images/background/banner-bg-2.jpg);"></div>
		<div class="auto-container">
            <div class="inner">
    			<div class="title-box">
                    <h1>Como funciona</h1>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

	<!--FAQs Section-->
    <section class="faqs-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="accordion-box">
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">A pesquisa <div class="icon flaticon-down-arrow"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">A pesquisa é realizada no banco de dados fornecido pelo INPI (Instituto Nacional de Propriedade Industrial), responsável por acolher e regular direitos e obrigações relativos à propriedade industrial. Neste banco de dados estão todas as marcas já́ publicadas e registradas. “AVISO: Depois de fazer uma busca no banco de dados do INPI, ainda que os resultados possam parecer satisfatórios, não se deve concluir que a marca poderá ser registrada. O INPI no momento do exame do pedido de registro realizará nova busca que será submetida ao exame técnico que decidirá a respeito da registrabilidade do sinal.”</div>
                                    </div>
                                </div>
                            </div> 

                            <!--Block-->
                            <div class="accordion block current active-block">
                                <div class="acc-btn active">Encaminhar o pedido <div class="icon flaticon-down-arrow"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">A Registro Agora irá encaminhar seu pedido ao INPI, onde será gerado um documento com número de processo e com data de requerimento que, em média, leva 30 dias para ser publicado. Quem primeiro solicita o pedido de registro tem prioridade no nome solicitado.</div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">A Publicação <div class="icon flaticon-down-arrow"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Após o pedido de registro ser publicado abre-se prazo de 60 dias para que terceiros possam se opor a marca solicitada. Se houver oposição, é iniciado o prazo de 60 dias para manifestação.</div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">Exame de mérito <div class="icon flaticon-down-arrow"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Vencidas as etapas anteriores, a marca fica em análise, demorando em média 12 meses para que a decisão seja proferida.</div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">Indeferimento <div class="icon flaticon-down-arrow"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">É a recusa do registro. Após o despacho contrario, é iniciado o prazo de 60 dias para recurso.</div>
                                    </div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">Deferimento <div class="icon flaticon-down-arrow"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">É a aprovação da marca. Nesta etapa devem ser recolhias as taxas para concessão e emissão de certificado da marca.</div>
                                    </div>
                                </div>
                            </div>

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
