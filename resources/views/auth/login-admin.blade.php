@extends('layouts.app')

@section('content')

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page" style="margin-top: -60px">
 <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
  <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
   <div class="m-stack m-stack--hor m-stack--desktop">
    <div class="m-stack__item m-stack__item--fluid">
     <div class="m-login__wrapper">
      <div class="m-login__logo">
        <img src="{{URL::asset('assets/app/media/img/logos/icon-biru.png')}}" with="80" height="80" >
      </div>
      <div class="m-login__head">
        <h3 class="m-login__title">Sign In To Admin</h3>
      </div>
      <form class="m-login__form m-form" role="form" method="POST" action="{{ url('/in') }}">
        {{ csrf_field() }}
        <div class="form-group m-form__group">
          <input class="form-control m-input" type="text" placeholder="xxx@xxx.xxx" name="email" id="m_inputmask_3" autocomplete="off" required>
        </div>
        <div class="form-group m-form__group">
         <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required>
       </div>
       <div class="row m-login__form-sub">
         <div class="col m--align-left">
          <label class="m-checkbox m-checkbox--focus">
           <input type="checkbox" name="remember"> Remember me
           <span></span>
         </label>
       </div>
       <div class="col m--align-right">
        <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
      </div>
    </div>
    <div class="m-login__form-action">
     <input type="submit" id="submit" class="btn m-btn--pill m-btn--air btn-outline-brand m-btn m-btn--outline-2x" value="Sign In"/>
   </div>
 </form>

 <div class="m-login__forget-password" >
   <div class="m-login__head">
    <h3 class="m-login__title">Forgotten Password ?</h3>
    <div class="m-login__desc">Enter your email to reset your password:</div>
  </div>
  <form class="m-login__form m-form" action="">
    <div class="form-group m-form__group">
     <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
   </div>
   <div class="m-login__form-action">
     <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
     <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
   </div>
 </form>
</div>
</div>
</div>
</div>
</div>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center" style="background-image: url({{URL::asset('assets/app/media/img/bg/bg-6.jpg')}})">
 <div class="m-grid__item">
  <h3 class="m-login__welcome">Smile in Properti</h3>
  <p class="m-login__msg">
   Sistem informasi
   <br>Penjualan - administrasi - Property
 </p>
</div>
</div>
</div>
</div>

<!-- end:: Page -->

@endsection
@section('page-snippets')
<script type="text/javascript">
  $(document).ready( function () {
    $('img').mousedown( function () {
      return false;
    });
    $("#m_inputmask_3").inputmask("mask", {
      "mask": "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
      "greedy": !1,
      "onBeforePaste": function (m, a) {
        return (m = m.toLowerCase()).replace("mailto:", "")
      },
      definitions: {
        "*": {
          validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
          cardinality: 1,
          casing: "lower"
        }
      }
    });
  });
</script>
@endsection
