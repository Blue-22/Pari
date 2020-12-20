<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
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
        $request = request()->validate([
            'BetSum'=>'required',
            'BetOn'=>'required',
            'result1'=>'required',
            'result2'=>'required',
            'userId'=>'required',
            'meetingId'=>'required',
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
    public function show($id) // $id
    {
        $user = auth()->user()->id;

        $meeting = Meeting::find($id);
        return view('paris.pari', compact('meeting', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $meetingId
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $meetingId)
    {
        $meeting = Meeting::find($meetingId);
        $pari = Pari::find($id);
        $user = auth()->user()->id;

        return view('paris.edit', compact('meeting', 'pari', 'user'));
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
        $request = request()->validate([
            'BetSum'=>'required',
            'BetOn'=>'required',
            'result1'=>'required',
            'result2'=>'required',
            'userId'=>'required',
            'meetingId'=>'required',
        ]);

        $pari = Pari::find($id);
        $pari->BetSum = $request->get('BetSum');
        $pari->BetOn = $request->get('BetOn');
        $pari->result1 = $request->get('result1');
        $pari->result2 = $request->get('result2');
        $pari->userId = $request->get('userId');
        $pari->meetingId = $request->get('meetingId');

        $pari->save();

        return redirect('/')->with('success', 'Pari updated!');
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

        return redirect('/')->with('success', 'Pari deleted!');
    }
}
