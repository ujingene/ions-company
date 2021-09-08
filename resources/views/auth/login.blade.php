
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>Panel</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <input id="email"
            type="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email"
            value="{{ old('email') }}"
            required autocomplete="email"
            autofocus
          >
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror


          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password"
            type="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password"
            required autocomplete="current-password"
          >
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox"
                name="remember"
                id="remember" {{ old('remember') ? 'checked' : '' }}
              >
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      @if (Route::has('password.request'))
        <p class="mb-1">
            <a href="{{ route('password.request') }}">I forgot my password</a>
        </p>
      @endif
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
