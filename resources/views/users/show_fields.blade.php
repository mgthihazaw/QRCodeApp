<!-- Id Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $user->id !!}</p>--}}
{{--</div>--}}

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>
<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role_id', 'User Level:') !!}
    <p>{!! $user->role->name !!}</p>
</div>


<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>




<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $user->created_at->format('D d, M, Y')!!}</p>
</div>

<!-- Updated At Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $user->updated_at !!}</p>--}}
{{--</div>--}}
@if($user->id==Auth::user()->id || Auth::user()->role_id <3)

    <div class="col-md-12">
        <h3 class="text-center">Transcations</h3>
        @include('transcations.table')
    </div>
    <div class="col-md-12">
        <h3 class="text-center">Qrcodes</h3>
        @include('qrcodes.table')
    </div>
@endif

