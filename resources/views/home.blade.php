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
                        <a href="#">Orçamento Gratuito</a>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start of hero -->   
        <section class="hero hero-slider-wrapper hero-style-1"   style="height:400px">
            <div class="hero-slider">
                <div class="slide"  style="height:400px">
                    <img src="assets/images/slider/slide-1.jpg" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-md-8 col-sm-10 slide-caption"  style="margin-top:30px;">
                                <h2><span>Energia Solar</span>Renova Sun</h2>
                                <p>Entre em Contato Conosco, Temos as Melhores Soluções <br>em Energia Solar para Você</p>
                                <div class="btns">
                                    <a href="#" class="theme-btn">Faça seu Orçamento Gratuito</a>
                                </div>
                            </div>

							<div class="col col-lg-4 col-md-8 col-sm-10"  style="margin:10px 0 0 -50px;width:35% !important">

                        <div class="contact-form" style="background-color:white;border-top:10px solid #ff5e14; border-radius:5px; box-shadow: 2px 2px 2px #000000;">
						<!-- <p style="text-align:center;color:black">Faça sua Cotação Gratuita</p> -->
                            <form class="row contact-validation-active" id="contact-form-s2" novalidate="novalidate"  style="height:350px;">
								<h2 style="font-size:20px;text-align:center">Faça sua Cotação Gratuita</h2>
                                <div class="col col-sm-6">
                                    <input type="text" class="form-control" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none" id="f-name" name="f_name" value="Nome Completo">
                                </div>
                                <div class="col col-sm-6">
                                    <input type="text" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none" class="form-control" id="l-name" name="l_name" value="Telefone">
                                </div>
                                <div class="col col-sm-12">
                                    <input type="email" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none" class="form-control" id="email" name="email" value="E-mail">
                                </div>
                                <div class="col col-sm-12">
                                    <select type="text" class="form-control" id="phone" name="phone" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none">
									<option>Escolha Seu Projeto</option>
									<option>Energia Solar Residencial</option>
									<option>Energia Solar Para Empresas</option>
									<option>Energia Solar Para Agronegócios</option>

									</select>
                                </div>
                                <div class="col col-xs-12">
                                    <textarea id="message" name="note" class="form-control" name="Sua Mensagem" style="border-radius:0;border:none;border-bottom:2px solid #ff5e14">Sua Mensagem</textarea>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="submit-btn">
                                        <button type="submit" style="border:none;margin-top:10px;" class="theme-btn-s2">Enviar</button>
                                        <div id="loader">
                                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                            </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start cta-section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="cta-text">
                            <h3>+ DE 3 ANOS DE EXPERIÊNCIA NO MERCADO DE ENERGIA SOLAR</h3>
                            <a href="#" class="theme-btn-s2">Contato pelo WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->








        <!-- start services-section -->
        <section class="services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Energia Limpa para Você</h2>
                            <p>Temos as Melhores Soluções de Energia Limpa para Você, Confira aqui</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids services-slider">
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-1.jpg" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Para sua Casa</h3>
                                    <p>Ajudamos você a economizar até 95% da conta de luz através da energia capturada por painéis fotovoltaicos</p>
                                    
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-2.jpg" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Para Empresas</h3>
                                    <p>Quer reduzir os custos na sua empresa e não sabe como? A conta de Luz pode ser o ponta pé inicial.</p>
                                    
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-overlay">
                                    <img src="assets/images/services/img-3.jpg" alt>
                                    <div class="overlay">
                                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3>Para Agronegócios</h3>
                                    <p>Oferecemos ainda, soluções pra propriedades rurais. Consulte nossa equipe!</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end services-section -->





		<section class="about-section-s3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="about-img">
                            <img src="assets/images/about-s3-pic.jpg" alt="">
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="about-text">
                            <div class="title">
                                <span>A MELHOR OPÇÃO EM </span>
                                <h2>PAINÉIS FOTOVOLTAÍCOS</h2>
                            </div>
                            <p>A RENOVA SUN é uma empresa estabelecida no mercado aliando experiência de trabalho com conhecimento técnico, entregando produtos e serviços de alta qualidade, fornecendo os melhores equipamentos do mercado, com as soluções mais recentes.<br><br> Ainda realizamos a instalação do sistema de energia solar fotovoltaica, elaboramos o projeto elétrico e homologamos o sistema junto à distribuidora de energia.<br><br> Contamos com um time de profissionais capacitados e certificados, prontos para atender e sanar todas as dúvidas dos clientes.</p>
                           
                        </div>

                    </div>
                </div>
            </div> <!-- end container -->
        </section>


		 <!-- start cta-section -->
		 <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
					<div class="fun-fact">
                                <div class="col-md-3">
                                    <div class="icon">
                                        <img src="assets/images/fun-fact/icon-1.png" alt="">
                                    </div>
                                    <h3>
                                        <span class="counter" data-count="1200">1200</span><span>+</span>
                                    </h3>
                                    <p>Usuários regulares</p>
                                </div>

                                <div class="col-md-3">
                                    <div class="icon">
                                        <img src="assets/images/fun-fact/icon-2.png" alt="">
                                    </div>
                                    <h3>
                                        <span class="counter" data-count="400">400</span><span>%</span>
                                    </h3>
                                    <p>Compatibilidade do Projeto</p>
                                </div>

                                <div class="col-md-3">
                                    <div class="icon">
                                        <img src="assets/images/fun-fact/icon-3.png" alt="">
                                    </div>
                                    <h3>
                                        <span class="counter" data-count="1000">1000</span><span>+</span>
                                    </h3>
                                    <p>Anos de Experiência Comprovada</p>
                                </div>

								<div class="col-md-3">
                                    <div class="icon">
                                        <img src="assets/images/fun-fact/icon-3.png" alt="">
                                    </div>
                                    <h3>
                                        <span class="counter" data-count="1000">300</span><span>+</span>
                                    </h3>
                                    <p>Clientes Satisfeitos</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->







        


