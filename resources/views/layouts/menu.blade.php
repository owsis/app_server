
<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
  <i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

  <!-- BEGIN: Aside Menu -->
  <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
      <li class="m-menu__item " aria-haspopup="true">
        <a href="../../../index.html" class="m-menu__link ">
          <i class="m-menu__link-icon flaticon-line-graph"></i>
          <span class="m-menu__link-title">
            <span class="m-menu__link-wrap">
              <span class="m-menu__link-text">Dashboard</span>
              <span class="m-menu__link-badge">
                <span class="m-badge m-badge--danger">2</span>
              </span>
            </span>
          </span>
        </a>
      </li>
      <li class="m-menu__section ">
        <h4 class="m-menu__section-text">Menus</h4>
        <i class="m-menu__section-icon flaticon-more-v2"></i>
      </li>
      <li class="m-menu__item  m-menu__item--submenu {{ request()->is('unit*') || request()->is('harga*') || request()->is('carabayar*') ? 'm-menu__item--open m-menu__item--expanded' : '' }}" aria-haspopup="true">
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
            <li class="m-menu__item {{ request()->is('unit*') ? 'm-menu__item--active' : ''}}" aria-haspopup="true">
              <a href="{{ url('/unit') }}" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Unit</span>
              </a>
            </li>
            <li class="m-menu__item {{ request()->is('harga*') ? 'm-menu__item--active' : ''}}" aria-haspopup="true">
              <a href="{{ url('/harga') }}" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Harga</span>
              </a>
            </li>
            <li class="m-menu__item {{ request()->is('carabayar*') ? 'm-menu__item--active' : ''}}" aria-haspopup="true">
              <a href="{{ url('/carabayar') }}" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Cara Bayar</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/base/tables.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Promo</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/base/progress.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Agency</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/base/modal.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Marketing</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/base/alerts.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Users</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="m-menu__item  m-menu__item--submenu {{ request()->is('booking*') || request()->is('berkas*') ? 'm-menu__item--open m-menu__item--expanded' : '' }}" aria-haspopup="true">
        <a href="javascript:;" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-share"></i>
          <span class="m-menu__link-text">Transaksi</span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu ">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">
            <li class="m-menu__item {{ request()->is('booking*') ? 'm-menu__item--active' : ''}}" aria-haspopup="true">
              <a href="{{ url('/booking')}}" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Booking Transaction</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/icons/fontawesome5.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Berkas 5</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/icons/lineawesome.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Sp3k</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/icons/socicons.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Akad</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
        <a href="javascript:;" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-multimedia-1"></i>
          <span class="m-menu__link-text">Cicilan DP</span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu ">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">
            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
              <span class="m-menu__link">
                <span class="m-menu__link-text">List Customer</span>
              </span>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
              <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Due Date </span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
              </a>
              <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                  <li class="m-menu__item " aria-haspopup="true">
                    <a href="../../../components/buttons/base/default.html" class="m-menu__link ">
                      <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span>
                      </i>
                      <span class="m-menu__link-text">Paid Transaksi</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
              <a href="javascript:;" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Customer</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
              </a>
              <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                  <li class="m-menu__item " aria-haspopup="true">
                    <a href="../../../components/buttons/icon/lineawesome.html" class="m-menu__link ">
                      <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span>
                      </i>
                      <span class="m-menu__link-text">List Customers</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true">
        <a href="javascript:;" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-interface-1"></i>
          <span class="m-menu__link-text">Report</span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu ">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">
            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
              <span class="m-menu__link">
                <span class="m-menu__link-text">Portlets</span>
              </span>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/portlets/base.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Base Portlets</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/portlets/advanced.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Advanced Portlets</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/portlets/creative.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Creative Portlets</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/portlets/tabbed.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Tabbed Portlets</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/portlets/draggable.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Draggable Portlets</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/portlets/tools.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Portlet Tools</span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
              <a href="../../../components/portlets/sticky-head.html" class="m-menu__link ">
                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="m-menu__link-text">Sticky Head</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

  <!-- END: Aside Menu -->
</div>
