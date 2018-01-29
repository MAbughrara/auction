
<div class="modal fade" id="addReview" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Review {{$user->name}}</h4>
            </div>
            <div class="modal-body">
                @guest
                    <h2>You must <a href="/login"> Sign-in</a> to review this user</h2>
                    @else
                <form method="POST" action="/reviews">
                    {{csrf_field()}}
                    <input type="text" hidden="hidden" name="target_id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <input type="text" class="form-control" name="comment" placeholder="Your comment here..">
                    </div>
                    <div class="form-group">
                        <label for="rate">rate</label>
                        <select class="form-control" name="rate">
                            <option value="5">Excellent!</option>
                            <option value="4">Good</option>
                            <option value="3">Normal</option>
                            <option value="2">Bad</option>
                            <option value="1">Very Bad</option>
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