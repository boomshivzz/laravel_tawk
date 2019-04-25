@extends('layouts/main')

@section('content')
  <div id="site-section">
    <div class="container">
      <div id="auth">
        <div class="row">
          <div class="col-md-offset-4 col-md-4">
            <div class="box">
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

                  <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                      <div class="col-md-12">
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Password</label>

                      <div class="col-md-12">
                          <input id="password" type="password" class="form-control" name="password" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12 ">
                          <div class="checkbox">
                              <label>
                                <div class="col-xs-4 ">
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <div class="col-xs-8 ">
                                 Remember Me
                               </div>
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-8 ">
                          <button type="submit" class="btn btn-primary">
                              Login
                          </button>

                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              Forgot Your Password?
                          </a>
                          <a class="btn btn-link" href="{{ route('register') }}">
                              Register a New Account
                          </a>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
