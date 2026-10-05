@props(['name', 'label' => null, 'options', 'required' => false, 'error' => null, 'hint' => null, 'inline' => false])

<div class="mb-4">
    @if($label)
        <label class="form-label">
            {{ $label }}
            @if($required)
                <span class="text-red-500" title="Champ obligatoire">*</span>
            @endif
        </label>
    @endif
    
    <div class="flex {{ $inline ? 'flex-row gap-6' : 'flex-col gap-2' }}">
        @foreach($options as $optionValue => $optionLabel)
            <div class="flex items-center gap-2">
                <input 
                    type="radio"
                    id="{{ $name }}_{{ $loop->index }}"
                    name="{{ $name }}"
                    value="{{ $optionValue }}"
                    {{ old($name) == $optionValue ? 'checked' : '' }}
                    {{ $required ? 'required' : '' }}
                    {{ $attributes->merge(['class' => 'w-5 h-5 border-gray-300 text-primary-500 focus:ring-primary-500 focus:ring-2']) }}
                >
                <label 
                    for="{{ $name }}_{{ $loop->index }}" 
                    class="text-sm font-medium text-gray-700 cursor-pointer"
                >
                    {{ $optionLabel }}
                </label>
            </div>
        @endforeach
    </div>
    
    @if($error)
        <p class="form-error">{{ $error }}</p>
    @endif
    
    @if($hint)
        <p class="mt-1 text-xs text-gray-500">{{ $hint }}</p>
    @endif
</div>
