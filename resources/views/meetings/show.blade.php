<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Rencontres</h1>
  <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date</th>
            <th scope="col">La cote</th>
            <th scope="col">Résultat équipe 1</th>
            <th scope="col">Résultat équipe 2</th>
            <th scope="col">Equipe 1</th>
            <th scope="col">Equipe 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach($meetings as $meeting)
        <tr>
        <th scope="row"></th>
            <td>{{$meeting['id']}}</td>
            <td>{{$meeting['start_date']}}</td>
            <td>{{$meeting['cote']}}</td>
            <td>{{$meeting['result1']}}</td>
            <td>{{$meeting['result2']}}</td>
            <td>{{$meeting['team1']}}</td>
            <td>{{$meeting['team2']}}</td>
            <td>
                <a href="{{ route('meeting.edit', $meeting['id']) }}" class="btn btn-primary">Modifier</a>
            </td>
             <td>
              <form action="{{ route('meeting.destroy', $meeting['id']) }}" method="get">
                <button>Supprimer</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
