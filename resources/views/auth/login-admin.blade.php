@extends('layouts.app')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{ URL::asset('images/logo.svg') }}">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form class="pt-3" role="form" method="POST" action="{{url('/inadmin') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('phone') ? 'has-error' : '' }}">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="phone"
                                    name="phone"
                                    placeholder="Phone"
                                    value="{{ old('phone') }}"
                                    required
                                    />
                                @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input
                                    type="password"
                                    class="form-control form-control-lg"
                                    id="pass"
                                    name="password"
                                    placeholder="Password"
                                    required
                                    />
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="mt-3">
                                <input class="btn btn-block btn-gradient-primary
                                    btn-lg font-weight-medium auth-form-btn"
                                    type="submit" value="MASUK">
                            </div>
                            <div class="my-2 d-flex justify-content-between
                                align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox"
                                            class="form-check-input" {{
                                            old('remember') ? 'checked' : ''}}>
                                        Tetap Masuk
                                    </label>
                                </div>
                                <a href="{{ url('/password/reset') }}" class="auth-link text-black">Lupa password</a>
                            </div>
                            {{-- <div class="text-center mt-4 font-weight-light"> 
                                Belum Daftar?
                                <a href="{{ url('/regadmin') }}" class="text-primary">Buat</a>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@endsection
