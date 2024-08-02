<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="flex flex-col gap-116 gap-12 md:gap-[116px]">
<div class="krzyzowka-authors__header--wrapper flex flex-col gap-2">
  <h3 class="krzyzowka-authors__header">{!! $header !!}</h3>
  <span class="krzyzowka-authors__subtext">{!! $text !!}</span>
</div>

  @if ($items)
    <ul class="krzyzowka-authors__list  flex flex-col flex-wrap krzyzwoka-row gap-4 md:self-end">
      @foreach ($items as $item)
        <div class="flex  gap-4"><li class="w-[128px] md:w-[232px] krzyzowka-authors__role">{{ $item['header'] }}</li> <li class="krzyzowka-authors__name"> {{ $item['text'] }}</li></div>

      @endforeach
    </ul>
    @endif
  </div>
</div>
