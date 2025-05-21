<div class="faq__accordion_element" x-on:click="changeTab(event, {{ $tab }})" :style='current == {{ $tab }} ? newStyle : {}'>
    <div class="faq__accordion_element-btn" >
        <div class="faq__accordion_heading">
            {{ $text }}
        </div>
        <i class="fa-thin fa-plus faq__accordion_icon"></i>
    </div>
    <div class="faq__accordion_content" x-show="current == {{ $tab }}" x-transition:enter.duration.500ms.delay.400ms x-transition:leave.duration.300ms.delay.300ms>
        <span class="faq__accordion_content-span" x-text='{{ $content }}'></span>
    </div>
</div>
