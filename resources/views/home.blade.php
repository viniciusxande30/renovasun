@include('includes.header')

<body>
    <!-- start page-wrapperrr -->
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
          .header-style-1 #navbar, .header-style-2 #navbar, .header-style-3 #navbar {
    MARGIN-TOP: 20px !important;
}		  
.header-style-1 .request-quote a, .header-style-2 .request-quote a, .header-style-3 .request-quote a {
    color: #fff;
    margin-top: 0px;
    padding: 50px 19px !important;
    display: inline-block;
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
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/')}}/assets/images/logo.png" alt="Renova Sun" title="Renova Sun" style="width:150px"></a>
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
                                    <a href="https://www.contate.me/renova-sun" target="_blank" class="theme-btn">Faça seu Orçamento Gratuito</a>
                                </div>
                            </div>

							<div class="col col-lg-4 col-md-8 col-sm-10"  style="margin:10px 0 0 -50px;width:35% !important">

@php
 $useragent=$_SERVER['HTTP_USER_AGENT'];
 $is_mobile = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))
@endphp
	


                        <div class="contact-form" style="background-color:white;border-top:10px solid #ff5e14; border-radius:5px; box-shadow: 2px 2px 2px #000000;">
						@if(!$is_mobile)

						<!-- <p style="text-align:center;color:black">Faça sua Cotação Gratuita</p> -->
                            <form method="post" class="row contact-validation-active"  style="height:350px;" action="{{url('/')}}/solicitar-cotacao">
                            @csrf
								<h2 style="font-size:20px;text-align:center">Faça sua Cotação Gratuita</h2>
                                <div class="col col-sm-6">
                                    <input type="text" class="form-control" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none" id="f-name" name="name" placeholder="Nome Completo"request>
                                </div>
                                <div class="col col-sm-6">
                                    <input type="text" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none" class="form-control" id="l-name" name="phone" placeholder="Telefone"request>
                                </div>
                                <div class="col col-sm-12">
                                    <input type="email" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none" class="form-control" id="email" name="email" placeholder="E-mail"request>
                                </div>
                                <div class="col col-sm-12">
                                    <select type="text" class="form-control" id="phone" name="project" style="margin-bottom:20px;border-radius:0;border:none;border-bottom:2px solid #ff5e14; box-shadow:none" request>
									<option value=''>Escolha Seu Projeto</option>
									<option value="Energia Solar Residencial">Energia Solar Residencial</option>
									<option value="Energia Solar Para Empresas">Energia Solar Para Empresas</option>
									<option value="Energia Solar Para Agronegócios">Energia Solar Para Agronegócios</option>

									</select>
                                </div>
                                <div class="col col-xs-12">
                                    <textarea id="message" class="form-control" name="msg" style="border-radius:0;border:none;border-bottom:2px solid #ff5e14" request>Sua Mensagem</textarea>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="submit-btn col-12">
                                        <button type="submit" style="border:none;margin-top:10px;" class="theme-btn-s2" >Enviar</button>
                                        <p style="text-align:right;font-size:20px;">
                                        <a href="https://www.facebook.com/Renovasunenergias" target="_BLANK"><i class="fa fa-facebook" style="padding-right:10px;color:#ff5e14"></i></a>
                                        <a href="https://www.instagram.com/renovasun/" target="_BLANK"><i class="fa fa-instagram"style="padding-right:10px;color:#ff5e14"></i></a>
                                        <a href="https://www.contate.me/renova-sun" target="_BLANK"><i class="fa fa-whatsapp"style="color:#ff5e14"></i></p></a>


                                    </div>
                                    
                                </div>
                                
                            </form>
							@endif
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
                            <a href="https://www.contate.me/renova-sun" class="theme-btn-s2">Contato pelo WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->








        <!-- start services-section -->
        <section class="services-section section-padding" id="servicos">
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
                                        <a href="https://www.contate.me/renova-sun" target="_BLANK"><i class="fa fa-whatsapp"></i></a>
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
                                        <a href="https://www.contate.me/renova-sun" target="_BLANK"><i class="fa fa-whatsapp"></i></a>
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
                                        <a href="https://www.contate.me/renova-sun"  target="_BLANK"><i class="fa fa-whatsapp"></i></a>
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





		<section class="about-section-s3 section-padding" id="quem-somos">
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
		 <section class="cta-section" id="projetos">
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
                            <a href="https://www.contate.me/renova-sun" target="_BLANK" class="theme-btn-s2">Contato pelo WhatsApp</a>
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
                                                <li><i class="fa fa-caret-right"></i> Nossa equipe é formada por profissionais altamente capacitados.</li>
                                                <li><i class="fa fa-caret-right"></i> Contamos com anos de experiência no mercado.</li>
                                                <li><i class="fa fa-caret-right"></i> Nossos profissionais são especializados em diversas áreas.</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Investimos em treinamentos e atualizações para nossa equipe.</li>
                                                <li><i class="fa fa-caret-right"></i> Oferecemos um atendimento personalizado e de qualidade.</li>
                                                <li><i class="fa fa-caret-right"></i> Nosso compromisso é entregar resultados de excelência com profissionais de alto nível.</li>
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
                                                <li><i class="fa fa-caret-right"></i> Nosso objetivo é garantir um ambiente confortável e saudável para nossos clientes.</li>
                                                <li><i class="fa fa-caret-right"></i> Realizamos uma análise minuciosa para identificar oportunidades de melhoria.</li>
                                                <li><i class="fa fa-caret-right"></i> Utilizamos tecnologias avançadas para obter resultados precisos na análise de projetos.</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Nossa equipe é especializada em avaliar aspectos técnicos e ambientais para garantir o máximo conforto.</li>
                                                <li><i class="fa fa-caret-right"></i> Focamos em soluções sustentáveis e econômicas para melhorar as condições ambientais de conforto.</li>
                                                <li><i class="fa fa-caret-right"></i> Nossa análise de projeto ajuda a garantir a eficiência energética e a redução de impactos ambientais.</li>
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
                                                <li><i class="fa fa-caret-right"></i> Fique surpreso com os resultados finais do financiamento de energia.</li>
                                                <li><i class="fa fa-caret-right"></i> Reduza suas despesas de energia e economize dinheiro com nosso financiamento.</li>
                                                <li><i class="fa fa-caret-right"></i> Faça seu dinheiro render mais e invista em energia limpa e renovável.</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fa fa-caret-right"></i> Nossos clientes desfrutam de economias significativas em suas contas de energia.</li>
                                                <li><i class="fa fa-caret-right"></i> Oferecemos soluções personalizadas para ajudá-lo a atingir seus objetivos financeiros e energéticos.</li>
                                                <li><i class="fa fa-caret-right"></i> Invista em um futuro mais sustentável e comece a economizar em sua conta de energia hoje mesmo.</li>
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
                            <a href="https://www.contate.me/renova-sun"  target="_BLANK" class="theme-btn-s2">Entre em Contato Pelo WhatsApp</a>
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
        <section class="contact-section section-padding" id="contato">
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
                        <form method="post"  class="contact-validation-active" action="{{url('/')}}/solicitar-cotacao">
                            @csrf
                            <div>
                                <label for="name">Nome Completo</label>
                                <input type="text" id="name" name="name" class="form-control" request>
                            </div>
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control" request>
                            </div>
                            <div>
                                <label for="phone">Telefone</label>
                                <input type="text" id="phone" name="phone" class="form-control" request>
                            </div>
                            <div>
                                <label>Escolha o Seu Projeto</label>
                                <select type="text" class="form-control" name="project" request>
									<option value="Energia Solar Residencial">Energia Solar Residencial</option>
									<option value="Energia Solar Para Empresas">Energia Solar Para Empresas</option>
									<option value="Energia Solar Para Agronegócios">Energia Solar Para Agronegócios</option>

									</select>
                            </div>
                            <input type="hidden" value="Quero uma Cotação de Valores" name="msg">
							
                            <div class="submit-btn-wrap">
                                <input value="Solicitar Cotação" type="submit">
                               
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
                                <li><a href="contate.me/renova-sun" target="_blank"><i class="fa fa-phone"></i>(11) 91339-2772</a></li>
                                <li><a href="mailto:renovasun.com.br"><i class="fa fa-envelope"></i> renovasun@renovasun.com.br</a></li>
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
