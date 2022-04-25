@props([
    'route'="",
    ])


<li class=" uppercase w-72 ">
    <a href="{{$route}}" class=" block w-full text-right px-6 py-2 font-semibold text-principal font-pop duration-300 hover:text-dark hover:bg-principal hover:cursor-pointer">
        {{$slot}}
    </a>
</li>
