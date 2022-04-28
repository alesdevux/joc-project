@props([
    'date',
    'time',
    ])


<div class=" flex">
<div class=" flex justify-center items-center md:w-10 md:h-12 w-8 h-10 bg-terciary font-pop text-center" >
<p class="font-semibold text-base w-5 h-6 ">
    {{$date}}
</p>
</div>

<div class= "flex justify-center items-center md:w-18 md:h-12 w-14 h-10 bg-secondary font-pop h2 text-center">
<p class="font-semibold text-base p-6">
    {{$time}}
</p>
</div>
</div>
