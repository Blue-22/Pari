<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body class="antialiased">

  @include('fragments/header')

  <div class="general-details container">
    <h2>{{ $meeting['team1'] }} - {{ $meeting['team2'] }}</h2>
    <h4><span class="badge badge-success">Date de la rencontre : {{ $meeting['meeting_date'] }}</span></h4>
  </div>

  <div class="container pari-array">
    <div class="teams row">
      <div class="col-6 team1">
        <div class="t-header">
          <img src="https://fr.global.nba.com/media/img/teams/00/logos/MEM_logo.png" alt="">
          <h4>{{ $meeting['team1'] }}</h4>
        </div>
        <div class="t-body">
          <h3>Côte : {{ $meeting['cote1'] }}</h3>
        </div>
      </div>
      <div class="col-6 team2">
        <div class="t-header">
          <img src="https://fr.global.nba.com/media/img/teams/00/logos/MIA_logo.png" alt="">
          <h4>{{ $meeting['team2'] }}</h4>
        </div>
        <div class="t-body">
          <h3>Côte : {{ $meeting['cote2'] }}</h3>
        </div>
      </div>
    </div>
    <div class="row t-footer">
    </div>
  </div>
  <div class="container">
    <form class="bet-form" method="post" action="/pari/store">
        {{ csrf_field() }}
                {{--donne la bonne rencontre TODO:donner la bonne valeur--}}
        <input type="hidden" name="meetingId" value="{{ $meeting['id'] }}">
        <input type="hidden" name="userId" value="{{ $user }}">
      <div class="form-row justify-content-around">
        <div class="form-group col-md-3">
          <label for="inputSum">Somme à parier</label>
          <input type="number" class="form-control" name="BetSum" id="inputSum" required>
        </div>
        <div class="form-group col-md-4">
          <label style="display:block;">Choix pari :</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="BetOn" value="{{ $meeting['team1'] }}" id="1" required>
            <label class="form-check-label" for="team1">{{ $meeting['team1'] }}</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="BetOn" value="{{ $meeting['team2'] }}" id="2" required>
            <label class="form-check-label" for="team2">{{ $meeting['team2'] }}</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="BetOn" value="none" id="3" required>
            <label class="form-check-label" for="team2">Match nul</label>
          </div>
        </div>
        <div class="form-group col-md-3 scoreBet">
          <label for="inputSum">Score :</label>
          <input type="number" class="form-control" name="result1" id="scoreTeam1" placeholder="{{ $meeting['team1'] }}" required>
          <span> - </span>
          <input type="number" class="form-control" name="result2" id="scoreTeam2" placeholder="{{ $meeting['team2'] }}" required>
        </div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">Accepter les conditions d'utilisations</label>
      </div>
      <button type="submit" class="btn btn-primary">Valider</button>
    </form>
  </div>

</body>
</html>
