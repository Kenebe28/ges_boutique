<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>PELTAO VISION SHOP</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>

body{
    background:#eef3f9;
    font-family:Segoe UI,Tahoma,Geneva,Verdana,sans-serif;
}

.sidebar{

position:fixed;

left:0;

top:0;

width:260px;

height:100vh;

background:#0d47a1;

padding-top:20px;

box-shadow:0 0 20px rgba(0,0,0,.2);

}

.logo{

text-align:center;

color:white;

font-size:24px;

font-weight:bold;

margin-bottom:40px;

}

.logo i{

font-size:55px;

margin-bottom:10px;

display:block;

}

.sidebar a{

display:block;

padding:15px 25px;

color:white;

text-decoration:none;

font-size:17px;

transition:.3s;

}

.sidebar a:hover{

background:white;

color:#0d47a1;

padding-left:35px;

}

.sidebar i{

margin-right:12px;

}

.main{

margin-left:260px;

padding:30px;

}

.navbar{

background:white;

border-radius:15px;

box-shadow:0 5px 20px rgba(0,0,0,.1);

margin-bottom:30px;

}

.card{

border:none;

border-radius:18px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

transition:.4s;

}

.card:hover{

transform:translateY(-5px);

}

.icon{

font-size:45px;

color:white;

width:80px;

height:80px;

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

}

.blue{

background:#1565c0;

}

.green{

background:#2e7d32;

}

.orange{

background:#ef6c00;

}

.red{

background:#c62828;

}

table{

background:white;

border-radius:15px;

overflow:hidden;

}

.btn{

border-radius:10px;

}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">

<i class="bi bi-shop-window"></i>

PELTAO VISION SHOP

</div>

<a href="/dashboard">

<i class="bi bi-speedometer2"></i>

Dashboard

</a>

<a href="/clients">

<i class="bi bi-people-fill"></i>

Clients

</a>

<a href="/produits">

<i class="bi bi-box-seam-fill"></i>

Produits

</a>

<a href="/commandes">

<i class="bi bi-cart-check-fill"></i>

Commandes

</a>

<a href="/facture">

<i class="bi bi-receipt-cutoff"></i>

Factures

</a>

</div>

<div class="main">

<nav class="navbar p-3">

<div class="container-fluid">

<h4 class="text-primary fw-bold">

Bienvenue chez PELTAO VISION SHOP

</h4>

<span class="badge bg-primary fs-6">

<i class="bi bi-person-circle"></i>

Administrateur

</span>

</div>

</nav>

@yield('content')

</div>

</body>

</html>