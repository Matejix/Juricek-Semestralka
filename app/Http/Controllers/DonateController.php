<?php

namespace App\Http\Controllers;

use App\Models\donate;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator as ValidationValidator;

class DonateController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donates = Donate::with('user')->get();
        return view('inc.header', compact('donates'));
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
            'amount' => ['required', 'integer'],
        ]);
       
        $donate = Donate::create([
            'amount' => $request->amount,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back();
    }
}
