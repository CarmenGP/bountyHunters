<?php

namespace App\Http\Controllers;

use App\Models\Outlaw;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OutlawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $outlaws = Outlaw::get();
        //var_dump($outlaws);
        return view('home', compact('outlaws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createOutlaw');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $outlaw = request()->except('_token');

        Outlaw::create($outlaw);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $outlaw = Outlaw::find($id);

        return view('showOutlaw', compact('outlaw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $outlaw = Outlaw::find($id);

        return view ('editOutlaw', compact('outlaw'));
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
        //
        $outlaw = request()->except('_token', '_method');

        Outlaw::where('id', '=', $id)->update($outlaw);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Outlaw::destroy($id);

        return redirect()->route('home');
    }

    public function join($id){
        $outlaw = Outlaw::find($id);
        $user = User::find(Auth::id());

        $user->outlaw()->attach($outlaw);


        return redirect()->route('home');
    }

    public function leave($id){
        $outlaw = Outlaw::find($id);
        $user = User::find(Auth::id());

        $user->outlaw()->detach($outlaw);

        return redirect()->route('home');
    }

}
