<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup> </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Interface</div>
    <li class="nav-item">
        <a class="nav-link" href="admin/category/list"><i class="fas fa-fw fa-chart-area"></i><span>Quản lý danh mục</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="admin/product/list"><i class="fas fa-fw fa-chart-area"></i><span>Quản lý sản phẩm</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="admin/news/list"><i class="fas fa-fw fa-chart-area"></i><span>Quản lý tin tức</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#giaydep"
            aria-expanded="true" aria-controls="giaydep">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Quản lý giày dép</span>
        </a>
        <div id="giaydep" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin/quanlykho/list">Tồn kho</a>
                <a class="collapse-item" href="admin/nhaphang/list">Nhập hàng</a>
                <a class="collapse-item" href="admin/banhang/list">Bán hàng</a>
                <a class="collapse-item" href="admin/giaydep/list">option</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Location</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin/province/list">Province</a>
                <a class="collapse-item" href="admin/district/list">District</a>
                <a class="collapse-item" href="admin/ward/list">Ward</a>
                <a class="collapse-item" href="admin/street/list">Street</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="admin/setting/list"><i class="fas fa-fw fa-chart-area"></i><span>Cài đặt</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="admin/user/list"><i class="fas fa-fw fa-chart-area"></i><span>Người dùng</span></a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>