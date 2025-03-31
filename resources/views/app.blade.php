<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dent Care</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Vite -->
    @vite(['resources/css/app.css'])

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!-- JQuery, Popper.js e Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-customizada">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('images/logo.png') }}" alt="Dent Care Logo" style="height: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Início <span class="sr-only">(atual)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-lg botao-agendar ml-lg-3">Agende Agora</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Carousel Section -->
    <section id="carousel" class="container-fluid">
        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#">
                        <img class="d-block w-100" src="{{ asset('images/carousel-images/first-slide.jpg') }}" alt="First slide" data-bs-slide="prev">
                        <div class="texto-sobre-imagem">
                            Sorria com confiança! 
                            <br>Agende sua consulta hoje mesmo e conquiste um sorriso mais saudável e bonito!</div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100" src="{{ asset('images/carousel-images/second-slide.jpg') }}" alt="Second slide" data-bs-slide="next">
                        <div class="texto-sobre-imagem">
                            Seu sorriso é seu cartão de visitas! 
                            <br>Tratamentos modernos para cuidar da sua saúde bucal com conforto e segurança.
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100" src="{{ asset('images/carousel-images/third-slide.jpg') }}" alt="Third slide" data-bs-slide="next">
                        <div class="texto-sobre-imagem">
                            Dentes brancos e saudáveis ao seu alcance! 
                            <br>Agende agora e transforme seu sorriso com os melhores especialistas.</div>
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-custom" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-custom" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 texto-sobre-primario">
                    <h2 class="texto-sobre-secundário" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200" data-aos-easing="ease-in-out">Agende seu sorriso</h2>
                    <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400" data-aos-easing="ease-in-out">
                        Na Dent Care, proporcionamos a melhor experiência odontológica da sua vida. 
                        <br>Nossa equipe altamente qualificada utiliza tecnologia de ponta para oferecer um atendimento indolor, seguro e eficiente.
                    </p>

                    <button data-aos="fade-right" data-aos-duration="1200" data-aos-delay="600" data-aos-easing="ease-in-out" type="button" class="btn btn-lg botao-sobre">Marque Sua Consulta</button>
                </div>
                <div class="col-md-6 imagem-sobre" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600" data-aos-easing="ease-in-out">
                    <img src="{{ asset('images/doctors/doctor1.png') }}" alt="Sobre Nós" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Section -->
    <section>
        <div class="cards d-flex justify-content-center container-cards">
            <div class="col">
                <div class="card h-100" style="width: 22rem;">
                    <img src="images\cards\card1.jpg" class="card-img-top" alt="Consultoria Personalizada">
                    <div class="card-body">
                        <h5 class="card-title">Transforme seu sorriso com nossa abordagem única!</h5>
                        <p class="card-text">Na Dent Care, entendemos que cada sorriso é único. Nossa equipe de especialistas oferece uma avaliação personalizada para criar um plano de tratamento que atenda às suas necessidades específicas. Venha conhecer a melhor solução para o seu sorriso, com tecnologia de ponta e conforto garantido.</p>
                        <a href="#" class="btn btn-lg btn-primary botao-card">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 22rem;">
                    <img src="images\cards\card2.jpg" class="card-img-top" alt="Tratamentos Avançados">
                    <div class="card-body">
                        <h5 class="card-title">Inovação e tecnologia ao seu alcance!</h5>
                        <p class="card-text">Oferecemos tratamentos modernos e eficazes para cuidados bucais, desde clareamento dental até ortodontia. Nosso compromisso é proporcionar um atendimento indolor e seguro, usando as mais recentes tecnologias do mercado, para garantir a saúde e estética do seu sorriso.</p>
                        <a href="#" class="btn btn-lg btn-primary botao-card">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 22rem;">
                    <img src="images\cards\card3.jpg" class="card-img-top" alt="Atendimento Aconchegante">
                    <div class="card-body">
                        <h5 class="card-title">Seu conforto é nossa prioridade!</h5>
                        <p class="card-text">Aqui na Dent Care, você encontra um ambiente acolhedor, projetado para proporcionar uma experiência tranquila e relaxante. Diga adeus ao medo do dentista e venha descobrir o prazer de cuidar da sua saúde bucal com profissionais que se preocupam com seu bem-estar.</p>
                        <a href="#" class="btn btn-lg btn-primary botao-card">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- About Section 2 -->
    <section id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 imagem-sobre" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="600" data-aos-easing="ease-in-out">
                    <img src="{{ asset('images/doctors/doctor2.png') }}" alt="Sobre Nós" class="img-fluid">
                </div>
                <div class="col-md-6 texto-sobre-primario">
                    <h2 class="texto-sobre-secundário" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200" data-aos-easing="ease-in-out">Segurança em primeiro lugar!</h2>

                    <p data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600" data-aos-easing="ease-in-out">
                        <br>Diga adeus ao medo do dentista. Aqui, seu conforto e bem-estar vêm em primeiro lugar. 
                        <br>Oferecemos resultados impecáveis para um sorriso mais branco, alinhado e saudável, com um atendimento exclusivo e personalizado para você e sua família.
                    </p>   
                    
                    <button data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600" data-aos-easing="ease-in-out" type="button" class="btn btn-lg botao-sobre">Agende Sua Avaliação</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Section 2 TESTE-->
    <section>
        <div class="cards container-cards">
            <div class="grid-svg-card">
                <div class="card h-100" style="width: 22rem;">
                    <img src="{{ asset('assets/asset1.svg') }}" alt="Dentist Icon" class="card-svg-top">                        
                    <div class="card-body">
                        <h5 class="card-title">Tratamento de Clareamento Dental</h5>
                        <p class="card-text">O clareamento dental é um procedimento estético realizado para remover manchas e deixar seus dentes mais brancos e brilhantes, proporcionando um sorriso mais jovem e radiante.</p>
                        <a href="#" class="section-2-links">Saiba mais...</a>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('assets/asset2.svg') }}" alt="Dentist Icon" class="card-svg-top">                        
                    <div class="card-body">
                        <h5 class="card-title">Ortodontia (Aparelhos Dentários)</h5>
                        <p class="card-text">A ortodontia é a especialidade odontológica que utiliza aparelhos dentários para corrigir problemas de alinhamento e mordida, melhorando tanto a funcionalidade quanto a estética do sorriso.</p>
                        <a href="#" class="section-2-links">Saiba mais...</a>
                    </div>
                </div>
                <div class="card h-100" style="width: 22rem;">
                    <img src="{{ asset('assets/asset3.svg') }}" alt="Dentist Icon" class="card-svg-top">                        
                    <div class="card-body">
                        <h5 class="card-title">Periodontia (Tratamento de Gengiva)</h5>
                        <p class="card-text">A periodontia foca no tratamento das gengivas e estruturas de suporte dos dentes, sendo essencial para a prevenção e tratamento de doenças como gengivite e periodontite, que podem comprometer a saúde bucal.</p>
                        <a href="#" class="section-2-links">Saiba mais...</a>
                    </div>
                </div>
                <div class="card h-100" style="width: 22rem;">
                    <img src="{{ asset('assets/asset4.svg') }}" alt="Dentist Icon" class="card-svg-top">                        
                    <div class="card-body">
                        <h5 class="card-title">Implantes Dentários</h5>
                        <p class="card-text">Os implantes dentários são uma solução moderna e eficaz para substituir dentes perdidos, proporcionando uma base estável para coroas ou próteses, com aparência e funcionalidade naturais.</p>
                        <a href="#" class="section-2-links">Saiba mais...</a>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('assets/asset5.svg') }}" alt="Dentist Icon" class="card-svg-top">                        
                    <div class="card-body">
                        <h5 class="card-title">Restauração Dentária</h5>
                        <p class="card-text">A restauração dentária é um procedimento utilizado para reparar dentes danificados ou com cáries, devolvendo-lhes a forma, a função e a estética original. É a melhor forma de evitar problemas mais graves, como infecções.</p>
                        <a href="#" class="section-2-links">Saiba mais...</a>
                    </div>
                </div>
                <div class="card h-100" style="width: 22rem;">
                    <img src="{{ asset('assets/asset6.svg') }}" alt="Dentist Icon" class="card-svg-top">                        
                    <div class="card-body">
                        <h5 class="card-title">Tratamento de Canal (Endodontia)</h5>
                        <p class="card-text">O tratamento de canal é realizado para salvar um dente que sofreu uma infecção profunda, removendo a parte afetada e selando a raiz, evitando a extração e preservando a saúde bucal.</p>
                        <a href="#" class="section-2-links">Saiba mais...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS Initialization -->
    <script>
        AOS.init();
    </script>
</body>
</html>
