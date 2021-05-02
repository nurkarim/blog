@inject('customHelper', \App\CustomClasses\SettingsHelper)
<nav id="dropdown">
    <ul>
        <li class="active">
            <a href="/">Home</a>
        </li>
        @foreach($customHelper->menus() as $menu)
            <li>
                <a @if($menu->new_tab==1) target="_blank" @endif @if($menu->source=="category") href="category/{{ $menu->url }}" @else href="page/{{ $menu->url }}" @endif >{{ $menu->title }}</a>
                @if($menu->is_dropdown=="yes")
                    @if(isset($menu->category->subCategory))
                        <ul class="ne-dropdown-menu">
                            @foreach($menu->category->subCategory as $subCategory)
                                <li>
                                    <a href="#">Laravel 8</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endif
            </li>
        @endforeach
    </ul>
</nav>
