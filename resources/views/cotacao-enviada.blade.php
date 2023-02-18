@include('includes.header')

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
           <style>
			html {
			scroll-behavior: smooth;
			}
		  .navbar a:after{
			top:75% !important;
		  }
		   </style>

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Menu de Navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/')}}/assets/images/logo.png" alt="Renova Sun" title="Renova Sun" style="width:88px"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav" >
                            <li class="menu-item-has-children">
                                <a href="{{url('/')}}">Home</a>
                                
                            </li>
                            <li><a href="{{url('/')}}/#quem-somos">Quem Somos</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{url('/')}}/#servicos">Nossos Serviços</a>
                               
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{url('/')}}/#projetos">Projetos / Clientes</a>
                                
                            </li>
                        
                            <li><a href="{{url('/')}}/#contato">Fale Conosco</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="request-quote">
                        <a href="https://www.contate.me/renova-sun"  target="_BLANK">Orçamento Gratuito</a>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start cta-section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="cta-text">
                            <h3 style="font-size:1.5rem;">COTAÇÃO ENVIADA COM SUCESSO! LOGO RETORNAREMOS SEU E-MAIL</h3>
                            <a href="{{url('/')}}" class="theme-btn-s2">VOLTAR PARA O SITE PRINCIPAL</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->

        @include('includes.footer')
