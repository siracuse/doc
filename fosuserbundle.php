<h3>FOSUser Bundle</h3>
<p class="mb-5 ">Documentation : <a href="https://www.supinfo.com/articles/single/5972-installer-configurer-fosuserbundle-symfony-3" target="_blank"> SUPINFO - FOSUSERBundle</a></p>

<h5 class="mb-4">Création/activation/désactivation d'utilisateur</h5>

<div class="title-cmd mb-2">Pour créer un utilisateur : </div>
<pre><code>> <span class="red">php bin/console</span> fos:user:create nomutilisateur email motdepasse</code></pre>

<div class="title-cmd mb-2">Pour activer un utilisateur : </div>
<pre><code>> <span class="red">php bin/console</span> fos:user:activate nomutilisateur</code></pre>

<div class="title-cmd mb-2">Pour désactiver un utilisateur : </div>
<pre><code>> <span class="red">php bin/console</span> fos:user:deactivate nomutilisateur</code></pre>
<br><br>

<h5 class="mb-4">Gestion des rôles</h5>
<div class="title-cmd mb-2">Mettre le ROLE_ADMIN : </div>
<pre><code>> <span class="red">php bin/console</span> fos:user:promote nomutilisateur ROLE_ADMIN</code></pre>

<div class="title-cmd mb-2">Enlever le ROLE_ADMIN : </div>
<pre><code>> <span class="red">php bin/console</span> fos:user:demote nomutilisateur ROLE_ADMIN</code></pre>
<br><br>

<h5 class="mb-4">Changer le mot de passe</h5>
<pre><code>> <span class="red">php bin/console</span> fos:user:change-password nomutilisateur nouveaumotdepasse</code></pre>