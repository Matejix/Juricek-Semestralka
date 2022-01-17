<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:subscribers,email'],
        ]);

        $subscribe = Subscriber::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $subscriber = Subscriber::where('id',$id)->first();
        $subscriber->delete();
        return redirect('/admin#subscribers');
    }
}
