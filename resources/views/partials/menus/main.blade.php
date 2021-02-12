<ul>
    @foreach($items as $menu_item)
        <li>
        	<a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
            @if($menu_item->title == 'cart')
            @endif
        </li>
    @endforeach
</ul>