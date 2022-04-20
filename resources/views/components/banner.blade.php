@props([
 'action' =>'',
 'type',
 'name' =>'',
])

<button onclick="{{ $action }}" type="{{ $type }}" name="{{ $name }}" class="w-[414px] h-40 bg-chess bg-cover relative mx-auto mt-9 group cursor-pointer overflow-hidden">
  <div class="z-50 absolute left-4 top-2 text-white">
    <h2 class="h2">{{ $name }}</h2>
    <h4 class="uppercase"></h4>
  </div>
  <div class="z-50 absolute bottom-3 group-hover:bottom-10 flex w-full justify-between px-4 items-end group-hover:items-center">
    <p class="font-semibold italic text-[16px] uppercase">Proximo torneo</p>
    <p class="text-2xl font-neue group-hover:pb-1">02:59:48</p>
  </div>
  <p class="destacar px-4 absolute -bottom-12 group-hover:bottom-2 z-50 text-center w-full">Ultima oportunidad para apuntarte</p>
  <div class="bg-secundary w-full absolute h-16 z-20 -bottom-4 scale-105 -rotate-2 group-hover:bottom-4 px-6 flex py-2 justify-between"></div>
  <div class="bg-principal w-full absolute h-12 z-30 -bottom-14 scale-105 rotate-1 group-hover:-bottom-4 px-6"></div>
  <div class="w-[414px] h-40 absolute top-0 bg-black/20 group-hover:bg-black/25 z-0"></div>
</button>