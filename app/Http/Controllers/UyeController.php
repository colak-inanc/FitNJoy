<?php

namespace App\Http\Controllers;

use App\Models\Personel;
use App\Models\User;
use Illuminate\Http\Request;

class UyeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('adminPanel.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adminPanel.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Üye başarıyla oluşturuldu.');
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view("adminPanel.users.show", compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("adminPanel.users.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {


       $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Üye başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'Üye başarıyla silindi.');
    }
}
