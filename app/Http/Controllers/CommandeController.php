<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use App\Models\Client;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::with('client')->get();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('commandes.create', compact('clients'));
    }

    public function store(Request $request)
{
    $produit = Produit::findOrFail($request->produit_id);

    if ($produit->stock < $request->quantite) {
        return back()->with('error', 'Stock insuffisant');
    }

    $montant = $produit->prix_unitaire * $request->quantite;

    Commande::create([
        'client_id' => $request->client_id,
        'date_commande' => $request->date_commande,
        'montant_total' => $montant
    ]);

    $produit->stock = $produit->stock - $request->quantite;
    $produit->save();

    return redirect()->route('commandes.index');
}

    public function show(Commande $commande)
    {
        //
    }

    public function edit(Commande $commande)
    {
        //
    }

    public function update(Request $request, Commande $commande)
    {
        //
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();
        return redirect()->route('commandes.index');
    }
}
