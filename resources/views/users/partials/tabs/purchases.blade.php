
<div role="tabpanel" class="tab-pane" id="purchase">

    <div class="panel panel-default">
        <div class="panel-heading">All Purchases</div>
        <div class="panel-body">
            <table class="table table-hover">
                <tr class="active">
                    <th width="10%">#</th>
                    <th>Status</th>
                    <th width="20%">End Time</th>
                    <th width="20%">Start Bid</th>
                    <th width="20%">Your Bid</th>
                </tr>
                @foreach($purchases as $purchase)

                    <tr class="active">

                        <td width="10%">{{$purchase->id}}</td>
                        <td> {{$purchase->status}}</td>
                        <td> {{$purchase->end_date}}</td>
                        <td> {{$purchase->first_bid}}</td>
                        <td>{{\App\Bid::getLastBid($purchase)}}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
