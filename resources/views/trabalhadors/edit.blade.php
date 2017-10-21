@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trabalhador
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($trabalhador, ['route' => ['trabalhadors.update', $trabalhador->id], 'method' => 'patch']) !!}

                        @include('trabalhadors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection