<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">

  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
      src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
      <p class="app-sidebar__user-designation">Backend Developer</p>
    </div>
  </div>

  <ul class="app-menu">
    <li>
      <a class="app-menu__item" href="{{route('dashboard')}}">
        <i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-laptop"></i>
        <span class="app-menu__label">Posts</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{ route('posts') }}"><i class="icon fa fa-circle-o"></i>All Posts</a></li>
        <li><a class="treeview-item" href="{{ route('create_post') }}"><i class="icon fa fa-circle-o"></i>Add New
            Post</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-laptop"></i>
        <span class="app-menu__label">Pages</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{ route('pages') }}"><i class="icon fa fa-circle-o"></i>All Pages</a></li>
        <li><a class="treeview-item" href="{{ route('create_page') }}"><i class="icon fa fa-circle-o"></i>Add New
            Page</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-laptop"></i>
        <span class="app-menu__label">Products</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a class="treeview-item" href="{{ route('products') }}"><i class="icon fa fa-circle-o"></i>All Products</a>
        </li>
        <li>
          <a class="treeview-item" href="{{ route('create_product') }}"><i class="icon fa fa-circle-o"></i>Add New
            Product</a>
        </li>
      </ul>
    </li>
    <li class="treeview is-expanded">
      <a class="app-menu__item" href="#" data-toggle="treeview">
        <i class="app-menu__icon fa fa-laptop"></i>
        <span class="app-menu__label">Categories</span>
        <i class="treeview-indicator fa fa-angle-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="{{ route('categories') }}"><i class="icon fa fa-circle-o"></i>All
            Categories</a></li>
        <li><a class="treeview-item" href="{{ route('create_category') }}"><i class="icon fa fa-circle-o"></i>Add New
            Category</a></li>
      </ul>
    </li>
    <li>
      <a class="app-menu__item" href="{{ route('settings') }}">
        <i class="app-menu__icon fa fa-cog"></i>
        <span class="app-menu__label">Settings</span>
      </a>
    </li>
</aside>