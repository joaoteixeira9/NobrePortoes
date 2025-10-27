@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <section class="row mb-4 justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4 text-center">
                    <h4 class="fw-bold text-primary mb-1">{{ $portoes->count() }} Portões</h4>
                    <small class="text-muted">Total cadastrados</small>
                </div>
            </div>
        </div>
    </section>

    <section class="row g-4 d-flex align-items-stretch">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-success text-white">
                    <h6 class="mb-0">Cadastrar Novo Portão</h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <p class="text-muted mb-3">
                        Adicione um novo portão ao sistema.
                    </p>
                    <a href="/cadastrar-portao" class="btn btn-success">
                        <i class="bi bi-plus-circle me-1"></i> Cadastrar Portão
                    </a>
                </div>
            </div>
        </div>

        @foreach($portoes as $portao)
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    @if($portao->fotos_entrega && count($portao->fotos_entrega) > 0)
                        <div class="text-center p-2 border-bottom">
                            <img src="{{ asset('uploads/entrega/' . $portao->fotos_entrega[0]) }}" alt="Foto entrega" class="img-fluid rounded" style="max-height: 220px; min-height: 220px; width: auto;">
                        </div>
                    @endif
                    <div class="card-header bg-white text-primary">
                        <h6 class="mb-0">#PG-{{ str_pad($portao->id, 3, '0', STR_PAD_LEFT) }} - {{ $portao->tipo }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Material:</strong> {{ $portao->material }}<br>
                            <strong>Descrição:</strong> {{ $portao->descricao }}
                        </div>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="/visualizar-portao/{{ $portao->id }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye me-1"></i>Visualizar
                            </a>
                            <a href="/modificar-portao/{{ $portao->id }}" class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil me-1"></i>Modificar
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $portao->id }}">
                                <i class="bi bi-trash me-1"></i>Deletar
                            </button>

                            <div class="modal fade" id="confirmDeleteModal{{ $portao->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $portao->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border-0 shadow">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="confirmDeleteLabel{{ $portao->id }}">Confirmar exclusão</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                    </div>
                                    <div class="modal-body">
                                        Tem certeza que deseja excluir este portão? Essa ação não pode ser desfeita.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <form action="/deletar-portao/{{ $portao->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i> Confirmar exclusão
                                        </button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
@endsection