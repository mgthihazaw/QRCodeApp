<!-- Id Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $transcation->id !!}</p>--}}
{{--</div>--}}


<!-- Qrcode Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_id', 'Product Name:') !!}
    <p>
        <a href="{{ url('/qrcodes/'. $transcation->qrcode->id) }}" class="text-bold text-info">
            {!! $transcation->qrcode->product_name!!}
        </a></p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>${!! $transcation->amount !!}</p>
</div>

<!-- User Buyer Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Buyer Name & Email:') !!}
    <p><a href="{{url('/users/'.$transcation->user->id)}}" class="text-bold text-info" >
        {!! $transcation->user->name !!} & {!! $transcation->user->email !!}
        </a>
    </p>
</div>

<!-- Qrcode Owner Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_owner_id', 'Qrcode Owner Name:') !!}
    <p><a href="{{url('/users/'.$transcation->qrcode_owner->id)}}" class="text-bold text-info" >

            {!! $transcation->qrcode_owner->name !!}</a></p>
</div>



<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{!! $transcation->payment_method !!}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{!! $transcation->message !!}</p>
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $transcation->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transcation->created_at->format('D d, M, Y') !!}</p>
</div>

<!-- Updated At Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $transcation->updated_at !!}</p>--}}
{{--</div>--}}

