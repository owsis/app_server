@extends('layouts.app')

@section('content')

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page" style="margin-top: -60px">
  <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1  m-login__content m-grid-item--center" style="background-image: url({{ URL::asset('assets/app/media/img/bg/bg-3.jpg') }})">
      <div class="m-grid__item">
        <h3 class="m-login__welcome m--font-brand">Smile in Properti</h3>
        <p class="m-login__msg m--font-brand" style="align-items: center;">Sistem informasi<br>Penjualan - administrasi - Property</p>
        <a href="{{ url('/in') }}" class="btn m-btn--pill m-btn--air btn-outline-brand m-btn m-btn--outline-2x" style="padding: 10px 30px">Masuk</a>
      </div>
    </div>
  </div>
</div>

<!-- end:: Page -->

@endsection
