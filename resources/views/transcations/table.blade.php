<table class="table table-responsive" id="transcations-table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Amount</th>
            <th>User Name & Email</th>
        <th>Qrcode Owner Name</th>

        <th>Payment Method</th>
        <th>Message</th>

        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transcations as $transcation)
        <tr>
            <td>{!! $transcation->qrcode->product_name !!}</td>
            <td>${!! $transcation->amount !!}</td>
            <td>{!! $transcation->user->name !!}& {!! $transcation->user->email !!}</td>
            <td>{!! $transcation->qrcode_owner->name !!}</td>

            <td>{!! $transcation->payment_method !!}</td>
            <td>{!! $transcation->message !!}</td>

            <td>{!! $transcation->status !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('transcations.show', [$transcation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                     </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>