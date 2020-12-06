@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Rencontres</h1>
  <table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>La cote</th>
            <th>Résultat équipe 1</th>
            <th>Résultat équipe 2</th>
            <th>Equipe 1</th>
            <th>Equipe 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach($meetings as $meeting)
        <tr>
            <td>{{$meeting->id}}</td>
            <td>{{$meeting->start_date}} {{$meeting->end_date}}</td>
            <td>{{$meeting->cote}}</td>
            <td>{{$meeting->result1}}</td>
            <td>{{$meeting->result2}}</td>
            <td>{{$meeting->team1}}</td>
            <td>{{$meeting->team2}}</td>
            <td>
                <a href="{{ route('meetings.edit',$meeting->id) }}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
                <form action="{{ route('meetings.destroy', $meeting->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>
<div>
    <a style="margin: 19px;" href="{{ route('meeting') }}" class="btn btn-primary">Nouvelle rencontre</a>
</div>