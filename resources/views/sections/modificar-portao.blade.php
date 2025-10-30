@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="mb-4">
                <a href="/dashboard" class="btn btn-outline-dark">
                    <i class="bi bi-arrow-left me-1"></i>Voltar para Dashboard
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
                            <button type="button" class="btn btn-primary btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addFotosModal" data-categoria="fotos_antes"><i class="bi bi-plus"></i> Adicionar Fotos</button>
                        </div>
                        <div class="row g-3">
                            @foreach($portao->fotos_antes as $index => $foto)
                            <div class="col-md-4 col-lg-3">
                                <div class="card border-0 shadow-sm h-100 transition-all">
                                    <img src="{{ asset('uploads/antes/' . $foto) }}" class="card-img-top cursor-pointer" style="height: 200px; object-fit: cover;" alt="Foto Antes" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ asset('uploads/antes/' . $foto) }}" data-bs-title="Antes - Imagem {{ $index + 1 }}">
                                    <div class="card-footer bg-white border-top-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">Imagem {{ $index + 1 }}</small>
                                            <form action="/deletar-fotos" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="portao_id" value="{{ $portao->id }}">
                                                <input type="hidden" name="categoria" value="fotos_antes">
                                                <input type="hidden" name="nome_arquivo" value="{{ $foto }}">
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
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
                            <button type="button" class="btn btn-warning btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addFotosModal" data-categoria="fotos_producao">
                                <i class="bi bi-plus"></i> Adicionar Fotos
                            </button>
                        </div>
                        <div class="row g-3">
                            @foreach($portao->fotos_producao as $index => $foto)
                            <div class="col-md-4 col-lg-3">
                                <div class="card border-0 shadow-sm h-100 transition-all">
                                    <img src="{{ asset('uploads/producao/' . $foto) }}" class="card-img-top cursor-pointer" style="height: 200px; object-fit: cover;" alt="Foto Produção" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ asset('uploads/producao/' . $foto) }}" data-bs-title="Produção - Imagem {{ $index + 1 }}">
                                    <div class="card-footer bg-white border-top-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">Imagem {{ $index + 1 }}</small>
                                            <form action="/deletar-fotos" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="portao_id" value="{{ $portao->id }}">
                                                <input type="hidden" name="categoria" value="fotos_producao">
                                                <input type="hidden" name="nome_arquivo" value="{{ $foto }}">
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
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
                            <button type="button" class="btn btn-success btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#addFotosModal" data-categoria="fotos_entrega">
                                <i class="bi bi-plus"></i> Adicionar Fotos
                            </button>
                        </div>
                        <div class="row g-3">
                            @foreach($portao->fotos_entrega as $index => $foto)
                            <div class="col-md-4 col-lg-3">
                                <div class="card border-0 shadow-sm h-100 transition-all">
                                    <img src="{{ asset('uploads/entrega/' . $foto) }}" class="card-img-top cursor-pointer" style="height: 200px; object-fit: cover;" alt="Foto Entrega" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ asset('uploads/entrega/' . $foto) }}" data-bs-title="Entrega - Imagem {{ $index + 1 }}">
                                    <div class="card-footer bg-white border-top-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">Imagem {{ $index + 1 }}</small>
                                            <form action="/deletar-fotos" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="portao_id" value="{{ $portao->id }}">
                                                <input type="hidden" name="categoria" value="fotos_entrega">
                                                <input type="hidden" name="nome_arquivo" value="{{ $foto }}">
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
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
                        <div class="modal-body p-0 text-center bg-dark">
                            <img id="modalImage" src="" class="img-fluid" style="max-height: 70vh; object-fit: contain;">
                        </div>
                        <div class="modal-footer bg-dark border-0">
                            <small class="text-white-50">Clique fora da imagem para fechar</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="addFotosModal" tabindex="-1" aria-labelledby="addFotosModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addFotosModalLabel">Adicionar Fotos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/adicionar-fotos" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="portao_id" value="{{ $portao->id }}">
                                <input type="hidden" name="categoria" id="modalCategoria">
                                <div class="mb-3">
                                    <label class="form-label">Selecionar Fotos</label>
                                    <input type="file" name="fotos[]" class="form-control" multiple accept="image/*" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Adicionar Fotos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h5 class="mb-0 text-primary">Detalhes do Portão</h5>
                </div>
                <div class="card-body">
                    <form action="/portoes/{{ $portao->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-3 p-2 rounded hover-effect">
                                    <i class="bi bi-tag-fill text-primary me-3 fs-5"></i>
                                    <div class="w-100">
                                        <strong class="d-block text-muted small">Titulo</strong>
                                        <input type="text" name="tipo" class="form-control" value="{{ $portao->tipo }}" required>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 p-2 rounded hover-effect">
                                    <i class="bi bi-box-seam text-primary me-3 fs-5"></i>
                                    <div class="w-100">
                                        <strong class="d-block text-muted small">Material</strong>
                                        <input type="text" name="material" class="form-control" value="{{ $portao->material }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="border-top pt-4">
                                    <strong class="text-muted small d-block mb-2">Descrição</strong>
                                    <textarea name="descricao" class="form-control" rows="3" required>{{ $portao->descricao }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle me-1"></i> Atualizar Portão
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="/js/function-Portao.js"></script>
@endsection