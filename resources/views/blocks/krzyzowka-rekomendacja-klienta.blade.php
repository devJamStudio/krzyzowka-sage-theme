<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="flex flex-col gap-116">
  <div class="krzyzowka-client-recommend__header--wrapper">
    <h3>Rekomendacje <br class="md:hidden"> klientów</h3>
  </div>
  <div class="krzyzowka-client-recommend__client--wrapper flex justify-end">
    <div class="max-w-[696px] flex flex-col gap-4 md:gap-6">
    <img class="krzyzowka-client__avatar" src ="{{$avatar['url']}}"/>
    <h5 class="krzyzowka-client__name">{{$name}}</h5>
    <div><p class="krzyzowka-client__recommend"> {!! $text  !!}</p></div>
    <div><span class="krzyzowka-client__sub">{!! $subtext  !!}</span></div>
    </div>
  </div>
</div>
</div>
