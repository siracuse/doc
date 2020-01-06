<h3 class="mb-5">Les CMD utiles</h3>



<h5 class="mb-4">Gestion des entités symfony</h5>

<div class="title-cmd mb-2">Création d'une entité </div>
<pre><code>> php bin/console doctrine:generate:entity</code></pre>

<div class="title-cmd mb-2">Générer les getters et les setters </div>
<pre><code>> php bin/console doctrine:generate:entities BundleName:entity_name</code></pre>

<div class="title-cmd mb-2">Création de formulaire à partir d'une entitée :</div>
<pre><code>> php bin/console generate:doctrine:form BundleName:entity_name</code></pre>
<br><br>




<h5 class="mb-4">Gestion de la base de données :</h5>

<div class="title-cmd mb-2">Création de la bdd :</div>
<pre><code>> php bin/console doctrine:database:create</code></pre>

<div class="title-cmd mb-2">Visualiser les requetes de création et de modification de table :</div>
<pre><code>> php bin/console doctrine:schema:update --dump-sql</code></pre>

<div class="title-cmd mb-2">Exécuter les requêtes affichées précédemment :</div>
<pre><code>> php bin/console doctrine:schema:update --force</code></pre>

<div class="title-cmd mb-2">Créé, modifie et/ou supprime les tables :</div>
<pre><code>> php bin/console doctrine:schema:update --complete --force</code></pre>
<br><br>




<h5 class="mb-4">Gestion du cache</h5>
<div class="title-cmd mb-2">Vider le cache dev </div>
<pre><code>> php bin/console cache:clear</code></pre>

<div class="title-cmd mb-2">Vider le cache prod </div>
<pre><code>> php bin/console cache:clear --env=prod</code></pre>
<br><br>




<h5 class="mb-4">Autre</h5>
<div class="title-cmd mb-2">Voir toutes les routes du projet </div>
<pre><code>> php bin/console debug:router</code></pre>