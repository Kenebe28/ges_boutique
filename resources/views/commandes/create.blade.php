<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle Commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Nouvelle Commande</h2>

<form action="{{ route('commandes.store') }}" method="POST">
    @csrf

    <label>Client</label>

    <select name="client_id" class="form-control mb-3">
        @foreach($clients as $client)
            <option value="{{ $client->id }}">
                {{ $client->nom }} {{ $client->prenom }}
            </option>
        @endforeach
    </select>

    <label>Date</label>
    <input type="date" name="date_commande" class="form-control mb-3">

    <label>Montant</label>
    <label>Prix unitaire</label>
<input type="number" id="prix" class="form-control mb-3">

<label>Quantité</label>
<input type="number" id="quantite" class="form-control mb-3">

<label>Montant Total</label>
<input type="number" id="montant" name="montant_total" class="form-control mb-3" readonly>

    <button class="btn btn-success">
        Enregistrer
    </button>
</form>

</body>
<script>

document.getElementById('prix').addEventListener('input', calculer);
document.getElementById('quantite').addEventListener('input', calculer);

function calculer()
{
    let prix = document.getElementById('prix').value;
    let quantite = document.getElementById('quantite').value;

    document.getElementById('montant').value = prix * quantite;
}

</script>
</html>
