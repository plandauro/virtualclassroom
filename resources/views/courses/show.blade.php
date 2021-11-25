<x-app-layout>
    {{-- SECCION DEL BANNER --}}
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
            </figure>

            <div class="text-white ">
                <h1 class="text-4xl">{{$course->title}}</h1>
                <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{$course->level->name}}</p>
                <p class="mb-2"><i class="fas fa-tags"></i> Área: {{$course->area->name}}</p>
                <p class="mb-2"><i class="fas fa-layer-group"></i> Grado: {{$course->grade->name}}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Matriculados: {{$course->student_count}}</p>
                <p><i class="far fa-star"></i> Calificación: {{$course->rating}}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-3">
        <div class="col-span-2">
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Lo que Aprenderás</h1>
                    <ul class="grid grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i>{{$goal->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section>
                <h1 class="font-bold text-3xl mb-2">Temario</h1>
                @foreach ($course->unities as $unit)
                    
                    <article class="mb-4 shadow" 
                    @if ($loop->first)
                        x-data="{ open: true }"
                        @else
                        x-data="{ open: false }"                   
                    @endif>
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{$unit->name}}</h1>
                        </header>

                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach ($unit->lessons as $lesson)
                                    <li class="text-gray-700 text-base"><i class="fas fa-play-circle text-gray-600 mr-2"></i>{{$lesson->name}}</li>
                                @endforeach
                            </ul>

                        </div>

                    </article>
                    
                @endforeach
            </section>
        </div>

        <div>

        </div>
    </div>

</x-app-layout>