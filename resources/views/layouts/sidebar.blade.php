@section('content')

<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

  <!-- BEGIN: Left Aside -->
  <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
  </button>
  <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
      <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

        <li class="m-menu__section ">
          <h4 class="m-menu__section-text">Menus</h4>
          <i class="m-menu__section-icon flaticon-more-v2"></i>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
          <a href="javascript:;" class="m-menu__link m-menu__toggle">
            <i class="m-menu__link-icon flaticon-layers"></i>
            <span class="m-menu__link-text">Master</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>
          <div class="m-menu__submenu ">
            <span class="m-menu__arrow"></span>
            <ul class="m-menu__subnav">
              <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                <span class="m-menu__link">
                  <span class="m-menu__link-text">Master</span>
                </span>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/base/state.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Unit</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/base/typography.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Cara Bayar</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/base/stack.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Promo</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/base/tables.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Marketing</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/base/progress.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">User</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
          <a href="javascript:;" class="m-menu__link m-menu__toggle">
            <i class="m-menu__link-icon flaticon-share"></i>
            <span class="m-menu__link-text">Transaksi</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>
          <div class="m-menu__submenu ">
            <span class="m-menu__arrow"></span>
            <ul class="m-menu__subnav">
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/icons/flaticon.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Close Unit</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/icons/fontawesome5.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Berkas Konsumen</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/icons/lineawesome.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">SP3K Konsumen</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/icons/socicons.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Akad Kredit</span>
                </a>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/icons/socicons.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Pembatalan</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
          <a href="javascript:;" class="m-menu__link m-menu__toggle">
            <i class="m-menu__link-icon flaticon-multimedia-1"></i>
            <span class="m-menu__link-text">Komisi</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>
          <div class="m-menu__submenu ">
            <span class="m-menu__arrow"></span>
            <ul class="m-menu__subnav">
              <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                <span class="m-menu__link">
                  <span class="m-menu__link-text">Komisi</span>
                </span>
              </li>
              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">Komisi</span>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                  <span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item " aria-haspopup="true">
                      <a href="components/buttons/base/default.html" class="m-menu__link ">
                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                          <span></span>
                        </i>
                        <span class="m-menu__link-text">Komisi Dibayarkan</span>
                      </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                      <a href="components/buttons/base/square.html" class="m-menu__link ">
                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                          <span></span>
                        </i>
                        <span class="m-menu__link-text">Komisi Pending</span>
                      </a>
                    </li>


                  </ul>
                </div>
              </li>
              <li class="m-menu__item " aria-haspopup="true">
                <a href="components/buttons/group.html" class="m-menu__link ">
                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="m-menu__link-text">AR-Card</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
          <a href="javascript:;" class="m-menu__link m-menu__toggle">
            <i class="m-menu__link-icon flaticon-interface-1"></i>
            <span class="m-menu__link-text">Fixed Asset</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i>
          </a>
          <div class="m-menu__submenu ">
            <span class="m-menu__arrow"></span>
            <ul class="m-menu__subnav">
              <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                <span class="m-menu__link">
                  <span class="m-menu__link-text">Asset</span>
                </span>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>

    <!-- END: Aside Menu -->
  </div>

  <!-- END: Left Aside -->

  <div class="m-grid__item m-grid__item--fluid m-wrapper">
    @yield('sub-content')
  </div>

</div>

<!-- end:: Body -->
@endsection
