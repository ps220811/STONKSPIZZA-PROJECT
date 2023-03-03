<?php

namespace App\Http\Controllers;

use App\Models\Winkelmandje;
use Illuminate\Http\Request;

class WinkelmandjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $winkelmandjes = Winkelmandje::all();
        return view('Winkelmandje.index', ['winkelmandjes' => $winkelmandjes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'id' => 'required',
            'name' => 'required',
            'quantity' => 'quantity',
            'price' => 'required',
            'groote' => 'required',
        ]);
        $newWinkelmandje = new Winkelmandje([
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            'quantity' => $request->get('quantity'),
            'price' => $request->get('price'),
            'groote' => $request->get('groote'),
        ]);
        $newWinkelmandje->save();

        session()->flash('success', 'Pizza is toegevoegd aan uw winkelwagen!');
        return redirect()->route('Winkelmandje.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Winkelmandje  $winkelmandje
     * @return \Illuminate\Http\Response
     */
    public function show(Winkelmandje $winkelmandje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Winkelmandje  $winkelmandje
     * @return \Illuminate\Http\Response
     */
    public function edit(Winkelmandje $winkelmandje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Winkelmandje  $winkelmandje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winkelmandje $winkelmandje)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Winkelmandje  $winkelmandje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $winkelmandje = Winkelmandje::find($id);
            $winkelmandje->delete();

            return redirect()->route('Winkelmandje.index')
                ->with('success', 'Item deleted successfully');
    }
}
