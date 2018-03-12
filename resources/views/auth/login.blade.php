@extends('layouts.app')
@section('slider')
  <div class="bg-parallax parallax-overlay accounts-page"  data-jarallax='{"speed": 0.2}' style='background-image: url("images/bg1.jpg")'>
        <div class="container">
            <div class="row pb30">
                <div class="col-lg-4 col-md-6 mr-auto ml-auto col-sm-8">
                    <h3 class="text-white text-center mb30">Login para continuar</h3>
                    <form  method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                      </div>
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <input id="password"  placeholder="Contraseña" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif

                      </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-rounded btn-primary btn-block">Ingresar</button>
                        </div>                        
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
