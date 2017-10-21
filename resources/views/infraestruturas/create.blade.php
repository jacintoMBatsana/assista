@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Infraestrutura
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'infraestruturas.store']) !!}

                        @include('infraestruturas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
