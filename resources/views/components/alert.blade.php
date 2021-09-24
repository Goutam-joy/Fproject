<div>
    @if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">{{session()->get('erro')}}</div>
    @endif<!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>