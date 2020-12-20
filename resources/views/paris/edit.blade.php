<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Mise à jour du pari</h1>

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
        <form method="post" action="/pari/update/{{$pari['id']}}">
            @csrf
            <div class="form-group">

                <label for="BetSum">Somme à parier :</label>
                <input type="text" class="form-control" name="BetSum" value={{ $pari['BetSum'] }} />
            </div>

            <div class="form-group">
                <label for="BetOn">Choix du vainqueur :</label>
                <input type="text" class="form-control" name="BetOn" value={{ $pari['BetOn'] }} />
            </div>

            <div class="form-group">
                <label for="cote">Cote:</label>
                <input type="text" class="form-control" name="cote" value={{ $meeting['cote'] }} />
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