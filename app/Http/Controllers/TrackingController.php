<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Http\Requests\TrackingRequest;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Tracking::select()
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackingRequest $request)
    {

        Tracking::create($request->all());

        return redirect()->route('tracking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $technic
     * @return \Illuminate\Http\Response
     */
    public function show(Tracking $technic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $technic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Tracking::find($id);

        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $technic
     * @return \Illuminate\Http\Response
     */
    public function update(TrackingRequest $request, $id)
    {
        $item = Tracking::find($id);
        $item->update($request->all());

        return redirect()->route('tracking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $technic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $technic)
    {
        $technic->delete();

        return redirect()->route('tracking.index');
    }
}
