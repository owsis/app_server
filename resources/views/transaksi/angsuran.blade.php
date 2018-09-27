<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>Smile In Properti</title>
	<meta name="description" content="Scrollable datatables examples">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Web font -->

	<!--begin::Page Vendors Styles -->
	<link href="{{ URL::asset('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="../../../assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<!--end::Page Vendors Styles -->

	<!--begin::Base Styles -->
	<link href="{{ URL::asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
	<link href="{{ URL::asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

	<!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

	<!--end::Base Styles -->
	<link rel="shortcut icon" href="{{ URL::asset('assets/images/icon-biru.png') }}" />
</head>
<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">

	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- ini awal header -->
		@extends('layouts.header')

		<!-- ini awal body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			@extends('layouts.menu')
			<!-- END: Left Aside -->
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				<!-- BEGIN: Subheader -->
				<div class="m-subheader ">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="m-subheader__title m-subheader__title--separator">DATA ANGSURAN</h3>
							<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
								<li class="m-nav__item m-nav__item--home">
									<a href="#" class="m-nav__link m-nav__link--icon">
										<i class="m-nav__link-icon la la-home"></i>
									</a>
								</li>
								<li class="m-nav__separator">-</li>
								<li class="m-nav__item">
									<a href="" class="m-nav__link">
										<span class="m-nav__link-text">Transaksi</span>
									</a>
								</li>
								<li class="m-nav__separator">-</li>
								<li class="m-nav__item">
									<a href="" class="m-nav__link">
										<span class="m-nav__link-text">Angsuran</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- END: Subheader -->
				<div class="m-content">
					@if(session()->has('msg'))
					<div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
						<div class="m-alert__icon">
							<i class="la la-check-circle"></i>
							<span></span>
						</div>
						<div class="m-alert__text">
							<strong>Sukses!</strong> {{ session()->get('msg') }}
						</div>
						<div class="m-alert__close">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							</button>
						</div>
					</div>
					@endif
					<div class="m-portlet m-portlet--mobile">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<button type="button" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#m_modal_1">
										<span>
											<i class="la la-plus"></i>
											<span>Tambah Angsuran</span>
										</span>
									</button>
								</div>
							</div>
							<div class="m-portlet__head-tools">
								<ul class="m-portlet__nav">

									<li class="m-portlet__nav-item"></li>
									<li class="m-portlet__nav-item">
										<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
											<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
												<i class="la la-ellipsis-h m--font-brand"></i>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">

														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="m-portlet__body">
							<!--begin: Datatable -->
							<div id="table-1"></div>
							<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
								<thead>
									<tr>
										<th>#</th>
										<th>Kode Konsumen</th>
										<th>Tipe</th>
										<th>Total Loan</th>
										<th>Total Payment</th>
										<th>Status</th>
										<th>Tgl. Buat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
								<tfoot>
									<th>#</th>
									<th>Kode Konsumen</th>
									<th>Tipe</th>
									<th>Total Loan</th>
									<th>Total Payment</th>
									<th>Status</th>
									<th>Tgl. Buat</th>
									<th>Aksi</th>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->

					<!-- BEGIN MODAL -->
					<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<table class="table table-striped- table-bordered table-hover table-checkable">
										<thead>
											<tr>
												<th>#</th>
												<th>Kode Konsumen</th>
												<th>Nama Konsumen</th>
												<th>Kode Unit</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($t101s as $data)
											<tr>
												<td>{{ $num++ }}</td>
												<td>{{ $data->code_customer }}</td>
												<td>{{ $data->name_customer }}</td>
												<td>{{ $data->code_unit }}</td>
												<td nowrap>
													<form method="POST" action="{{ route('angsuran.post', $data->code_customer ) }}">
														{{ csrf_field() }}
														<button type="submit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Pilih">
															<i class="la la-check"></i>
														</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- END MODAL -->

					<!-- BEGIN MODAL -->
					<div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h3 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<table class="table table-striped- table-bordered table-hover table-checkable table-detail">
										<thead>
											<tr>
												<th>#</th>
												<th>Kode Konsumen</th>
												<th>Jadwal Pembayaran</th>
												<th>Tipe Pembayaran</th>
												<th>Deskripsi</th>
												<th>Jumlah Dasar</th>
												<th>Jumlah Tagihan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- END MODAL -->
				</div>

			</div>
		</div>
	</div>
	<!-- begin::Quick Nav -->

	<!--begin::Base Scripts -->
	<script src="{{ URL::asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>

	<!--end::Base Scripts -->

	<!--begin::Page Vendors Scripts -->
	<script src="{{ URL::asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

	<!--end::Page Vendors Scripts -->

	<!--begin::Page Resources -->
	<script type="text/javascript">
		var tableDetail;
		$(function() {
			tableDetail = $('.table-detail').DataTable({
                // "dom" : 'Brt',
                "bSort" : false,
                "processing" : true
              });
		})

		function viewDetail(id) {
			$('#m_modal_2').modal()
			tableDetail.ajax.url('angsuran/view/'+ id)
			tableDetail.ajax.reload()
		}

		// function viewDetail(code, type) {
		// 	alert()
		// }
		function deleteData(id) {
			
		}

		$(document).ready( function () {
			$('#m_table_1').DataTable({
				processing: true,
				serverside: true,
				ajax: {
					url: '{{ url('angsuran/view') }}',
					type: 'GET'
				},
				footerCallback: function(a, b) {
					var o = this.api(),
					l = function(a) {
						return "string" == typeof a ? 1 * a.replace(/[\Rp.,]/g, "") : "number" == typeof a ? a : 0
					},
					u = o.column(3).data().reduce(function(a, b) {
						return l(a) + l(b)
					}, 0),
					i = o.column(3, {
						page: "current"
					}).data().reduce(function(a, b) {
						return l(a) + l(b)
					}, 0);
					$(o.column(3).footer()).html("Rp. " + mUtil.numberString(i.toFixed(0)));

					var o = this.api(),
					l = function(a) {
						return "string" == typeof a ? 1 * a.replace(/[\Rp.,]/g, "") : "number" == typeof a ? a : 0
					},
					u = o.column(4).data().reduce(function(a, b) {
						return l(a) + l(b)
					}, 0),
					i = o.column(4, {
						page: "current"
					}).data().reduce(function(a, b) {
						return l(a) + l(b)
					}, 0);
					$(o.column(4).footer()).html("Rp. " + mUtil.numberString(i.toFixed(0)));

				},

			});

		});
	</script>

	<!--end::Page Resources -->
</body>

<!-- end::Body -->
</html>
