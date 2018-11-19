@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transcation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transcation, ['route' => ['transcations.update', $transcation->id], 'method' => 'patch']) !!}

                        @include('transcations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection