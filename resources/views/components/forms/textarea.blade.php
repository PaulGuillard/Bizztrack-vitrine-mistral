@props(['name', 'label' => null, 'placeholder' => null, 'value' => null, 'required' => false, 'error' => null, 'hint' => null, 'rows' => 4])

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
    
    <textarea 
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-input resize-none']) }}
    >{{ old($name, $value) }}</textarea>
    
    @if($error)
        <p class="form-error">{{ $error }}</p>
    @endif
    
    @if($hint)
        <p class="mt-1 text-xs text-gray-500">{{ $hint }}</p>
    @endif
</div>
