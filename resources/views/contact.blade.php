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
        <div class="image-layer" style="background-image: url(images/background/banner-bg-2.jpg);"></div>
		<div class="auto-container">
            <div class="inner">
    			<div class="title-box">
                    <h1>Contato</h1>
                    <div class="d-text">Envie dúvidas, pesquisa de marcas, e solicitação de registro ou contratação de serviços.</div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

	<!--Contact Section-->
    <section class="contact-section-two">
        <div class="auto-container">
            <div class="upper-row">
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <div class="upper-text">IRSS - Marcas e patentes</div>
                                <h2>Você tem alguma pergunta? Ficaremos felizes em ajudar!</h2>
                            </div>

                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Form Column-->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <!--Form Box-->
                            <div class="form-box">
                                <div class="default-form contact-form">
                                    <form method="post" action="sendemail.php" id="contact-form">
                                        <div class="row clearfix">                                    
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Nome completo" required="" value="">
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="E-mail" required="" value="">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="phone" placeholder="Telefone" required="" value="">
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="subject" placeholder="Assunto" required="" value="">
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Mensagem" required=""></textarea>
                                            </div>
                    
                                            <div class="form-group col-md-12 col-sm-12">
                                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Enviar</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="lower-row">

                    <!--Info Block-->
                    <div class="contact-info-block col-lg-12 col-md-12 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content-box">
                                <div class="title-box">
                                    <h4><a href="case-studies.html">IRSS</a></h4>
                                    <div class="sub-text">Goiânia, GO</div>
                                </div>
                                <div class="text-content">
                                    <div class="info">
                                        <ul>
                                            <li>Rua Presidente Rodrigues Alves, Jardim Presidente, Goiânia - GO - CEP 74353400</li>
                                            <li>Ligue: <a href="tel:06232580499"><strong>(62) 3258-0499</strong></a></li>
                                            <li><a href="mailto:contato@irssmarcasepatentes.com.br">contato@irssmarcasepatentes.com.br</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Map Box-->
                            <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.660688415114!2d-49.32667298458824!3d-16.743773751481534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef7a0a0cb580d%3A0x3f991e9e6192e914!2sR.%20Pres.%20Rodrigues%20Alves%2C%20Goi%C3%A1s!5e0!3m2!1spt-BR!2sbr!4v1592255153628!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

<!--Google Map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ"></script>
<script src="/js/map-script.js"></script>

</body>
</html>
