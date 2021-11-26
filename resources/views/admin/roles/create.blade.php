@extends('adminlte::page')

@section('title', 'VirtualClassRoom')

@section('content_header')
    <h1>Crear nuevo ROL</h1>
@stop

@section('content')
   <div class="card">
        <div class="card-body">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @forelse ($collection as $item)
                    
                @empty
                    
                @endforelse
            </tbody>
        </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop