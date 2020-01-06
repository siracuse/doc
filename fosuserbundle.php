<h3 class="mb-5">FOSUser Bundle</h3>

<h5 class="mb-4">Création/activation/désactivation d'utilisateur</h5>

<div class="title-cmd mb-2">Pour créer un utilisateur : </div>
<pre><code>> php bin/console fos:user:create nomutilisateur email motdepasse</code></pre>

<div class="title-cmd mb-2">Pour activer un utilisateur : </div>
<pre><code>> php bin/console fos:user:activate nomutilisateur</code></pre>

<div class="title-cmd mb-2">Pour désactiver un utilisateur : </div>
<pre><code>> php bin/console fos:user:deactivate nomutilisateur</code></pre>
<br><br>

<h5 class="mb-4">Gestion des rôles</h5>
<div class="title-cmd mb-2">Mettre le ROLE_ADMIN : </div>
<pre><code>> php bin/console fos:user:promote nomutilisateur ROLE_ADMIN</code></pre>

<div class="title-cmd mb-2">Enlever le ROLE_ADMIN : </div>
<pre><code>> php bin/console fos:user:demote nomutilisateur ROLE_ADMIN</code></pre>
<br><br>

<h5 class="mb-4">Changer le mot de passe</h5>
<pre><code>> php bin/console fos:user:change-password nomutilisateur nouveaumotdepasse</code></pre>