@props([
  'name'=>'',
  'img'=>'',
  'category'=>'',
  'time'=>'',
  ])

<div class="relative h-40 mb-4 overflow-hidden duration-300 bg-cover cursor-pointer sm:h-60 group">
  <div class="absolute z-30 text-white left-4 top-2">
    <h2 class="h2">{{$name}}</h2>
    <h4 class="uppercase">{{$category}}</h4>
  </div>
  <div class="absolute z-30 flex items-end justify-between w-full px-4 duration-300 bottom-3 group-hover:bottom-10 group-hover:items-center">
    <p class="font-semibold italic text-[16px] uppercase">Proximo torneo</p>
    <p class="text-2xl font-neue group-hover:pb-1">{{$time}}</p>
  </div>
  <p class="absolute z-30 w-full px-4 text-center duration-300 destacar -bottom-12 group-hover:bottom-2">Ultima oportunidad para apuntarte</p>
  <div class="absolute z-20 flex justify-between w-full h-16 px-6 py-2 scale-125 bg-secondary -bottom-4 -rotate-[1deg] group-hover:bottom-4 md:-rotate-[0.75deg] duration-300"></div>
  <div class="absolute z-30 w-full h-12 px-6 scale-105 bg-principal -bottom-14 rotate-[0.5deg] group-hover:-bottom-4 md:-bottom-16 duration-300"></div>
  <div class="absolute top-0 z-10 w-full h-full duration-300 bg-black/20 group-hover:bg-black/25"></div>
  <img src={{$img}} alt="" class="absolute z-0 w-full">
</div>