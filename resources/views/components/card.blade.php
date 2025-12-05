@props(['color', 'bgColor' => 'white'])

<div class="card card-text-{{ $color }} card-bg-{{ $bgColor }}">
    {{ $slot }}
</div>
