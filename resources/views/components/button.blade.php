@props([
  'action' =>'',
  'type',
])

<button onclick="{{ $action }}" type="{{ $type }}"
  class="mt-8 uppercase w-28 mx-auto text-center font-semibold text-principal font-pop duration-300 hover:text-dark hover:bg-principal hover:cursor-pointer">
  {{ $slot }}
</button>
