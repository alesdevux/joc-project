@props([
    'country'=>'country',
    'name'=>'nickname',
    ])

<div class="flex flex-row justify-between items-center w-[414px] h-8 bg-dark font-pop font-semibold text-white uppercase">
    
  <div class="ml-3">
      {{$name}}
  </div>
  <div class="ml-56 text-xs">
      {{$country}}
    </div>
  <div class="text-xs ml-3">4</div>
  <div class="mr-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none">
      <path d="M18 2C17.1 2 16 3 16 4H8C8 3 6.9 2 6 2H2V11C2 12 3 13 4 13H6.2C6.6 15 7.9 16.7 11 17V19.08C8 19.54 8 22 8 22H16C16 22 16 19.54 13 19.08V17C16.1 16.7 17.4 15 17.8 13H20C21 13 22 12 22 11V2H18ZM6 11H4V4H6V11ZM16 11.5C16 13.43 15.42 15 12 15C8.59 15 8 13.43 8 11.5V6H16V11.5ZM20 11H18V4H20V11Z" fill="white"/>
    </svg>
  </div>
</div>