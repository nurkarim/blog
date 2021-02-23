@if(config('edashboard')['search_bar'])
<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>
@endif
@inject('customHelper', \App\CustomClasses\Helper)
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @foreach($customHelper->leftNavMenus() as $menu)
            @if(isset($menu['submenu']))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon {{ $menu['icon'] }} {{ $menu['icon_color'] }}"></i>
                        <p>
                            {{ $menu['name'] }}
                            <i class="fas fa-angle-left right"></i>
                            @if(isset($menu['badge']))
                                <span class="badge {{ $menu['badge_color'] }} right">{{ $menu['badge_number'] }}</span>
                            @endif
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        @foreach($menu['submenu'] as $sub_menu)
                            <li class="nav-item">
                                <a href="@if(isset($sub_menu['route'])) {{ route($sub_menu['route']) }} @else {{ URL::to($sub_menu['url']) }} @endif" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ $sub_menu['name'] }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                        <li class="nav-item">
                            <a href="@if(isset($menu['route'])) {{ route($menu['route']) }} @else {{ URL::to($menu['url']) }} @endif" class="nav-link {{ $menu['active'] }}" @if(isset($menu['onclick'])) onclick="{!! $menu['onclick'] !!}" @endif>
                                <i class="nav-icon {{ $menu['icon'] }} {{ $menu['icon_color'] }}"></i>
                                <p>
                                    {{__($menu['name'])}}
                                </p>
                            </a>
                        </li>
            @endif
        @endforeach

    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
