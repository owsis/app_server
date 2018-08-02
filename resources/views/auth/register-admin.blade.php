@extends('layouts.app')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{URL::asset('images/logo.svg')}}">
                        </div>
                        <h4>Daftar</h4>
                        <h6 class="font-weight-light">Admin Smile In Properti</h6>
                        <form class="pt-3" role="form" method="POST" action="{{url('/regadmin') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('phone') ? 'has-error' : '' }}">
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="phone"
                                    name="phone"
                                    placeholder="No. Handphone"
                                    value="{{ old('phone') }}"
                                    required
                                    />
                                @if ($errors->has('phone'))
                                <span class="help-block">
                                    <label class="badge badge-gradient-danger">{{ $errors->first('phone') }}</label>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                                <input 
                                    type="email" 
                                    class="form-control form-control-lg" 
                                    id="email"
                                    name="email"
                                    placeholder="Email"
                                    value="{{ old('email') }}"
                                    required
                                    />
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <label class="badge badge-gradient-danger">{{ $errors->first('email') }}</label>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Nama" value="{{ old('name') }}" required /> 
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <label class="badge badge-gradient-danger">{{ $errors->first('name') }}</label>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('ktp') ? 'has-error' : '' }}">
                                <input type="text" class="form-control form-control-lg" id="ktp" name="ktp" placeholder="No. KTP" value="{{ old('ktp') }}" required /> 
                                @if ($errors->has('ktp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ktp') }}</strong>
                                </span>
                                @endif
                            </div>

                            <!-- <div class="form-group">
                                <select class="form-control form-control-lg"
                                    id="exampleFormControlSelect2">
                                    <option>Country</option>
                                    <option>United States of America</option>
                                    <option>United Kingdom</option>
                                    <option>India</option>
                                    <option>Germany</option>
                                    <option>Argentina</option>
                                </select>
                            </div>  -->
                            <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                                <input 
                                    type="password" 
                                    class="form-control form-control-lg" 
                                    id="password"
                                    name="password"
                                    placeholder="Password"
                                    required
                                    />
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <label class="badge badge-gradient-danger">{{ $errors->first('password') }}</label>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Konfirmasi Password" required>
                            </div>

                            <!-- <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox"
                                            class="form-check-input">
                                        I agree to all Terms & Conditions
                                    </label>
                                </div>
                            </div> -->
                            <div class="mt-3">
                                <input
                                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                    type="submit"
                                    value="DAFTAR" 
                                    />
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Sudah pernah Daftar?
                                <a href="{{ url('/inadmin') }}"
                                    class="text-primary">Masuk</a>
                            </div>
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
