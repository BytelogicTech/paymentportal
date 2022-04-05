@include('preheader')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <!-- Authentication Links -->

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item ">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Hello {{ Auth::user()->first_name }} !
          </a>


        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
        @endguest


      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{asset('public/index3.html')}}" class="brand-link">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <a href="{{url('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

            <li class="nav-header">TRANSACTIONS</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Transactions
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('transaction/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Transactions List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('transaction/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new Transaction</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
               
                <i class=" nav-icon fa fa-dollar-sign"></i> 
                <p>
                  Payouts
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('payout/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Payouts List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('payout/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new Payout</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-header">SETTLEMENTS</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-money-check-alt"></i>
                <p>
                  Settlements
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('settlement/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Settlements List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('settlement/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add New Settlement</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-money-check-alt"></i>
                <p>
                  Settlement Accounts
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('settlementaccount/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Settlement Account List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('settlementaccount/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add New Settlement Account</p>
                  </a>
                </li>
              </ul>
            </li>
            @if(Auth::user()->role=="Admin")

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-sliders-h"></i>
                <p>
                  Adjustments<i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('adjustment/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Adjustments List
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('adjustment/adjustment_currency_conversion_create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Currency Conversion</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('adjustment/adjustment_tier_commission_create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tier Commission

                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('adjustment/other_adjustments_create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Other Adjustments

                    </p>
                  </a>
                </li>
              </ul>
            </li>
            @endif

           

            <li class="nav-header">SYSTEM</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Customers
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('customer/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Customer List</p>
                  </a>
                </li>
                @if(Auth::user()->role=="Admin" || Auth::user()->role=="Merchant Admin" || Auth::user()->role=="Merchant Superadmin")
                <li class="nav-item">
                  <a href="{{url('customer/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new Customer</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>

            @if(Auth::user()->role=="Admin" || Auth::user()->role=="Merchant Superadmin")

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Users
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('user/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Users List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('user/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new User</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Mailbox
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('mailbox/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inbox</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('mailbox/sent')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sent</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('mailbox/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Compose</p>
                  </a>
                </li>
              </ul>
            </li>

            @endif

            @if(Auth::user()->role=="Admin")

            <li class="nav-header">ADMIN</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-store"></i> -->
                <i class="nav-icon fa fa-tags"></i>
                <p>
                  Merchants
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('merchant/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Merchants List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('merchant/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new Merchant</p>
                  </a>
                </li>
              </ul>



            @if(Auth::user()->role=="Admin")

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-piggy-bank"></i>
                <p>
                  Banks
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('bank/index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Banks List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('bank/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add new Bank</p>
                  </a>
                </li>
              </ul>
            </li>
            @endif

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              
              <p>
                Activity Log
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            @endif


            <li class="nav-header">SETTINGS</li>

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>



          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>