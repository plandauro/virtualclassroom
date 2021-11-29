<x-app-layout>
    
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Edición del Curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="ladding-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="">Información del Curso</a>
                </li>
                <li class="ladding-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Lecciones del Curso</a>
                </li>
                <li class="ladding-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Metas del Curso</a>
                </li>
                <li class="ladding-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Estudiantes</a>
                </li>
            </ul>
        </aside>

        <div class="col-span-4 card">
            <div class="card-body text-gray-500">
                <h1 class="text-2xl font-bold">Información del Curso</h1>
                <hr class="mt-2 mb-6">

                {{-- ABRIMOS UN FORMLULARIO CON LARAVEL COLECTIVE --}}
                {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => true]) !!}
                    
                    @include('instructor.courses.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Actualizar información', ['class' => 'btn btn-primary']) !!}
                    </div>

                {!! Form::close() !!}

            </div>
        </div>

    </div>

    {{-- utilizando SLOT con nombre --}}
    <x-slot name="js">
        {{-- CDN PARA CK_EDITOR --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>      

        <script src="{{asset('js/instructor/courses/form.js')}}"></script>
    </x-slot>

</x-app-layout>