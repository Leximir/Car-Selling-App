@props(['color', 'bgColor' => 'white'])

{{ dump($attributes) }}

<div class="card card-text-{{ $color }} card-bg-{{ $bgColor }}">
    {{ $slot }}
</div>
