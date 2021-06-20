@php

$prefix = Request::route()->getPrefix();
$route =Route::current()->getName();
@endphp

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

@if(Auth::user()->usertype=='Admin')
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           User
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('users.view')}}" class="nav-link {{($route=='users.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View User</p>
          </a>
        </li>
      </ul>
    </li>

    @endif

    <li class="nav-item has-treeview {{($prefix =='/profiles')?'menu-open':''}} ">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           Profile
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.view')}}" class="nav-link  {{($route =='profiles.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>your profile</p>
          </a>
        </li>
      </ul>
      <!--Change password -->
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='profiles.password.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Change password</p>
          </a>
        </li>
      </ul>
    </li>




        <!-- Dish -->
            <li class="nav-item has-treeview {{($prefix=='/dishes')?'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Dish Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('dishes.view')}}" class="nav-link {{($route=='dishes.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Dishes</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Reservation -->
            <li class="nav-item has-treeview {{($prefix=='/dishes')?'menu-open':''}}">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Reservation Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('reservation.show')}}" class="nav-link {{($route=='dishes.view')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Reservation</p>
                  </a>
                </li>
              </ul>
            </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
