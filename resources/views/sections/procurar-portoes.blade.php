@extends('layouts.app')

@section('content')
<section class="py-5 box">
    <div class="container">
        <h2 class="text-center mb-3">Listagem de portões</h2>

        <p class="text-muted">Confira nossa lista de portões cadastrados no sistema.</p>
        <p>Procurando por: <span class="fw-bold">{{ $search }}</span></p>

        <div class="row g-4">
            @forelse ($portoes as $portao)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        @if(isset($portao->fotos_entrega) && count($portao->fotos_entrega) > 0)
                            <div class="marca-wrapper text-center p-2 border-bottom">
                                <img src="{{ asset('uploads/entrega/' . $portao->fotos_entrega[0]) }}" alt="Foto entrega" class="img-portao img-fluid rounded">
                                <div class="marca-dagua"></div>
                            </div>
                        @endif

                        <div class="card-header bg-white text-primary">
                            <h6 class="mb-0 text-uppercase">{{ $portao->nome }}</h6>
                        </div>

                        <div class="card-body">
                            <div class="mb-3">
                                @if(isset($portao->tipo))
                                    <p class="text-muted mb-1">
                                        <strong>Tipo de portão:</strong> {{ $portao->tipo }}
                                    </p>
                                @endif
                                @if(isset($portao->material))
                                    <p class="text-muted mb-1">
                                        <strong>Material:</strong> {{ $portao->material }}
                                    </p>
                                @endif
                                @if(isset($portao->descricao))
                                    <p class="text-muted mb-1">
                                        <strong>Descrição:</strong> {{ $portao->descricao }}
                                    </p>
                                @endif
                                @if(isset($portao->categoria))
                                    <p class="text-muted mb-1">
                                        <strong>Categoria:</strong> {{ $portao->categoria }}
                                    </p>
                                @endif
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                <a href="/visualizar-portao/{{ $portao->id }}" class="btn btn-sm btn-outline-primary w-100">
                                    <i class="bi bi-eye me-1"></i>Ver detalhes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted mt-4">
                    <p>Nenhum portão encontrado.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection