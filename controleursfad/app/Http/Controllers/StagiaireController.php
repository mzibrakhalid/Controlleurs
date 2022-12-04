<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stagiaires.liste')
            ->with("stgrs", ["stg 11", "stg 2", "stg 3", "stg 4", "stg 5"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("stagiaires.ajouter");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1 recuppérer les données du formulaire depuis $request
        //2 Valider les données de la $request 
        //3 effectuer l ajout a la base de données
        //4 retourner le resultat 
        return "stagiaire ajouté avec succes" . $request->nom;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 1 Recoit l id d'un stagiaire 
     * 2 Effectue une requete vers la bdd pour extraire les donnes 
     * selon l id fournit
     * 3 retourn la vue qui affiche les details
     */
    public function show($id)
    {
        return view("stagiaires.details")->with("id", $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //1 Recuppérer les données du stagiaire depuis la base de données 
        // selon l id fournit 
        //2 passer l objet trouvé  comme parametre à la vue
        return view("stagiaires.modifier")->with("stg", $id);
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
        //1 Valider la $request
        //2 Effectuer une requete update en se basant l id fournit
        //3 retourner le resultat
        return "stagiaire modifié avec succes" . $request->nom;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Effecture une requete de suppression vers la bdd en se basant 
        //sur l id du stagiaire
        return "stagiaire supprimé avec succes";
    }
}
