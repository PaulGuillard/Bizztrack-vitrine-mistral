@props(['value', 'label', 'icon' => null, 'color' => 'primary'])

@php
    $colors = [
        'primary' => 'bg-primary-500',
        'tachygraph' => 'bg-tachygraph-500',
        'payroll' => 'bg-payroll-500',
        'missions' => 'bg-missions-500',
        'pto' => 'bg-pto-500',
    ];
    
    $colorClass = $colors[$color] ?? $colors['primary'];
@endphp

<div class="card card-hover p-6 text-center group">
    @if($icon)
        <div class="mx-auto w-16 h-16 {{ $colorClass }} rounded-lg flex items-center justify-center mb-4">
            <span class="w-8 h-8 text-white">{!! $icon !!}</span>
        </div>
    @endif
    
    <h3 class="text-3xl font-bold text-gray-800 mb-2 group-hover:text-primary-600 transition-colors">
        {{ $value }}
    </h3>
    <p class="text-gray-600 text-sm font-medium">
        {{ $label }}
    </p>
</div>
