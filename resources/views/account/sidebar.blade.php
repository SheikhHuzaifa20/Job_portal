
<div class="col-lg-3 col-md-4">
    <div class="myaccount-tab-menu nav" role="tablist">
        <a  href="{{ URL('account') }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'account')  ? 'active' : '' ?>"><i class="fas fa-th"></i>
            Dashboard</a>
            @if (Auth::user()->status == 2)
            {{-- Role 2 was Employee role --}}
            <a href="{{ URL('reviews') }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'reviews')  ? 'active' : '' ?>"><i class="fa fa-cart-arrow-down"></i>Apply Job History</a>
            @else
            <a href="{{ route('orders', ['id' => $id]) }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'orders')  ? 'active' : '' ?>"><i class="fa fa-cart-arrow-down"></i>Job Reviews</a>
            @endif

        <a href="{{ URL('account-detail') }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'account-detail')  ? 'active' : '' ?>"><i class="fa fa-user"></i> Account Details</a>

        <a href="{{ URL('signout') }}"><i class="fas fa-arrow-circle-left"></i> Logout</a>
    </div>
</div>

