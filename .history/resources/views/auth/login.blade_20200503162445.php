@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br></br></br>
<div class="container">
    <div class="row">
      <div class="column" id="left">
        <span class="dot" style="background:#ED594A;"></span>
        <span class="dot" style="background:#FDD800;"></span>
        <span class="dot" style="background:#5AC05A;"></span>
      </div>
      <div class="column middle">
        <input type="text" id="input" value="http://www.w3schools.com">
      </div>
      <div class="column" id="right">
        <div style="float:right">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </div>
  
    <div class="content">
      <h3>Browser Window</h3>
      <p>How to create a detailed browser window look with CSS.</p>
    </div>
  </div>
        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

                <label for="email">{{ __('E-Mail Address') }}</label> <br>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">{{ __('Remember Me') }}</label>

                <button type="submit" class="btn">{{ __('Login') }}</button>

                @if (Route::has('password.request'))
                    <a class="btn" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

        </form> --}}


@endsection
