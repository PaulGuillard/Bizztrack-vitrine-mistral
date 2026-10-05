@props(['title', 'description', 'features', 'color' => 'primary', 'icon' => null])

@php
    $colors = [
        'primary' => 'from-primary-500 to-primary-700',
        'tachygraph' => 'from-tachygraph-500 to-purple-700',
        'payroll' => 'from-payroll-500 to-green-700',
        'missions' => 'from-missions-500 to-orange-700',
        'pto' => 'from-pto-500 to-pink-700',
    ];
    
    $colorClass = $colors[$color] ?? $colors['primary'];
@endphp

<div class="card card-hover overflow-hidden">
    <div class="bg-gradient-to-br {{ $colorClass }} h-2"></div>
    <div class="p-6">
        <div class="flex items-start gap-4 mb-4">
            @if($icon)
                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br {{ $colorClass }} rounded-lg flex items-center justify-center">
                    <span class="w-8 h-8 text-white">{!! $icon !!}</span>
                </div>
            @endif
            
            <div class="flex-1">
                <h3 class="text-xl font-bold text-gray-800 mb-2">
                    {{ $title }}
                </h3>
            </div>
        </div>
        
        <p class="text-gray-600 mb-4">
            {{ $description }}
        </p>
        
        @if($features)
            <ul class="space-y-2 text-sm">
                @foreach($features as $feature)
                    <li class="flex items-center gap-2 text-gray-600">
                        <svg class="w-4 h-4 text-primary-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
