<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body ">
            </div>
            <div class="modal-footer">
                <form method="POST" action="/users/{{$user->id}}">
                    {{csrf_field()}}
                    {{method_field($method)}}
                    @if($action == 'suspend')
                        <input hidden="hidden" name="status" value="0">
                    @elseif($action == 'unsuspend')
                        <input hidden="hidden" name="status" value="1">
                    @endif
                    <button type="submit" class="btn btn-default btn-danger center-block">Submit</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->