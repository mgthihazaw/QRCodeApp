@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">
            Qrcode
        </h1>
        @if($qrcode->user_id==Auth::user()->id || Auth::user()->role_id <3)
        <h1 class="pull-right">
        <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-primary'>
            Edit Qrcode</a>
        </h1>
        @endif
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('qrcodes.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
