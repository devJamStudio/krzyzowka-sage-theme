<div class="w-full flex " style="{{ $block->inlineStyle }}">
  <div class="flex flex-col-reverse lg:flex-row gap-12 xl:gap-x-[116px] justify-between w-full">
    <div class="flex flex-col justify-between left-col gap-12 2xlg:gap-0 ">
      @if (!empty($slogan))
        <h2 class="slogan">{!! $slogan !!}</h2>
      @endif
      @if (!empty($btn))
        @if (!empty($btn_url))
          <a href="{!! $btn_url !!}">
        @endif
        <button class="btn--primary">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.66663 12H20.6666" stroke="black" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"/>
          <path d="M16 18C16 14.6863 18.6863 12 22 12" stroke="black" stroke-width="1.5" stroke-miterlimit="10"/>
          <path d="M16 6C16 9.31371 18.6863 12 22 12" stroke="black" stroke-width="1.5" stroke-miterlimit="10"/>
          </svg>
           {!! $btn !!}</button>
        @if (!empty($btn_url))
          </a>
        @endif
      @endif
    </div>
    <div class="flex flex-col right-col">
      @if (!empty($image))
        {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'image-class']) !!}
      @endif
    </div>
  </div>
</div>
