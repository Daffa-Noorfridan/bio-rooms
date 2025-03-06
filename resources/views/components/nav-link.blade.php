<style>
    .nav-link-active {
        font-family: Roboto;
        font-size: 18px;
        font-style:normal;
        font-weight: 700;
        line-height: normal;
        position:flex;
        color: white; 
        border-bottom: 2px solid #77f6ff;
        font-weight: bold;
    }

    .nav-link-inactive {
        font-family: Roboto;
        font-size: 18px;
        font-style:normal;
        font-weight: 700;
        line-height: normal;
        position:flex;
        color:black;
        font-weight: bold;
    }

    .nav-link-inactive:hover {
        font-family: Roboto;
        font-size: 18px;
        font-style:normal;
        font-weight: 700;
        line-height: normal;
        position:flex;
        color:#F58732;
        font-weight: bold;
    }
</style>
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 nav-link-active transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 nav-link-inactive  transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
