<h3>Mise en production d'un site symfony</h3>
<p class="mb-5 ">Documentation : <a
            href="https://openclassrooms.com/fr/courses/3619856-developpez-votre-site-web-avec-le-framework-symfony/3626249-deployer-son-site-symfony-en-production"
            target="_blank"> OC - Mise en production</a></p>

<h5 class="mb-4">Checklist :</h5>
<ul class="checklist-prod">
    <li>Supprimer les dossiers <code>dev</code> et <code>prod</code> dans le dossier <code>/var/cache</code></li>
    <li>Supprimer les images dans le dossier <code>/web/upload</code></li>
    <li>Vérifier ou créer les pages d'erreur twig</li>
    <li class="mb-2">Vérifier la sécurité des dépendances :</li>
    <pre><code>&gt; <span class="red">php bin/console</span> security:check</code></pre>
    <li>Dans le <code>/web/config.php</code> supprimer la condition <code>if(!in_array...)</code></li>
    <li>Envoyer tous les dossiers et fichier sauf le <code>/vendor</code> et le <code>.gitignore</code></li>
    <li>Attribuer le droit "777" sur le dossier <code>/var</code></li>
    <li>Mettre à jour le <code>parameters.yml</code> dans le <code>/app/config</code></li>
    <li class="mb-2">Génération des vendor :</li>
    <pre><code>&gt; <span class="red">php bin/console</span> composer install</code></pre>
    <li class="mb-2">Création de la base de données :</li>
    <pre><code>&gt; <span class="red">php bin/console</span> doctrine:database:create</code></pre>
    <li class="mb-2">Création des tables :</li>
    <pre><code>&gt; <span class="red">php bin/console</span> doctrine:schema:update --force</code></pre>
    <li class="mb-2">Fixture :</li>
    <pre><code>&gt; <span class="red">php bin/console</span> doctrine:fixtures:load</code></pre>
    <li>Créer le fichier .htaccess à la racine pour les redirections du type <code>/mon_site/web/app_dev.php</code> en
        <code>/mon_site</code></li>
</ul>
<br><br>


<h5 class="mb-4">Memo IONOS :</h5>
<ul>
    <li class="mb-2">Pour utiliser php :</li>
    <pre><code>> /usr/bin/php7.1-cli</code></pre>
    <li class="mb-2">Pour installer le <code>composer.phar</code> :</li>
    <pre><code>> curl -sS https://getcomposer.org/installer | /usr/bin/php7.1-cli</code></pre>
    <li class="mb-2">Pour utiliser une commande de composer :</li>
    <pre><code>> /usr/bin/php7.1-cli composer.phar</code></pre>
</ul>