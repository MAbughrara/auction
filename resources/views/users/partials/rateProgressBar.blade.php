<div class="pull-left">
    @php $star = \App\Review::starsCount($user->id,$rate) @endphp
    <div class="pull-left" style="width:35px; line-height:1;">
        <div style="height:9px; margin:5px 0;">{{$rate}} <span
                    class="glyphicon glyphicon-star"></span></div>
    </div>
    <div class="pull-left" style="width:180px;">
        <div class="progress" style="height:9px; margin:8px 0;">
            <div class="progress-bar
                @switch($rate)
            @case(5)
                    progress-bar-success
                    @break
            @case(4)
                    progress-bar-primary
                    @break
            @case(3)
                    progress-bar-info
                    @break
            @case(2)
                    progress-bar-warning
                    @break
            @case(1)
                    progress-bar-danger
                    @break
            @endswitch
                    " role="progressbar"
                 aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"
                 @if($star == 0)
                 style="width: 1%"
                 @else
                 style="width: {{\App\Review::starPercent($user->id,$rate)}}%"
                    @endif>
            </div>
        </div>
    </div>
    <div class="pull-right"
         style="margin-left:10px;">{{\App\Review::starsCount("$user->id",$rate)}}</div>
</div>
