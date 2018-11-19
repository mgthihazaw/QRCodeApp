<table class="table table-responsive" id="qrcodes-table">
    <thead>
        <tr>
            <th>Product Name</th>
        <th>Website</th>

        <th>Product Url</th>
        <th>Company Name</th>
        <th>Callback Url</th>
        <th>Qrcode for Scanning</th>
        <th>Amount</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($qrcodes as $qrcode)
        <tr>
            <td>
                <a href="{!! route('qrcodes.show', [$qrcode->id]) !!}" class="text-info text-bold">
                {!! $qrcode->product_name !!}
                </a>
            </td>
            <td>{!! $qrcode->website !!}</td>

            <td>{!! $qrcode->product_url !!}</td>
            <td>{!! $qrcode->company_name !!}</td>
            <td>{!! $qrcode->callback_url !!}</td>
            <td><img src="{{asset($qrcode->qrcode_path)}}" alt="Qrcode.img" height="30">  </td>
            <td>{!! $qrcode->amount !!}</td>
            <td>
                @if($qrcode->status==1)
                <i class="fa fa-check-square text-green"></i>
                    @else
                    <i class="fa fa-times text-red"></i>
                @endif
            </td>
            <td>
                {!! Form::open(['route' => ['qrcodes.destroy', $qrcode->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('qrcodes.show', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs',
                    'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>