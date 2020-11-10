<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\CategAnnonce;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::orderBy('created_at', 'desc')->where('statut_ann', 1)->get()->load('user');
        $categ = CategAnnonce::get();

        return view("annonces.index", compact('annonces', 'categ'));
    }

    public function validatedAnnonces()
    {
        $annonces = Annonce::where('statut_ann', 0)->get()->load('user');

        return view('annonces.validations', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categ = CategAnnonce::get();

        return view("annonces.create", compact("categ"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request->all());
       $request->input('quantite');
        $annonce = Annonce::create([
<<<<<<< HEAD
            'user_id'=> Auth()->user()->id,
            'fichier_id'=> 1,
            'titre'=> $request->input('titre'),
            'description'=> $request->input('description'),
            'date_pub'=> $request->input('date_pub'),
            'cout'=> $request->input('cout'),
            'quantite'=>1,
            'disponibilite'=> $dispo,
            'statut_ann'=> 0,
=======
            'user_id'       => 1,
            'fichier_id'       => 1,
            'categ_annonce_id'       => $request->input('categ_annonce_id'),
            'titre'       => $request->input('titre'),
            'description'       => $request->input('description'),
            'date_pub'       => now(),
            'cout'       => $request->input('cout')??0,
            'quantite'       => $request->input('quantite')??0,
            'disponibilite'       => $request->input('disponibilite')??now(),
            'statut_ann'       => 0,
>>>>>>> 7564bc8ddc858102c717f7a98ca3006603e823e5
        ]);

        if ($annonce) {

            if($request['image'] != null){
                $file = $request->file('image');
                $image = $annonce->id.'.'.$file->getClientOriginalExtension();

                if (!file_exists(public_path('images/annonces'))) {
                    mkdir(public_path('images/annonces'));
                }
                $file->move(public_path('images/annonces'), $image);
                $annonce->image = "images/annonces/".$image;
                $annonce->save();
            }
            return \Redirect::back();
            return redirect()->route('annonces.show', $annonce->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = Annonce::find($id);
        $commentaires = Commentaire::where('annonce_id', $id)->get();

        return view("annonces.show", compact('annonce', 'commentaires'));
    }
    public function comment(Request $request)
    {
       dd($request) ;//
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
        $annonce = Annonce::find($id);

        $annonce->statut_ann = 1;
        $annonce->save();

        return redirect()->route('annonces.show', $annonce->id);
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
    }
}
