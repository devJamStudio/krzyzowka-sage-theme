<div class="{{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="krzyzowka-contact__module--container flex flex-col lg:flex-row border border-black">
    <div class="krzyzowka-contact__module--contact__wrapper py-12 lg:p-[116px] flex border-black border-b lg:border-b-0 lg:border-r justify-center lg:w-1/2">
   <div class="flex align-center  items-start flex-col justify-between  gap-12 p-4">
    <div class="krzyzowka-contact__avatar--wrapper w-full md:max-w-[273px] ">
      @if ($avatar)
      <img class="krzyzowka-contact__avatar" src ="{{$avatar['url']}}"/>
      @endif
   </div>
      @if ($name)
      <h5 class="krzyzowka-contact__name">{{$name}}</h5>
      @endif
      @if ($contact)
      <div><div class="krzyzowka-contact"> {!! $contact  !!}</div></div>
      @endif
      @if ($adress)
      <div><div class="krzyzowka-contact__adress">{!! $adress  !!}</div></div>
      @endif
   </div>
  </div>
    <div class="krzyzowka-contact__form--wrapper lg:p-[116px] px-4  py-12    flex flex-col justify-center align-center lg:w-1/2">
      <div>
         @php if ( do_shortcode('[contact-form-7 id="a4f35dd" title="Formularz kontaktowy"]') ) {
          echo do_shortcode('[contact-form-7 id="a4f35dd" title="Formularz kontaktowy"]');
         }
         @endphp
         </div>
    </div>
  </div>
</div>
