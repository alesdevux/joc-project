@props([
    'date',
    'time',
    ])


<div class="flex">
    <div class="flex justify-center items-center md:h-12 h-10 bg-terciary px-3" >
        <p class="font-semibold text-base">
            {{$date}}
        </p>
    </div>

    <div class= "flex justify-center items-center md:w-18 md:h-12 w-14 h-10 bg-secondary font-pop h2 text-center">
        <p class="font-semibold text-base">
            {{$time}}
        </p>
    </div>
</div>
