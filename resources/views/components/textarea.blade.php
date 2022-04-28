@props([
  'name',
  'value'=>'',
  'type' => 'text',
])

<div class="relative pt-8 text-white bg-dark">
  <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="absolute bottom-0 z-10 w-full px-2 py-1 border-4 border-white peer h-9 bg-dark focus:border-secondary focus:outline-none" value="{{ $value }}" />
  <label for="{{ $name }}" class="absolute z-50 px-1 font-semibold uppercase left-2 bg-dark bottom-6 peer-focus:text-secondary">
    {{ $slot }}
  </label>
</div>