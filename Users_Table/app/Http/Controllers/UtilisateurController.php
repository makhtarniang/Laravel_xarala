<?php
namespace App\Http\Controllers;
use App\Models\utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // $utilisateurs =_utilisateur::latests ->paginate(5);
        $utilisateurs =Utilisateur::all() ;
        return view('utilisateur',['utilisateurs'=>$utilisateurs,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $utilisateurs = Utilisateur::all() ;
      return view('utilisateur',['utilisateurs'=>$utilisateurs,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utilisateur = new Utilisateur() ;
        $utilisateur->NomComplet = $request->input('NomComplet') ;
        $utilisateur->Status = $request->input('Status') ;
        $utilisateur->Location = $request->input('Location') ;
        $utilisateur->Telephon = $request->input('Telephon') ;
        $utilisateur->save() ;
        return redirect('/') ;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateurs = Utilisateur::all() ;
        return view('utilisateur',['utilisateurs'=>$utilisateurs,'utilisateur'=>$utilisateur,'layout'=>'show']);

    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $utilisateur = Utilisateur::find($id);
      $utilisateurs = Utilisateur::all() ;
      return view('uti$utilisateur',['utilisateurs'=>$utilisateurs,'uti$utilisateur'=>$utilisateur,'layout'=>'edit']);

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
        $utilisateur = Utilisateur::find($id);
        $utilisateur->NomComplet = $request->input('NomComplet') ;
        $utilisateur->Status = $request->input('Status') ;
        $utilisateur->Location = $request->input('Location') ;
        $utilisateur->Telephon = $request->input('Telephon') ;
        $utilisateur->save() ;
        return redirect('/') ;
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $utilisateur = Utilisateur::find($id);
      $utilisateur->delete() ;
      return redirect('')->route('utilisateur.index') 
      ->with('succsse','utilisateur a ete supprimer')
      ;
    }

}
