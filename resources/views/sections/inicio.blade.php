<div class="inicio">
    <div id="heroCarousel" class="carousel slide box" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/aluminio.jpg" class="d-block w-100" alt="Linha aluminio">
                <div class="carousel-caption">
                    <h2 class="fw-bold display-4">Linha de alumínio</h2>
                    <p class="lead">Leveza, resistência e elegância para portas, portões e estruturas.</p>
                    <a href="https://wa.me/5519993805758" class="btn btn-success btn-lg text-light mt-3">
                        <i class="bi bi-whatsapp"></i> Solicite orçamento
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/img/ferro.jpg" class="d-block w-100" alt="Linha ferro">
                <div class="carousel-caption">
                    <h2 class="fw-bold display-4">Linha de ferro</h2>
                    <p class="lead">Robustez e segurança para portas, portões e estruturas metálicas.</p>
                    <a href="https://wa.me/5519993805758" class="btn btn-success btn-lg text-light mt-3">
                        <i class="bi bi-whatsapp"></i> Solicite orçamento
                    </a>
                </div>
            </div>

           <div class="carousel-item">
                <img src="/img/reforma.jpg" class="d-block w-100" alt="Manutenção de portões">
                <div class="carousel-caption">
                    <h2 class="fw-bold display-4">Manutenção de portões</h2>
                    <p class="lead">Garantindo funcionamento, segurança para seu portão em qualquer situação.</p>
                    <a href="https://wa.me/5519993805758" class="btn btn-success btn-lg text-light mt-3">
                        <i class="bi bi-whatsapp"></i> Solicite orçamento
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
        <h2 class="text-center">Nossos projetos</h2>
        <p class="text-center mb-5">Confira alguns dos nossos trabalhos realizados para clientes residenciais e comerciais.</p>

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="text-center mb-4">Filtrar por Categoria</h5>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    {{-- Botão "Todos" --}}
                    <a href="?categoria=#projetos" class="btn btn-outline-primary {{ !request('categoria') ? 'active' : '' }}">
                        Todos
                    </a>
                    
                    {{-- Botões das Categorias --}}
                    <a href="?categoria=Basculante#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Basculante' ? 'active' : '' }}">Basculante</a>
                    <a href="?categoria=Deslizante#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Deslizante' ? 'active' : '' }}">Deslizante</a>
                    <a href="?categoria=Pivotante#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Pivotante' ? 'active' : '' }}">Pivotante</a>
                    <a href="?categoria=Correr#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Correr' ? 'active' : '' }}">De Correr</a>
                    <a href="?categoria=Articulado#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Articulado' ? 'active' : '' }}">Articulado</a>
                    <a href="?categoria=Automatizado#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Automatizado' ? 'active' : '' }}">Automatizado</a>
                    <a href="?categoria=Manual#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Manual' ? 'active' : '' }}">Manual</a>
                    <a href="?categoria=Ferro#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Ferro' ? 'active' : '' }}">Aço carbono(Ferro)</a>
                    <a href="?categoria=Alumínio#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Alumínio' ? 'active' : '' }}">Alumínio</a>
                    <a href="?categoria=Aço#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Aço' ? 'active' : '' }}">Aço</a>
                    <a href="?categoria=Madeira#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Madeira' ? 'active' : '' }}">Madeira</a>
                    <a href="?categoria=Vidro#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Vidro' ? 'active' : '' }}">Vidro</a>
                    <a href="?categoria=Comercial#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Comercial' ? 'active' : '' }}">Comercial</a>
                    <a href="?categoria=Residencial#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Residencial' ? 'active' : '' }}">Residencial</a>
                    <a href="?categoria=Industrial#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Industrial' ? 'active' : '' }}">Industrial</a>
                    <a href="?categoria=Reforma#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Reforma' ? 'active' : '' }}">Reforma</a>
                    <a href="?categoria=Manutenção#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Manutenção' ? 'active' : '' }}">Manutenção</a>
                    <a href="?categoria=Instalação#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Instalação' ? 'active' : '' }}">Instalação</a>
                    <a href="?categoria=Bate pneu#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Bate pneu' ? 'active' : '' }}">Bate pneu</a>
                    <a href="?categoria=Mezaninos#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Mezaninos' ? 'active' : '' }}">Mezaninos</a>
                    <a href="?categoria=Calhas e telhados#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Calhas e telhados' ? 'active' : '' }}">Calhas e telhados</a>
                    <a href="?categoria=Portas automática de enrolar#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Portas automática de enrolar' ? 'active' : '' }}">Portas automática de enrolar</a>
                    <a href="?categoria=Escadas#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Escadas' ? 'active' : '' }}">Escadas</a>
                    <a href="?categoria=Outros#projetos" class="btn btn-outline-primary {{ request('categoria') == 'Outros' ? 'active' : '' }}">Outros</a>
                </div>
            </div>
        </div>

        <div class="row g-4">
            @forelse ($portoes as $portao)
                <div class="col-xl-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100 transition-all">
                        @if(isset($portao->fotos_entrega) && count($portao->fotos_entrega) > 0)
                            <div class="marca-wrapper position-relative overflow-hidden">
                                <img src="{{ asset('uploads/entrega/' . $portao->fotos_entrega[0]) }}" alt="Foto entrega" class="img-dashboard card-img-top object-fit-cover">
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-primary bg-opacity-90">{{ $portao->categoria }}</span>
                                </div>
                                <div class="marca-dagua"></div>
                            </div>
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h6 class="mb-3 text-uppercase">#PG-{{ str_pad($portao->id, 3, '0', STR_PAD_LEFT) }} - {{ $portao->tipo }}</h6>
                            
                            <div class="mb-3 flex-grow-1">
                                @if(isset($portao->material))
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-gear text-muted me-2"></i><small class="text-muted">{{ $portao->material }}</small>
                                    </div>
                                @endif
                                @if(isset($portao->descricao))
                                    <p class="text-muted small mb-0">{{ Str::limit($portao->descricao, 25) }}</p>
                                @endif
                            </div>

                            <div class="mt-auto">
                                <a href="/visualizar-portao/{{ $portao->id }}" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-eye me-2"></i>Ver Detalhes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="py-5">
                        <i class="bi bi-search display-1 text-muted opacity-25"></i>
                        <h4 class="text-muted mt-3">Nenhum portão encontrado</h4>
                        <p class="text-muted mb-4">Tente ajustar seus filtros de busca</p>
                        <a href="?categoria=#projetos" class="btn btn-primary px-4">
                            <i class="bi bi-arrow-clockwise me-2"></i>Limpar Filtros
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
</div>