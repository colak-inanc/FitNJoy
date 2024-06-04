<?php

namespace App\Http\Controllers;

use App\Models\Besin;
use App\Models\Personel;
use App\Models\Recipe;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
       return view("userPanel.main");
   }

    public function getKlinikKadro(){
        $personels = Personel::all();
        return view("userPanel.klinikKadro", compact("personels"));
    }

    public function getRecipes(){
        $recipes = Recipe::all();
        return view('userPanel.recipes', compact('recipes'));
    }

    public function getBesins(){
       $besins= Besin::all();
       return view('userPanel.besins', compact('besins'));
    }

}