<!-- start news-section -->
<section class="news-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title-s2">
                            <h2 style="font-size:20px">POR QUE INVESTIR EM UM SISTEMA DE ENERGIA SOLAR?</h2>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-5">
                        <p>Para quem não entende pode até parecer complicado, mas confiando na RENOVA SUN, fica muito fácil.</p>
                    </div>
                    <div class="col col-lg-3 col-md-3">
                       <div class="all-news-link">
                            <a href="#" class="theme-btn-s2">Contato pelo WhatsApp</a>
                       </div>
                    </div>
                </div>  

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="news-grids">
                            <div class="col-md-3">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-1.jpg" alt>
                                </div>
                                <div class="entry-body" style="height:250px">
                                    <h3><a href="#">Gere sua energia solar</a></h3>
                                    <p>Torne a energia solar fotovoltaica um de seus investimentos.</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-2.jpg" alt>
                                </div>
                                <div class="entry-body" style="height:250px">
                                    <h3><a href="#">Sem preocupação</a></h3>
                                    <p>Cuidamos de tudo: projeto, instalação, regularização, manutenção e monitoramento.</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-3.jpg" alt>
                                </div>
                                <div class="entry-body" style="height:250px">
                                    <h3><a href="#">Economia sustentável</a></h3>
                                    <p>Economize e ajude a criar um planeta movido pela energia limpa que provém do sol.</p>
                                    
                                </div>
                            </div>

							<div class="col-md-3">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-4.jpg" alt>
                                </div>
                                <div class="entry-body" style="height:250px">
                                    <h3><a href="#">Implantá-lo é simples</a></h3>
                                    <p>Instalação rápida, eficiente e com qualidade assegurada.</p>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>              
            </div> <!-- end container -->
        </section>
        <!-- end news-section -->




		<section class="work-process-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title-s4">
                            <span>Nossos Processos</span>
                            <h2 style="font-size:24px">Como Trabalhamos</h2>
                        </div>
                    </div>
                    <div class="col col-lg-8 col-md-8">
                        <p>PROCESSO DE TRABALHO | O QUE OFERECEMOS</p>
                    </div>
                </div>   

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="work-process-content">
                            <!-- Nav tabs -->
                            <div class="tablinks">
                                <ul>
                                    <li class="active">
                                        <a href="#tab-1" data-toggle="tab" aria-expanded="true">Equipe Qualificada</a>
                                    </li>
                                    <li class="">
                                        <a href="#tab-2" data-toggle="tab" aria-expanded="false">Análise de projeto</a>
                                    </li>
                                    <li class="">
                                        <a href="#tab-3" data-toggle="tab" aria-expanded="false">Resultados finais</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active in" id="tab-1">
                                    <div class="img-holder">
                                        <img src="assets/images/workprocess-pic.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>Equipe Qualificada</h3>
                                        <p>Trabalhamos profissionais qualificados e experientes.</p>
                                        <div class="detail-list">
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Duis aute irure dolor in reprehenderit in.</li>
                                                <li><i class="fa fa-caret-right"></i> Voluptate velit esse cillum dolore eu.</li>
                                                <li><i class="fa fa-caret-right"></i> Excepteur sint occaecat cupidatat no.</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Sunt in culpa qui officiakua.</li>
                                                <li><i class="fa fa-caret-right"></i> Inventore veritatis et quasi architecto.</li>
                                                <li><i class="fa fa-caret-right"></i> Accusantium doloremque laudantium</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2">
                                    <div class="img-holder">
                                        <img src="assets/images/workprocess-pic.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>Análise de projeto</h3>
                                        <p>Para melhoria das condições ambientais de conforto.</p>
                                        <div class="detail-list">
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Duis aute irure dolor in reprehenderit in.</li>
                                                <li><i class="fa fa-caret-right"></i> Voluptate velit esse cillum dolore eu.</li>
                                                <li><i class="fa fa-caret-right"></i> Excepteur sint occaecat cupidatat no.</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Sunt in culpa qui officiakua.</li>
                                                <li><i class="fa fa-caret-right"></i> Inventore veritatis et quasi architecto.</li>
                                                <li><i class="fa fa-caret-right"></i> Accusantium doloremque laudantium</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3">
                                    <div class="img-holder">
                                        <img src="assets/images/workprocess-pic.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <h3>Resultados finais</h3>
                                        <p>Financie a sua energia e pague muito menos na sua conta de energia.</p>
                                        <div class="detail-list">
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Duis aute irure dolor in reprehenderit in.</li>
                                                <li><i class="fa fa-caret-right"></i> Voluptate velit esse cillum dolore eu.</li>
                                                <li><i class="fa fa-caret-right"></i> Excepteur sint occaecat cupidatat no.</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Sunt in culpa qui officiakua.</li>
                                                <li><i class="fa fa-caret-right"></i> Inventore veritatis et quasi architecto.</li>
                                                <li><i class="fa fa-caret-right"></i> Accusantium doloremque laudantium</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             
            </div> <!-- end container -->
        </section>

		<section class="cta-section-s2" style="margin-bottom:100px">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="cta-text">
                            <h3>Entre em Contato Conosco e Faça sua Cotação Gratuita</h3>
                            <a href="#" class="theme-btn-s2">Entre em Contato Pelo WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>

        <!-- start testimonials-section -->
        <section class="testimonials-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title-s2">
                            <h2 style="font-size:24px">Depoimentos de <br>Nossos Clientes</h2>
                        </div>
                    </div>
                    <div class="col col-lg-8 col-md-8">
                        <p>Saiba Mais o Que Nossos Clientes Dizem de Nossos Serviços em Energia Solar.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-lg-11 col-lg-offset-1">
                        <div class="testimonials-grids testimonials-slider">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/testimonials/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h3>“Vou Fazer Minha Casa Totalmente Sustentável”</h3>
                                    <span class="client-info">- Paulo Lindberg, Analista</span>
                                    <p>A Energia Solar Fotovoltáica é um recurso que venho pesquisando há vários anos. Agora, com a oportunidade de poder construir a minha casa&nbsp;do jeito que sempre sonhei, pensei:&nbsp;“vou fazer a minha casa &nbsp;totalmente sustentável”.</p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end testimonials-section -->


        <!-- start contact-section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="col col-lg-10">
                    <div class="row">
                        <div class="col col-lg-4 col-md-4">
                            <div class="section-title-s3">
                                <h2>Faça sua Cotação Gratuita</h2>
                            </div>
                        </div>
                        <div class="col col-lg-7 col-md-8">
                            <div class="title-text">
                                <p>Entre em Contato Conosco! Confira os Melhores Preços Personalizados Para a Sua Necessidade!</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form form">
                        <form method="post" id="contact-form" class="contact-validation-active">
                            <div>
                                <label for="name">Nome Completo</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div>
                                <label for="phone">Telefone</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                            <div>
                                <label>Escolha o Seu Projeto</label>
                                <select type="text" class="form-control" id="phone" name="phone">
									<option>Energia Solar Residencial</option>
									<option>Energia Solar Para Empresas</option>
									<option>Energia Solar Para Agronegócios</option>

									</select>
                            </div>
							
                            <div class="submit-btn-wrap">
                                <input value="Enviar Cotação" type="submit">
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>                     
                </div>
            </div> <!-- end container -->
            <div class="contact-man">
                <img src="assets/images/contact-man.png" alt>
            </div>
        </section>
        <!-- end contact-section -->


        


        <!-- start contact-info-map-section -->
        <section class="contact-info-map-section">
            <div class="content">
                <div class="left-col">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.033319922433!2d-46.28777188255614!3d-23.423163499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7e7f5ed3861f%3A0x65fef0f0c07d064c!2sEstr.%20Jos%C3%A9%20Antonio%20Manoel%2C%2037%20-%20S%C3%A3o%20Bento%2C%20Aruj%C3%A1%20-%20SP%2C%2007432-575!5e0!3m2!1spt-BR!2sbr!4v1676131843212!5m2!1spt-BR!2sbr" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                <div class="right-col">
                    <div class="inner">
                        <div class="title-text">
                            <h3>Entre em Contato Conosco</h3>
                            <p>Faça seu Orçamento de Energia Limpa com Quem Entende do Assunto!</p>
                        </div>
                        <div class="contact-info">
                            <ul>
                                <li><i class="fa fa-phone"></i>(11) 91339-2772</li>
                                <li><i class="fa fa-envelope"></i> renovasun@renovasun.com.br</li>
                                <li><i class="fa fa-home"></i> Estrada José Antonio Manoel, 37, São Bento Arujá, SP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end content -->
        </section>
        <!-- end contact-info-map-section -->

        <!-- end news-letter-section -->
@include('includes.footer')
