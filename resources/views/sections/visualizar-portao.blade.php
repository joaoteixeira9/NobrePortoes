@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="mb-4">
                <a href="#" onclick="window.history.back(); return false;" class="btn btn-outline-dark">
                    <i class="bi bi-arrow-left me-1"></i>Voltar
                </a>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white border-bottom">
                    <h4 class="mb-0 text-primary">#PG-{{ str_pad($portao->id, 3, '0', STR_PAD_LEFT) }} - {{ $portao->tipo }}</h4>
                </div>
                <div class="card-body">
                    @if($portao->fotos_antes && count($portao->fotos_antes) > 0)
                    <div class="mb-5">
                        <div class="d-flex align-items-center mb-3 p-3 bg-light rounded">
                            <i class="bi bi-clock-history text-primary fs-4 me-3"></i>
                            <div>
                                <h5 class="text-primary mb-0">Fase: Antes</h5>
                                <small class="text-muted">Fotos iniciais do projeto</small>
                            </div>
                        </div>
                        <div class="row g-3">
                            @foreach($portao->fotos_antes as $index => $foto)
                            <div class="col-md-4 col-lg-3">
                                <div class="marca-wrapper card border-0 shadow-sm h-100 transition-all">
                                    <img src="{{ asset('uploads/antes/' . $foto) }}" class="card-img-top cursor-pointer" style="height: 200px; object-fit: cover;" alt="Foto Antes" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ asset('uploads/antes/' . $foto) }}" data-bs-title="Antes - Imagem {{ $index + 1 }}">
                                    <div class="card-footer bg-white border-top-0">
                                        <small class="text-muted">Imagem {{ $index + 1 }}</small>
                                    </div>
                                    <div class="marca-dagua"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($portao->fotos_producao && count($portao->fotos_producao) > 0)
                    <div class="mb-5">
                        <div class="d-flex align-items-center mb-3 p-3 bg-light rounded">
                            <i class="bi bi-gear text-warning fs-4 me-3"></i>
                            <div>
                                <h5 class="text-warning mb-0">Fase: Produção</h5>
                                <small class="text-muted">Processo de fabricação</small>
                            </div>
                        </div>
                        <div class="row g-3">
                            @foreach($portao->fotos_producao as $index => $foto)
                            <div class="col-md-4 col-lg-3">
                                <div class="marca-wrapper card border-0 shadow-sm h-100 transition-all">
                                    <img src="{{ asset('uploads/producao/' . $foto) }}" class="card-img-top cursor-pointer" style="height: 200px; object-fit: cover;" alt="Foto Produção" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ asset('uploads/producao/' . $foto) }}" data-bs-title="Produção - Imagem {{ $index + 1 }}">
                                    <div class="card-footer bg-white border-top-0">
                                        <small class="text-muted">Imagem {{ $index + 1 }}</small>
                                    </div>
                                    <div class="marca-dagua"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($portao->fotos_entrega && count($portao->fotos_entrega) > 0)
                    <div class="mb-5">
                        <div class="d-flex align-items-center mb-3 p-3 bg-light rounded">
                            <i class="bi bi-check-circle text-success fs-4 me-3"></i>
                            <div>
                                <h5 class="text-success mb-0">Fase: Entrega</h5>
                                <small class="text-muted">Resultado final instalado</small>
                            </div>
                        </div>
                        <div class="row g-3">
                            @foreach($portao->fotos_entrega as $index => $foto)
                            <div class="col-md-4 col-lg-3">
                                <div class="marca-wrapper card border-0 shadow-sm h-100 transition-all">
                                    <img src="{{ asset('uploads/entrega/' . $foto) }}" class="card-img-top cursor-pointer" style="height: 200px; object-fit: cover;" alt="Foto Entrega" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ asset('uploads/entrega/' . $foto) }}" data-bs-title="Entrega - Imagem {{ $index + 1 }}">
                                    <div class="card-footer bg-white border-top-0">
                                        <small class="text-muted">Imagem {{ $index + 1 }}</small>
                                    </div>
                                    <div class="marca-dagua"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-dark text-white border-0">
                            <h5 class="modal-title" id="imageModalLabel">Visualização da Imagem</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="marca-wrapper modal-body p-0 text-center bg-dark">
                            <img id="modalImage" src="" class=" img-fluid" style="max-height: 70vh; object-fit: contain;" alt="">
                            <div class="marca-dagua"></div>
                        </div>
                        <div class="modal-footer bg-dark border-0">
                            <small class="text-white-50">Clique fora da imagem para fechar</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 text-primary">Detalhes do Portão</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3 p-2 rounded hover-effect">
                                <i class="bi bi-tag-fill text-primary me-3 fs-5"></i>
                                <div>
                                    <strong class="d-block text-muted small">Titulo</strong>
                                    <span class="fs-6">{{ $portao->tipo }}</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3 p-2 rounded hover-effect">
                                <i class="bi bi-gear text-primary me-3 fs-5"></i>
                                <div>
                                    <strong class="d-block text-muted small">Material</strong>
                                    <span class="fs-6">{{ $portao->material }}</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3 p-2 rounded hover-effect">
                                <i class="bi bi-grid text-primary me-3 fs-5"></i>
                                <div>
                                    <strong class="d-block text-muted small">Categoria</strong>
                                    <span class="fs-6">{{ $portao->categoria}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="border-top pt-4">
                                <strong class="text-muted small d-block mb-2">Descrição</strong>
                                <p class="fs-6 mb-0 text-dark">{{ $portao->descricao }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/function-Portao.js"></script>
@endsection