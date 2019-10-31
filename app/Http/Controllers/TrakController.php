<?php

namespace App\Http\Controllers;

use App\trak;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\formArticle;
use Illuminate\Support\Facades\DB;

class TrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $traks = Trak::all();
     if (count($traks) > 0) {
         return view('darbu', compact('traks'));
        } else {
          return view('welcome');
     }
    }

    // IDEA: Vartotojo darbų sarašas
    public function usertraks()
    {
     $traks = Trak::where('owner_id', auth()->id())->get();
     $turiutraks = $traks->count();
      // dd($turiutraks);
     if ($turiutraks > 0) {
         return view('usertraks', compact('traks'));
        } else {
          return redirect('/');
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sukurti');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(formArticle $request)
    {
      //Švarinam įvestis
      $validated = $request->validated();
      //Pasiimam nuotrauką
      $imageName = time().'.'.request()->image->getClientOriginalExtension();
      request()->image->move(public_path('images'), $imageName);
      //Pasiimam aprašymus
      $article = new Trak();
      $article->owner_id = auth()->id();
      $article->pavadinimas = request('pavadinimas');
      $article->tekstas =  request('tekstas');
      $article->nuotraukosPavadinimas = $imageName;
      $article->save();

      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trak  $trak
     * @return \Illuminate\Http\Response
     */
    public function show(trak $trak)
     {
    // if ($trak->owner_id !== auth()->id()) {
    //     abort(403);
    // }
        return view('show', compact('trak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trak  $trak
     * @return \Illuminate\Http\Response
     */
    public function edit(trak $trak)
    {
        $this->authorize('update', $trak);
        return view('darba_redaguoti', compact('trak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trak  $trak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $trak = Trak::findOrFail($id);
      $trak->pavadinimas = request('pavadinimas');
      $trak->tekstas = request('tekstas');
      $trak->save();
      return redirect('/');
    }
    public function updateimage(Request $request, $id)
    {
      $oldimage = request('oldimage');
      $image_path = "images/".$oldimage;

      if(\File::exists($image_path)){
        \File::delete($image_path);

          $trak = Trak::findOrFail($id);
          $imageName = time().'.'.request()->image->getClientOriginalExtension();
          request()->image->move(public_path('images'), $imageName);
          $trak->nuotraukosPavadinimas = $imageName;
          $trak->save();
          return redirect('/');
          }else{
            return redirect('/');
           }
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trak  $trak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $trak = Trak::findOrFail($id);
      $this->authorize('delete', $trak);
      $imageName = $trak['nuotraukosPavadinimas'];
      $image_path = "images/".$imageName;

      if(\File::exists($image_path)){

      \File::delete($image_path);

      Trak::find($id)->delete();
      return redirect('/');

    }else{
      Trak::find($id)->delete();
      dd('File does not exists.');

    }
  }
}
