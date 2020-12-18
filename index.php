<?php $URL = "https://localhost/Personal/soltec_1/" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soltec - Tecnologia em primeiro lugar </title>
    <link
        href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&family=Poppins:wght@300&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?=$URL?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?=$URL?>css/style.css">
    <link rel="stylesheet" href="<?=$URL?>css/media.css">
</head>

<body>
    <?php 
       require('header.php');
    ?>
    <section class="banner" id="start">
        <div class="opacity">

        </div>
        <div class="r" style="width:100%">
            <div class="banner_item" style="background-image:url(<?=$URL?>images/tela.jpg); ">
                <div class="container">
                    <div class="banner_text">
                        <div>
                            <h2>A SOLTEC é uma Consultoria em Informática com foco em soluções inovadoras totalmente
                                alinhadas ao seu negócio.
                            </h2>
                            <div style="display: inline-block; margin-top:15px; padding:20px 0;">
                                <a onclick="contacto()" class="btn btn_default">Mais sobre a Soltec</a>
                                <a onclick="services()" class="btn btn_altern"> Nossas Soluções</a>
                            </div>
                        </div>
                    </div>
                    <ul class="numbers_body">
                        <li><sapn>Projectos em Carteira</sapn></li>
                        <li>
                            <span>Fase de briefing</span>
                            <strong>15</strong>

                        </li>
                        <li>
                            <span>Fase de Desenvolvimento</span>
                            <strong>4</strong>

                        </li>
                        <li>
                            <span>Fase de Teste</span>
                            <strong>2</strong>

                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="section_padding apresentation">
        <div class="container">
            <div class="apresentatiom_img">
                <h2>Mensagem do CEO</h2>
                <img src="<?=$URL?>images/dario.jpg">

            </div>
            <div class="apresentation_text">
                <h3>Bem-vindo ao site da SOLTEC</h3>

                <p>Quer seja um cliente, um possível cliente, um candidato ou apenas alguém interessado em Tecnologia,
                    esperamos que possa desfrutar desta sua visita e encontrar neste espaço ideias e informações úteis
                    que possam contribuir para a concretização dos seus objectivos.</p>

                <p>A SOLTEC foi criada para responder às necessidades dos nossos clientes, e para desenvolver sistemas
                    web
                    utilizando tecnologias de ponta, garantindo qualidade final dos projectos disponibilizados com foco
                    na
                    excelência e resultados e fornecer produtos inovadores ao mundo e gerar novas tendências para
                    contribuir
                    com a criação de uma sociedade próspera", a SOLTEC tem a ênfase nas ideias inovadoras para fornecer
                    ao
                    mundo novos mecanismos exclusivos como uma empresa focada na criatividade e no desenvolvimento. Essa
                    abordagem, apoiada por pesquisa e desenvolvimento contínuos, constitui a base operacional da SOLTEC.
                </p>

                <p>Teremos todo o gosto em ter brevemente notícias suas,</p>

                <p>Atentamente,</p>

            </div>

        </div>
    </section>
    <section class="section_padding" style="background-color:#f8f8f8" id="somos">
        <div class="container">
            <div class="who_are_text">
                <h2>Quem Somos</h2>
                <p>
                    A SOLTEC é uma empresa de direito angolano, composto por uma equipe 100% angolana, nasceu apaixonada
                    pela tecnologia e inovação, tem como core business a Consultoria em Informática, inscrita no
                    Registro de Contribuinte sob o nº 5000599433, composta de uma vasta equipe de técnicos
                    especializados em diferentes áreas de actuação, na conquista da qualidade e valor acrescentado nos
                    projectos disponilizados.

                </p>
            </div>
            <div class="who_image">
                <img src="<?=$URL?>images/logo_2.png" alt="">
            </div>
        </div>
        <div class="container" style="padding-top:90px">
            <article class="enterprise_items">
                <h2>nosso Perfil</h2>
                <p>A SOLTEC é uma Consultoria em Informática com foco em soluções tecnológicas.

                </p>
            </article>
            <article class="enterprise_items">
                <h2>Missão</h2>
                <p>Desenvolver sistemas web utilizando tecnologias de ponta, garantindo qualidade final dos projectos
                    disponibilizados com foco na excelência e resultados.

                </p>
            </article>
            <article class="enterprise_items">
                <h2>Visão</h2>
                <p>
                    Ser referência no segmento de Consultoria em Informática, agregando visibilidade e valor aos
                    projectos disponibilizados com baixo custo, por intermédio de soluções às necessidades de um nicho
                    de mercado bastante específico.

                </p>
            </article>
            <article class="enterprise_items" style="padding-left: 80px;">
                <h2>Valores</h2>
                <ul>
                    <li><span class="ion-ios-play"></span>
                        Cumprimento de Prazos
                    </li>
                    <li>
                        <span class="ion-ios-play"></span>Honestidade.
                    </li>
                    <li>
                        <span class="ion-ios-play"></span>Disponibilidade
                    </li>
                    <li>
                        <span class="ion-ios-play"></span>Inovação
                    </li>
                </ul>
                </p>
            </article>

        </div>
    </section>
    <section class="section_padding" id="services">
        <div class="container">
            <header>

                <h2>Nossos Soluções</h2>
                <p>Transformando os problemas em soluções tecnológicas.
                </p>
            </header>
            <div class="services_body">

                <article>
                    <h2>
                        Desenvolvimento de Website

                    </h2>
                    <p>
                        Desenvolvimento de Website Institucional, Lojas Virtuais, Portal online, Blog, etc.
                    </p>

                </article>
                <article>
                    <h2>Desenvolvimento de Aplicativo</h2>
                    <p>
                        Criacção de aplicativos multi-plataforma, para sistemas Android, iOS e Windows Phone.
                        Desenvolvemos aplicativos de Entrega, Táxi, Marketplace, loja virtual, entre outros.

                    </p>
                </article>
                <article>
                    <h2>
                        Software Sob Medida

                    </h2>
                    <p>
                        Desenvolvimento de Software mediante a realidade de trabalho de uma empresa.

                    </p>
                </article>

                <article>
                    <h2>

                        Business Process Management
                    </h2>
                    <ul>
                        <li>Gerenciamento de Processos de Negócio, visando a modelagem, automação, execução, controlo,
                            medição e otimização dos fluxos de actividades.</li>
                        <li> Desenho de novos processos eliminando actividades que não agregam valor à empresa.</li>
                        <li> Melhoria na compreensão do funcionamento dos processos de negócio e de decisão por parte
                            dos
                            colaboradores da organização.</li>
                    </ul>
                </article>
                <article>
                    <h2>
                        Sistema de Gestão Escolar
                    </h2>
                    <p>
                        Este é um Sistema de Gestão Escolar que irá promover e otimizar todo o processo de gestão
                        administrativa e educacional de um estabelecimento de ensino. Este sistema está composto por
                        seguintes pacotes:
                    <ul>
                        <li>
                            Software de Gestão Escolar</li>
                        <li>Portal do Aluno</li>
                        <li>Website Institucional</li>

                    </ul>
                    </p>

                </article>
                <article>
                    <h2>
                        Marketing e Publicidade


                    </h2>
                    <ul>
                        <li>Criacção, Configuração e Gestão de Redes Sociais
                        </li>
                        <li>
                            Anúncio patrocinado em todas as Redes Sociais
                        </li>
                        <li>Criacção de Campanhas de Mídias Sociais
                        </li>
                        <li>Criacção de Vídeo Institucional e Spot Publicitário

                        </li>

                    </ul>
                </article>
            </div>
        </div>
    </section>
    <section class="section_padding partner_clientes" id="marcas" style="background:#f0f2f2">
        <div class="container">
            <header style="margin-bottom: 20px;">
                <h2>Nossas Marcas</h2>

            </header>
            <div>
                <img src="<?=$URL?>images/dipanda.png" alt="">
            </div>
            <div>
                <img src="<?=$URL?>images/havetime.png" alt="">
            </div>
    </section>
    <section class="section_padding partner_clientes ps_multi" id="parceiros">
        <div class="container">
            <header>
                <h2>Nossos Parceiros</h2>
                <p>A SOLTEC entende que o sucesso de qualquer empresa não se faz sozinho e que o trabalho em parceria é
                    fundamental para alavancar resultados positivos.
                </p>
            </header>
            <div>
                <a href="#"> <img src="<?=$URL?>images/logo_oracle.png" alt=""></a>
            </div>
            <div>
                <a href="#"> <img src="<?=$URL?>images/logo_microsoft.jpg" alt=""></a>
            </div>
            <div>
                <a href="#"><img src="<?=$URL?>images/logo_IBM.png" alt=""></a>
            </div>
    </section>
    <section class="section_padding port_section" id="portfolio">
        <div class="container">
            <h2 class="title">Portfólio</h2>
        </div>
        <div class="container portfolio">
            <ul class="tab_li">
                <li data-target="all" class="active"><span class="ion-md-apps"></span><span>Todos</span></li>
                <li data-target="site"><span class="ion-logo-html5"></span><span>Website</span></li>
                <li data-target="apps"><span class="ion-ios-phone-portrait"></span><span>Aplicativos</span></li>
                <li data-target="system"><span class="ion-ios-school"></span><span>Sistema de Gestão Escolar</span>
                </li>
                <li data-target="seo"><span class="ion-md-megaphone"></span><span>Marketing e Publicidade</span></li>
            </ul>
            <article class="art all site">
                <a>
                    <img src="<?=$URL?>images/logo_type.png">
                </a>
            </article>
            <article class="art all app">
                <a>
                    <img src="<?=$URL?>images/mama.png">
                </a>
            </article>
            <article class="art all system">
                <a>
                    <img src="<?=$URL?>images/logo_type.png">
                </a>
            </article>
        </div>
    </section>
    <section class="section_padding course_page"  id="contacto">
        <div class="container">
            <div class="courses_page__text">
                <h2>Contactos</h2>
                <p>info@soltec.ao</p>
                <p>comercial@soltec.ao</p>
                <p>suporte@soltec.ao</p>
                <p>
                    Telef: +244 945 989 920
                </p>
                <p>Whatsapp: +244 939 576 934
                </p>

            </div>
            <div class="courses_form">
                <h2>Entre em contacto</h2>
                <p class="rsp"></p>
                <p class="rsp_error"></p>
                <form>
                    <input type="text" class="name" placeholder="Nome Completo">
                    <input type="email" placeholder="Email" class="email" required>
                    <input type="text" placeholder="Telefone" class="telefone">
                    <textarea rows="7" class="message"></textarea>
                    <button>
                        <span class="ion-ios-mail"></span>&nbsp;
                        Enviar
                    </button>
                    <img src="<?=$URL?>images/load.gif" title="loading">
                </form>
            </div>
        </div>
    </section>

    <?php
   require_once('footer.php');
?>