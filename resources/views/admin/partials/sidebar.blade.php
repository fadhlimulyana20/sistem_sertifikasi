<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>

        {{-- Tambahkan navigasi di sini --}}

        {{-- <li class="{{ strpos(Route::currentRouteName(), 'asesi') !== false ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('asesi.index') }}"><i class="fa fa-users"></i> <span>Asesi</span></a></li> --}}

        <li class="{{ strpos(Route::currentRouteName(), 'asesi') !== false ? 'active' : '' }}">
            <a href="{{ route('asesi.index') }}" class="nav-link">
                <i class="fas fa-user-graduate"></i>
                <span>Asesi</span>
            </a>
        </li>
        <li class="{{ strpos(Route::currentRouteName(), 'ref_kegiatan') !== false ? 'active' : '' }}">
            <a href="{{ route('ref_kegiatan.index') }}" class="nav-link">
                <i class="far fa-calendar"></i>
                <span>Kegiatan</span>
            </a>
        </li>
        <li class="{{ strpos(Route::currentRouteName(), 'ref_kegiatan') !== false ? 'active' : '' }}">
            <a href="{{ route('syarat_sertifikasi.index') }}" class="nav-link">
                <i class="far fa-calendar"></i>
                <span>Syarat Sertifikasi</span>
            </a>
        </li>


        {{-- @if (Auth::user()->can('manage-users'))
      <li class="menu-header">Users</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif --}}
    </ul>
</aside>
