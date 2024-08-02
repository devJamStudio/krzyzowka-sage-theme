<div class="portfolio--card">
    <div class="portfolio--card__image--wrapper">
        <a href="{{ get_permalink($item['ID']) }}">
            <img src="{{ $item['thumbnail'] }}" alt="{{ $item['title'] }}">
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
                            <li class="portfolio--category">{{ get_cat_name($category_id) }}</li>
                        </a>
                        @if (!$loop->last)
                            <li>&nbsp;+&nbsp;</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="portfolio--card__metabox--r-col flex flex-col gap-3">
            <p class="portfolio--publish__date">{{ $item['year'] }}</p>
            @if ($item['is_new'])
                <button aria-label="pink-new-portfolio-button" class="bg-Pink btn--pink">Nowy</button>
            @endif
        </div>
    </div>
</div>
