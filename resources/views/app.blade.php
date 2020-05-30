@extends('layouts.app')

@section('content')
        <h1>Sveiki atvykę</h1>
        <h3>Laravel darbo užduotis</h3>
        <p>Užduotis. Sukurti projektą, kuriame būtų galima sukurti, peržiūrėti, filtruoti, rikiuoti sunkvežimius, pildomi laukeliai pateikiami žemiau.</p>
        <p>Peržiūrint lentele rodomi visi sukurti sunkvežimiai su visais jų duomenimis. Juos galima filtruoti bei rikiuoti pagal markę (abėcėlės tvarka), gamybos metus, savininko vardą pavardę. savininkų skaičių.</p>
        <p><strong>Techniniai reikalavimai.</strong>
                <ul>
                <li>Projektas kuriamas su Laravel</li>
                <li>Sunkvežimio sukūrimui turi būti naudojamas “Laravel form builder” https://github.com/kristijanhusak/laravel-form-builder</li>
                <li>Sukurtas projektas turi būti patalpintas Github/Bitbucket repositorijoje</li>
                </ul>
        </p> 
        <br>
        <button class="button button"><a href="/trucks">Tęsti</a></button>
@endsection