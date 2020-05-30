@extends('layouts.app')

@section('content')
<h1>Sunkvežimiai</h1>
<br>
<button class="button button-right"><a href="/">Atgal</a></button>
<br>
<br>
<form action="{{ route('trucks.index') }}">
    <div class="row">
        <div class="col-md-2">
            <select class="form-control" id="sel1" name="make_id">
              <option class="form-control form-control-sm"value="" selected disabled>Pasirinkite markę</option>
              <option class="form-control form-control-sm"value="1">Volvo</option>
              <option class="form-control form-control-sm"value="2">VAZ</option>
              <option class="form-control form-control-sm"value="3">Mercedes</option>
              <option class="form-control form-control-sm"value="4">GAZ</option>
            </select>
        </div> 
        <div class="col-md-2">
            <input class="form-control form-control-sm" placeholder="Gamybos metai" type="search" name="year">
        </div>
        <div class="col-md-3">
            <input class="form-control form-control-sm" placeholder="Savininko vardas ir pavardė" type="search" name="owner">
        </div>
        <div class="col-md-2">
            <input class="form-control form-control-sm" placeholder="Savininkų skaičius" type="search" name="owner_number">
        </div>
        <div class="col-md-2 col-3">
            <button type="submit" class="button button">Filtruoti</button>
        </div>
        <div class="col-md-1 col-1">
            <button class="button button"><a href="/trucks">Panaikinti</a></button>
        </div>
    </div>
</form>
<br>
<button class="button button"><a href="/trucks/create">Pridėti sunkvežimį</a></button>
<br>
<br>

    @if(count($trucks)>0)
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col"> @sortablelink('manufacturer.manufacturer','Markė')</th>
                    <th scope="col"> @sortablelink('year','Gamybos metai')</th>
                    <th scope="col"> @sortablelink('owner','Savininkas')</th>
                    <th scope="col"> @sortablelink('owner_number','Savininkų skaičius')</th>
                    <th scope="col">Komentarai</th>
                </tr>
                </thead>
                @foreach($trucks as $truck)
                <tbody>
                <tr>
                    <td>{{$truck->manufacturer->manufacturer}}</td>
                    <td>{{$truck->year}}</td>
                    <td>{{$truck->owner}}</td>
                    <td>{{$truck->owner_number}}</td>
                    <td>{{$truck->comments}}</td>
                </tr>
                </tbody>
                @endforeach
            </table>
            {!! $trucks->appends(\Request::except('page'))->render() !!}
    @else
        <p>Sistemoje sunkvežimių nerasta!<p>
    @endif

@endsection