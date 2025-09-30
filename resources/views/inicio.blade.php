@extends('welcome')
@section('content')
<div id="heroCarousel" class="carousel slide box" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.pinimg.com/1200x/c5/f4/1f/c5f41f37f1844636b236f36136784e0b.jpg" class="d-block w-100" alt="Portão Moderno">
        <div class="carousel-caption">
            <h2 class="fw-bold display-4">Nobre Portões</h2>
            <p class="lead">Excelência em portões automáticos e estruturas metálicas há mais de 15 anos.</p>
            <a href="#contato" class="btn btn-whatsapp btn-lg text-light mt-3">
                <i class="bi bi-whatsapp"></i> Solicite Orçamento
            </a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&h=900&q=80" class="d-block w-100" alt="Grades">
        <div class="carousel-caption">
            <h2 class="fw-bold display-4">Grades e Estruturas</h2>
            <p class="lead">Proteção com sofisticação e durabilidade para seu patrimônio.</p>
            <a href="#contato" class="btn btn-whatsapp btn-lg text-light mt-3">
                <i class="bi bi-whatsapp"></i> Solicite Orçamento
            </a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&h=900&q=80" class="d-block w-100" alt="Portão Automático">
        <div class="carousel-caption">
            <h2 class="fw-bold display-4">Automação Residencial</h2>
            <p class="lead">Tecnologia e segurança para maior comodidade no seu dia a dia.</p>
            <a href="#contato" class="btn btn-whatsapp btn-lg text-light mt-3">
                <i class="bi bi-whatsapp"></i> Solicite Orçamento
            </a>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<section class="py-5 bg-light box" id="projetos">
    <div class="container">
      <h2 class="section-title text-center">Nossos Projetos</h2>
      <p class="text-center mb-5">Confira alguns dos nossos trabalhos realizados para clientes residenciais e comerciais.</p>
      <div class="row g-4">
        <div class="col-md-4">
            <div class="card project-card h-100 shadow-sm">
                <img src="https://i.pinimg.com/1200x/c5/f4/1f/c5f41f37f1844636b236f36136784e0b.jpg" class="card-img-top" alt="Portão Residencial">
                <div class="project-overlay">
                <div class="text-center text-white">
                    <h5>Portão Residencial Moderno</h5>
                    <p>Projeto executado em residência de alto padrão</p>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Portão Residencial</h5>
                <p class="card-text">Portão automático deslizante com acabamento em aço inox.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card project-card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" class="card-img-top" alt="Grade de Proteção">
                <div class="project-overlay">
                <div class="text-center text-white">
                    <h5>Grade de Proteção</h5>
                    <p>Instalação em edifício comercial</p>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Grade Comercial</h5>
                <p class="card-text">Estrutura robusta para proteção de vitrines e entradas.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card project-card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" class="card-img-top" alt="Portão Automático">
                <div class="project-overlay">
                <div class="text-center text-white">
                    <h5>Portão Automático</h5>
                    <p>Sistema de automação residencial</p>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Automação Residencial</h5>
                <p class="card-text">Controle remoto integrado com sistema de segurança.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card project-card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" class="card-img-top" alt="Estrutura Metálica">
                <div class="project-overlay">
                <div class="text-center text-white">
                    <h5>Estrutura Metálica</h5>
                    <p>Cobertura para área de lazer</p>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Cobertura Metálica</h5>
                <p class="card-text">Estrutura para área externa com acabamento personalizado.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card project-card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" class="card-img-top" alt="Portão de Correr">
                <div class="project-overlay">
                <div class="text-center text-white">
                    <h5>Portão de Correr</h5>
                    <p>Instalação em condomínio residencial</p>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Portão de Correr</h5>
                <p class="card-text">Sistema deslizante para economia de espaço.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card project-card h-100 shadow-sm">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" class="card-img-top" alt="Portão Basculante">
                <div class="project-overlay">
                <div class="text-center text-white">
                    <h5>Portão Basculante</h5>
                    <p>Residência com garagem subterrânea</p>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Portão Basculante</h5>
                <p class="card-text">Sistema ideal para garagens com espaço limitado.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection