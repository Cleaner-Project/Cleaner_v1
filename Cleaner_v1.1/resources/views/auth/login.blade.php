<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{  asset('/custom/assets/img/logo.svg')}}" />
    <title>login</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <form class="box"
       method="POST" action="{{ route('login') }}">
       <h1>Login</h1>
        @csrf
        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
             </span>
             @enderror
        </>
        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember" >
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" value="Sing in" class="btn btn-primary btn-block">

          </div>
          @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Create new account') }}</a>
          </li>
      @endif
          <!-- /.col -->
        </div>
      </form>
      
</body>
</html>