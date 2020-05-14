<button type="submit" class="btn btn-primary">
{{ __('Reset Password') }}
</button>

@extends('layouts.app')

@section('content')
<br><br><br><br><br><br>
<div id="container">
    <div class="row">
      <div class="column" id="left">
        <span class="dot" style="background:#ED594A; margin-left:10px"></span>
        <span class="dot" style="background:#FDD800;"></span>
        <span class="dot" style="background:#5AC05A;"></span>
      </div>
      <div class="column middle">
        <input type="text" id="input" value="http://127.0.0.1:8000/register">
      </div>
      <div class="column" id="right">
        <div style="float:right;margin-right:10px">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </div>

    <div class="content">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">


                <label for="email" style="color:black;">{{ __('E-Mail Address') }}</label> <br>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <br><br>

                <label for="password" style="color:black;">{{ __('Password') }}</label><br>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <br>
                <br>

                <label for="password-confirm" style="color:black;">{{ __('Confirm Password') }}</label><br>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"><br><br>

                <br><br>

        </form>

    </div>
</div>

@endsection
