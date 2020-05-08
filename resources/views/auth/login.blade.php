@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('')])

@section('content')

<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Login') }}</strong></h4>
           
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Sign in with your') }} <strong>email</strong> {{ __(", if you don't have it, ask to your ") }}<strong>manager</strong> </p>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}"  required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Login') }}</button>
          </div>
        </div>
      </form>
    </div>
    <div style="position:relative; max-width:40%">
      <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum vitae cumque, expedita cupiditate veritatis et recusandae incidunt quos, debitis laudantium ducimus? Facere architecto eligendi saepe repudiandae quam est alias excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolores nihil quas impedit culpa ratione autem. Veritatis voluptas voluptatem delectus veniam? Nemo, sit dolorum nisi corporis doloremque laborum aliquid voluptatum.</h3>
    </div>

   

    <div style="z-index:-100; position: absolute; left: 0%; margin-bottom: 0px; margin-right: 0px; right: 0px; bottom: 0px;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ff5500" fill-opacity="1" d="M0,192L240,96L480,256L720,192L960,256L1200,192L1440,96L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path>
        </svg>
      </div>

  </div>

</div>


@endsection