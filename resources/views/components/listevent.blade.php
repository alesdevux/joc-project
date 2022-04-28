@props([
'name',
'reward',
])


<div class="flex flex-col gap-1 text-sm justify-center h-10 md:h-12 w-48 md:w-full">
  <p class="font-semibold text-white overflow-hidden text-ellipsis uppercase">
    {{$name}}
  </p>
  <div class="flex justify-between w-full h-5 md:h-none">
    <p>
      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">
        <path d="M22 18H17C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17V7C16 6.73478 16.1054 6.48043 16.2929 6.29289C16.4804 6.10536 16.7348 6 17 6H22C22.2652 6 22.5196 6.10536 22.7071 6.29289C22.8946 6.48043 23 6.73478 23 7V17C23 17.2652 22.8946 17.5196 22.7071 17.7071C22.5196 17.8946 22.2652 18 22 18ZM22 8H17V9H22V8ZM22 10H17V11H22V10ZM9 15V17H10V18H5V17H6V15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V7C1 6.73478 1.10536 6.48043 1.29289 6.29289C1.48043 6.10536 1.73478 6 2 6H13C13.2652 6 13.5196 6.10536 13.7071 6.29289C13.8946 6.48043 14 6.73478 14 7V14C14 14.2652 13.8946 14.5196 13.7071 14.7071C13.5196 14.8946 13.2652 15 13 15H9ZM12 8H3V13H12V8Z" fill="white" />
      </svg>
    </p>
    <div class="flex gap-2">
      <p class="font-semibold text-white">
        {{$reward}}€
      </p>
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
        <path d="M18 2C17.1 2 16 3 16 4H8C8 3 6.9 2 6 2H2V11C2 12 3 13 4 13H6.2C6.6 15 7.9 16.7 11 17V19.08C8 19.54 8 22 8 22H16C16 22 16 19.54 13 19.08V17C16.1 16.7 17.4 15 17.8 13H20C21 13 22 12 22 11V2H18ZM6 11H4V4H6V11ZM16 11.5C16 13.43 15.42 15 12 15C8.59 15 8 13.43 8 11.5V6H16V11.5ZM20 11H18V4H20V11Z" fill="white" />
      </svg>
    </div>
  </div>
</div>