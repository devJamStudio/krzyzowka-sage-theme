<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  @if ($categories)
      <div class="py-12 md:py-[116px] flex justify-center align-center flex-wrap flex-row">
          @foreach ($categories as $category)
          <a href="#" class="category-filter" data-category-id="{{ $category->term_id }}">
              <button class="btn border border-black rounded-2xl text-lg px-6 py-3 h-[53px]">
                    <span class="max-h-[13px]"> {{ esc_html($category->name) }} </span>
              </button>
            </a>
          @endforeach
      </div >
  @else
      <p>{{ $block->preview ? 'Add a category...' : 'No categories found!' }}</p>
  @endif
</div>

