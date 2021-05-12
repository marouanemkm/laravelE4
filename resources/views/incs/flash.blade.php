@if ($message = Session::get('success'))
    <div class="alert alert-info alert-block my-3">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
@endif