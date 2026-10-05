@props(['size' => 'md', 'icon' => null, 'iconPosition' => 'left'])

@php
    $sizes = [
        'sm' => 'py-2 px-4 text-sm',
        'md' => 'py-3 px-6 text-base',
        'lg' => 'py-4 px-8 text-lg',
    ];
    
    $iconClasses = [
        'sm' => 'w-4 h-4',
        'md' => 'w-5 h-5',
        'lg' => 'w-6 h-6',
    ];
    
    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $iconClass = $iconClasses[$size] ?? $iconClasses['md'];
@endphp

<button 
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn-secondary ' . $sizeClass]) }}
>
    @if($icon && $iconPosition === 'left')
        <span class="{{ $iconClass }}">{!! $icon !!}</span>
    @endif
    
    {{ $slot }}
    
    @if($icon && $iconPosition === 'right')
        <span class="{{ $iconClass }}">{!! $icon !!}</span>
    @endif
</button>
