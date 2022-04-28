@props ([
    'route',
])

<a href="{{ $route }}" class="flex items-center uppercase px-4 text-center font-semibold text-principal border-4 border-transparent duration-300 hover:text-extra hover:bg-principal hover:text-dark hover:cursor-pointer hover:border-principal">
    {{ $slot }}
</a>