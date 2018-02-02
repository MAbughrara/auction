<div class="modal fade" id="addReview" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Review {{$user->name}}</h4>
            </div>
            <div class="modal-body">
                @guest
                    <h2>You must <a href="/login"> Sign-in</a> to review this user</h2>
                    @else
                        <form method="POST" @if($action !== null) @php $review =  $user->reviewed()->where('creator_id', auth()->id())->get()->first() @endphp
                        action="/reviews/{{$review->id}}" @else action="/reviews" @endif>
                            {{csrf_field()}}
                            @if($action !== null)
                                <input type="hidden" name="_method" value="PUT">
                            @endif
                            <input type="text" hidden="hidden" name="target_id" value="{{$user->id}}">
                            <input type="text" hidden="hidden" name="creator_id" value="{{auth()->id()}}">
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <input type="text" class="form-control" name="comment"
                                       placeholder="Your comment here.." @if($action !== null) value="{{$review->comment}}" @endif >
                            </div>
                            <div class="form-group">
                                <label for="rate">rate</label>
                                <select class="form-control" name="rate">
                                    <option value="5" @if($action !== null && $review->rate == 5) selected="selected" @endif>Excellent!</option>
                                    <option value="4" @if($action !== null && $review->rate == 4) selected="selected" @endif>Good</option>
                                    <option value="3" @if($action !== null && $review->rate == 3) selected="selected" @endif>Normal</option>
                                    <option value="2" @if($action !== null && $review->rate == 2) selected="selected" @endif>Bad</option>
                                    <option value="1" @if($action !== null && $review->rate == 1) selected="selected" @endif>Very Bad</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        @endguest
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{--<button type="submit" class="btn btn-primary">Save changes</button>--}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->