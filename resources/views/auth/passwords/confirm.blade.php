@extends('layouts.master-without-nav')
@section('title')
    Confirm Password
@endsection

@section('content')
    <div class="account-pages mt-5 mb-4 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="index" class="mb-5 d-block auth-logo">
                            <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="22"
                                class="logo logo-dark">
                            <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="22"
                                class="logo logo-light">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Confirm Password</h5>
                                <p class="text-muted">Please confirm your password before continuing.</p>
                            </div>
                            <div class="p-2 mt-4">

                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="float-right">
                                            @if (Route::has('password.request'))
                                                <a class="text-muted" href="{{ route('password.request') }}">
                                                    Forgot password?
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mt-3 text-right">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit"><i
                                                class="icon-xs icon mr-1" data-feather="refresh-cw"></i>
                                            {{ __('Confirm Password') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <p>© <script>
                                document.write(new Date().getFullYear())

                            </script> Drezon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
