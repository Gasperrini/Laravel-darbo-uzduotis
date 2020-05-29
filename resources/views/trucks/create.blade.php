@extends('layouts.app')

@section('content')
<h1>Sukurkite naują sunkvežimį</h1>
<button class="button button-right"><a href="/trucks">Atgal</a></button>

<div class="form-group col-md-6">
{!! form($form) !!}
</div>
@endsection