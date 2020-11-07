@extends('layouts.template')
@section('content')
    <style>
        body{
            background-color: #fff;
        }
    </style>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form fadeInRight">
          <section class="login_content">{{ isset($url) ? ucwords($url) : ""}}
            @isset($url)
              <form method="POST" action='{{ route('etudiant.login.submit') }}' >
               @else
              Pharmacien<form method="POST" action="{{ route('login') }}" >
            @endisset
                @csrf
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} {{ Session::has('msg') ? ' is-invalid' : '' }}" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus/>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if (Session::has('msg'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{Session::get('msg')}}</strong>
                </span>
                @endif
              </div>
              <div>
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required/>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label offset-2" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
              </div>
              <div class="row separator">
                  <div class="col-md-4">
                      <button type="submit" class="btn btn-default">
                          {{ __('Login') }}
                      </button>
                  </div>
                  <div class="col-md-8">
                      @isset($url)
                          @if (Route::has('etudiant.password.request'))
                          <a class="reset_pass" href="{{ route('etudiant.password.request') }}">Lost your password?</a>
                          @endif
                        @else
                          @if (Route::has('password.request'))
                          <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                          @endif
                      @endisset


                      
                  </div>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#" class="to_register"></a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="{{asset("images/logo.jpg")}}" style="width: 100%;"></h1>
                  <p></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form test">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
@endsection