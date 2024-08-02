<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  @if ($items)
  <div class="flex gap-4 md:gap-[24px]">
    <div><h5 class="portfolio-list__header">{!!$header !!}</h5>
    </div>
  <div class="flex flex-col">
    <ul class="portoflio-list__list">
      @foreach ($items as $item)
        <li>{{ $item['item'] }}</li>
      @endforeach
    </ul>
  </div>
</div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
