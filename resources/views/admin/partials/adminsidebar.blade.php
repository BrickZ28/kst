<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="/admin">
            <i class="fas fa-home"></i>
            <span class="nav-link-text">Admin Home</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseEvents"
           data-parent="#exampleAccordion">
            <i class="fas fa-calendar-alt"></i>
            <span class="nav-link-text ">Events</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseEvents">
            <li>
                <a href="/events/viewall">View Events</a>
            </li>
            <li>
                <a href="/events/create">Create Event</a>
            </li>
            <li>
                <a href="/events/lookupEvents">Edit/Cancel Event</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProducts"
           data-parent="#exampleAccordion">
            <i class="fab fa-product-hunt"></i>
            <span class="nav-link-text">Products</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseProducts">
            <li>
                <a href="/products/viewall">View Products</a>
            </li>
            <li>
                <a href="products/create">Add Product</a>
            </li>
            <li>
                <a href="/products/lookupProducts">Edit Products</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Photo">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePhoto"
           data-parent="#exampleAccordion">
            <i class="fas fa-camera"></i>
            <span class="nav-link-text">Photos</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapsePhoto">
            <li>
                <a href="#">View Photos</a>
            </li>
            <li>
                <a href="#">Add Photos</a>
            </li>
            <li>
                <a href="#">Remove Photos</a>
            </li>

        </ul>
    </li>
</ul>

<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>