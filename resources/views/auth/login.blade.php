@extends('layout.layout_two')

@section('login')
<div class="container main-container">

    <div class="row main-row">
        
        <div class="col-md-3">
            
        </div>
        
        <div class="col-md-5">
            
            <div class="container login-container">

                <img class="login-image" src="images/puplogo.png" alt="">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label class="admin-label" for="Username"><h5 class="header5">Administrator Email</h5></label>
                    
                    <input id="email" type="email" class="form-control admin-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <br>
                    <label class="pass-label"  for="Password"><h5 class="header5">Password</h5></label>

                    <input id="password" type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <button type="submit" class="btn login-btn btn-primary">
                        <h5 class="header5">Login as Administrator</h5>
                    </button>

                    <br>

                    @if (Route::has('password.request'))
                        <a class="btn forgot-btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </form>
                

            </div>

        </div>
        
        <div class="col-md-3">
            
        </div>

    </div>

</div>
@endsection
