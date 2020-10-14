<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottiController extends Controller
{
    
    protected $prodotti;

    public function __construct(){
        $this->prodotti = config('prodotti');
    }
    
    public function prodotti(){
        $pasteLunghe = [];
        $pasteCorte = [];
        $pasteCortissime = [];

        foreach ($this->prodotti as $prodotto){
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

    public function dettaglio($slug){
        foreach ($this->prodotti as $prodotto){
            $trovato = false;
            if($prodotto['slug'] == $slug){
                $trovato = true;
            }
            
            if($trovato){
                $result = view('dettaglioprodotti', compact('prodotto'));
            } else {
                $result = abort(404);
            }

            return $result;
        }
    }
}
