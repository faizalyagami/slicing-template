@props(['content'])

<span {{ $attributes }}>
    {{ $content }}
    {{ $slot }}
</span>
