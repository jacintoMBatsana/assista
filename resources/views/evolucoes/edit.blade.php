@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Evolucoes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($evolucoes, ['route' => ['evolucoes.update', $evolucoes->id], 'method' => 'patch']) !!}

                        @include('evolucoes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection