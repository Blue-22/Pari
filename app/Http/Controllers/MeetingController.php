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
        return view('meetings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date'=>'required',
            'end_date'=>'required',
            'cote'=>'required',
            'result1'=>'required',
            'result2'=>'required',
            'team1'=>'required',
            'team2'=>'required',
        ]);

        $meeting = new Meeting([
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'cote' => $request->get('cote'),
            'result1' => $request->get('result1'),
            'result2' => $request->get('result2'),
            'team1' => $request->get('team1'),
            'team2' => $request->get('team2')
        ]);
        $meeting->save();

        return redirect('/meetings')->with('success', 'Meeting saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() // $id
    {
        $meetings = Meeting::all();

        return view('meetings.show', compact('meetings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting) // $id
    {
       // $meeting = Meeting::find($id);
        return view('meeting.edit', compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) // , Meeting $meeting
    {
        $request->validate([
            'start_date'=>'required',
            'end_date'=>'required',
            'cote'=>'required',
            'result1'=>'required',
            'result2'=>'required',
            'team1'=>'required',
            'team2'=>'required',
        ]);

       //  $meeting->update($request->all());

        $meeting = Meeting::find($id);
        $meeting->start_date =  $request->get('start_date');
        $meeting->end_date = $request->get('end_date');
        $meeting->cote = $request->get('cote');
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
