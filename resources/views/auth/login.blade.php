@extends('layouts.app')

@section('content')
<div class="container mt-3 ">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="card bg-light shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">Login Form</h6>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-envelope    "></i></div>
                                </div>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }} mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                </div>
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
    
                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>

                            <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
