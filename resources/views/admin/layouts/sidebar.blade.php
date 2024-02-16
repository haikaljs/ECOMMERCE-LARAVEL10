<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
           
            </li>

            <li class="menu-header">Manage Website</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Manage Categories</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{route('admin.category.index')}}">Category</a></li>
                    <li class=active><a class="nav-link" href="{{route('admin.subcategory.index')}}">Sub Category</a></li>
                    <li class=active><a class="nav-link" href="{{route('admin.child-category.index')}}">Child Category</a></li>
                    
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{route('admin.slider.index')}}">Slider</a></li>
                    
                </ul>
            </li>
   
       
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i>
                    <span>Credits</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
