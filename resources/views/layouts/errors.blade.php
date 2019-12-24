@if(count($errors))
<div class="alert alert-danger alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>

    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>
    <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>
@endif