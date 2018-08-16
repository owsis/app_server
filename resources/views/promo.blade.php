@extends('layouts.app')
@extends('layouts.nav-top')
@extends('layouts.sidebar')

@section('content')

<div class="m-content">
  <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
    <div class="m-alert__icon">
      <i class="flaticon-exclamation m--font-brand"></i>
    </div>
    <div class="m-alert__text">
      This example shows a vertically scrolling DataTable that makes use of the CSS3 vh unit in order to dynamically resize the viewport based on the browser window height.
    </div>
  </div>
  <div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
      <div class="m-portlet__head-caption">
        <div class="m-portlet__head-title">
          <h3 class="m-portlet__head-text">
            Promo Type
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
            <th>Name Promo</th>
            <th>Promo Description</th>
            <th>Masa Aktif</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Promo Agustus</td>
            <td>KPR 70% free biaya kepemilikan dan free purnish</td>
            <td>1 agustus 2017</td>
            <td nowrap></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>

  @endsection
