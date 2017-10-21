@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Alocacaos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($alocacaos, ['route' => ['alocacaos.update', $alocacaos->id], 'method' => 'patch']) !!}

                        @include('alocacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection