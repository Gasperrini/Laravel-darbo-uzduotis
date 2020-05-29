@extends('layouts.app')

@section('content')
<h1>Sunkvežimiai</h1>
<button class="button button"><a href="/trucks/create">Pridėti sunkvežimį</a></button>

    @if(count($trucks)>0)
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Markė</th>
                    <th scope="col">Gamybos metai</th>
                    <th scope="col">Savininkas</th>
                    <th scope="col">Savininkų skaičius</th>
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
            {{ $trucks->links() }}
    @else
        <p>Sistemoje sunkvežimių nerasta!<p>
    @endif

@endsection