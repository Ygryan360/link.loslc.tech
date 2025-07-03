# 🔗 Loslc Links

Un service de raccourcissement d'URL moderne et élégant construit avec Laravel 12 et Livewire. Créez, gérez et partagez vos liens raccourcis en toute simplicité.

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?style=flat-square&logo=laravel)
![Livewire](https://img.shields.io/badge/Livewire-3.x-blue?style=flat-square&logo=livewire)
![Flux](https://img.shields.io/badge/Flux-2.x-purple?style=flat-square)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-4.x-blue?style=flat-square&logo=tailwindcss)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)

## ✨ Fonctionnalités

- 🔐 **Authentification sécurisée** - Système complet d'inscription/connexion
- ⚡ **Interface temps réel** - Gestion des liens avec Livewire (sans rechargement de page)
- 🎨 **Design moderne** - Interface utilisateur élégante avec TailwindCSS et Flux
- 📊 **Tableau de bord** - Vue d'ensemble de vos liens
- 🔒 **Liens privés** - Chaque utilisateur gère ses propres liens
- ✅ **Validation avancée** - Vérification des URLs et unicité des endpoints
- 📱 **Responsive** - Compatible mobile et desktop

## 🛠️ Technologies utilisées

- **Backend**: Laravel 12
- **Frontend**: Livewire 3 + Flux UI + TailwindCSS 4
- **Base de données**: Compatible MySQL/PostgreSQL/SQLite
- **Build tools**: Vite 6
- **Authentification**: Laravel Breeze

## 📋 Prérequis

- PHP 8.2 ou supérieur
- Composer
- Node.js et npm/yarn/bun
- Base de données (MySQL, PostgreSQL ou SQLite)

## 🚀 Installation

### 1. Cloner le projet

```bash
git clone https://github.com/votre-username/loslc-links.git
cd loslc-links
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Installer les dépendances JavaScript

```bash
npm install
# ou
bun install
```

### 4. Configuration de l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Configurez votre base de données dans le fichier `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=loslc_links
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Migrations et base de données

```bash
php artisan migrate
```

### 6. Compiler les assets

```bash
# Développement
npm run dev

# Production
npm run build
```

### 7. Lancer le serveur de développement

```bash
php artisan serve
```

L'application sera accessible à l'adresse : `http://localhost:8000`

## 📖 Utilisation

### Créer un compte

1. Accédez à l'application
2. Cliquez sur "S'inscrire"
3. Remplissez le formulaire d'inscription
4. Confirmez votre email si nécessaire

### Créer un lien raccourci

1. Connectez-vous à votre compte
2. Accédez à la section "Links"
3. Remplissez le formulaire :
   - **Endpoint** : Le nom court de votre lien (ex: `mon-site`)
   - **Target** : L'URL complète de destination
4. Cliquez sur "Créer le lien"

### Utiliser un lien raccourci

Votre lien sera accessible à l'adresse :
```
https://votre-domaine.com/mon-site
```

## 🏗️ Structure du projet

```
app/
├── Http/Controllers/     # Contrôleurs Laravel
├── Livewire/            # Composants Livewire
│   └── Links.php        # Composant principal de gestion des liens
├── Models/              # Modèles Eloquent
│   ├── Link.php         # Modèle des liens
│   └── User.php         # Modèle des utilisateurs
└── Providers/           # Fournisseurs de services

database/
├── migrations/          # Migrations de base de données
└── seeders/            # Seeders

resources/
├── css/                # Styles CSS
├── js/                 # JavaScript
└── views/              # Vues Blade
    ├── livewire/       # Vues Livewire
    └── components/     # Composants réutilisables

routes/
├── web.php             # Routes web principales
└── auth.php            # Routes d'authentification
```

## 🧪 Tests

Lancer la suite de tests :

```bash
php artisan test
```

Lancer des tests spécifiques :

```bash
# Tests des fonctionnalités
php artisan test --testsuite=Feature

# Tests unitaires
php artisan test --testsuite=Unit
```

## 🔧 Configuration avancée

### Personnalisation du domaine

Pour utiliser un domaine personnalisé, configurez votre serveur web et mettez à jour la variable `APP_URL` dans votre fichier `.env`.

### Cache et performance

```bash
# Cache des routes
php artisan route:cache

# Cache des vues
php artisan view:cache

# Cache de configuration
php artisan config:cache
```

### Optimisation pour la production

```bash
# Optimiser l'autoloader
composer install --optimize-autoloader --no-dev

# Compiler les assets
npm run build

# Cache des éléments Laravel
php artisan optimize
```

## 🤝 Contribution

Les contributions sont les bienvenues ! Pour contribuer :

1. Forkez le projet
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature/AmazingFeature`)
3. Commitez vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Poussez vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une Pull Request

## 📝 Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## 🆘 Support

Si vous rencontrez des problèmes ou avez des questions :

- Ouvrez une [issue](https://github.com/votre-username/loslc-links/issues)
- Consultez la [documentation Laravel](https://laravel.com/docs)
- Consultez la [documentation Livewire](https://livewire.laravel.com/docs)

## 🙏 Remerciements

- [Laravel](https://laravel.com) pour le framework PHP exceptionnel
- [Livewire](https://livewire.laravel.com) pour la réactivité frontend
- [TailwindCSS](https://tailwindcss.com) pour le framework CSS
- [Flux](https://fluxui.dev) pour les composants UI

---

**Développé avec ❤️ par [Votre Nom]**
