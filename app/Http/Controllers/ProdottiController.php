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

        foreach ($this->prodotti as $key => $prodotto){
            if($prodotto['tipo'] == 'lunga'){
                $pasteLunghe[$key] = $prodotto;
            } elseif($prodotto['tipo'] == 'corta'){
                $pasteCorte[$key] = $prodotto;
            } else {
                $pasteCortissime[$key] = $prodotto;
            }
        }
        // dd($pasteLunghe,$pasteCorte,$pasteCortissime);
        return view('prodotti', compact('pasteLunghe', 'pasteCorte', 'pasteCortissime'));
    }

    // con l'id
    public function dettaglioId($id){
        if(!array_key_exists($id,$this->prodotti)){
            abort(404);       
        }
            
        $prodotto = $this->prodotti[$id];

        return view('dettaglioprodotti', compact('prodotto'));
    
    }

    // con lo slug
    public function dettaglioSlug($slug){
        $trovato = false;
        foreach ($this->prodotti as $prodotto){
            if($prodotto['slug'] == $slug){
                $trovato = true;
            }
            
            if($trovato){
                return view('dettaglioprodotti', compact('prodotto'));
            }
    
        }
        
        return abort(404);
    }
}
