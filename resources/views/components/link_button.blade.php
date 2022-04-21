@props ([
    'route',
])

<a href="{{ $route }}" class="mt-8 uppercase w-28 mx-auto text-center font-semibold text-principal font-pop duration-300 hover:text-extra hover:bg-principal hover:cursor-pointer">
    {{ $slot }}
</a>