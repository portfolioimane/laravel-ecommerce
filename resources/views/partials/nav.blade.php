<header>
    <div class="top-nav container">
        <div class="logo"><a href="/laravel-ecommerce/public">Laravel Ecommerce</a></div>
        @if (! request()->is('checkout'))
           {{menu('main', 'partials.menus.main')}}
        @endif
    </div> <!-- end top-nav -->
</header>
