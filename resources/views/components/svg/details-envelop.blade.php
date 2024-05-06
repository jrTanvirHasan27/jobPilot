@props(['fill' => 'currentColor', 'stroke' => 'currentColor'])

<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.2" d="M21 5.75L12 14L3 5.75H21Z" fill="{{ $fill }}" />
    <path d="M21 5.75L12 14L3 5.75" stroke="{{ $stroke }}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    <path
        d="M3 5.75H21V18.5C21 18.6989 20.921 18.8897 20.7803 19.0303C20.6397 19.171 20.4489 19.25 20.25 19.25H3.75C3.55109 19.25 3.36032 19.171 3.21967 19.0303C3.07902 18.8897 3 18.6989 3 18.5V5.75Z"
        stroke="{{ $stroke }}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    <path d="M10.3594 12.5L3.23438 19.0344" stroke="{{ $stroke }}" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
    <path d="M20.7656 19.0344L13.6406 12.5" stroke="{{ $stroke }}" stroke-width="1.5" stroke-linecap="round"
        stroke-linejoin="round" />
</svg>
