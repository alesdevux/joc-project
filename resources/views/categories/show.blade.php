@extends('layouts.app')

@section('content')
<x-user_stake></x-user_stake>
<x-banner :name="$category->name" :img="$category->image">

</x-banner>
<div class="bg-dark w-[244px] h-fit text-principal uppercase font-semibold">
</div>
<section class="flex flex-col gap-2 mt-10 items-center">
    <div class="flex">
        <x-infotime date='22' time='18:30'>

        </x-infotime>
        <x-listevent name='lolololol' reward='1.000.000'>

        </x-listevent>
        <x-button>
            inscribete
        </x-button>
    </div>
    <div class="flex">
        <x-infotime date='22' time='18:30'>

        </x-infotime>
        <x-listevent name='lolololol' reward='1.000.000'>

        </x-listevent>
        <x-button>
            inscribete
        </x-button>
    </div>
    <div class="flex">
        <x-infotime date='22' time='18:30'>

        </x-infotime>
        <x-listevent name='lolololol' reward='1.000.000'>

        </x-listevent>
        <x-button>
            inscribete
        </x-button>
    </div>
    <div class="flex">
        <x-infotime date='22' time='18:30'>

        </x-infotime>
        <x-listevent name='lolololol' reward='1.000.000'>

        </x-listevent>
        <x-button>
            inscribete
        </x-button>
    </div>

    <div class="flex">
        <x-infotime date='22' time='18:30'>

        </x-infotime>
        <x-listevent name='lolololol' reward='1.000.000'>

        </x-listevent>
        <x-button>
            inscribete
        </x-button>
    </div>
</section>
@endsection