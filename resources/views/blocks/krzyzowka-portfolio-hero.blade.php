
@if ($hero_image)
<div class="min-h-screen {{ $block->classes }}" style="{{ $block->inlineStyle }} background-size:cover; background-image:url('{!!$hero_image['url'] !!}')">
  <div>
    <InnerBlocks template="{{ $block->template }}" />
  </div>
</div>
@endif
