@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h1 class="mb-3">Listagem de portões</h1>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <form action="" method="GET" id="searchForm">
                            <div class="row g-3 align-items-end">
                                <div class="col-md-8">
                                    <label class="form-label fw-semibold text-dark">Buscar portões</label>
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" placeholder="Digite o tipo, material ou descrição..." value="{{ $search }}">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold text-dark">Filtrar por</label>
                                    <select name="categoria" class="form-select" onchange="document.getElementById('searchForm').submit()">
                                        <option value="">Todas categorias</option>
                                        <option value="Basculante" {{ request('categoria') == 'Basculante' ? 'selected' : '' }}>Basculante</option>
                                        <option value="Deslizante" {{ request('categoria') == 'Deslizante' ? 'selected' : '' }}>Deslizante</option>
                                        <option value="Pivotante" {{ request('categoria') == 'Pivotante' ? 'selected' : '' }}>Pivotante</option>
                                        <option value="Correr" {{ request('categoria') == 'Correr' ? 'selected' : '' }}>De Correr</option>
                                        <option value="Articulado" {{ request('categoria') == 'Articulado' ? 'selected' : '' }}>Articulado</option>
                                        <option value="Giro" {{ request('categoria') == 'Giro' ? 'selected' : '' }}>De Giro</option>
                                        <option value="Sanfonado" {{ request('categoria') == 'Sanfonado' ? 'selected' : '' }}>Sanfonado</option>
                                        <option value="Elevador" {{ request('categoria') == 'Elevador' ? 'selected' : '' }}>Elevador</option>
                                        <option value="Automatizado" {{ request('categoria') == 'Automatizado' ? 'selected' : '' }}>Automatizado</option>
                                        <option value="Manual" {{ request('categoria') == 'Manual' ? 'selected' : '' }}>Manual</option>
                                        <option value="Ferro" {{ request('categoria') == 'Ferro' ? 'selected' : '' }}>Ferro</option>
                                        <option value="Alumínio" {{ request('categoria') == 'Alumínio' ? 'selected' : '' }}>Alumínio</option>
                                        <option value="Aço" {{ request('categoria') == 'Aço' ? 'selected' : '' }}>Aço</option>
                                        <option value="Madeira" {{ request('categoria') == 'Madeira' ? 'selected' : '' }}>Madeira</option>
                                        <option value="Vidro" {{ request('categoria') == 'Vidro' ? 'selected' : '' }}>Vidro</option>
                                        <option value="Comercial" {{ request('categoria') == 'Comercial' ? 'selected' : '' }}>Comercial</option>
                                        <option value="Residencial" {{ request('categoria') == 'Residencial' ? 'selected' : '' }}>Residencial</option>
                                        <option value="Industrial" {{ request('categoria') == 'Industrial' ? 'selected' : '' }}>Industrial</option>
                                        <option value="Reforma" {{ request('categoria') == 'Reforma' ? 'selected' : '' }}>Reforma</option>
                                        <option value="Manutenção" {{ request('categoria') == 'Manutenção' ? 'selected' : '' }}>Manutenção</option>
                                        <option value="Instalação" {{ request('categoria') == 'Instalação' ? 'selected' : '' }}>Instalação</option>
                                        <option value="Outros" {{ request('categoria') == 'Outros' ? 'selected' : '' }}>Outros</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if($search)
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="alert alert-light border-0 d-inline-flex align-items-center">
                    <i class="bi bi-info-circle me-2 text-primary"></i>
                    Resultados para: <strong class="ms-1">{{ $search }}</strong>
                    <a href="?" class="btn-close ms-3" aria-label="Close"></a>
                </div>
            </div>
        </div>
        @endif

        <div class="row g-4">
            @forelse ($portoes as $portao)
                <div class="col-xl-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100 transition-all">
                        @if(isset($portao->fotos_entrega) && count($portao->fotos_entrega) > 0)
                            <div class="position-relative overflow-hidden">
                                <img src="{{ asset('uploads/entrega/' . $portao->fotos_entrega[0]) }}" alt="Foto entrega" class="img-dashboard card-img-top object-fit-cover">
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-primary bg-opacity-90">{{ $portao->categoria }}</span>
                                </div>
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
                                    <p class="text-muted small mb-0">{{ Str::limit($portao->descricao, 80) }}</p>
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
                        <a href="?" class="btn btn-primary px-4">
                            <i class="bi bi-arrow-clockwise me-2"></i>Limpar Filtros
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection