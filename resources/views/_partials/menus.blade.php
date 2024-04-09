@php
    $routeActive = Route::currentRouteName();
@endphp

<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">
        <i class="fas fa-users text-warning"></i>
        <span class="nav-link-text">Users</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'items.index' ? 'active' : '' }}" href="{{ route('items.index') }}">
        <i class="fas fa-building text-danger"></i>
        <span class="nav-link-text">Data Barang</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'costumers.index' ? 'active' : '' }}" href="{{ route('costumers.index') }}">
        <i class="fas fa-users text-dark"></i>
        <span class="nav-link-text">Data Costumer</span>
    </a>
</li>
