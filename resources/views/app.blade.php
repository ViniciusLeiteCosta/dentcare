<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dent Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
</head>
<body>

    <!-- JQuery, Popper.js e Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- Cabeçalho da página -->
    <header>
        
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-customizada">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('images/logo.png') }}" alt="Dent Care Logo" style="height: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
    
            
            <ul class="navbar-nav ml-auto">
                        <a class="nav-link" href="#">Início <span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>  
                    <li class="nav-item">
                        <button type="button" class="btn btn-lg botao-agendar ml-lg-3">Agende Agora</button>
                    </li> 
                </ul>
            </div>
        </nav>
    </header>

    <section id="home" class="container-fluid">
        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"></a>
                        <img class="d-block w-100" src="{{ asset('images/carousel-images/first-slide.jpg') }}" alt="First slide" data-bs-slide="prev">
                        <div class="texto-sobre-imagem">Sorria com confiança! Agende sua consulta hoje mesmo e conquiste um sorriso mais saudável e bonito!</div>     
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100" src="{{ asset('images/carousel-images/second-slide.jpg') }}" alt="Second slide" data-bs-slide="next">
                        <div class="texto-sobre-imagem">Seu sorriso é seu cartão de visitas! Tratamentos modernos para cuidar da sua saúde bucal com conforto e segurança.</div>     
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100" src="{{ asset('images/carousel-images/third-slide.jpg') }}" alt="Third slide" data-bs-slide="next">
                        <div class="texto-sobre-imagem">Dentes brancos e saudáveis ao seu alcance! Agende agora e transforme seu sorriso com os melhores especialistas.</div>     
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
</body>
</html>
