<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Gestion Boutique</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>

bodybody{
    background:#eef5ff;
    font-family:Arial, sans-serif;
}

.sidebar{
    min-height:100vh;
    background:#0d47a1;
}

.sidebar h3{
    color:white;
    font-weight:bold;
}

.sidebar a{
    color:white;
    display:block;
    padding:15px;
    text-decoration:none;
    border-radius:8px;
    margin:5px;
}

.sidebar a:hover{
    background:#1976d2;
}

.card{
    border:none;
    border-radius:15px;
}

.bg-primary{
    background:linear-gradient(
        135deg,
        #0d47a1,
        #1976d2
    ) !important;
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-2 sidebar">

<h3 class="text-center mt-3">
Boutique
</h3>

<a href="/clients">
<i class="fas fa-users"></i>
 Clients
</a>

<a href="/produits">
<i class="fas fa-box"></i>
 Produits
</a>

<a href="/commandes">
<i class="fas fa-cart-shopping"></i>
 Commandes
</a>

<a href="/factures">
<i class="fas fa-file-pdf"></i>
 Factures
</a>

</div>

<div class="col-md-10 p-4">

@yield('content')

</div>

</div>

</div>

</body>
</html>
