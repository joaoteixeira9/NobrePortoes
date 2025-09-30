@extends('welcome')
@section('content')
<section class="py-5 box" id="contato">
        <div class="container">
            <h2 class="section-title text-center">Fale Conosco</h2>
            <p class="text-center mb-5">Entre em contato para solicitar um orçamento ou tirar suas dúvidas.</p>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" placeholder="Seu nome" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" placeholder="Seu telefone" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Seu email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Serviço de Interesse</label>
                                <select class="form-select">
                                <option selected>Selecione um serviço</option>
                                <option>Portões Automáticos</option>
                                <option>Grades e Estruturas</option>
                                <option>Estruturas Metálicas</option>
                                <option>Manutenção e Reparos</option>
                                <option>Automação Residencial</option>
                                <option>Pintura e Acabamento</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mensagem</label>
                                <textarea class="form-control" rows="4" placeholder="Descreva sua necessidade" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2"><i class="bi bi-send"></i> Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection