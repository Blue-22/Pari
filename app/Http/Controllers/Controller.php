<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Pari;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function accueil() // $id
    {
        $meetings = Meeting::all();
        $paris=[];

        $meetingsBets=[];

        if ($userId = auth()->check()){
            $userId = auth()->user()->id;
            $paris = Pari::where('userId', $userId)->get();
            foreach ($paris as $pari) {
                foreach ($meetings as $meeting) {
                    if ($meeting['id'] == $pari['meetingId']){
                        $meetingsBets[]=$meeting;
                    }
                }
        }
        }
                return view('accueil', compact('paris', 'meetings'));
        return view('accueil',compact('meetings'));
    }
}
