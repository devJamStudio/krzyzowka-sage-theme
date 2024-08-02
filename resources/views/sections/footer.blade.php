<footer class="content-info border border-black black min-h-[290px] lg:h-[347px] xl:h-[290px] flex flex-col lg:flex-row justify-between">
  <div class="footer-col-left lg:border-r flex flex-col border-black lg:max-w-[500px] 2xl:max-w-[780px]" >
    <div class="footer-col-left-top p-4 lg:p-6 flex flex-row border-b border-black">
      {!! $siteLogo !!} <span class="Barbara"> &nbsp+ Barbara Olejarczyk </span>

    </div>
    <div class="footer-col-left-bottom  min-h-[172px] lg:min-h-0 gap-[24px] lg:gap-0 p-4 pb-[20px] lg:p-6 flex h-full flex-col justify-between">
      <p class="footer-slogan">Multidyscyplinarna pracownia grafiki użytkowej z miasta Łodzi.</p>
      <a href="">
        <button class="btn--secondary">
        <svg width="24" height="24"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.66699 12H20.667" stroke="#E0ECE9" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
        <path d="M16 18C16 14.6863 18.6863 12 22 12" stroke="#E0ECE9" stroke-width="1.5" stroke-miterlimit="10"/>
        <path d="M16 6C16 9.31371 18.6863 12 22 12" stroke="#E0ECE9" stroke-width="1.5" stroke-miterlimit="10"/>
        </svg>
        Umów się na konsultację</button></a>
    </div>
  </div>
  <div class="footer-col-center lg:border-r flex flex-[2] flex-col justify-between border-black">
    <div class="footer--nav__wrapper  border-t lg:border-t-0 flex border-b min-h-[92px] lg:min-h-[auto] border-black p-4 py-[20px] lg:p-6 ">
      <nav class="nav-footer  lg:block w-10/12" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer', 'echo' => false]) !!}
      </nav>
    </div>
    <div class="footer--credits__wrapper flex md:flex-col  lg:flex-row justify-between align-center h-full hidden lg:flex px-6 py-3">
      <span> Projekt: Krzyżówka + <b>Joanna Statucka</b></span>
      <span>© 2018-2024</span>
    </div>
  </div>
  <div class="footer-col-right flex lg:flex-col">
    <div class="aspect-ratio-square lg:border-b border-black">
    <svg xmlns="http://www.w3.org/2000/svg" class="logo w-[272px] h-[272px] md:w-[333px] md:h-[333px] lg:w-[234px] lg:h-[234px]"  viewBox="0 0 234 234" fill="none">
      <path d="M232.5 117C232.5 180.789 180.838 232.5 117.111 232.5C53.3843 232.5 1.72266 180.789 1.72266 117C1.72266 53.2107 53.3843 1.5 117.111 1.5C180.838 1.5 232.5 53.2107 232.5 117Z" stroke="black" stroke-miterlimit="10"/>
      <line x1="118.207" y1="1" x2="118.207" y2="232.033" stroke="black"/>
      <line x1="231.812" y1="118.096" x2="1.00008" y2="118.096" stroke="black"/>
      </svg>
    </div>
    <div class="social-media__container--wrapper w-full border-l border-black lg:border-none lg:h-full flex ">
    <div class="social-media__container grid lg:grid-cols-4 flex-[2] h-full">
      <div class="social-media__wrapper  facebook">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="Warstwa_1" clip-path="url(#clip0_3919_7214)">
          <path id="Vector" d="M18.3 0H5.7C2.5 0 0 2.5 0 5.7V18.4C0 21.5 2.5 24 5.7 24H10.2V15.6H7.2V12.1H10.2V9.4C10.1 8.8 10.2 8.1 10.4 7.6C10.6 7 10.9 6.5 11.4 6C11.8 5.6 12.4 5.2 12.9 5C13.5 4.8 14.1 4.7 14.7 4.7C15.6 4.7 16.5 4.8 17.4 4.9V7.9H15.9C15.6 7.9 15.4 7.9 15.1 8C14.9 8.1 14.6 8.2 14.4 8.4C14.2 8.6 14.1 8.8 14 9C13.9 9.2 13.9 9.5 13.9 9.8V12.1H17.2L16.7 15.6H13.9V24H18.4C21.5 24 24.1 21.5 24.1 18.3V5.7C24 2.5 21.5 0 18.3 0Z" fill="black"/>
          </g>
          <defs>
          <clipPath id="clip0_3919_7214">
          <rect width="24.1" height="24" fill="white"/>
          </clipPath>
          </defs>
          </svg>
      </div>
      <div class="social-media__wrapper  instagram">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1651_7013)">
          <path d="M18.3 0H5.7C2.5 0 0 2.5 0 5.7V18.4C0 21.5 2.5 24 5.7 24H18.4C21.5 24 24.1 21.5 24.1 18.3V5.7C24 2.5 21.5 0 18.3 0ZM5.8 12C5.8 8.6 8.5 5.8 12 5.8C15.5 5.8 18.2 8.5 18.2 12C18.2 15.5 15.5 18.2 12 18.2C8.5 18.2 5.8 15.4 5.8 12ZM19.7 6.1C19.6 6.3 19.5 6.4 19.4 6.6C19.3 6.7 19.1 6.8 18.9 6.9C18.8 7 18.6 7 18.4 7C17.6 7 17 6.4 17 5.6C17 4.8 17.6 4.2 18.4 4.2C19.2 4.2 19.8 4.8 19.8 5.6C19.8 5.8 19.8 6 19.7 6.1Z" fill="black"/>
          <path d="M12 8C9.8 8 8 9.8 8 12C8 14.2 9.8 16 12 16C14.2 16 16 14.2 16 12C16 9.8 14.2 8 12 8Z" fill="black"/>
          </g>
          <defs>
          <clipPath id="clip0_1651_7013">
          <rect width="24.1" height="24" fill="white"/>
          </clipPath>
          </defs>
          </svg>

      </div>
      <div class="social-media__wrapper  behance">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1651_7015)">
          <path d="M18.2 0H5.7C2.5 0 0 2.5 0 5.7V18.4C0 21.5 2.5 24 5.7 24H18.4C21.5 24 24.1 21.5 24.1 18.3V5.7C24 2.5 21.5 0 18.2 0ZM15.48 14.98C15.78 15.27 16.21 15.42 16.77 15.42C17.17 15.42 17.52 15.32 17.81 15.12C18.1 14.92 18.28 14.7 18.34 14.48H20.09C19.81 15.35 19.38 15.97 18.8 16.35C18.23 16.73 17.52 16.91 16.7 16.91C16.13 16.91 15.62 16.82 15.16 16.64C14.72 16.47 14.32 16.2 13.99 15.86C13.67 15.51 13.42 15.1 13.25 14.65C13.07 14.15 12.98 13.63 12.99 13.11C12.99 12.57 13.08 12.06 13.26 11.59C13.6 10.68 14.3 9.95 15.19 9.57C15.67 9.37 16.18 9.27 16.7 9.28C17.32 9.28 17.85 9.4 18.31 9.64C18.76 9.87 19.14 10.2 19.44 10.6C19.74 11 19.94 11.46 20.08 11.97C20.21 12.48 20.25 13.01 20.21 13.57H14.98C14.98 14.14 15.18 14.68 15.47 14.98H15.48ZM14.58 7.96V6.97H18.64V7.96H14.58ZM12.05 15.12C11.86 15.48 11.59 15.79 11.26 16.03C10.91 16.27 10.53 16.45 10.12 16.55C9.69 16.66 9.25 16.72 8.81 16.72H3.96V6.71H8.68C9.16 6.71 9.59 6.75 9.99 6.84C10.38 6.92 10.72 7.06 11 7.25C11.28 7.44 11.5 7.7 11.65 8.01C11.8 8.32 11.88 8.72 11.88 9.18C11.88 9.68 11.77 10.1 11.54 10.44C11.31 10.78 10.97 11.05 10.52 11.26C11.14 11.44 11.59 11.75 11.89 12.19C12.19 12.64 12.34 13.17 12.34 13.8C12.34 14.31 12.24 14.75 12.05 15.11V15.12Z" fill="black"/>
          <path d="M9.36016 10.47C9.62016 10.29 9.74016 9.98003 9.74016 9.56003C9.74016 9.36003 9.71016 9.16003 9.62016 8.99003C9.54016 8.85003 9.42016 8.73003 9.28016 8.64003C9.13016 8.55003 8.97016 8.49003 8.79016 8.46003C8.60016 8.42003 8.41016 8.41003 8.22016 8.41003H6.16016V10.75H8.39016C8.77016 10.75 9.10016 10.66 9.35016 10.47H9.36016Z" fill="black"/>
          <path d="M16.6402 10.77C16.3202 10.77 16.0602 10.83 15.8502 10.93C15.6402 11.04 15.4702 11.17 15.3502 11.33C15.2302 11.48 15.1402 11.65 15.0802 11.84C15.0302 12 15.0002 12.15 14.9902 12.31H18.2302C18.1802 11.8 18.0102 11.43 17.7702 11.16C17.5202 10.9 17.1302 10.76 16.6402 10.76V10.77Z" fill="black"/>
          <path d="M8.56016 12.25H6.16016V15.01H8.51016C8.73016 15.01 8.93016 14.99 9.13016 14.95C9.32016 14.91 9.49016 14.84 9.65016 14.74C9.80016 14.64 9.92016 14.51 10.0102 14.34C10.1002 14.17 10.1402 13.95 10.1402 13.69C10.1402 13.17 9.99016 12.8 9.70016 12.58C9.41016 12.36 9.03016 12.25 8.55016 12.25H8.56016Z" fill="black"/>
          </g>
          <defs>
          <clipPath id="clip0_1651_7015">
          <rect width="24.1" height="24" fill="white"/>
          </clipPath>
          </defs>
          </svg>

      </div>
      <div class="social-media__wrapper  linkedin">
        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1675_20590)">
          <path d="M18.3 0H5.7C2.5 0 0 2.5 0 5.7V18.4C0 21.5 2.5 24 5.7 24H18.4C21.5 24 24.1 21.5 24.1 18.3V5.7C24 2.5 21.5 0 18.3 0ZM8.24 18.52H5.13V9.44H8.16V18.52H8.24ZM6.73 8.18C5.72 8.18 5.05 7.51 5.05 6.58C4.97 5.66 5.64 4.98 6.73 4.98C7.74 4.98 8.41 5.65 8.41 6.58C8.41 7.42 7.74 8.18 6.73 8.18ZM19.16 18.52H16.13V13.65C16.13 12.39 15.71 11.55 14.62 11.55C13.78 11.55 13.28 12.14 13.02 12.64C12.94 12.81 12.94 13.14 12.94 13.4V18.53H9.91V9.45H12.94V10.71C13.36 10.04 14.03 9.2 15.71 9.2C17.73 9.2 19.24 10.46 19.24 13.32L19.16 18.53V18.52Z" fill="black"/>
          </g>
          <defs>
          <clipPath id="clip0_1675_20590">
          <rect width="24.1" height="24" fill="white"/>
          </clipPath>
          </defs>
          </svg>
        </div>
      </div>

    </div>

  </div>
  <div class="footer--credits__wrapper flex border-t border-black flex-col lg:flex-row justify-between align-center h-full  gap-1 lg:hidden p-4 lg:px-6 lg:py-3">
    <span> Projekt: Krzyżówka + <b>Joanna Statucka</b></span>
    <span>© 2018-2024</span>
  </div>
</footer>
