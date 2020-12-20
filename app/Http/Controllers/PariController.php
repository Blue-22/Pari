<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pari;

class PariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pari = new Pari();

        if ($request->BetOn == 'team1'){

            $pari->team1 = 1;
            $pari->team2 = 0;
            $pari->none = 0;

        }
        else if ($request->BetOn == 'team2')   {

            $pari->team1 = 0;
            $pari->team2 = 1;
            $pari->none = 0;
        }
        else if ($request->BetOn == 'none')   {

            $pari->team1 = 0;
            $pari->team2 = 0;
            $pari->none = 1;
        }

        $pari->save();

        $request = request()->validate([
            'BetSum'=>'required',
            'BetOn'=>'required',
            'result1'=>'required',
            'result2'=>'required',
        ]);
        $pari = Pari::create($request);

        $pari->save();

        return redirect('/')->with('success', 'Bet saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() // $id
    {
        $paris = Pari::all();

        return view('/', compact('paris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pari = Meeting::find($id);
        return view('/pari', compact('pari'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'BetSum'=>'required',
            'BetOn'=>'required',
            'result1'=>'required',
            'result2'=>'required',
        ]);

        $pari = Pari::find($id);
        echo($pari);
        echo($id);
        $pari->BetSum =  $request->get('BetSum');
        $pari->BetOn = $request->get('BetOn');
        $pari->result1 = $request->get('result1');
        $pari->result2 = $request->get('result2');

        $pari->save();

        return redirect('/pari')->with('success', 'Pari updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pari = Pari::find($id);
        $pari->delete();

        return redirect('/pari')->with('success', 'Pari deleted!');
    }
}
