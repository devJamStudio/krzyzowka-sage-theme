<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  @if ($portfolios)
    <h3 class="portfolio--grid__header py-12  md:p-[116px]">
      Zobacz inne realizacje
    </h3>
    <div id="portfolioSlider"class="swiper-container swiper">
      <div  class="swiper-wrapper  border-t-black">

        @foreach ($portfolios as $item)
          <div class="swiper-slide portfolio--card border-t border-l  border-black">
            <div class="portfolio--card__image--wrapper">
              <a href="{{ get_permalink($item['ID']) }}">
                <img src="{{ $item['thumbnail'] }}" class="w-full" alt="{{ $item['title'] }}">
              </a>
            </div>
            <div class="portfolio--card__metabox p-6 flex flex-row justify-between">
              <div class="portfolio--card__metabox--l-col flex flex-col gap-3">
                <a href="{{ get_permalink($item['ID']) }}">
                  <h2 class="portfolio--card--title">{{ $item['title'] }}</h2>
                </a>
                <div class="portfolio--card__categories">
                  <ul class="flex flex-row">
                    @foreach ($item['categories'] as $category_id)
                      <a href="{{ get_category_link($category_id) }}">
                        <li class="portoflio--category">{{ get_cat_name($category_id) }}</li>
                      </a>
                      @if (!$loop->last)
                        <li> &nbsp;+&nbsp; </li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="portfolio--card__metabox--r-col flex flex-col gap-3 justify-between">
                <p class="portfolio--publish__date">{{ $item['year'] }}</p>
                @if ($item['is_new'])
                  <button aria-label="pink-new-portfolio-button" class="bg-Pink btn--pink">Nowy</button>
                @endif
              </div>
            </div>
          </div>
        @endforeach

      </div>
      <div class="krzyzowka-slider__nav px-4 py-12 border-x border-black">
      <!-- Add Pagination -->
      <div class="krzyzowka-slider__nav--wrapper h-[44px] flex flex-row justify-between items-center ">
      <div class="swiper-pagination relative flex items-center"></div>
      <!-- Add Navigation -->
      <div class="flex relative krzyzowka-slider__nav-next-prev__wrapper">
        <div class="swiper-button-next relative"></div>
        <div class="swiper-button-prev relative"></div>
      </div>
      </div>
    </div>
    </div>
  @else
    <p>{{ $block->preview ? 'Ups..nie znaleziono portfolio.' : 'Ups!' }}</p>
  @endif
</div>
