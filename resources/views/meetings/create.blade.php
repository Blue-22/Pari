@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Ajouter une rencontre</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('meetings') }}"> <!-- meeting.store-->
          @csrf
          <div class="form-group">
              <label for="start_date">Date de début:</label>
              <input type="text" class="form-control" name="start_date"/>
          </div>
          <div class="form-group">
              <label for="end_date">Date de fin:</label>
              <input type="text" class="form-control" name="end_date"/>
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
          <button type="submit" class="btn btn-primary-outline">Ajouter</button>
      </form>
  </div>
</div>
</div>
@endsection