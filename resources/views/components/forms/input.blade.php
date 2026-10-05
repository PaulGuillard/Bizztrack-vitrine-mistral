@props(['name', 'type' => 'text', 'label' => null, 'placeholder' => null, 'value' => null, 'required' => false, 'error' => null, 'hint' => null])

<div class="mb-4">
    @if($label)
        <label 
            for="{{ $name }}" 
            class="form-label"
        >
            {{ $label }}
            @if($required)
                <span class="text-red-500" title="Champ obligatoire">*</span>
            @endif
        </label>
    @endif
    
    <input 
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-input']) }}
    >
    
    @if($error)
        <p class="form-error">{{ $error }}</p>
    @endif
    
    @if($hint)
        <p class="mt-1 text-xs text-gray-500">{{ $hint }}</p>
    @endif
</div>
