@extends('layouts.app')

@section('content')


    <!-- Login / Registration start -->
    <section class="banner login-registration">
      <div class="vector-img">
        <img src="images/vector.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="content-box">
              <h2>Login Account</h2>
            </div>
            <form method="POST" action="{{ route('login') }}" class="sl-form">
                        @csrf

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="example@gmail.com" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>





              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label">Remember Password</label>
              </div>


              <button class="btn btn-filled btn-round" type="submit"><span class="bh"></span> <span>Login</span></button>
                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
              <p class="notice">Don’t have an account? <a href="{{route('register')}}"">Signup Now</a></p>
            </form>
          </div>          
        </div>
      </div>      
    </section>
  <!-- Login / Registration end -->
@endsection
