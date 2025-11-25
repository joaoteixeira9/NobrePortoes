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
                    <a href="#contato" class="btn btn-success btn-lg text-light mt-3">
                        <i class="bi bi-whatsapp"></i> Solicite orçamento
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/img/ferro.jpg" class="d-block w-100" alt="Linha ferro">
                <div class="carousel-caption">
                    <h2 class="fw-bold display-4">Linha de ferro</h2>
                    <p class="lead">Robustez e segurança para portas, portões e estruturas metálicas.</p>
                    <a href="#contato" class="btn btn-success btn-lg text-light mt-3">
                        <i class="bi bi-whatsapp"></i> Solicite orçamento
                    </a>
                </div>
            </div>

           <div class="carousel-item">
                <img src="/img/reforma.jpg" class="d-block w-100" alt="Manutenção de portões">
                <div class="carousel-caption">
                    <h2 class="fw-bold display-4">Manutenção de portões</h2>
                    <p class="lead">Garantia de funcionamento e segurança para seu portão em qualquer situação.</p>
                    <a href="#contato" class="btn btn-success btn-lg text-light mt-3">
                        <i class="bi bi-whatsapp"></i> Solicite manutenção
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

    <section class="py-5 bg-light box">
        <div class="container">
        <h2 class="text-center">Nossos projetos</h2>
        <p class="text-center mb-5">Confira alguns dos nossos trabalhos realizados para clientes residenciais e comerciais.</p>
        <div class="row g-4">
            @foreach($portoes as $portao)
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                   @if($portao->fotos_entrega && count($portao->fotos_entrega) > 0)
                        <div class="marca-wrapper text-center p-2 border-bottom">
                            <img src="{{ asset('uploads/entrega/' . $portao->fotos_entrega[0]) }}" alt="Foto entrega" class="img-portao img-fluid rounded">
                            <div class="marca-dagua"></div>
                        </div>
                    @endif 
                    <div class="card-header bg-white text-primary">
                        <h6 class="mb-0 text-uppercase">#PG-{{ str_pad($portao->id, 3, '0', STR_PAD_LEFT) }} - {{ $portao->tipo }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Material:</strong> {{ $portao->material }}<br>
                            <strong>Descrição:</strong> {{ Str::limit($portao->descricao, 25) }}
                        </div>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="/visualizar-portao/{{ $portao->id }}" class="btn btn-sm btn-outline-primary w-100">
                                <i class="bi bi-eye me-1"></i>Ver detalhes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>