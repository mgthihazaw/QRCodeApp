<!-- Id Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $qrcode->id !!}</p>--}}
{{--</div>--}}

<!-- User Id Field -->
<div class="col-md-6">
<div class="form-group">
{!! Form::label('product_name', 'Product Name:') !!}
<h4>{!! $qrcode->product_name !!}
    @if(isset($qrcode->company_name))
        <small>By {!! $qrcode->company_name !!}</small>
    @endif


</h4>
</div>
<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{!! $qrcode->amount !!}</p>
</div>
    <!-- Product Url Field -->
    <div class="form-group">
        {!! Form::label('product_url', 'Product Url:') !!}
        <p>{!! $qrcode->product_url !!}</p>
    </div>

@if($qrcode->user_id==Auth::user()->id || Auth::user()->role_id ==1)
<div class="form-group">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{!! $qrcode->user_id !!}</p>
</div>

<!-- Website Field -->
<div class="form-group">
    {!! Form::label('website', 'Website:') !!}
    <p>{!! $qrcode->website !!}</p>
</div>

<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{!! $qrcode->product_name !!}</p>
</div>

<!-- Product Url Field -->
<div class="form-group">
    {!! Form::label('product_url', 'Product Url:') !!}
    <p>{!! $qrcode->product_url !!}</p>
</div>

<!-- Company Name Field -->
<div class="form-group">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{!! $qrcode->company_name !!}</p>
</div>

<!-- Callback Url Field -->
<div class="form-group">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    <p>{!! $qrcode->callback_url !!}</p>
</div>



<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{!! $qrcode->amount !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    @if($qrcode->status==1)
        <p class=" text-green">Active</p>
    @else
        <p class="text-red">Inactive</i>
    @endif
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $qrcode->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $qrcode->updated_at !!}</p>
</div>
   @endif
    <a href="{!! route('qrcodes.index') !!}" class="btn btn-default">Back</a>

</div>
<div class="col-md-5 pull-right">
    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan Qrcode And Pay With Our Application:') !!}
        <p>
            <img src="{{asset($qrcode->qrcode_path)}}">
        </p>
    </div>
</div>

