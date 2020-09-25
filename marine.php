<h3 class="mb-5">Pense bête de Marine</h3>



<h5 class="mb-4">Git</h5>

<li class="mb-2">Récupérer un dépot git depuis gitlab</li>
<pre><code>> <span class="red">git clone</span> git@gitlab.com:*****/******.git</code></pre>

<li class="mb-2">Envoyer les modifs</li>
<pre><code>> <span class="red">git</span> add .</code></pre>
<pre><code>> <span class="red">git</span> commit -m "***"</code></pre>
<pre><code>> <span class="red">git</span> push</code></pre>
<br><br>




<h5 class="mb-4">Lancement du projet</h5>
<li class="mb-2">Génération des vendor :</li>
<pre><code>&gt; <span class="red">php bin/console</span> composer install</code></pre>
<li class="mb-2">Création de la base de données :</li>
<pre><code>&gt; <span class="red">php bin/console</span> doctrine:database:create</code></pre>
<li class="mb-2">Création des tables :</li>
<pre><code>&gt; <span class="red">php bin/console</span> doctrine:schema:update --force</code></pre>
<li class="mb-2">Fixture :</li>
<pre><code>&gt; <span class="red">php bin/console</span> doctrine:fixtures:load</code></pre>
<br><br>




<h5 class="mb-4">Gestion du cache</h5>
<div class="title-cmd mb-2">Vider le cache </div>
<pre><code>> <span class="red">php bin/console</span> cache:clear</code></pre>
<br><br>
