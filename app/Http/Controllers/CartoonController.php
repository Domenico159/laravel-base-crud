<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Item;

class CartoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Item::paginate(6);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //validazione


        //push db
        $new_cartoon = new Item();

        // Fisrt method

        // $new_cartoon->title = $data['title'];
        // $new_cartoon->slug = Str::slug($data['title'], '-');
        // $new_cartoon->description = $data['content'];
        // $new_cartoon->image = $data['image'];
        // $new_cartoon->series = $data['series'];
        // $new_cartoon->sale_date = $data['sale_date'];
        // $new_cartoon->type = $data['type'];
        // $new_cartoon->price = $data['price'];

        // Second method

        $data['slug'] = Str::slug($data['title'], '-');

        $new_cartoon->fill($data);

        $new_cartoon->save();

        return redirect()->route('comics.show', $new_cartoon->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $item = Item::find($id);

        if ($item) {
            return view('comics.show', compact('item'));
        }

        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = Item::find($id);

        if ($item) {
            return view('comics.edit', compact('item'));
        }

        abort(404);
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
        $data =  $request->all();

        $this_post = Item::find($id);

        $data['slug'] = Str::slug($data['title'], '-');

        $this_post->update($data);

        return redirect()->route('comics.show', $this_post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this_post = Item::find($id);

        $this_post->delete();

        return redirect()->route('comics.index')->with('deleted', $this_post->title);
    }
}
