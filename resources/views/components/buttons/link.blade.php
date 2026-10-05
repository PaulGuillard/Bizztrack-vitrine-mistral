@props(['href', 'size' => 'md', 'icon' => null, 'iconPosition' => 'left', 'variant' => 'primary'])

@php
    $variants = [
        'primary' => 'text-primary-500 hover:text-primary-600',
        'secondary' => 'text-gray-600 hover:text-gray-800',
        'danger' => 'text-red-500 hover:text-red-600',
    ];
    
    $sizes = [
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-lg',
    ];
    
    $iconClasses = [
        'sm' => 'w-4 h-4',
        'md' => 'w-5 h-5',
        'lg' => 'w-6 h-6',
    ];
    
    $variantClass = $variants[$variant] ?? $variants['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $iconClass = $iconClasses[$size] ?? $iconClasses['md'];
@endphp

<a 
    href="{{ $href }}"
    {{ $attributes->merge(['class' => 'font-medium transition-colors inline-flex items-center gap-2 ' . $variantClass . ' ' . $sizeClass]) }}
>
    @if($icon && $iconPosition === 'left')
        <span class="{{ $iconClass }}">{!! $icon !!}</span>
    @endif
    
    {{ $slot }}
    
    @if($icon && $iconPosition === 'right')
        <span class="{{ $iconClass }}">{!! $icon !!}</span>
    @endif
</a>
