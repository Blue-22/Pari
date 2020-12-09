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

  <div class="current-bet-container container">
    <h3>Vos Paris en cours :</h3>
    <div class="cards-list">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">> Détails <</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">> Détails <</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">> Détails <</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">> Détails <</a>
        </div>
      </div>
    </div>
  </div>


  <div class="bet-list container">
    <h3>Paris disponibles :</h3>
    <div class="cards-list">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">Détails</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">Détails</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">Détails</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Nom Rencontre</h5>
          <p class="card-text">Description de la rencontre.</p>
          <a href="#" class="card-link">Détails</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
