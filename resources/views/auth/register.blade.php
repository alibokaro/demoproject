@extends('layouts.auth')

@section('content')

<form class="login-form" role="form" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}   
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>

             <div class="input-group form-groups{{ $errors->has('name') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" 
              placeholder="Username"  required autofocus>
       
            </div>

            
            <div class="input-group form-groups{{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon-envelope-l"></i></span>
               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email"  required >

                                
            </div>


            <div class="input-group form-groups{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
               <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password-confirm" type="password" class="form-control" placeholder=" Confirm Password" name="password_confirmation" required>
                         
                                
            </div>


                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
             

            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button><br>
            <a href="{{ url('/login') }}" class="loginlink">Already have account.!</a>
        </div>
      </form>


@endsection
