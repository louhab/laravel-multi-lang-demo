<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre ;
use App\Models\Types ;
use App\Models\User ;



class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambers = Chambre::paginate(5);
       
        return view('Chambres.index', [
            'chambers'=>$chambers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Types::all();
        return view('Chambres.create' ,
        [
            'types'=>$types
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
       $chamber= Chambre::create([
            'types_id' => $request->typeChambre,
            'description'=>$request->description,
            'etage' =>$request->etage[0],
            'prix' =>$request->prix,
        ]);
        if($chamber){
            return redirect()->back()->with([
                "success"=>'la chambre a été creé !'
            ]);
        }
        else {
            return redirect()->back()->with([
                "error"=>"la chambre n'a pas été créer "
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $chamber =  Chambre::find($id);
   
         $users = User::all();
       return view('Chambres.show' ,
       [
           'chamber'=>$chamber,
           'users'=>$users
       ]
   );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Chambre::find($id)->delete();
        return redirect()->back()->with([
            "success"=>'la chambre a été supprimé !'
        ]);
    }
}
