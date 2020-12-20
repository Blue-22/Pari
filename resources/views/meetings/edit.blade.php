<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Mise à jour de la rencontre</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="/meetings/update/{{$meeting['id']}}">
            @csrf
            <div class="form-group">
                <label for="meeting_date">Date:</label>
                <input type="date" class="form-control" name="meeting_date" value={{ $meeting['meeting_date'] }} />
            </div>
            <div class="form-group">
                <label for="cote1">Cote équipe 1:</label>
                <input type="text" class="form-control" name="cote1" value={{ $meeting['cote1'] }} />
            </div>
            <div class="form-group">
                <label for="cote2">Cote équipe 2:</label>
                <input type="text" class="form-control" name="cote2" value={{ $meeting['cote2'] }} />
            </div>
            <div class="form-group">
                <label for="result1">Résultat équipe 1:</label>
                <input type="text" class="form-control" name="result1" value={{ $meeting['result1'] }} />
            </div>
            <div class="form-group">
                <label for="result2">Résultat équipe 2:</label>
                <input type="text" class="form-control" name="result2" value={{ $meeting['result2'] }} />
            </div>
            <div class="form-group">
                <label for="team1">Equipe 1:</label>
                <input type="text" class="form-control" name="team1" value={{ $meeting['team1'] }} />
            </div>
            <div class="form-group">
                <label for="team2">Equipe 2:</label>
                <input type="text" class="form-control" name="team2" value={{ $meeting['team2'] }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
