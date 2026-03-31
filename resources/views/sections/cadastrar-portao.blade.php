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
                        <div class="mb-3">
                            <label class="form-label fw-bold">Categoria do portão</label>
                            <select name="categoria" class="form-select" required>
                                <option value="Basculante">Basculante</option>
                                <option value="Deslizante">Deslizante</option>
                                <option value="Pivotante">Pivotante</option>
                                <option value="Correr">De Correr</option>
                                <option value="Articulado">Articulado</option>
                                <option value="Giro">De Giro</option>
                                <option value="Sanfonado">Sanfonado</option>
                                <option value="Elevador">Elevador</option>
                                <option value="Automatizado">Automatizado</option>
                                <option value="Manual">Manual</option>
                                <option value="Aço carbono(Ferro)">Aço carbono(Ferro)</option>
                                <option value="Alumínio">Alumínio</option>
                                <option value="Aço">Aço</option>
                                <option value="Madeira">Madeira</option>
                                <option value="Vidro">Vidro</option>
                                <option value="Comercial">Comercial</option>
                                <option value="Residencial">Residencial</option>
                                <option value="Industrial">Industrial</option>
                                <option value="Reforma">Reforma</option>
                                <option value="Manutenção">Manutenção</option>
                                <option value="Instalação">Instalação</option>
                                <option value="Bate pneu">Bate pneu</option>
                                <option value="Mezaninos">Mezaninos</option>
                                <option value="Calhas e telhados">Calhas e telhados</option>
                                <option value="Portas Automática de enrolar">Portas automática de enrolar</option>
                                <option value="Escadas">Escadas</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Serviço prestado</label>
                                <input type="text" name="tipo" class="form-control" placeholder="Ex: Reforma basculante" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Tipo do material</label>
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
