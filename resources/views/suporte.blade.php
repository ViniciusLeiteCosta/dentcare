<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dent Care</title>

    <link rel="icon" href="{{ asset('images/logo-icon.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Vite -->
    @vite(['resources/css/suporte.css'])

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
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Dent Care Logo" style="height: 150px;">
                </a>
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

    <section>
        <div class="container py-5">
            <h2 class="text-center mb-4">Entre em Contato</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem" required style="resize: none;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block botao-enviar-style">Enviar</button>
            </form>
        </div>
    </section>


    <!-- Footer -->
    <section>
            <div class="container-rodape">
                <footer>
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="fw-bold">Dent Care</h3>
                                <p class="pt-2">Rua Satiro Ivo, Magano - Garanhuns, 360</p>
                                <p class="mb-2">CEP: 01010-000</p>
                                <p class="mb-2">Telefone: (11) 95555-5555</p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="fw-bold">Menu</h4>
                                <ul class="list-unstyled pt-2">
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Home</a></li>
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Sobre</a></li>
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Serviços</a></li>
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Trabalhe conosco</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h4 class="fw-bold">Redes</h4>
                                <ul class="list-unstyled pt-2">
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Instagram</a></li>
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Facebook</a></li>
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Threads</a></li>
                                    <li class="py-1"><a href="#" class="text-decoration-none text-light">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center py-3 border-top">
                        <p class="mb-0">&copy; 2025 Dent Care. Todos os direitos reservados.</p>
                    </div>
                </footer>
            </div>
    </section>


    <!-- AOS Initialization -->
    <script>
        AOS.init();
    </script>
</body>
</html>
