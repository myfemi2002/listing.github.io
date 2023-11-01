@php
$user = Auth::user();
$status = $user->status;
@endphp

<div class="col-lg-3 col-md-12">
    <div class="simple-sidebar sm-sidebar" id="filter_search">
        <div class="search-sidebar_header">
            <h4 class="ssh_heading">Close Filter</h4>
            <button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
        </div>

        <div class="sidebar-widgets">
            <div class="dashboard-navbar">
                <div class="d-user-avater">
                    <img src="{{ asset('agent/assets/img/user-3.jpg') }}" class="img-fluid avater" alt="">
                    <h4>{{ $user->name }}</h4>
                    <span>{{ $user->country }}</span>
                </div>
               

                @php
    // Get the current route name
    $currentRoute = \Request::route()->getName();
@endphp

<div class="d-navigation">
    <ul>
        @if ($status === 'active')
        <li class="{{ $currentRoute === 'agent.dashboard' ? 'active' : '' }}"><a href="{{ route('agent.dashboard') }}"><i class="ti-dashboard"></i>Dashboard</a></li>
        <li class="#"><a href="#"><i class="ti-user"></i>My Profile</a></li>
        <li class="#"><a href="#"><i class="ti-bookmark"></i>Bookmarked Listings</a></li>

        <li class="{{ $currentRoute === 'agent-property.view' ? 'active' : '' }}"><a href="{{ route('agent-property.view') }}"><i class="ti-layers"></i>My Properties</a></li>
        <li class="{{ $currentRoute === 'agent-property.add' ? 'active' : '' }}"><a href="{{ route('agent-property.add') }}"><i class="ti-pencil-alt"></i>Submit New Property</a></li>
        <li class="#"><a href="#"><i class="ti-unlock"></i>Change Password</a></li>
        @elseif ($status === 'inactive')
            <p class="text-center" style="color: red;">Account Inactive, Contact the Administrator</p>
        @elseif ($status === 'supsended')
            <p class="text-center" style="color: red;">Account Temporarily Suspended, Contact the Administrator</p>
        @endif
        <li><a href="{{ route('agent.logout') }}"><i class="ti-power-off"></i>Log Out</a></li>
    </ul>
</div>






            </div>
        </div>
    </div>
</div>
