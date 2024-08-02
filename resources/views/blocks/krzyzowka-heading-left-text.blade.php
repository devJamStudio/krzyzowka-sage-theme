<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="gap-[24px]  flex flex-col  w-full">
    <div class="header--wrapper">
      @if($tag_selector == false )
        <h2 class="krzyzowka--header">{!!$header!!}</h2>
      @else
        <h3 class="krzyzowka--header" >{!!$header!!}</h3>
      @endif
    </div>
    <div class="paragraph--wrapper flex justify-start mb-[48px] md:mb-0">
      {!!$text!!}
    </div>
  </div>
</div>
