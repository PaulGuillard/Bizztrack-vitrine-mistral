@props(['name', 'label' => null, 'options', 'placeholder' => 'Sélectionnez une option', 'value' => null, 'required' => false, 'error' => null, 'hint' => null])

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
    
    <select 
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-input']) }}
    >
        <option value="" disabled {{ old($name, $value) === null ? 'selected' : '' }}>
            {{ $placeholder }}
        </option>
        
        @foreach($options as $optionValue => $optionLabel)
            <option 
                value="{{ $optionValue }}"
                {{ old($name, $value) == $optionValue ? 'selected' : '' }}
            >
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>
    
    @if($error)
        <p class="form-error">{{ $error }}</p>
    @endif
    
    @if($hint)
        <p class="mt-1 text-xs text-gray-500">{{ $hint }}</p>
    @endif
</div>
