<aside id="sideNav" class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href="{{route('admin2.dashboard')}}" >
        <img src="{{asset('images/rahatGrouplogoBlackborder.png')}}" class="navbar-brand-img"    alt="aihut_logo">
        {{-- <span class="ms-1 text-sm text-dark">Creative Tim</span> --}}
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="{{route('admin2.dashboard')}}">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- Enquiries Menu Item -->
        <hr>
        @php
    // Check if the current route matches any of the submenu items
        $isEnquiryActive = request()->is('v2/admin/enquiries/*');
        @endphp
<li class="nav-item mt-3">
    <a class="nav-link text-dark {{$isEnquiryActive ? '' : 'collapsed'}}" data-bs-toggle="collapse" href="#enquiries-submenu" role="button" aria-expanded="false" aria-controls="enquiries-submenu">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-"><i class="fa-solid fa-comments"></i>  Enquiries</h6>
    </a>
</li>

<!-- Submenu Items -->
<ul class="collapse {{ $isEnquiryActive ? 'show' : '' }}" id="enquiries-submenu">
    <li class="nav-item">
        <a class="nav-link {{ request()->is('v2/admin/enquiries/signup') ? 'text-primary' : 'text-dark' }}" href="{{route('admin2.enquiry.list',['type'=>'signup'])}}">
            <i class="fa-solid fa-user-plus opacity-5"></i>
            <span class="nav-link-text ms-1">Agent SignUp</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('v2/admin/enquiries/register') ? 'text-primary' : 'text-dark' }}" href="{{route('admin2.enquiry.list',['type'=>'register'])}}">
            <i class="fa-solid fa-id-card opacity-5"></i>
            <span class="nav-link-text ms-1">Agent Register</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('v2/admin/enquiries/contactus') ? 'text-primary' : 'text-dark' }}" href="{{route('admin2.enquiry.list',['type'=>'contactus'])}}">
            <i class="fa-solid fa-address-book opacity-5"></i>
            <span class="nav-link-text ms-1">Contact Us</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('v2/admin/enquiries/career') ? 'text-primary' : 'text-dark' }}" href="{{route('admin2.enquiry.list',['type'=>'career'])}}">
            <i class="fa-solid fa-briefcase opacity-5"></i>
            <span class="nav-link-text ms-1">Career</span>
        </a>
    </li>
</ul>

        </ul>
        
        </ul>
        
        {{-- <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/billing.html">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/virtual-reality.html">
            <i class="material-symbols-rounded opacity-5">view_in_ar</i>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/rtl.html">
            <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/notifications.html">
            <i class="material-symbols-rounded opacity-5">notifications</i>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/profile.html">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-in.html">
            <i class="material-symbols-rounded opacity-5">login</i>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li> --}}
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        {{-- <a class="btn btn-outline-dark mt-4 w-100"  type="button">Documentation</a> --}}
        {{-- <a class="btn bg-gradient-dark w-100"  type="button">Upgrade to pro</a> --}}
      </div>
    </div>
  </aside>