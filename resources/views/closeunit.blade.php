@extends('layouts.app')
@extends('layouts.nav-top')
@extends('layouts.sidebar')

@section('vendor-style')
  <link href="{{URL::asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('sub-content')
  <!-- BEGIN: Subheader -->


  <!-- END: Subheader -->

  <div class="m-content">

    <div class="m-portlet m-portlet--mobile">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <h3 class="m-portlet__head-text">
              Transaksi Unit
            </h3>
          </div>
        </div>
        <div class="m-portlet__head-tools">
          <ul class="m-portlet__nav">
            <li class="m-portlet__nav-item">
              <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                <span>
                  <i class="la la-cart-plus"></i>
                  <span>New Payment Type</span>
                </span>
              </a>
            </li>
            <li class="m-portlet__nav-item"></li>
            <li class="m-portlet__nav-item">
              <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                  <i class="la la-ellipsis-h m--font-brand"></i>
                </a>

              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="m-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
          <thead>
            <tr>
              <th>Booking No</th>
              <th>Phone Number</th>
              <th>Name Customer</th>
              <th>First Payment</th>
              <th>Harga</th>
              <th>DP</th>
              <th>KPR/Cash</th>
              <th>Marketing</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          @foreach ($t101s as $t101)
          <tbody>
              <tr>
                <td>{{ $t101->booking_no }}</td>
                <td>{{ $t101->phone_customer }}</td>
                <td>{{ $t101->name_customer }}</td>
                <td>{{ $t101->first_payment }}</td>
                <td>{{ $t101->price_unit }}</td>
                <td>{{ $t101->dp }}</td>
                <td>{{ $t101->kpr }}</td>
                @foreach ($t002s as $t002)
                  @if ($t101->referral_from == $t002->ktp)
                    <td>{{ $t002->name }}</td>
                  @endif
                @endforeach
                <td>{{ $t101->status }}</td>
                <td nowrap></td>
              </tr>

          </tbody>
        @endforeach

        </table>
      </div>
    </div>

  </div>

@endsection

@section('vendor-script')
  <script src="{{URL::asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
@endsection
@section('page-snippets')
  <script src="{{URL::asset('assets/demo/default/custom/crud/datatables/advanced/row-callback.js')}}" type="text/javascript"></script>
@endsection
