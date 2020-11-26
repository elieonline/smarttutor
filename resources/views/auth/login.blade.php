@extends('layouts.app', ['class' => 'university-lp', 'title' => 'Login'])
@section('styles')
<style>
    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }


    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2A48 !important;
      }

      .navbar {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
      }
    }

  </style>
@endsection

@section('header')
  @include('layouts.header')
@endsection

@section('content')
    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
      style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/56.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-strong">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="d-flex align-items-center content-height">
                <div class="row flex-center pt-5 mt-3">
                  <div class="col-md-6 text-center text-md-left mb-5">
                    <div class="white-text">
                      <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Join us right now!
                      </h1>
                      <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                      <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Rem repellendus quasi fuga
                        nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                        dolor molestiae, quisquam iste, maiores. Nulla.</h6>
                      <br>
                      <a class="btn btn-outline-white btn-rounded wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                    </div>
                  </div>

                  <div class="col-md-6 col-xl-5 offset-xl-1">
                    <!-- Form -->
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="card-header info-color white-text text-center py-4">
                          <strong>Sign in</strong>
                        </h5>
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                          <!-- Form -->
                          <form class="text-center" style="color: #757575;" action="{{route('login')}}" method="POST">
                            @csrf
                            <!-- Email -->
                            <div class="md-form">
                              <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                              <label for="email">E-mail</label>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <!-- Password -->
                            <div class="md-form">
                              <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                              <label for="password">Password</label>
                              @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>

                            <div class="d-flex justify-content-around">
                              <div>
                                <!-- Remember me -->
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="remember"
                                    name="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                              </div>
                              <div>
                                <!-- Forgot password -->
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                              </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                        type="submit">Sign in</button>

                            <!-- Register -->
                            <p>Not a member?
                            <a href="{{ route('register') }}">Register here</a>
                            </p>

                            <!-- Social login -->
                            <p>or sign in with:</p>
                            <a type="button" class="btn-floating btn-fb btn-sm">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                              <i class="fab fa-twitter"></i>
                            </a>
                            <a type="button" class="btn-floating btn-li btn-sm">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a type="button" class="btn-floating btn-git btn-sm">
                              <i class="fab fa-github"></i>
                            </a>

                          </form>
                          <!-- Form -->

                        </div>

                      </div>
                      <!-- Material form login -->
                    <!-- /.Form -->
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>


  </header>
@endsection
@section('scripts')
<script>
    new WOW().init();

  </script>

@endsection
