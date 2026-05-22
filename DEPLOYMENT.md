# 🚀 Déploiement CI/CD sur O2switch

## Configuration requise

### 1. Ajouter les secrets GitHub

Allez dans **Settings > Secrets and variables > Actions** et créez les secrets suivants :

| Secret | Valeur | Description |
|--------|--------|-------------|
| `O2SWITCH_HOST` | `ftp.votredomaine.com` | Adresse FTP/SFTP de votre serveur O2switch |
| `O2SWITCH_USER` | `votreidentifiant` | Identifiant FTP/SFTP (trouvé dans le panel O2switch) |
| `O2SWITCH_PASSWORD` | `votremotdepasse` | Mot de passe FTP/SFTP |
| `O2SWITCH_PORT` | `22` ou `21` | Port SFTP (22) ou FTP (21) |

### 2. Trouver vos identifiants O2switch

1. Connectez-vous au [panel de contrôle O2switch](https://www.o2switch.fr/)
2. Allez dans **Hébergement > FTP/SFTP**
3. Récupérez les informations de connexion

### 3. Workflows disponibles

#### Option 1 : SFTP (recommandé) ⭐
- **Fichier** : `.github/workflows/deploy-o2switch.yml`
- **Protocole** : SFTP (plus sécurisé)
- **Port** : 22
- **Avantages** : Chiffré, plus rapide

#### Option 2 : FTP (alternative)
- **Fichier** : `.github/workflows/deploy-ftp-alternative.yml`
- **Protocole** : FTP classique
- **Port** : 21
- **Utiliser si** : SFTP ne fonctionne pas

## 🔄 Utilisation

### Déploiement automatique
Le workflow s'exécute automatiquement à chaque push sur la branche `main`.

```bash
git push origin main