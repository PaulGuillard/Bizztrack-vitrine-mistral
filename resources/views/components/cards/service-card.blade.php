@props(['title', 'description', 'icon' => null, 'color' => 'primary'])

@php
    $colors = [
        'primary' => 'bg-primary-500',
        'tachygraph' => 'bg-tachygraph-500',
        'payroll' => 'bg-payroll-500',
        'missions' => 'bg-missions-500',
        'pto' => 'bg-pto-500',
    ];
    
    $colorClass = $colors[$color] ?? $colors['primary'];
    $iconClass = 'w-8 h-8';
@endphp

<div class="card card-hover p-6 group">
    <div class="flex items-start gap-4">
        @if($icon)
            <div class="flex-shrink-0 w-12 h-12 {{ $colorClass }} rounded-lg flex items-center justify-center">
                <span class="{{ $iconClass }} text-white">{!! $icon !!}</span>
            </div>
        @endif
        
        <div class="flex-1">
            <h3 class="text-lg font-semibold text-gray-800 mb-2 group-hover:text-primary-600 transition-colors">
                {{ $title }}
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
