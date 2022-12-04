<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    function liste()
    {
        return view('produits')
            ->with("produits", ["prod 11", "prod 2", "prod 3", "prod 4", "prod 5"]);
    }

    function DetailsProduit($id)
    {
        return view("DetailsProduit", ["Produit" => $id]);
    }
}
