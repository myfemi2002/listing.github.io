<div class="dropdown-menu pull-right animated flipInX" id="showing">
    <a href="#"><i class="ti-user"></i>My Profile</a>
    <a href="#"><i class="ti-layers"></i>Property List</a>
    <a href="#"><i class="ti-bookmark"></i>Bookmarked Listings</a>
    <a class="active" href="#"><i class="ti-unlock"></i>Change Password</a>
    <a class="{{ (request()->is('contact-us')) ? 'active' : '' }}" href="contact-us"><i class="ti-unlock"></i> Change Password </a>
    <a href="{{ route('customer.logout') }}"><img src="{{ asset('agent/assets/img/off.svg') }}" class="mr-2" width="17" alt="" />Sign Out</a>
</div>
