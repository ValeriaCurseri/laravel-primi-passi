<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function prodotti(){

        $prodotti = config('prodotti');

        $pasteLunghe = [];
        $pasteCorte = [];
        $pasteCortissime = [];

        foreach ($prodotti as $prodotto){
            if($prodotto['tipo'] == 'lunga'){
                $pasteLunghe[] = $prodotto;
            } elseif($prodotto['tipo'] == 'corta'){
                $pasteCorte[] = $prodotto;
            } else {
                $pasteCortissime[] = $prodotto;
            }
        }
        
        return view('prodotti', compact('pasteLunghe', 'pasteCorte', 'pasteCortissime'));
    }

    public function contatti(){
        return view('contatti');
    }
}
