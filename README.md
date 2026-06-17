# CV Benoît Rataux

Un projet élégant et léger pour générer un CV web moderne à partir d’un fichier YAML, avec **Twig** pour les templates
et un style facilement personnalisable.

## ✨ Aperçu

- Données centralisées dans `data/cv.yaml`
- Rendu HTML via templates Twig (`templates/`)
- Styling simple et clair dans `public/style.css`
- Structure modulaire des sections (expériences, formation, bénévolat, etc.)

## 🧱 Stack technique

- **PHP 8+**
- **Twig**
- **Symfony YAML**

## 🚀 Lancer le projet en local

### 1) Installer les dépendances

```bash
composer install
```

### 2) Lancer un serveur PHP local

```bash
php -S localhost:8000 -t public
```

Le point d’entrée du projet est `public/index.php`.

### 3) Ouvrir le CV

Ouvrez `http://localhost:8000` dans votre navigateur.

## 🛠️ Personnalisation

### Modifier le contenu

Éditez `data/cv.yaml` pour mettre à jour :

- identité et contact
- compétences
- expériences
- bénévolat
- formation
- langues, intérêts et aptitudes

### Modifier l’apparence

- `public/style.css` pour les styles globaux
- `templates/` pour l’ordre, la structure et le rendu des sections

## 📁 Structure du projet

```text
.
├── data/                # Données du CV (YAML)
├── public/              # Assets et styles
├── schema/              # Schéma de validation YAML
├── templates/           # Templates Twig
├── composer.json
└── DEPLOYMENT.md
```

## ✅ Bonnes pratiques

- Garder les données métier dans `data/cv.yaml`
- Limiter la logique dans les templates
- Favoriser des sections Twig réutilisables
- Valider la cohérence des données avec `schema/cv.schema.json`

## 📄 Licence

Projet personnel — usage et adaptation libres pour inspiration.