@props([
    'date',
    'time',
    ])


<div class=" flex ">
<div class=" flex justify-center items-center w-10 h-10 bg-terciary font-pop text-center" >
<p class="font-semibold text-base w-5 h-6 ">
    {{$date}}
</p>
</div>

<div class= "flex justify-center items-center w-20 h-10 bg-secundary font-pop h2 text-center">
<p class="font-semibold text-base p-6">
    {{$time}}
</p>
</div>
</div>
