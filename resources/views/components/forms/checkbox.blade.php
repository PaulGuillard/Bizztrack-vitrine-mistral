@props(['name', 'label' => null, 'value' => 'on', 'checked' => false, 'required' => false, 'error' => null, 'hint' => null])

<div class="mb-4">
    <div class="flex items-center gap-3">
        <input 
            type="checkbox"
            id="{{ $name }}"
            name="{{ $name }}"
            value="{{ $value }}"
            {{ $checked || old($name) ? 'checked' : '' }}
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'w-5 h-5 rounded border-gray-300 text-primary-500 focus:ring-primary-500 focus:ring-2']) }}
        >
        
        @if($label)
            <label 
                for="{{ $name }}" 
                class="text-sm font-medium text-gray-700 cursor-pointer"
            >
                {{ $label }}
                @if($required)
                    <span class="text-red-500" title="Champ obligatoire">*</span>
                @endif
            </label>
        @endif
    </div>
    
    @if($error)
        <p class="form-error">{{ $error }}</p>
    @endif
    
    @if($hint)
        <p class="mt-1 text-xs text-gray-500">{{ $hint }}</p>
    @endif
</div>
