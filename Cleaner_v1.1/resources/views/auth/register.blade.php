<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="icon" type="image/x-icon" href="{{  asset('/custom/assets/img/logo.svg')}}" />
</head>
<body>
    <form class="box"

     method="POST" action="{{ route('register') }}">
       <h1>Register</h1>
        @csrf
    </div>
        <input id="name" type="text" placeholder="UserName" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
             </span>
             @enderror
        </div>
    </div>
    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
             <span class="invalid-feedback " role="alert">
                 <strong>{{ $message }}</strong>
         </span>
         @enderror
    </div>
    <input id="mobilephonenumber" type="mobilephonenumber" placeholder="PhoneNumber" class="form-control @error('mobilephonenumber') is-invalid @enderror" name="mobilephonenumber" value="{{ old('mobilephonenumber') }}" required autocomplete="mobilephonenumber" autofocus>
      @error('mobilephonenumber')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
         </span>
         @enderror
    </div>
        <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">
          @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
<input id="password-confirm" type="password" placeholder="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" value="Create" class="btn btn-primary btn-block">
          <!-- /.col -->
        </div>
      </form>


</body>
</html>
