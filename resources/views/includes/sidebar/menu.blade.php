@php $menu = include base_path('config/menu.php') @endphp
@php $perms = tr_group_permission(tr_user_details(null, 'group_id')) @endphp
@foreach($menu as $key => $value)
    @foreach(json_decode($perms, true) as $key2 => $value2)
        @if($key2 == $value['permission_key'])
            @if($value2 == true)
                <div class="menu-item">
                    <a data-route="{{ $value['route'] }}" class="menu-link" href="{{ route($value['route']) }}">
                        <span class="menu-icon">
                            <i class="{{ $value['icon'] }}"></i>
                        </span>
                        <span class="menu-title">{{ $value['title'] }} </span>
                    </a>
                </div>
            @else
                @if(tr_user_permission_check(null, $value['permission_key']) == true)
                    <div class="menu-item">
                        <a data-route="{{ $value['route'] }}" class="menu-link" href="{{ route($value['route']) }}">
                            <span class="menu-icon">
                                <i class="{{ $value['icon'] }}"></i>
                            </span>
                            <span class="menu-title">{{ $value['title'] }} </span>
                        </a>
                    </div>
                @endif
            @endif
        @endif
    @endforeach
@endforeach

