@if (session('eflash'))
<div class="alert alert-warning alert-dismissible text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>

    <strong>Peringatan!</strong> {{ session('eflash') }}

</div>
@endif