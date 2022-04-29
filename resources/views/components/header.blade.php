<header class="bg-dark flex h-[65px] w-full items-center justify-between pl-5 fixed top-0 z-50">
  <a class="bg-logo h-[25px] w-[50px] bg-cover" href="{{route('home')}}"></a>
  <section class="z-50 flex h-full gap-12 font:pop">
    <ul class="flex h-full gap-4 hover:text-white">
      <li class="relative flex items-center justify-center w-16 h-full group">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 4C13.0609 4 14.0783 4.42143 14.8284 5.17157C15.5786 5.92172 16 6.93913 16 8C16 9.06087 15.5786 10.0783 14.8284 10.8284C14.0783 11.5786 13.0609 12 12 12C10.9391 12 9.92172 11.5786 9.17157 10.8284C8.42143 10.0783 8 9.06087 8 8C8 6.93913 8.42143 5.92172 9.17157 5.17157C9.92172 4.42143 10.9391 4 12 4V4ZM12 6C11.4696 6 10.9609 6.21071 10.5858 6.58579C10.2107 6.96086 10 7.46957 10 8C10 8.53043 10.2107 9.03914 10.5858 9.41421C10.9609 9.78929 11.4696 10 12 10C12.5304 10 13.0391 9.78929 13.4142 9.41421C13.7893 9.03914 14 8.53043 14 8C14 7.46957 13.7893 6.96086 13.4142 6.58579C13.0391 6.21071 12.5304 6 12 6V6ZM12 13C14.67 13 20 14.33 20 17V20H4V17C4 14.33 9.33 13 12 13ZM12 14.9C9.03 14.9 5.9 16.36 5.9 17V18.1H18.1V17C18.1 16.36 14.97 14.9 12 14.9Z" fill="white" />
        </svg>
        <ul class="absolute right-0 z-50 hidden h-auto text-right uppercase top-16 w-fill bg-dark group-hover:block">
          @guest
            @if (Route::has('login'))
            <x-li_header :route="route('login')">
              {{__('Login')}}
            </x-li_header>
            @endif
            @if (Route::has('register'))
            <x-li_header :route="route('register')">
              {{__('register')}}
            </x-li_header>
            @endif
          @else
            <x-li_header :route="route('users.show', Auth::user()->id)">
              {{ Auth::user()->name }}
            </x-li_header>
            <li class="uppercase w-72">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                class="block w-full px-6 py-2 font-semibold text-right duration-300 text-principal font-pop hover:text-dark hover:bg-principal hover:cursor-pointer">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          @endguest
        </ul>
      </li>
      <li class="relative flex items-center justify-center w-16 h-full group">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 6H21V8H3V6ZM3 11H21V13H3V11ZM3 16H21V18H3V16Z" fill="white" />
        </svg>
        <ul class="absolute right-0 z-50 hidden h-auto text-right uppercase top-16 w-fill bg-dark group-hover:block">
          {{-- <x-li_header>torneos pasados</x-li_header> --}}
          <x-li_header :route="route('home')">categorias</x-li_header>
        </ul>
      </li>
    </ul>
  </section>
</header>