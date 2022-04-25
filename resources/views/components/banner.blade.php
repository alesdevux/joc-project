@props([
  'name'=>'',
  'img'=>'',
  ])

<div class="relative h-40 mb-4 overflow-hidden bg-cover cursor-pointer sm:h-60 group">
  <div class="absolute z-50 text-white left-4 top-2">
    <h2 class="h2">{{$name}}</h2>
    <h4 class="uppercase">Arena rapida 10'</h4>
  </div>
  <div class="absolute z-50 flex items-end justify-between w-full px-4 bottom-3 group-hover:bottom-10 group-hover:items-center">
    <p class="font-semibold italic text-[16px] uppercase">Proximo torneo</p>
    <p class="text-2xl font-neue group-hover:pb-1">02:59:48</p>
  </div>
  <p class="absolute z-50 w-full px-4 text-center destacar -bottom-12 group-hover:bottom-2">Ultima oportunidad para apuntarte</p>
  <div class="absolute z-20 flex justify-between w-full h-16 px-6 py-2 scale-105 bg-secundary -bottom-4 -rotate-2 group-hover:bottom-4"></div>
  <div class="absolute z-30 w-full h-12 px-6 scale-105 bg-principal -bottom-14 rotate-1 group-hover:-bottom-4"></div>
  <div class="absolute top-0 z-10 w-full h-full bg-black/20 group-hover:bg-black/25"></div>
  <img src={{$img}} alt="" class="absolute z-0 w-full bg-cover bg-center ">
</div>