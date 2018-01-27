<div class="pull-left">
    @php $star = \App\Review::starsCount($user->id,$rate) @endphp
    <div class="pull-left" style="width:35px; line-height:1;">
        <div style="height:9px; margin:5px 0;">{{$rate}} <span
                    class="glyphicon glyphicon-star"></span></div>
    </div>
    <div class="pull-left" style="width:180px;">
        <div class="progress" style="height:9px; margin:8px 0;">
            <div class="progress-bar progress-bar-success" role="progressbar"
                 aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"
                 @if($star == 0)
                 style="width: 1%"
                 @else
                 style="width: {{\App\Review::starPercent($user->id,$rate)}}%"
                    @endif>
                <span class="sr-only">80% Complete (danger)</span>
            </div>
        </div>
    </div>
    <div class="pull-right"
         style="margin-left:10px;">{{\App\Review::starsCount("$user->id",$rate)}}</div>
</div>
