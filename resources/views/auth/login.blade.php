<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vendedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-lg-7 d-none d-lg-flex align-items-center justify-content-center bg-primary">
                <div class="text-center text-white px-5">
                    <h1 class="display-4 fw-bold mb-4">Sistema de gestão</h1>
                    <p class="lead mb-4">Acesso exclusivo para nossa equipe de vendedores</p>
                </div>
            </div>
            
            <div class="col-lg-5 d-flex align-items-center justify-content-center bg-light">
                <div class="w-100 px-4" style="max-width: 450px;">
                    <div class="text-center">
                        <div class="rounded-circle align-items-center justify-content-center">
                            <img src="/img/LogotipoSerralheria.png" alt="Logo" class="img-fluid" style="max-width: 220px;">
                        </div>
                    </div>

                    <div class="card border-0 shadow rounded-3">
                        <div class="card-header bg-primary text-white text-center py-3">
                            <h5 class="mb-0">Área do Vendedor</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="alert alert-primary bg-primary bg-opacity-10 border-0 rounded-3 mb-4">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-info-circle-fill text-white me-2"></i>
                                    <span class="fw-medium text-white">Acesso restrito</span>
                                </div>
                            </div>
                            
                            @if ($errors->any())
                                <div class="alert alert-danger border-0 rounded-3 mb-4">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                        <strong>Erro no login</strong>
                                    </div>
                                    <ul class="mb-0 mt-2 ps-3">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('status'))
                                <div class="alert alert-success border-0 rounded-3 mb-4">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-check-circle-fill me-2"></i>
                                        {{ session('status') }}
                                    </div>
                                </div>
                            @endif

                            <form method="POST" action="/login">
                                @csrf

                                <div class="mb-4">
                                    <label for="email" class="form-label fw-semibold text-dark">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="bi bi-envelope text-muted"></i>
                                        </span>
                                        <input type="email" class="form-control border-start-0 ps-0" id="email" name="email" placeholder="seu@email.com" autofocus>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="form-label fw-semibold text-dark">Senha</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="bi bi-lock text-muted"></i>
                                        </span>
                                        <input type="password" class="form-control border-start-0 ps-0" id="password" name="password" placeholder="********">
                                    </div>
                                </div>

                                <div class="d-grid gap-3">
                                    <button type="submit" class="btn btn-primary py-2 fw-semibold rounded-3">
                                        <i class="bi bi-box-arrow-in-right me-2"></i> Entrar no Sistema
                                    </button>
                                    <a href="#" onclick="window.history.back();" class="btn btn-outline-secondary py-2 fw-semibold rounded-3">
                                        <i class="bi bi-arrow-left me-2"></i> Voltar
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-muted small">&copy; {{ date('Y') }} Nobre Portões. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>