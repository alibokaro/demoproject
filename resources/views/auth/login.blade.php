@extends('layouts.auth')

@section('content')


     <form class="login-form" role="form" method="POST" action="{{ route('login') }}"> 
      {{ csrf_field() }}   
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group form-groups{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Username"  required >
       
            </div>
 


            <div class="input-group form-groups{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
               <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                
            </div>
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
             
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <a href="{{ url('/register') }}" class="btn btn-info btn-lg  registerlink btn-block">Signup</a>
        </div>
      </form>
 
@endsection
