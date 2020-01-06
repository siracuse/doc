<h3 class="mb-5">Mise en production d'un site symfony</h3>

<h5 class="mb-4">Checklist :</h5>
<ul class="checklist-prod">
    <li>Supprimer les dossiers <code>dev</code> et <code>prod</code> dans le dossier <code>/var/cache</code></li>
    <li>Supprimer les images dans le dossier <code>/web/upload</code></li>
    <li>Vérifier ou créer les pages d'erreur twig</li>
    <li class="mb-2">Vérifier la sécurité des dépendances :</li>
    <pre><code>&gt; php bin/console security:check</code></pre>
    <li>Dans le <code>/web/config.php</code> supprimer la condition <code>if(!in_array...)</code></li>
    <li>Envoyer tous les dossiers et fichier sauf le <code>/vendor</code> et le <code>.gitignore</code></li>
    <li>Attribuer le droit "777" sur le dossier <code>/var</code></li>
    <li>Mettre à jour  le <code>parameters.yml</code> dans le <code>/app/config</code></li>
    <li class="mb-2">Créer la base de données :</li>
    <pre><code>&gt; php bin/console doctrine:database:create</code></pre>
    <li class="mb-2">Créer les tables :</li>
    <pre><code>&gt; php bin/console doctrine:schema:update --force</code></pre>
    <li>Créer le fichier .htaccess à la racine pour les redirections du type <code>/mon_site/web/app_dev.php</code> en <code>/mon_site</code></li>
</ul>
<br><br>


<h5 class="mb-4">Memo IONOS :</h5>

<div class="title-cmd mb-2">Pour utiliser php : </div>
<pre><code>> /usr/bin/php7.1-cli</code></pre>

<div class="title-cmd mb-2">Pour installer le composer.phar : </div>
<pre><code>> curl -sS https://getcomposer.org/installer | /usr/bin/php7.1-cli</code></pre>

<div class="title-cmd mb-2">Pour utiliser une commande de composer : </div>
<pre><code>> /usr/bin/php7.1-cli composer.phar </code></pre>
