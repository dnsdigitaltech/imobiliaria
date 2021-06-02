
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>IMOB | Site Control</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/fontawesome-free/css/all.css')) }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.css')) }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url(mix('backend/assets/css/adminlte.css')) }}">
</head>
<body class="hold-transition login-page">  
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>IMOB</b>System</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Faça login para iniciar sua sessão</p>

      <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="E-mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="ajax_response"></div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Lembrar
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Esqueci a senha</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ url(mix('backend/assets/plugins/jquery/jquery.js')) }}"></script>
<!-- Login -->
<script src="{{ url(mix('backend/assets/js/login.js')) }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url(mix('backend/assets/plugins/bootstrap/js/bootstrap.bundle.js')) }}"></script>
<!-- AdminLTE App -->
<script src="{{ url(mix('backend/assets/js/adminlte.js')) }}"></script>
</body>
</html>