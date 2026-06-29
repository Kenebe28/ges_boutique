# 🛒 GES_BOUTIQUE

## Application Web de Gestion de Boutique

GES_BOUTIQUE est une application développée avec **Laravel 13** permettant d'assurer la gestion complète d'une boutique. Elle facilite l'administration des clients, des produits, des commandes ainsi que la génération automatique de factures au format PDF.

---

# Objectifs du projet

Ce projet a été réalisé dans le cadre d'un apprentissage du framework Laravel afin de mettre en pratique :

* l'architecture MVC ;
* la gestion des bases de données avec Eloquent ORM ;
* les relations entre modèles ;
* la création d'interfaces dynamiques avec Blade ;
* la génération de documents PDF.

---

# Fonctionnalités principales

### Gestion des clients

* Création d'un client
* Modification des informations
* Suppression
* Consultation de la liste des clients

### Gestion des produits

* Ajout de nouveaux produits
* Modification des informations
* Suppression d'un produit
* Affichage du catalogue

### Gestion des commandes

* Création d'une commande
* Association de plusieurs produits
* Calcul automatique du montant
* Modification et suppression

### Facturation

* Génération d'une facture en PDF
* Consultation des factures

### Tableau de bord

Le tableau de bord fournit une vue globale de l'activité de la boutique grâce à plusieurs indicateurs :

* nombre total de clients ;
* nombre de produits enregistrés ;
* nombre de commandes ;
* nombre de factures générées.

---

# Technologies utilisées

| Technologie | Version          |
| ----------- | ---------------- |
| PHP         | 8.3              |
| Laravel     | 13               |
| MySQL       | 8+               |
| Bootstrap   | 5                |
| Blade       | Laravel          |
| DomPDF      | Dernière version |

---

# Organisation du projet

```
ges_boutique/

├── app/
│   ├── Http/
│   ├── Models/
│   └── Providers/
│
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── vendor/
```

---

# Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/VOTRE_COMPTE/ges_boutique.git
```

### 2. Accéder au projet

```bash
cd ges_boutique
```

### 3. Installer les dépendances

```bash
composer install
```

### 4. Installer les dépendances JavaScript

```bash
npm install
npm run dev
```

### 5. Préparer le fichier d'environnement

```bash
cp .env.example .env
```

### 6. Générer la clé de l'application

```bash
php artisan key:generate
```

### 7. Configurer la base de données

Modifier les informations suivantes dans le fichier **.env** :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ges_boutique
DB_USERNAME=root
DB_PASSWORD=
```

### 8. Exécuter les migrations

```bash
php artisan migrate
```

### 9. Démarrer le serveur

```bash
php artisan serve
```

L'application sera accessible à l'adresse :

```
http://127.0.0.1:8000
```

---

# Aperçu des modules

| Module    | Description                     |
| --------- | ------------------------------- |
| Dashboard | Tableau de bord et statistiques |
| Clients   | Gestion des clients             |
| Produits  | Gestion des articles            |
| Commandes | Enregistrement des ventes       |
| Factures  | Génération des factures PDF     |

---

# Dépendances

* Laravel Framework
* Composer
* Barryvdh DomPDF
* MySQL

---

# Évolutions possibles

Le projet peut être enrichi avec plusieurs fonctionnalités :

* Authentification des utilisateurs
* Gestion des rôles (Administrateur, Caissier)
* Recherche multicritère
* Export Excel des données
* Gestion des fournisseurs
* Alertes de rupture de stock
* Tableau de bord graphique
* Historique des ventes

---

# Auteur

**Koumakoye Kenebe Germain**

Étudiant en Génie Informatique

---

# Licence

Projet académique réalisé dans le cadre de l'apprentissage du framework Laravel. Son utilisation est destinée à des fins pédagogiques et de démonstration.
