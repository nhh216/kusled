<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/images/user_default.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Danh mục</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Sản phẩm</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.attribute.index') }}" class="nav-link">
                        <i class="nav-icon fab fa-artstation"></i>
                        <p>Thuộc tính sản phẩm</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.post.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Bài viết</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.brand.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-copyright"></i>
                        <p>Thương hiệu</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                </li>
                <li class="nav-header">Cấu hình hệ thống</li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('image-config.create') }}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-image"></i>--}}
{{--                        <p>Cấu hình META</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{ route('image-config.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Ảnh và Banner</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.footer_config.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Footer</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
