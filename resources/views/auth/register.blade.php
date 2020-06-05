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
              <h2>Create Account</h2>
              
            </div>
              <form method="POST" action="{{ route('register') }}" class="sl-form">
                        @csrf
            
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="Write ur name Here" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                   @error('name')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Email</label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                      <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                      <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
         <div class="form-group">
                <label for="phone">Phone</label>
                    <input id="phone" type="text" name="phone">

                       
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Agree with <a href="#">Terms and Conditions</a></label>
              </div>

              <button  type="submit" class="btn btn-filled btn-round">Signup</button>
              <p class="notice">Already have an account? <a href="{{route('login')}}"">Login Account</a></p>
            </form>
          </div>          
        </div>
      </div>      
    </section>
  <!-- Login / Registration end -->

@endsection
