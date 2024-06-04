<?php

namespace App\Http\Controllers;

use App\Models\Besin;
use Illuminate\Http\Request;

class BesinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $besins=Besin::all();
        return view("adminPanel.besin.index",compact('besins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminPanel.besin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "besin_adi"=>"required",
            "lif"=>"required",
            "protein"=>"required",
            "karbonhidrat"=>"required",
            "yag"=>"required",
            "kalori"=>"required",
        ]);

        Besin::create($request->all());

       return redirect()->route('besins.index')->with("success","Besin başarıyla oluşturuldu");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Besin $besin)
    {
        return view("adminPanel.besin.edit",compact('besin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Besin $besin)
    {
        $request->validate([
            "besin_adi"=>"required",
            "lif"=>"required",
            "protein"=>"required",
            "karbonhidrat"=>"required",
            "yag"=>"required",
            "kalori"=>"required",
        ]);

        $besin->update($request->all());
        return redirect()->route("besins.index")->with("success","Başarıyla güncellendi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Besin $besin)
    {
        $besin->delete();

        return redirect()->route('besins.index')->with("success","Başarıyla silindi.");
    }
}
