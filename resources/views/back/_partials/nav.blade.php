<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item bar-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

{{--    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--            {{ __('Logout') }}--}}
{{--        </a>--}}

{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--            @csrf--}}
{{--        </form>--}}
{{--    </div>--}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-danger navbar-badge count_notification">{{ auth()->user()->unreadNotifications->count() }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header count_notification_1">{{ auth()->user()->unreadNotifications->count() }} Notifications</span>
                <div class="dropdown-divider"></div>
                @forelse(\App\CustomClasses\Helper::notifications() as $notification)
                <a href="javascript:void(0)" class="dropdown-item alert_list mark-as-read"  data-id="{{ $notification->id }}">
                    <i class="fas fa-envelope mr-2"></i>  User {{ $notification->data['name'] }} has just registered.
                    <span class="float-right text-muted text-sm">[{{ $notification->created_at }}]</span>
                </a>
                <div class="dropdown-divider"></div>
                    @if($loop->last)
                        <a href="#" id="mark-all">
                            Mark all as read
                        </a>
                    @endif
                @empty
                    There are no new notifications
                @endforelse
                <a href="#" class="dropdown-item dropdown-footer delete-notification">Clear All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="#" role="button">
                <i class="fa fa-laptop"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item" style="display: none">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
