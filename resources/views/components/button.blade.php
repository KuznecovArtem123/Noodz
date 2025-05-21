@isset($type)
    <button class="button {{ $class }} button-{{ $type }}">
        <span class="button__text button-{{ $type }}__text">{{ $text }}</span>
@else
    <button class="button {{ $class }}">
        <span class="button__text">{{ $text }}</span>
@endisset
</button>
