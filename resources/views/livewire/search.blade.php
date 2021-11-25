<form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
    <input wire:model="search" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
        type="search" name="search" placeholder="Search">

    <button type="submit"
        class="p-1 pl-5 pr-5 bg-transparent border-2 border-red-500 text-red-500 text-lg rounded-lg hover:bg-red-500 hover:text-gray-100 focus:border-4 focus:border-red-300 absolute right-0 top-0 mt-2">
        Buscar
    </button>
   
    @if ($search)
        <ul class="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
            {{-- UTILIZAREMOS FORELSE PARA CONDICIONAR LA BUSQUEDA --}}
            @forelse ($this->results as $result)
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    <a href="{{route('courses.show', $result)}}">{{$result->title}}</a>
                </li>
            @empty
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    No existen coincidencias =(.!
                </li>
            @endforelse
        </ul>
    @endif
    
</form>
