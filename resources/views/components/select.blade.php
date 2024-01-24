@props(['id', 'name', 'value', 'options', 'class' => ''])

<select id="{{ $id }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'form-select ' . $class]) }}>
    {{ $slot }}

    @foreach ($options as $optionValue => $optionLabel)
        <option value="{{ $optionValue }}" {{ $optionValue == $value ? 'selected' : '' }}>
            {{ $optionLabel }}
        </option>
    @endforeach
</select>