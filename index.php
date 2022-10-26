<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>Assinatura Eletrônica</title>

     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
     <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
     <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
     <link rel="stylesheet" href="assets/css/Article-Clean.css">
     <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
     <link rel="stylesheet" href="assets/css/Footer-Dark.css">
     <link rel="stylesheet" href="assets/css/Header-Dark.css">
     <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
     <link rel="stylesheet" href="assets/css/styles.css">
     <link rel="stylesheet" href="assets/css/Team-Boxed.css">
     <script defer src="assets/js/main.js"></script>
     <script defer src="assets/js/acessibilidade.js"></script>
     <script defer src="assets/js/viacep.js"></script>
</head>

<body>
    <header class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                    <a class="navbar-brand" href="#"><img src="assets/img/logo.png"></a>
                    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                         <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">Áreas do Site </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#anchor1">Como gerar sua Assinatura</a>
                                <a class="dropdown-item" href="#anchor2">Como configurar sua Assinatura</a>
                                <a class="dropdown-item" href="#anchor3">O que é a assinatura eletrônica</a>
                                <a class="dropdown-item" href="#anchor4">O que é preciso incluir na assinatura</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group">
                        </div>
                    </form>
                    <span class="navbar-text">
                        <a class="login" href="#">Log In</a>
                    </span>
                        <a class="btn btn-light action-button" role="button" href="#">Sign Up</a>
                </div>
            </div>
        </nav>
    </header>
    <main id="conteudo">
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <section class="contact-clean" style="height: 610px;padding: 5px 0;background: var(--secondary);">
                        <form method="post" style="height: 600px;">
                            <h2 class="text-center" style="font-size: 16px;">Personalize sua Assinatura Eletrônica<br></h2>
                            <div class="form-group">
                                <input class="form-control" type="text" id="url" placeholder="URL da Imagem" style="line-height: 10px;padding: 1px 1px;padding-right: 1px;padding-top: 1px;padding-bottom: 1px;padding-left: 1px;height: 20px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="username" placeholder="Nome e sobrenome" style="line-height: 10px;height: 20px;padding: 1px 1px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="cargo" placeholder="Cargo" style="height: 20px;padding: 1px 1px;line-height: 10px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="empresa" placeholder="Nome da Empresa" style="height: 20px;padding: 1px 1px;line-height: 10px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="tel" id="tel" placeholder="DDD + Telefone" style="height: 20px; padding: 1px 1px;line-height: 10px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="" type="text" id="cep" placeholder="CEP" style="height: 20px; padding: 1px 1px;line-height: 10px;" oninput="pesquisacep(this.value);">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="cidade" placeholder="Cidade" style="height: 20px;padding: 1px 1px;line-height: 10px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="uf" placeholder="UF" style="height: 20px;padding: 1px 1px;line-height: 10px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="hidden" id="ibge" placeholder="IBGE" style="height: 20px;padding: 1px 1px;line-height: 10px;">
                            </div>
                            <div class="form-group">
                                <input class="form-control is-invalid" type="email" id="email" placeholder="E-mail" style="height: 20px;padding: 1px 1px;line-height: 10px;">
                                <small class="form-text text-danger">Insira corretamente o endereço de e-mail.</small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="site" placeholder="Site (Opcional)" style="height: 20px;padding: 1px 1px;font-size: 10px;line-height: 10px;">
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="" id="check" checked>
                                <label class="form-check-label" for="flexCheckChecked" style="height: 20px;padding: 1px 1px;font-size: 10px;line-height: 10px;">
                                    Estou de acordo em fornecer minhas informações e ciente de que poderão ser usadas apenas para melhorias internas do sistema.
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="submit">Gerar</button>
                            </div>
                        </form>
                    </section>
                </div>
                <div class="col align-self-center">
                    <section class="article-clean">
                        <div class="container">
                            <div class="row text-center align-items-center">
                                   <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                                        <div class="intro">
                                            <img class="img-fluid" src="assets/img/desk.jpg">
                                        </div>
                                   </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <section id="anchor1" data-aos="zoom-in-down" data-aos-duration="600" class="highlight-blue" style="background: var(--gray-dark);">
            <div class="container">
                <div class="navbar">
                    <ul>
                        <li class="nav-item">
                            <button class="btn btn-primary" id="botao" onclick="aumentarLetra(caixaDeTextos)">+</button>
                            <button class="btn btn-primary" id="botao" onclick="diminuirLetra(caixaDeTextos)">-</button>
                        </li>
                    </ul>
                </div>
                <div class="intro">
                    <h2 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center">
                        <strong>COMO GERAR SUA ASSINATURA ELETRÔNICA PARA E-MAIL</strong>
                    </h2>
                    <p class="text-left"><strong>Importante: </strong>Para a URL da imagem clique com o botão direito na imagem e clique em <strong>Copiar endereço da imagem.</strong><br>
                    <br>
                    Passo 1: Entre com suas informações e confira se elas estão corretas.<br>
                    <br>
                    Passo 2: Clique no botão Gerar.<br>
                    <br>
                    Passo 3: Após clicar no botão, um arquivo HTML será baixado; clique duas vezes nele para abri-lo.<br>
                    <br>
                    Passo 4: Aperte Ctrl+A para selecionar sua assinatura e a copie, usando o comando Ctrl+C; você poderá, se preferir, salvar sua assinatura em um arquivo do Word em vez de HTML.<br>
                    <br>
                    Passo 5: Com sua assinatura copiada, você poderá colá-la diretamente no corpo do e-mail ou, ainda, poderá configurá-la em seu e-mail usual (gmail, outlook, entre outros).</p>
                </div>
            </div>
        </section>
        <section id="anchor2" data-aos="zoom-in-down" data-aos-duration="600" class="team-boxed">
            <div class="container" style="background: var(--white);">
                <div class="intro">
                    <h2 class="text-center"><strong>COMO CONFIGURAR SUA ASSINATURA ELETRÔNICA NO:</strong><br></h2>
                </div>
                <div class="row people">
                    <div class="col item" style="background: var(--white);">
                        <div class="box"><img class="rounded-circle" src="assets/img/gmail.png">
                            <h3 class="name">Configurando sua assinatura no Gmail:<br></h3>
                            <p class="text-left" style="text-align: left;">
                              Abra seu Gmail.<br>
                              Clique na (Configurações).<br>
                              Clique em ver todas as configurações.<br>
                              Na aba geral, role até chegar ao campo Assinatura e clique em Criar Nova.<br>
                              Dê um nome para sua assinatura.<br>
                              Ao lado do nome de sua assinatura, terá um campo onde você deverá colar sua assinatura eletrônica.<br>
                              Após esta inserção, role a página até o final e clique em Salvar Alterações.<br>
                              Com isso feito, você poderá normalmente redigir sua mensagem em seu e-mail e, ao finalizá-la, bastará clicar no botão da caneta para aparecer sua assinatura no encerramento da mensagem do e-mail.</p>
                        </div>
                    </div>
                    <div class="col item">
                        <div class="box"><img class="rounded-circle" src="assets/img/outlook.png">
                            <h3 class="name">Configurando sua assinatura no Outlook:<br></h3>
                            <p class="text-left" style="text-align: left;">Abra seu Outlook.<br>
                            Clique na (Configurações).<br>
                            Um campo de pesquisa irá aparecer, digite nele Assinatura; em seguida, ele te mostrará a opção Assinatura de E-mail, clique nela.<br>
                            Na sequência, será aberta a janela com o campo, em que você irá colar sua assinatura; você poderá selecioná-la sempre que enviar um e-mail, a fim de anexar sua assinatura eletrônica ao final de cada mensagem do e-mail.<br>
                            Clique em Salvar.<br>
                            Caso prefira, selecionar quando sua assinatura deverá ser incluída; ao enviar um e-mail, clique nos ...<br>
                            Clique em Inserir Assinatura.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-aos="zoom-in-down" data-aos-duration="600" class="highlight-blue" style="background: var(--gray-dark);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center"><strong>SOBRE A ASSINATURA ELETRÔNICA PARA E-MAIL</strong><br></h2>
                </div>
            </div>
        </section>
        <section id="anchor3" data-aos="zoom-in-down" data-aos-duration="600" class="highlight-blue" style="background: var(--gray);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center"><strong>O que é a assinatura eletrônica para e-mail profissional?</strong><br></h2>
                    <p class="text-center" style="text-align: left;">A assinatura eletrônica é um recurso, usado pelas empresas e profissionais de modo geral, para comprovação de autoria e da integridade empregada no meio virtual, como, no caso, o e-mail. Além disso, é uma forma de personalizar as mensagens da empresa, tornando-as mais profissionais. <br></p>
                </div>
            </div>
        </section>
        <section data-aos="zoom-in-down" data-aos-duration="600" class="highlight-blue" style="background: var(--gray-dark);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center"><strong>Porque é importante ter uma assinatura de e-mail profissional?</strong><br></h2>
                    <p class="text-center"><br>Hoje a seriedade em uma empresa é fundamental, e essa é uma das palavras fortes para o mundo dos negócios.<br> Uma assinatura eletrônica de e-mail profissional transmite seriedade na sua comunicação. Outro ponto importante é a padronização visual que sua comunicação terá, dando mais credibilidade para o seu negócio.<br><br></p>
                </div>
            </div>
        </section>
        <section id="anchor4" data-aos="zoom-in-down" data-aos-duration="600" class="highlight-blue" style="background: var(--gray);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center"><strong>O que é preciso incluir na assinatura eletrônica de e-mail para ser funcional?</strong><br></h2>
                    <p class="text-center">É preciso incluir dados básicos, como nome, cargo ou função, telefones, e-mail corporativo, nome da empresa, logo ou foto, entre outros, e sempre atualizá-los. Isso é fundamental, pois são eles que irão compor a base da assinatura eletrônica de e-mail. <br><br></p>
                </div>
            </div>
        </section>
        <section data-aos="zoom-in-down" data-aos-duration="600" class="highlight-blue" style="background: var(--gray-dark);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center"><strong>Por que é fundamental entender sua assinatura eletrônica de e-mail como oportunidade de negócios?</strong><br></h2>
                    <p class="text-center">Uma assinatura eletrônica de e-mail profissional pode trazer diversas oportunidades reais para o seu empreendimento, pois pode aumentar o tráfego para seu site, além de impulsionar o branding, ou seja, favorece a gestão da marca da empresa. E, nesse caso, de forma gratuita.<br></p>
                </div>
            </div>
        </section>
        <section data-aos="zoom-in-down" data-aos-duration="600" class="highlight-blue" style="background: var(--gray);">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center"><strong>Por que é muito importante que a assinatura eletrônica de e-mail seja responsiva?</strong><br></h2>
                    <p class="text-center">O conceito de responsivo é sobre algo que oferece resposta diante de algum ato ou estímulo. Por exemplo, no caso de se usar os smartphones, é necessário que a assinatura eletrônica responda à diminuição de tela, quando o e-mail for lido no celular, e não em tela de um notebook ou computador. A assinatura precisa, então, ser construída de um modo que se consiga adaptá-la a qualquer tela em que aparecer, sem sofrer nenhuma mudança que atrapalhe sua leitura, ou até mesmo faça com que ela não apareça ao final do e-mail.<br><br></p>
                </div>
            </div>
        </section>
        <footer data-aos="zoom-in-down" data-aos-duration="600" class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3><img src="assets/img/logo.png"></h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Nome da Empresa Desenvolvedora © 2022</p>
            </div>
        </footer>
    </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>