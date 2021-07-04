<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wyvern @if(isset($page_title)) | {{ $page_title }} @endif</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/system_theme.css') }}">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <!-- select2bootstrap -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
          integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA=="
          crossorigin="anonymous"/>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="/" class="d-flex align-items-center pt-5 mb-3 link-dark text-decoration-none border-bottom">
                    <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-5 fw-semibold">Apartament407a</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#system-collapse" aria-expanded="false">
                            Administradora
                        </button>
                        <div class="collapse" id="system-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Condominios</a></li>
                                <li><a href="#" class="link-dark rounded">Apartamentos</a></li>
                                <li><a href="#" class="link-dark rounded">Reservas</a></li>
                                <li><a href="#" class="link-dark rounded">Apartamentos</a></li>
                                <li><a href="#" class="link-dark rounded">Situação Financeira</a></li>
                                <li><a href="#" class="link-dark rounded">Notificação</a></li>
                                <li><a href="#" class="link-dark rounded">Reclamações</a></li>
                                <li><a href="#" class="link-dark rounded">Anuncios</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#system-collapse" aria-expanded="false">
                            Síndico
                        </button>
                        <div class="collapse" id="system-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Condominios</a></li>
                                <li><a href="#" class="link-dark rounded">Apartamentos</a></li>
                                <li><a href="#" class="link-dark rounded">Reservas</a></li>
                                <li><a href="#" class="link-dark rounded">Apartamentos</a></li>
                                <li><a href="#" class="link-dark rounded">Situação Financeira</a></li>
                                <li><a href="#" class="link-dark rounded">Notificação</a></li>
                                <li><a href="#" class="link-dark rounded">Reclamações</a></li>
                                <li><a href="#" class="link-dark rounded">Anuncios</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            Condominio
                        </button>
                        <div class="collapse" id="home-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Proprietarios</a></li>
                                <li><a href="#" class="link-dark rounded">Moradores</a></li>
                                <li><a href="#" class="link-dark rounded">Apartamentos</a></li>
                                <li><a href="#" class="link-dark rounded">Balancetes</a></li>
                                <li><a href="#" class="link-dark rounded">Espaços Coletivos</a></li>
                                <li><a href="#" class="link-dark rounded">Reservas</a></li>
                                <li><a href="#" class="link-dark rounded">Reclamações</a></li>
                                <li><a href="#" class="link-dark rounded">Anuncios</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Apartamento
                        </button>
                        <div class="collapse" id="dashboard-collapse" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ url('shopping-lists') }}" class="link-dark rounded">Lista de Compras</a></li>
                                <li><a href="#" class="link-dark rounded">Aluguel</a></li>
                                <li><a href="#" class="link-dark rounded">Condominio</a></li>
                                <li><a href="#" class="link-dark rounded">Notificações</a></li>
                                <li><a href="#" class="link-dark rounded">Reservas</a></li>
                                <li><a href="#" class="link-dark rounded">Financeiro</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            Configurações
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Convidar usuário</a></li>
                                <li><a href="#" class="link-dark rounded">Dados Cadastrais</a></li>
                                <li><a href="#" class="link-dark rounded">Preferências</a></li>
                                <li><a href="#" class="link-dark rounded">Deslogar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-9">
                <div class="mb-4 bg-light rounded-3 shadow">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                        <button class="btn btn-primary btn-lg" type="button">Example button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@yield('adminlte_content')


<!-- jQuery -->
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<!-- Popper -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<!-- Bootstrap 5 -->
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        });
    });
</script>

</body>
</html>
