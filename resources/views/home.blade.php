@extends('adminlte::page')

@section('title', 'Palacios')



@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="card">
       <div class="card-header">
           <h1 class="card-title">Hola Mundo</h1>
       </div>

         <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quidem autem culpa modi, nobis ipsa a excepturi veniam fugiat, repudiandae velit tenetur, esse quasi sint omnis repellat rem! Dolor, impedit.</p>
         </div>
    </div>
    <div class="card">
       <div class="card-header">
           <h1 class="card-title">Hola Mundo</h1>
       </div>

         <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quidem autem culpa modi, nobis ipsa a excepturi veniam fugiat, repudiandae velit tenetur, esse quasi sint omnis repellat rem! Dolor, impedit.</p>
         </div>
    </div>
    <div class="card">
       <div class="card-header">
           <h1 class="card-title">Hola Mundo</h1>
       </div>

         <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quidem autem culpa modi, nobis ipsa a excepturi veniam fugiat, repudiandae velit tenetur, esse quasi sint omnis repellat rem! Dolor, impedit.</p>
         </div>
    </div>
    <div class="card">
       <div class="card-header">
           <h1 class="card-title">Hola Mundo</h1>
       </div>

         <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quidem autem culpa modi, nobis ipsa a excepturi veniam fugiat, repudiandae velit tenetur, esse quasi sint omnis repellat rem! Dolor, impedit.</p>
         </div>
    </div>
    <div class="card">
       <div class="card-header">
           <h1 class="card-title">Hola Mundo</h1>
       </div>

         <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quidem autem culpa modi, nobis ipsa a excepturi veniam fugiat, repudiandae velit tenetur, esse quasi sint omnis repellat rem! Dolor, impedit.</p>
         </div>
    </div>
    <div class="card">
       <div class="card-header">
           <h1 class="card-title">Gráfico de área</h1>
       </div>

         <div class="card-body">
         <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 334px;" width="334" height="250" class="chartjs-render-monitor"></canvas>   
         </div>
    </div>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
      Swal.fire(
     'Good job!',
     'You clicked the button!',
     'success'
     )
    </script>
@stop
