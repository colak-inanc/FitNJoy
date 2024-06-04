<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use Illuminate\Http\Request;

class PersonelController extends Controller
{
    public function index()
    {
        $personels = Personel::all();
        return view('adminPanel.personel.index', compact('personels'));
    }

    public function create()
    {
        return view('adminPanel.personel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'unvan' => 'required',
            'telefonNo' => 'required'
        ]);

        Personel::create($request->all());

        return redirect()->route('personels.index')
            ->with('success', 'Personel başarıyla oluşturuldu.');
    }

    public function show(Personel $personel)
    {
        return view('adminPanel.personel.show', compact('personel'));
    }

    public function edit(Personel $personel)
    {
        return view('adminPanel.personel.edit', compact('personel'));
    }

    public function update(Request $request, Personel $personel)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'unvan' => 'required',
            'telefonNo' => 'required'
        ]);

        $personel->update($request->all());

        return redirect()->route('personels.index')
            ->with('success', 'Personel başarıyla güncellendi.');
    }

    public function destroy(Personel $personel)
    {
        $personel->delete();

        return redirect()->route('personels.index')
            ->with('success', 'Personel başarıyla silindi.');
    }
}
