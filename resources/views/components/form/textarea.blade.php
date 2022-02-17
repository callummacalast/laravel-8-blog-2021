@props(['name'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <textarea type="text" class="border border-gray-400 p-2 w-full rounded shadow-xl" name="{{$name}}" id="{{$name}}" required>{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</div>