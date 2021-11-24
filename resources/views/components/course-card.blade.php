@props(['course'])

<article class="bg-white shadow-lg rounded overflow-hidden">                    
    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">   <!-- ESTE METODO RECUPERA LA URL DONDE SE CUENTRA LA IMAGEN -->
    {{-- <img class="h-36 w-full object-cover" src="{{asset('img/home/geometry-g433965423_640.jpg')}}" alt=""> --}}
    <div class="px-6 py-4">
        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 35)}}</h1>
        {{-- <h1 class="text-xl text-gray-700 mb-2 leading-6">Cursito de Prueba dasdasd dasdasd</h1> --}}
        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>
        {{-- <p class="text-gray-500 text-sm mb-2">Prof: Pedrito Landauro</p> --}}
        <div class="flex">
            <ul class="flex text-sm">
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                    {{-- <i class="fas fa-star text-yellow-400"></i> --}}
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                    {{-- <i class="fas fa-star text-yellow-400"></i> --}}
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                    {{-- <i class="fas fa-star text-yellow-400"></i> --}}
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                    {{-- <i class="fas fa-star text-yellow-400"></i> --}}
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                    {{-- <i class="fas fa-star text-yellow-400"></i> --}}
                </li>
            </ul>

            <p class="text-sm text-gray-500 ml-auto">
                <i class="fas fa-users"></i>
                ({{$course->student_count}})
                {{-- (0) --}}
            </p>                            
        </div>
        <a href="{{route('courses.show', $course)}}" class="block text-center w-full mt-4 p-2 pl-5 pr-5 transition-colors duration-700 transform bg-indigo-500 hover:bg-blue-400 text-gray-100 text-lg rounded-lg focus:border-4 border-indigo-300">
            Más Información
        </a>
    </div>
</article>