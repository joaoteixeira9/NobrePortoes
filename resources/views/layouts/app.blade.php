<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nobre Portões - Excelência em Portões Automáticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/LogotipoSerralheria.ico " type="image/x-icon">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="top-bar text-light bg-dark py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <span class="ms-3"><i class="bi bi-clock me-2"></i>Seg - Sex: 8h às 18h | Sáb: 8h às 12h</span>
                @if(Auth::check())
                    <div class="ms-3 dropdown">
                        <a class="d-flex align-items-center text-decoration-none" href="#" role="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="bg-white text-dark px-2 py-1 rounded shadow-sm d-flex justify-content-center align-items-center">
                                <p class="mb-0 text-center text-uppercase fw-bold">{{ Auth::user()->name }}</p>
                            </div>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end shadow-lg rounded-3 mt-2" aria-labelledby="userMenu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/dashboard">
                                    <p class="text-dark">Painel</p>
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center" type="submit">
                                        <p class="text-danger">Sair</p>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="/login" class="text-white ms-3">
                        <i class="bi bi-person-circle me-2"></i>Login
                    </a>
                @endif
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="navbar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand fw-bold" href="/">Nobre Portões</a>
                
                <div class="position-absolute start-50 translate-middle-x d-none d-lg-block">
                    <span class="text-white fw-bold fs-5">
                        <i class="bi bi-telephone-fill me-2"></i>(19) 99999-9999
                    </span>
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse w-75" id="menu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contato">Contato</a></li>
                </ul>

                <form action="/procurar-portoes" method="GET" class="d-flex" role="search">
                    <input class="form-control form-control-sm me-2" value="{{ request('search') }}" type="search" name="search" placeholder="Pesquisar..." aria-label="Pesquisar">
                    <button class="btn btn-sm btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>


    <main>
        @yield('content')
    </main>
    
    <a href="https://wa.me/5519999999999" target="_blank" class="btn btn-success text-light rounded-circle shadow position-fixed whatsapp-float"> 
        <i class="bi bi-whatsapp fs-3"></i>
    </a>

    <footer class="mt-auto bg-dark text-light pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Nobre Portões</h5>
                <p>Excelência em portões automáticos, grades e estruturas metálicas há mais de 15 anos no mercado.</p>
                <div class="social-icons">
                    <a href="#" class="text-light me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-whatsapp fs-4"></i></a>
                </div>
                </div>

                <div class="col-md-2 mb-4">
                <h5 class="fw-bold">Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Início</a></li>
                    <li><a href="#servicos" class="text-light text-decoration-none">Serviços</a></li>
                    <li><a href="#projetos" class="text-light text-decoration-none">Projetos</a></li>
                    <li><a href="#sobre" class="text-light text-decoration-none">Sobre</a></li>
                    <li><a href="#contato" class="text-light text-decoration-none">Contato</a></li>
                </ul>
                </div>

                <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Contato</h5>
                <p><i class="bi bi-telephone me-2"></i> (19) 99999-9999</p>
                <p><i class="bi bi-whatsapp me-2"></i> (19) 98888-8888</p>
                <p><i class="bi bi-envelope me-2"></i> contato@nobreportoes.com.br</p>
                <p><i class="bi bi-geo-alt me-2"></i> Rua Exemplo, 123 - Americana/SP</p>
                </div>

                <div class="col-md-3 mb-4">
                <h5 class="fw-bold">Horário de Atendimento</h5>
                <p><i class="bi bi-clock me-2"></i> Seg - Sex: 8h às 18h</p>
                <p><i class="bi bi-clock me-2"></i> Sáb: 8h às 12h</p>
                <p class="mt-3">Atendimento emergencial 24h para manutenção.</p>
                </div>

            </div>
            <hr class="border-light">
            <p class="text-center mb-0">&copy; 2025 Nobre Portões - Todos os direitos reservados</p>
        </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        ScrollReveal().reveal('.box', {
        duration: 1000,
        origin: 'bottom',
        distance: '50px',
        easing: 'ease-in-out',
        reset: true
        });
    </script>
</body>
</html>