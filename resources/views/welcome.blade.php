@extends('layouts.app', ['class' => 'university-lp', 'title' => 'Login'])
@section('styles')
<link href="{{ asset('css/mdb2.css') }}" rel="stylesheet">
<style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1040px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 600px;
      }
    }
  </style>
@endsection

@section('header')
  @include('layouts.header')
@endsection

@section('content')
    <!-- Intro Section -->
    <section class="view intro-2">
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
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Sign up</strong>
                        </h5>
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="#!">
                                <div class="md-form">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name">
                                    <label for="name">Name</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- E-mail -->
                                <div class="md-form mt-0">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label for="email">E-mail</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                {{-- Skills --}}
                                <div class="md-form" style="display: none">
                                    <input id="skills" type="text" class="form-control @error('skills') is-invalid @enderror"
                                            name="skills" value="{{ old('skills') }}">
                                    <label for="skills">Skills</label>
                                    @error('skills')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- Wages --}}
                                <div class="md-form" style="display: none">
                                    <input id="wages" type="number" step="0.01" class="form-control @error('wages') is-invalid @enderror"
                                            name="wages" value="{{ old('wages') }}">
                                    <label for="wages">Wages per hour</label>
                                    @error('wages')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                 {{-- Address --}}
                                 <div class="md-form" style="display: none">
                                    <textarea id="address" class="md-textarea form-control @error('address') is-invalid @enderror"
                                        rows="3" name="address" value="{{ old('address') }}"></textarea>
                                    <label for="address">Address</label>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="md-form">
                                    <input id="password" type="password" name="password" required
                                    class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                                    <label for="password">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="md-form">
                                    <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                    <label for="password">Confirm Password</label>
                                </div>

                                <div class="md-form mt-0 text-right">
                                    <label for="">Register as</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="student" name="user_type" value="student">
                                        <label class="form-check-label" for="student">Student</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="tutor" name="user_type" value="tutor">
                                        <label class="form-check-label" for="tutor">Tutor</label>
                                    </div>
                                </div>


                                <!-- Sign up button -->
                                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>

                                <!-- Social register -->
                                <p>or sign up with:</p>

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

                                <hr>

                                <!-- Terms of service -->
                                <p>By clicking
                                    <em>Sign up</em> you agree to our
                                    <a href="" target="_blank">terms of service</a>

                            </form>
                            <!-- Form -->
                        </div>
                    </div>
                    <!-- Material form register -->
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    </section>
  </header>
@endsection
@section('scripts')
<script src="{{ asset('js/mdb2.js') }}" defer></script>
<script>
    new WOW().init();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
    });

</script>

@endsection
