@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-plus-circle me-2"></i>Cadastrar Novo Portão</h5>
                </div>

                <div class="card-body">
                    <form action="/portoes" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="fw-bold mb-3 text-secondary border-bottom pb-1">Informações Gerais</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Titulo</label>
                                <input type="text" name="tipo" class="form-control" placeholder="Ex: Reforma basculante" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Material</label>
                                <input type="text" name="material" class="form-control" placeholder="Ex: Alumínio, Ferro..." required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Descrição</label>
                            <textarea name="descricao" class="form-control" rows="3" placeholder="Ex: Portão automático com motor deslizante..." required></textarea>
                        </div>

                        <h6 class="fw-bold mb-3 text-secondary border-bottom pb-1 mt-4">Fotos do Portão</h6>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-danger">Antes da Produção</label>
                            <input type="file" name="fotos_antes[]" class="form-control" multiple accept="image/*">
                            <small class="text-muted">Selecione 1 ou mais imagens do portão antigo ou local antes da produção.</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-warning">Durante a Produção</label>
                            <input type="file" name="fotos_producao[]" class="form-control" multiple accept="image/*">
                            <small class="text-muted">Fotos do portão sendo feito (soldagem, pintura, montagem etc.).</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-success">Após Entrega</label>
                            <input type="file" name="fotos_entrega[]" class="form-control" multiple accept="image/*">
                            <small class="text-muted">Fotos do portão já instalado e finalizado.</small>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="#" onclick="window.history.back();" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Voltar
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle-fill me-1"></i> Salvar Portão
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
