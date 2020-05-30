@extends('layouts.app')

@section('content')
<h1>Sukurkite naują sunkvežimį</h1>
<br>
<button class="button button-right"><a href="/trucks">Atgal</a></button>
<br>
<br>

<div class="form-group col-md-6">
{!! form($form) !!}
</div>
@endsection