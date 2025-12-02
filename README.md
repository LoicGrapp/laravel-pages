# 🚀 Laravel

## 📝 Description du Projet

Ce projet est une application web de démonstration développée avec le framework **Laravel**, version [VERSION DE LARAVEL UTILISÉE, ex: 11.x].

Il est conçu pour illustrer les étapes fondamentales de la configuration et du déploiement d'un projet Laravel :
* **Clonage** et **initialisation** du dépôt.
* **Gestion des dépendances** PHP via Composer.
* **Configuration** des variables d'environnement (`.env`) et génération de la clé de sécurité.
* Définition de **routes de base** (`/` et `/a-propos`) et affichage de vues.

L'objectif de ce document est de fournir une feuille de route claire pour cloner, installer et lancer l'application.

---

## 🛠️ Prérequis

Assurez-vous que les outils suivants sont installés sur votre système avant de commencer :

* **PHP** : Version 8.2 ou supérieure (vérifiez les exigences de votre version de Laravel).
* **Composer** : Le gestionnaire de dépendances pour PHP.
* **Laravel** : Une connaissance de base est utile.
* **Git** : Pour le clonage du dépôt.
* **Serveur Web Local** : Laragon, XAMPP, WAMP, ou Docker (avec Laravel Sail) est requis pour l'exécution.

---

## ☁️ Étapes de Clonage et d'Installation

Suivez ces étapes pour obtenir une copie du projet opérationnelle sur votre machine locale.

### 1. Cloner le Dépôt

Ouvrez votre terminal et clonez le projet à l'aide de Git :

```bash
git clone https://github.com/votre-username/nom-du-projet.git
```

### 2. Accéder au Répertoire et Installer les Dépendances

Déplacez-vous dans le dossier du projet et exécutez la commande d'installation des dépendances PHP :

```bash
cd nom-du-projet
composer install
```

### 3. Configuration de l'Environnement et Génération de la Clé

Le projet utilise un fichier d'environnement (`.env`) pour les configurations.

**Copier le fichier d'environnement :**

```bash
cp .env.example .env
```

**Générer la Clé de l'Application :** Cette clé est essentielle pour la sécurité.

```bash
php artisan key:generate
```

**Configuration de la Base de Données (Optionnel) :** Si votre application utilise une base de données, ouvrez le fichier `.env` et mettez à jour les variables suivantes (exemple pour MySQL) :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Lancement de l'Application

Lancez le serveur de développement local intégré à Laravel :

```bash
php artisan serve
```

Votre application sera accessible à l'URL indiquée dans le terminal (par défaut, `http://127.0.0.1:8000`).

---

## 🔗 URLs des Pages Créées

Vous pouvez accéder aux pages de démonstration du projet à l'aide des URLs suivantes après le lancement du serveur :

| Page | URL | Description |
|------|-----|-------------|
| Accueil | `http://127.0.0.1:8000/` | La page d'accueil principale de l'application. |
| À Propos | `http://127.0.0.1:8000/a-propos` | Une page statique servant d'exemple de routage personnalisé. |