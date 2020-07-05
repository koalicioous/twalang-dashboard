<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-hiking"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Twalang</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Marketing:</h6>
                <a class="collapse-item" href={{route('userDemographic')}}>Users Demographic</a>
                <a class="collapse-item" href="cards.html">Average Expensess & <br> Booking Season</a>
                <h6 class="collapse-header">Product Development:</h6>
                <a class="collapse-item" href={{route('categoryPurchase')}}>Category Purchase</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->
