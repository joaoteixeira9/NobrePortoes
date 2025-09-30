<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nobre Portões - Excelência em Portões Automáticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="top-bar text-light bg-dark py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <span><i class="bi bi-telephone me-2"></i> (19) 99999-9999</span>
                <span class="ms-3"><i class="bi bi-clock me-2"></i> Seg - Sex: 8h às 18h | Sáb: 8h às 12h</span>
            </div>
            <div>
                <a href="#" class="text-light me-3"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                <a href="#" class="text-light"><i class="bi bi-person-plus"></i> Registrar</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
        <a class="navbar-brand" href="/">Nobre Portões</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="/servicos">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="/sobre">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
            </ul>
            <form class="d-flex ms-3" role="search">
                <input class="form-control form-control-sm me-2" type="search" placeholder="Pesquisar..." aria-label="Pesquisar">
                <button class="btn btn-sm btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
        </div>
    </nav>
    <section>
    </section>
    <main>
        @yield('content')
    </main>
    
    <a href="https://wa.me/5519999999999" target="_blank" 
        class="btn btn-whatsapp text-light rounded-circle shadow position-fixed whatsapp-float" 
        style="bottom:20px; right:20px;">
        <i class="bi bi-whatsapp fs-3"></i>
    </a>

    <footer class="bg-dark text-light pt-5 pb-3">
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