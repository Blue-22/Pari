<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
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
            'meeting_date'=>'required',
            'cote1'=>'required',
            'cote2'=>'required',
            'result1'=>'required',
            'result2'=>'required',
            'team1'=>'required',
            'team2'=>'required',
        ]);
        $meeting = Meeting::create($request);

        $meeting->save();

        return redirect('/')->with('success', 'Meeting saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() // $id
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meeting = Meeting::find($id);
        return view('meetings.edit', compact('meeting'));
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
            'meeting_date'=>'required',
            'cote1'=>'required',
            'cote2'=>'required',
            'result1'=>'required',
            'result2'=>'required',
            'team1'=>'required',
            'team2'=>'required',
        ]);

        $meeting = Meeting::find($id);
        echo($meeting);
        echo($id);
        $meeting->meeting_date =  $request->get('meeting_date');
        $meeting->cote1 = $request->get('cote1');
        $meeting->cote2 = $request->get('cote2');
        $meeting->result1 = $request->get('result1');
        $meeting->result2 = $request->get('result2');
        $meeting->team1 = $request->get('team1');
        $meeting->team2 = $request->get('team2');
        $meeting->save();

        return redirect('/meetings')->with('success', 'Meeting updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting = Meeting::find($id);
        $meeting->delete();

        return redirect('/meetings')->with('success', 'Meeting deleted!');
    }
}
