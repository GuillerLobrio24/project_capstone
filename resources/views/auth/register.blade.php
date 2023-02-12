@extends('layout.layout_three')

@section('signup')

<div class="container main-container">

    <div class="row main-row">
        
        <div class="col-md-3">
            
        </div>
        
        <div class="col-md-6">
            
            <div class="container login-container">

                <img class="login-image" src="images/puplogo.png" alt="">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <label class="admin-label" for="Username"><h5 class="header5">Administrator Name</h5></label>

                    <input id="name" type="text" class="form-control admin-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>

                    <label class="email-label" for="Username"><h5 class="header5">Email Address</h5></label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>

                    <label class="pass-label"  for="Password"><h5 class="header5">Password</h5></label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>

                    <label class="pass-label"  for="Password"><h5 class="header5">Confirm Password</h5></label>
                    
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <br>

                    <input class="btn clear-btn" type="reset" value="Clear">

                    <button type="submit" class="btn signup-btn btn-primary">
                        <h5 class="header5">Signup as Administrator</h5>
                    </button>

                </form>
                

            </div>

        </div>
        
        <div class="col-md-3">
            
        </div>

    </div>

</div>
    
@endsection

