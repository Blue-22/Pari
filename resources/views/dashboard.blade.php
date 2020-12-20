<x-app-layout>

  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="row">
          <div class="col-sm-8 offset-sm-2">
            <h2>Ajouter une rencontre</h2>
            <div>
              <form method="post" action="{{ route('meeting.store') }}">
                @csrf
                <div class="form-group">
                  <label for="start_date">Date de début:</label>
                  <input type="date" class="form-control" name="start_date"/>
                </div>
                <div class="form-group">
                  <label for="end_date">Date de fin:</label>
                  <input type="date" class="form-control" name="end_date"/>
                </div>
                <div class="form-group">
                  <label for="cote">Cote:</label>
                  <input type="text" class="form-control" name="cote"/>
                </div>
                <div class="form-group">
                  <label for="result1">Résultat équipe 1:</label>
                  <input type="text" class="form-control" name="result1"/>
                </div>
                <div class="form-group">
                  <label for="result2">Résultat équipe 2:</label>
                  <input type="text" class="form-control" name="result2"/>
                </div>
                <div class="form-group">
                  <label for="team1">Equipe 1:</label>
                  <input type="text" class="form-control" name="team1"/>
                </div>
                <div class="form-group">
                  <label for="team2">Equipe 2:</label>
                  <input type="text" class="form-control" name="team2"/>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
