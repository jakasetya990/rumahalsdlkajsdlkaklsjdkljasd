<li class="menu-header">Dashboard</li>


@foreach (adminMenu() as $menu)
  <li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
      <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
    </ul>
  </li>
@endforeach
