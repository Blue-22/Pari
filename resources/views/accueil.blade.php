<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Parions !</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body class="antialiased">
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
  @include('fragments/header')


    <div class="current-bet-container container">
        <h3>Vos Paris en cours :</h3>
        <div class="cards-list">

            @foreach($paris as $pari)


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pari sur {{$pari['BetOn']}}</h5>
                        <p class="card-text">Résultat attendu : {{$pari['result1']}} - {{$pari['result2']}}</p>
                        <p class="card-text">Équipe gagnante : {{$pari['BetOn']}}</p>
                        <a href="/pari/edit/{{$pari['id']}}/{{$pari['meetingId']}}" class="card-link">Détails</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


  <div class="bet-list container">
    <h3>Paris disponibles :</h3>
    <div class="cards-list">
      @foreach($meetings as $meeting)
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$meeting['team1']}} - {{$meeting['team2']}}</h5>
          <p class="card-text">Date de la rencontre : {{$meeting['meeting_date']}}</p>
          <a href="/pari/{{$meeting['id']}}" class="card-link">Détails</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</body>
</html>
