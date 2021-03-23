@extends('layouts.adminlte_auth')

@section('adminlte_content')

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

<div class="row justify-content-md-center margin-top-center">
  <div class="card col-md-auto col-md-3">
    <div class="card-body">
      <p class="login-box-msg">Registrar um novo usuário</p>

      <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Nome Completo">


          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="E-mail">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Senha">


          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme sua senha">
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="offset-8 col-4">
            <button type="submit" class="btn btn-success btn-block"> Registrar </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ url('login') }}" class="text-center">Eu já tenho uma conta!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


@endsection
