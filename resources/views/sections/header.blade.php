<header   id="mainNav"  {!! $appThemeColor !!}  >
<div class=" relative main--nav md:h-[56px] z-10 items-center justify-center  border-black  border flex justify-between pl-6">
  {!! $siteLogo !!}
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary hidden lg:block w-10/12" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>

  @endif
  <button class="p-3 bg-black lg:hidden rounded-2xl" id="nav--toggle">
    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" fill="none">
      <path d="M3 4H21" stroke="#E0ECE9" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
      <path d="M3 20H21" stroke="#E0ECE9" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
      <path d="M3 12H21" stroke="#E0ECE9" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
    </svg>
  </button>
</div>
  <div   id="mobileNav" class="nav-mobile__wrapper  hidden bottom-0 w-full top-14 border-black ">
    <nav {!! $appThemeColor !!} class="nav-primary-mobile lg:hidden  left-0  aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-mobile', 'echo' => false]) !!}
    </nav>
  </div>
</header>


