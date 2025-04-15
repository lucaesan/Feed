<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $userId = auth()->id(); // pega o ID do usuário autenticado
    $data = Feed::where('user_id', $userId)->orderBy('id')->get();
    
    return view('layouts.Feed.index', compact('data'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.Feed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Feed::create(['title'=>$request->title, 'description'=>$request->description, 'event_date'=>$request->event_date,'user_id' => auth()->id()]);

        return redirect()->route('Feed.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('layouts.Feed.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Feed::find($id);
        return view('layouts.Feed.edit')->with('item',$item);            
        
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

        Feed::find($id)->update(['title'=>$request->title, 'description'=>$request->description, 'event_date'=>$request->event_date]); 

        return redirect()->route('Feed.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Feed::find($id);
        Feed::find($id)->delete();

        return redirect()->route('Feed.index')->with('sucess', 'Item deletado com sucesso!');
    }
}
