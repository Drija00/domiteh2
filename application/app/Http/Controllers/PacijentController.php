<?php

namespace App\Http\Controllers;

use App\Models\Pacijent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacijentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pacijent::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime'=> 'required|string|max:50',
            'prezime'=> 'required|string|max:50',
            'datum_rodjenja'=> 'required|string',
            'br_racuna'=>'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $d = Pacijent::create([
            'ime'=> $request->ime,
            'prezime'=> $request->prezime,
            'datum_rodjenja'=> $request->datum_rodjenja,
            'br_racuna'=>$request->br_racuna,
        ]);
        $d->save();
        return response()->json(['Objekat je kreiran',$d]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pacijent::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacijent $pacijent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:50',
            'prezime' => 'required|string|max:50',
            'datum_rodjenja'=> 'required|string',
            'br_racuna'=>'required|max:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $x = Pacijent::find($id);
        if($x){
            $x->ime=$request->ime;
            $x->prezime=$request->prezime;
            $x->datum_rodjenja=$request->datum_rodjenja;
            $x->br_racuna=$request->br_racuna;


            $x->save();
            return response()->json( ["Uspesno izmenjeno!",$x]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Pacijent::find($id);

        if($p){
            $p->delete();
            return response()->json(["Objekat obrisan",$p]);
        }else{
            return response()->json(["Greska"]);
        }
    }
}
