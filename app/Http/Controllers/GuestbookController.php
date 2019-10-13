<?php

namespace App\Http\Controllers;

use App\Guestbook;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GuestbookController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = $this->getEntries();
        return view('nl.gastenboek', compact('entries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'message' => 'required'
        ]);
        $show = Guestbook::create($validatedData);

        return redirect('/gastenboek')->with('success', 'Uw vermelding is succesvol toegevoegd!');//->with('entries', $this->getEntries());
    }

    /**
     * Find all current entries sorted on the date
     *
     * @return \app\Guestbook
     */
    public function getEntries()
    {
        return Guestbook::select('name', 'message', 'created_at')->orderBy('created_at')->get();
    }
}
