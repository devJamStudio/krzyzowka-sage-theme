<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  @if ($portfolios)
      <div id="portfolioGrid" class="portfolio--grid grid grid-cols-1 border-collapse md:grid-cols-2 xl:grid-cols-3 justify-center align-center border border-t-black ">
          @foreach ($portfolios as $item)
              <div class="portfolio--card">
                <div class="portfolio--card__image--wrapper">
                  <a href="{{ get_permalink($item['ID']) }}" >
                  <img src="{{ $item['thumbnail'] }}" class="w-full" alt="{{ $item['title'] }}">
                  </a>
                </div>
                <div class="portfolio--card__metabox p-6 flex flex-row justify-between">
                  <div class="portfolio--card__metabox--l-col flex flex-col gap-3">
                    <a href="{{ get_permalink($item['ID']) }}" >
                      <h2 class="portfolio--card--title">{{ $item['title'] }}</h2>
                    </a>
                    <div class="portfolio--card__categories"> <!-- Corrected class name -->
                      <ul class="flex flex-row" >
                        @foreach ($item['categories'] as $category_id)
                            <a href="{{ get_category_link($category_id) }}">
                              <li class="portoflio--category">{{ get_cat_name($category_id) }} </li>
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

                    @if ($item['is_new'] )
                      <button aria-label="pink-new-portfolio-button" class="bg-Pink btn--pink">Nowy</button>
                    @endif
                  </div>
                </div>
              </div>
          @endforeach
      </div>
  @else
      <p>{{ $block->preview ? 'Ups..nie znaleziono portfolio.' : 'Ups!' }}</p>
  @endif
</div>
